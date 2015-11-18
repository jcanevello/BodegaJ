<h1>Proveedores</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="clearfix">

                <div class="filter-block pull-right">
                    <div class="form-group pull-left">
                        <input type="text" class="form-control" placeholder="Buscar...">
                        <i class="fa fa-search search-icon"></i>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><a href="#"><span>Nombre</span></a></th>
                            <th><a href="#"><span>RUC</span></a></th>
                            <th><a href="#"><span>Dirección</span></a></th>
                            <th><a href="#"><span>Teléfono</span></a></th>
                            <th><a href="#"><span>E-mail</span></a></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aProveedor as $oProveedor): ?>
                        <tr>
                            <td><?php echo $oProveedor->nombre ?></td>
                            <td><?php echo $oProveedor->ruc ?></td>
                            <td><?php echo $oProveedor->direccion ?></td>
                            <td><?php echo $oProveedor->telefono ?></td>
                            <td><?php echo $oProveedor->email ?></td>
                            <td style="width: 15%;">
                                <a href="/BodegaJ/proveedor/editar/<?php echo $oProveedor->id ?>" class="table-link">
                                    <span class="fa-stack">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                                <a href="/BodegaJ/proveedor/eliminar/<?php echo $oProveedor->id ?>" class="table-link danger">
                                    <span class="fa-stack">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                            
                    </tbody>
                </table>
            </div>
<!--            <ul class="pagination pull-right">
                <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-chevron-right"></i></a></li>
            </ul>-->
        </div>
    </div>
</div>