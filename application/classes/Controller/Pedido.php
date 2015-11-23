<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Pedido extends Controller_Main {

    // Función que se ejecuta por defecto al escribir /pedidoes
    // Lista a todos los pedidoes
    public function action_index() {
        $aPedido = ORM::factory('Pedido')
            ->order_by('id','DESC')
            ->find_all();
        $this->template->content = View::factory('pedido/todos') // pedido es la carpeta y todos el archivo todos.php
            ->set('aPedido', $aPedido); // Es igual a aPedido = $aPedido, aPedido se usa en la vista
    }

    public function action_editar() {
        $id = $this->request->param('id'); // capturamos el id del pedido /pedido/editar/id
        if ($id == NULL)
            $this->redirect('/pedido');

        if ($this->request->method() == 'POST') { // Acción que se ejecuta cuando hacen clic en guardar
            $this->guardar($id);
            $this->redirect('/pedido');
        }

        // Acciones que se ejecutan cuando hacen click en editar
        $oPedido = ORM::factory('Pedido', $id);
        $this->template->content = View::factory('pedido/editar')
            ->set('oPedido', $oPedido);
    }

    public function action_nuevo() {
        if ($this->request->method() == 'POST') {
            $oPedido = ORM::factory('Pedido');
            $oPedido->id_prov = $this->request->post('id_proveedor');
            $oPedido->f_emision = date('d-m-Y', time());
            $oPedido->estado = 0;
            $oPedido->save();

            foreach ($this->request->post('producto') as $product_id => $stock) {
                $oPedProd = ORM::factory('PedProd');
                $oPedProd->id_ped = $oPedido->id;
                $oPedProd->id_prod = $product_id;
                $oPedProd->cantidad = $stock;
                $oPedProd->save();
            }
            $this->redirect('/pedido');
        }
        
        $param = $this->request->param('id');
        if(empty($param))
            $aProducto = ORM::factory('Producto')
                ->where('stock', '<', 5)
                ->find_all();
        else 
            $aProducto = ORM::factory('Producto')->find_all();

        $aProveedor = ORM::factory('Proveedor')->find_all();
        $this->template->content = View::factory('pedido/nuevo')
            ->set('aProducto', $aProducto)
            ->set('aProveedor', $aProveedor)
            ->set('id', $param);
    }

    public function action_eliminar() {
        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');
        
        $oPedido = ORM::factory('Pedido',$id); //Obtenemos los datos del pedido
        if ($oPedido->loaded())
            $oPedido->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/pedido'); // redireccionamos a la lista de pedidoes
    }

    public function guardar($id = NULL) {
        $oPedido = ORM::factory('Pedido', $id); //Si id es nulo se crea un objeto pedido, sino obtiene los datos del pedido con ese id
        $oPedido->values($this->request->post()); //  capturaos los campos ingresados
        $oPedido->save(); //guardamos los datos ingresados
    }

    public function action_detalle() {
        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');

        $oPedido = ORM::factory('Pedido', $id);
        $aProveedor = ORM::factory('Proveedor')->find_all();
        $oPedido->estado = $oPedido->get_estados($oPedido->estado);
        $oProveedor = ORM::factory('Proveedor', $oPedido->id_prov);
        $aPedProd = ORM::factory('PedProd')
            ->where('id_ped', '=', $oPedido->id)
            ->find_all();

        $aProducto = array();
        $aCantidad = array();
        foreach ($aPedProd as $oPedProd) {
            $oProducto = ORM::factory('Producto', $oPedProd->id_prod);
            $aCantidad[$oProducto->id]['id'] = $oPedProd->id;
            $aCantidad[$oProducto->id]['cantidad'] = $oPedProd->cantidad;
            array_push($aProducto, $oProducto);
        }

        $this->template->content = View::factory('pedido/detalle')
            ->set('oPedido', $oPedido)
            ->set('oProveedor', $oProveedor)
            ->set('aProducto', $aProducto)
            ->set('aCantidad', $aCantidad)
            ->set('aProveedor', $aProveedor);
    }

    public function action_guardarp() {

        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');

        if ($this->request->method() == 'POST') {
            $aValue = $this->request->post('proped');
            foreach ($aValue as $pedpro_id => $oValue) {
                $oPedPro = ORM::factory('PedProd', $pedpro_id);
                $oPedPro->cantidad = current($oValue);
                $oPedPro->save();
            }

            $this->redirect('/pedido/detalle/' . $id);
        }
    }

    public function action_peliminar() {
        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');
        
        $oPedProd = ORM::factory('PedProd',$id);
        if(!$oPedProd->loaded()) $this->redirect('/pedido');
        
        $id_pedido = $oPedProd->id_ped;
        $oPedProd->delete();
        
        $this->redirect('/pedido/detalle/'.$id_pedido);
    }
    
    public function action_recep() {
        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');
        
        $oPedido = ORM::factory('Pedido',$id);
        if(!$oPedido->loaded()) $this->redirect('/pedido');
        
        $oPedido->estado = 1;
        $oPedido->f_recepcion = date('d-m-Y', time());
        $oPedido->save();
        
        $aPedProd = ORM::factory('PedProd')
            ->where('id_ped', '=', $oPedido->id)
            ->find_all();
        
        foreach ($aPedProd as $oPedProd) {
            $oProducto = ORM::factory('Producto',$oPedProd->id_prod);
            $oProducto->stock +=  $oPedProd->cantidad;
            $oProducto->save();
        }
        
        $this->redirect('/pedido/detalle/'.$id);
    }
    
    public function action_editarpro() {
        $id = $this->request->param('id'); // capturamos el id del pedido
        if ($id == NULL)
            $this->redirect('/pedido');
        
        $oPedido = ORM::factory('Pedido',$id);
        if(!$oPedido->loaded()) $this->redirect('/pedido');
        
        if($this->request->method() == 'POST')
        {
            $oPedido->id_prov = $this->request->post('id_proveedor');
            $oPedido->save();
            
            $this->redirect('/pedido/detalle/'.$id);
        }
        
    }

}
