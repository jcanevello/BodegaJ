<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Producto extends Controller_Main {

    // Función que se ejecuta por defecto al escribir /productoes
    // Lista a todos los productoes
    public function action_index()
    {
        $aProducto = ORM::factory('Producto')
            ->order_by('nombre', 'ASC')
            ->find_all();
        $this->template->content = View::factory('producto/todos') // producto es la carpeta y todos el archivo todos.php
            ->set('aProducto', $aProducto); // Es igual a aProducto = $aProducto, aProducto se usa en la vista
    }

    public function action_editar()
    {
        $id = $this->request->param('id'); // capturamos el id del producto /producto/editar/id
        if ($id == NULL)
            $this->redirect('/producto');
        
        if($this->request->method() == 'POST') // Acción que se ejecuta cuando hacen clic en guardar
        {
            $this->guardar($id);
            $this->redirect('/producto');
        }
        
        // Acciones que se ejecutan cuando hacen click en editar
        $aProveedor = ORM::factory('Proveedor')->find_all();
        $oProducto = ORM::factory('Producto',$id);
        $this->template->content = View::factory('producto/editar')
            ->set('oProducto', $oProducto)
            ->set('aProveedor', $aProveedor);
    }

    public function action_nuevo()
    {
        if ($this->request->method() == 'POST') {
            $this->guardar(NULL);
            $this->redirect('/producto');
        }
        $aProveedor = ORM::factory('Proveedor')->find_all();
        $this->template->content = View::factory('producto/nuevo')
            ->set('aProveedor', $aProveedor);
    }
    
    public function action_eliminar()
    {
        $oProducto = ORM::factory('Producto',$this->request->param('id')); //Obtenemos los datos del producto
        if($oProducto->loaded()) $oProducto->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/producto'); // redireccionamos a la lista de productoes
    }

    public function guardar($id = NULL)
    {
        $oProducto = ORM::factory('Producto',$id);//Si id es nulo se crea un objeto producto, sino obtiene los datos del producto con ese id
        $oProducto->values($this->request->post()); //  capturaos los campos ingresados
        $oProducto->save(); //guardamos los datos ingresados
    }

}
