<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_Template {

	public $template = 'template';
	
	public $header = 'header';
    
    public $navbar = 'navbar';
		
	public $footer = 'footer';
	
	public $oUser = null;
    
	
	public function before() 
	{
		parent::before();
        
        $this->oUser = Session::instance()->get('user');
        
		if( ! empty($this->oUser))
		{
//			$this->template->permisos = $this->oUser->permisos;
			$this->template->header = View::factory('header')->set('oUser',$this->oUser);
            $this->template->navbar = View::factory('navbar')->set('oUser',$this->oUser);
			$this->template->footer = View::factory('footer');
		}
		else
		{
			$this->redirect('/login');
		}
	}
	
	public function after()
	{
		parent::after();
	}
} // End Welcome
