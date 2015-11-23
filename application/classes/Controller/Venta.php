<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Venta extends Controller_Main {

    public function action_index()
    {
        $aOrden = ORM::factory('Orden')
            ->order_by('id','DESC')
            ->find_all();
        $this->template->content = View::factory('venta/todos') // proveedor es la carpeta y todos el archivo todos.php
            ->set('aOrden', $aOrden); // Es igual a aProveedor = $aProveedor, aProveedor se usa en la vista
    }

    public function action_registro()
    {
        if ($this->request->method() == 'POST')
        {
            $aProducto = $this->request->post('prod');
            $name = $this->request->post('nombre_cliente');

            $oOrden = ORM::factory('Orden');
            $oOrden->nombre_cliente = $name;
            $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $oOrden->fecha_emision = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;;
            $oOrden->save();
            
            foreach ($aProducto as $id_prod => $oProducto)
            {
                $producto = ORM::factory('Producto', $id_prod);
                $oItem = ORM::factory('Item');
                $oItem->id_orden = $oOrden->id;
                $oItem->id_prod = $id_prod;
                $oItem->cantidad = (int) current($oProducto);
                $oItem->subtotal = ((double) $producto->precio) * ((int) current($oProducto));
                $oItem->save();
                
                $oOrden->total += $oItem->subtotal;
                $oOrden->save();
                
                $producto->stock -=$oItem->cantidad;
                $producto->save();
            }
            $this->redirect('/venta/orden/'.$oOrden->id);
        }

        $aProducto = ORM::factory('Producto')->find_all();
        $this->template->content = View::factory('venta/registro')
            ->set('aProducto', $aProducto);
    }

    public function action_eliminar()
    {
        $oProveedor = ORM::factory('Proveedor', $this->request->param('id')); //Obtenemos los datos del proveedor
        if ($oProveedor->loaded())
            $oProveedor->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/proveedor'); // redireccionamos a la lista de proveedores
    }
    
    public function action_orden()
    {
        $id = $this->request->param('id'); // capturamos el id del proveedor /proveedor/editar/id
        if ($id == NULL)
            $this->redirect('/venta');
        
        $oOrden = ORM::factory('Orden',$id);
        if(!$oOrden->loaded()) $this->redirect('/venta');
        
        $aItem = ORM::factory('Item')
            ->where('id_orden', '=', $oOrden->id)
            ->find_all();
        
        $this->template->content = View::factory('venta/orden')
            ->set('oOrden',$oOrden)
            ->set('aItem',$aItem);
        
    }
    
}
