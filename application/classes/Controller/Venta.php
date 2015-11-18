<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Venta extends Controller_Main {

    // Función que se ejecuta por defecto al escribir /proveedores
    // Lista a todos los proveedores
    public function action_index()
    {
        $aProveedor = ORM::factory('Proveedor')->find_all();
        $this->template->content = View::factory('proveedor/todos') // proveedor es la carpeta y todos el archivo todos.php
            ->set('aProveedor', $aProveedor); // Es igual a aProveedor = $aProveedor, aProveedor se usa en la vista
    }

    public function action_editar()
    {
        $id = $this->request->param('id'); // capturamos el id del proveedor /proveedor/editar/id
        if ($id == NULL)
            $this->redirect('/proveedor');
        
        if($this->request->method() == 'POST') // Acción que se ejecuta cuando hacen clic en guardar
        {
            $this->guardar($id);
            $this->redirect('/proveedor');
        }
        
        // Acciones que se ejecutan cuando hacen click en editar
        $oProveedor = ORM::factory('Proveedor',$id);
        $this->template->content = View::factory('proveedor/editar')
            ->set('oProveedor', $oProveedor);
    }

    public function action_nuevo()
    {
        if ($this->request->method() == 'POST') {
            $this->guardar(NULL);
            $this->redirect('/proveedor');
        }
        $this->template->content = View::factory('proveedor/nuevo');
    }
    
    public function action_eliminar()
    {
        $oProveedor = ORM::factory('Proveedor',$this->request->param('id')); //Obtenemos los datos del proveedor
        if($oProveedor->loaded()) $oProveedor->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/proveedor'); // redireccionamos a la lista de proveedores
    }

    public function guardar($id = NULL)
    {
        $oProveedor = ORM::factory('Proveedor',$id);//Si id es nulo se crea un objeto proveedor, sino obtiene los datos del proveedor con ese id
        $oProveedor->values($this->request->post()); //  capturaos los campos ingresados
        $oProveedor->save(); //guardamos los datos ingresados
    }

}
