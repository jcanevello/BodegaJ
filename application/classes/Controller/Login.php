<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

    public function action_index()
    {
        if($this->request->method() == 'POST')
        {
            Session::instance()->set('user', 'admin');
            $this->redirect('/');
        }
        
        $this->auto_render = false;
        $this->response->body(View::factory('login'));
    }

}
