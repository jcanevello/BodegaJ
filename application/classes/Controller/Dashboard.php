<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller_Main {

    public function action_index()
    {
        $oUser = $this->oUser;

        if ($oUser->tipo == 0)
        {
            $nUser = ORM::factory('Usuario')->find_all()->count();
            $aOrden = ORM::factory('Orden')->find_all();
            $ingreso = 0;
            $venta = 0;
            foreach ($aOrden as $oOrden)
            {
                $ingreso += $oOrden->total;
                $aItem = ORM::factory('Item')
                    ->where('id_orden', '=', $oOrden->id)
                    ->find_all();
                foreach ($aItem as $oItem)
                {
                    $venta += $oItem->cantidad;
                }
            }
            
            $view = View::factory('dashboard/admin')
                ->set('nUser',$nUser)
                ->set('ingreso',$ingreso)
                ->set('venta',$venta)
                ->set('aOrden',$aOrden);
            
        } elseif ($oUser->tipo == 1)
        {
            $this->redirect('/pedido');
        } elseif ($oUser->tipo == 2)
        {
            $aProducto = ORM::factory('Producto')->find_all();
            $view = View::factory('venta/registro')
                ->set('aProducto', $aProducto);
        }
        $this->template->content = $view;
//            $this->response->body('hello, world!');
    }

}
