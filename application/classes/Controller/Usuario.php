<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Usuario extends Controller_Main {

    // Función que se ejecuta por defecto al escribir /usuarioes
    // Lista a todos los usuarioes
    public function action_index()
    {
        $aUsuario = ORM::factory('Usuario')->find_all();
        $this->template->content = View::factory('usuario/todos') // usuario es la carpeta y todos el archivo todos.php
            ->set('aUsuario', $aUsuario); // Es igual a aProducto = $aProducto, aProducto se usa en la vista
    }

    public function action_editar()
    {
        $id = $this->request->param('id'); // capturamos el id del usuario /usuario/editar/id
        if ($id == NULL)
            $this->redirect('/usuario');
        
        if($this->request->method() == 'POST') // Acción que se ejecuta cuando hacen clic en guardar
        {
            $this->guardar($id);
            $this->redirect('/usuario');
        }
        
        // Acciones que se ejecutan cuando hacen click en editar
        $oUsuario = ORM::factory('Usuario',$id);
        $this->template->content = View::factory('usuario/editar')
            ->set('oUsuario', $oUsuario);
    }

    public function action_nuevo()
    {
        if ($this->request->method() == 'POST') {
            $this->guardar(NULL);
            $this->redirect('/usuario');
        }
        $this->template->content = View::factory('usuario/nuevo');
    }
    
    public function action_eliminar()
    {
        $oUsuario = ORM::factory('Usuario',$this->request->param('id')); //Obtenemos los datos del usuario
        if($oUsuario->loaded()) $oUsuario->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/usuario'); // redireccionamos a la lista de usuarioes
    }

    public function guardar($id = NULL)
    {
        $oProducto = ORM::factory('Usuario',$id);//Si id es nulo se crea un objeto usuario, sino obtiene los datos del usuario con ese id
        $oProducto->values($this->request->post()); //  capturaos los campos ingresados
        $oProducto->save(); //guardamos los datos ingresados
    }

}
