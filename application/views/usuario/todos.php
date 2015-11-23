<h1>Usuarios</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="table-responsive">
                <table class="table datatable">
                    <thead>
                        <tr>
                            <th><a href="#"><span>Nombre y Apellido</span></a></th>
                            <th><a href="#"><span>Usuario</span></a></th>
                            <th><a href="#"><span>Tipo</span></a></th>
                            <th><a href="#"><span>Email</span></a></th>
                            <th><a href="#"><span>Teléfono</span></a></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aUsuario as $oUsuario): ?>
                        <tr>
                            <td><?php echo $oUsuario->nombres ?></td>
                            <td><?php echo $oUsuario->usuario ?></td>
                            <td><?php echo $oUsuario->get_tipo() ?></td>
                            <td><?php echo $oUsuario->email ?></td>
                            <td><?php echo $oUsuario->telefono ?></td>
                            <td><a href="/BodegaJ/usuario/editar/<?php echo $oUsuario->id ?>" class="table-link">
                                    <span class="fa-stack">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a><a href="/BodegaJ/usuario/eliminar/<?php echo $oUsuario->id ?>" class="table-link danger">
                                    <span class="fa-stack">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a></td>
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