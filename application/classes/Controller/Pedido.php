<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Pedido extends Controller_Main {

    // Función que se ejecuta por defecto al escribir /pedidoes
    // Lista a todos los pedidoes
    public function action_index()
    {
        $aPedido = ORM::factory('Pedido')->find_all();
        $this->template->content = View::factory('pedido/todos') // pedido es la carpeta y todos el archivo todos.php
            ->set('aPedido', $aPedido); // Es igual a aPedido = $aPedido, aPedido se usa en la vista
    }

    public function action_editar()
    {
        $id = $this->request->param('id'); // capturamos el id del pedido /pedido/editar/id
        if ($id == NULL)
            $this->redirect('/pedido');
        
        if($this->request->method() == 'POST') // Acción que se ejecuta cuando hacen clic en guardar
        {
            $this->guardar($id);
            $this->redirect('/pedido');
        }
        
        // Acciones que se ejecutan cuando hacen click en editar
        $oPedido = ORM::factory('Pedido',$id);
        $this->template->content = View::factory('pedido/editar')
            ->set('oPedido', $oPedido);
    }

    public function action_nuevo()
    {
        if ($this->request->method() == 'POST') {
            $this->guardar(NULL);
            $this->redirect('/pedido');
        }
        $this->template->content = View::factory('pedido/nuevo');
    }
    
    public function action_eliminar()
    {
        $oPedido = ORM::factory('Pedido',$this->request->param('id')); //Obtenemos los datos del pedido
        if($oPedido->loaded()) $oPedido->delete(); // Verificamos si se ha cargado los datos y luego eliminamos
        $this->redirect('/pedido'); // redireccionamos a la lista de pedidoes
    }

    public function guardar($id = NULL)
    {
        $oPedido = ORM::factory('Pedido',$id);//Si id es nulo se crea un objeto pedido, sino obtiene los datos del pedido con ese id
        $oPedido->values($this->request->post()); //  capturaos los campos ingresados
        $oPedido->save(); //guardamos los datos ingresados
    }

}
