<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Pedido extends ORM {

    protected $_table_name = 'pedido';
    protected $_primary_key = 'id';
    
    public $estados = array(
        '0' => 'Enviado',
        '1' => 'Recepcionado'
    );

    function get_estados($index) {
        return $this->estados[$index];
    }
    
    public $color_estados = array(
        '0' => 'warning',
        '1' => 'success'
    );

    function get_color_estados($index) {
        return $this->color_estados[$index];
    }

}
