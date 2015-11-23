<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Template {

    public function action_index()
    {
        $this->auto_render = false;
//        Session::instance()->destroy('error');
        if ($this->request->method() == 'POST')
        {
            $oUsuario = ORM::factory('Usuario')
                ->where('usuario', '=', $this->request->post('usuario'))
                ->find();

            if (!$oUsuario->loaded())
            {
                $this->response->body(View::factory('login')->set('error', 'Usuario no registrado'));
//                Session::instance()->set('error', 'No existe el usuario');
//                $this->redirect('/');
            }elseif ($oUsuario->contrasena != $this->request->post('contrasena'))
            {
                $this->response->body(View::factory('login')->set('error', 'Contraseña incorrecta'));
//                Session::instance()->set('error', 'Contraseña incorrecta');
//                $this->redirect('/');
            } else
            {
                Session::instance()->set('user', $oUsuario);
                $this->redirect('/');
            }
        } else
        {
            $this->response->body(View::factory('login'));
        }
    }

    public function action_logout()
    {
        Session::instance()->destroy('user');
        $this->redirect('/');
    }

}
