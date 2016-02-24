<h1>Productos</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="table-responsive">
                <table class="table  datatable">
                    <thead>
                        <tr>
                            <th><a href="#"><span>Nombre</span></a></th>
                            <th><a href="#"><span>Stock</span></a></th>
                            <th><a href="#"><span>Precio</span></a></th>
                            <th><a href="#"><span>F.Vencimiento</span></a></th>
                            <!--<th><a href="#"><span>Proveedor</span></a></th>-->
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aProducto as $oProducto): ?>
                            <tr>
                                <td><?php echo $oProducto->nombre ?></td>
                                <?php if ($oProducto->stock == 0): ?>
                                    <td><span class="label label-danger"><?php echo $oProducto->stock ?></span></td>
                                <?php elseif ($oProducto->stock < 5): ?>
                                    <td><span class="label label-warning"><?php echo $oProducto->stock ?></span></td>
                                <?php else: ?>
                                    <td><span><?php echo $oProducto->stock ?></span></td>
                                <?php endif ?>
                                <td><?php echo $oProducto->precio ?></td>
                                <td><?php echo $oProducto->fecha_vencimiento ?></td>
                                <?php $oProveedor = ORM::factory('Proveedor', $oProducto->id_proveedor) ?>
                                <?php /* <td><?php echo $oProveedor->nombre ?></td> */ ?>
                                <td><a href="/producto/editar/<?php echo $oProducto->id ?>" class="table-link">
                                        <span class="fa-stack">
                                            <i class="fa fa-square fa-stack-2x"></i>
                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                        </span>
                                    </a><a href="/producto/eliminar/<?php echo $oProducto->id ?>" class="table-link danger">
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
        </div>
    </div>
</div>