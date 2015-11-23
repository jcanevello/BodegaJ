<?php defined('SYSPATH') or die('No direct script access.');

class Model_Usuario extends ORM {
	
	protected $_table_name = 'usuario';
    protected $_primary_key = 'id';
    
    public $tipos = array(
        '0' => 'Administrador',
        '1' => 'Jefe de Logística',
        '2' => 'Vendedor'
    );
    
    public function get_tipo()
    {
        return $this->tipos[$this->tipo];
    }
	
}
