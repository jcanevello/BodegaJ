<h1>Nueva Venta</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">

            <form id="form_new_pedido" action="" method="POST">
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table table-hover datatable" id="table_lista_productos">
                            <thead>
                                <tr>
                                    <th><a href="#"><span>Nombre</span></a></th>
                                    <th><a href="#"><span>Stock</span></a></th>
                                    <th><a href="#"><span>Precio(S/.)</span></a></th>
                                    <th><a href="#"><span>F.Vencimiento</span></a></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($aProducto as $oProducto): ?>
                                    <tr>
                                        <td><?php echo $oProducto->nombre ?></td>
                                        <?php if($oProducto->stock == 0): ?>
                                        <td><span class="label label-danger"><?php echo $oProducto->stock ?></span></td>
                                        <?php elseif($oProducto->stock < 5): ?>
                                        <td><span class="label label-warning"><?php echo $oProducto->stock ?></span></td>
                                        <?php else: ?>
                                        <td><span><?php echo $oProducto->stock ?></span></td>
                                        <?php endif ?>
                                        <td><?php echo number_format($oProducto->precio,2,'.','') ?></td>
                                        <td><?php echo $oProducto->fecha_vencimiento ?></td>
                                        <td>
                                            <?php if($oProducto->stock > 0): ?>
                                            <a href="#" class="btn btn-success btn-add" data-id="<?php echo $oProducto->id ?>" data-stock="<?php echo $oProducto->stock ?>">Añadir</a>
                                            <?php endif ?>
                                        </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div class="main-box clearfix">

            <form id="form_new_pedido" action="/BodegaJ/venta/registro" method="POST">
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table" id="table-venta">
                            <thead>
                                <tr>
                                    <th><a href="#"><span>Nombre</span></a></th>
                                    <th><a href="#"><span>Stock</span></a></th>
                                    <th><a href="#"><span>Precio(S/.)</span></a></th>
                                    <th><a href="#"><span>F.Vencimiento</span></a></th>
                                    <th><a href="#"><span>Cantidad</span></a></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label class="control-label"><strong>Ingrese nombre de cliente:</strong></label>
                    <div class="">
                        <input type="text" name="nombre_cliente" class="col-lg-10">
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="pull-left">
                        <button type="submit" id="submit_new_pedido" class="btn btn-success">Registrar Venta</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>