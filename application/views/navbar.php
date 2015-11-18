<?php
$controller = Request::$current->controller();
$action = Request::$current->action();
?>
<div class="col-md-2" id="nav-col">
    <section id="col-left">
        <div class="collapse navbar-collapse navbar-ex1-collapse" id="sidebar-nav">	
            <ul class="nav nav-pills nav-stacked">
                <li class="<?php echo ($controller=='Dashboard') ? 'active' : NULL  ?>">
                    <a href="/BodegaJ">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="<?php echo ($controller=='Venta' && $action=='index') ? 'active' : NULL  ?>">
                    <a href="/BodegaJ/venta">
                        <i class="fa  fa-shopping-cart"></i>
                        <span>Ventas</span>
                    </a>
                </li>
                <li class="<?php echo ($controller=='Venta' && $action=='nuevo') ? 'active' : NULL  ?>">
                    <a href="/BodegaJ/venta/nuevo">
                        <i class="fa  fa-shopping-cart"></i>
                        <span>Registrar Venta</span>
                    </a>
                </li>
                <li class="<?php echo ($controller=='Producto') ? 'active' : NULL  ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-barcode"></i>
                        <span>Productos</span>
                        <i class="fa fa-chevron-circle-down drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/BodegaJ/producto"class="<?php echo ($controller=='Producto' && $action=='index') ? 'active' : NULL  ?>">Ver Todos</a>
                        </li>
                        <li>
                            <a href="/BodegaJ/producto/nuevo"class="<?php echo ($controller=='Proucto' && $action=='nuevo') ? 'active' : NULL  ?>">Nuevo</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo ($controller=='Pedido') ? 'active' : NULL  ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-plus-square"></i>
                        <span>Pedidos</span>
                        <i class="fa fa-chevron-circle-down drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/BodegaJ/pedido"class="<?php echo ($controller=='Pedido' && $action=='index') ? 'active' : NULL  ?>">Ver Todos</a>
                        </li>
                        <li>
                            <a href="/BodegaJ/pedido/nuevo"class="<?php echo ($controller=='Pedido' && $action=='nuevo') ? 'active' : NULL  ?>">Nuevo</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo ($controller=='Proveedor') ? 'active' : NULL  ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-truck"></i>
                        <span>Proveedores</span>
                        <i class="fa fa-chevron-circle-down drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/BodegaJ/proveedor"class="<?php echo ($controller=='Proveedor' && $action=='index') ? 'active' : NULL  ?>">Ver Todos</a>
                        </li>
                        <li>
                            <a href="/BodegaJ/proveedor/nuevo"class="<?php echo ($controller=='Proveedor' && $action=='nuevo') ? 'active' : NULL  ?>">Nuevo</a>
                        </li>
                    </ul>
                </li>
                <li class="<?php echo ($controller=='Usuario') ? 'active' : NULL  ?>">
                    <a href="#" class="dropdown-toggle">
                        <i class="fa fa-users"></i>
                        <span>Usuarios</span>
                        <i class="fa fa-chevron-circle-down drop-icon"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="/BodegaJ/usuario"class="<?php echo ($controller=='Usuario' && $action=='index') ? 'active' : NULL  ?>">Ver Todos</a>
                        </li>
                        <li>
                            <a href="/BodegaJ/usuario/nuevo"class="<?php echo ($controller=='Usuario' && $action=='nuevo') ? 'active' : NULL  ?>">Nuevo</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </section>
</div>