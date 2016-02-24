<h1>Detalle de Pedido #<?php echo $oPedido->id ?></h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <label style="font-size: 20px"><strong>Pedido</strong></label>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><a href="#"><span>#Pedido</span></a></th>
                            <th><a href="#"><span>Proveedor</span></a></th>
                            <th><a href="#"><span>Fecha de Emision</span></a></th>
                            <th><a href="#"><span>Fecha de Recepción</span></a></th>
                            <th><a href="#"><span>Estado</span></a></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#<?php echo $oPedido->id ?></td>
                            <td><?php echo $oProveedor->nombre ?></td>
                            <td><?php echo $oPedido->f_emision ?></td>
                            <td><?php echo $oPedido->f_recepcion ?></td>
                            <td><?php echo $oPedido->estado ?></td>
                            <td>
                                <?php if ($oPedido->estado != 'Recepcionado'): ?>
                                    <a href="/pedido/recep/<?php echo $oPedido->id ?>" class="btn btn-success">Recepcionado</a>
                                <?php endif ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="main-box clearfix">
            <label style="font-size: 20px"><strong>Proveedor</strong></label>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th><a href="#"><span>Nombre</span></a></th>
                            <th><a href="#"><span>RUC</span></a></th>
                            <th><a href="#"><span>Dirección</span></a></th>
                            <th><a href="#"><span>Teléfono</span></a></th>
                            <th><a href="#"><span>E-mail</span></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $oProveedor->nombre ?></td>
                            <td><?php echo $oProveedor->ruc ?></td>
                            <td><?php echo $oProveedor->direccion ?></td>
                            <td><?php echo $oProveedor->telefono ?></td>
                            <td><?php echo $oProveedor->email ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <?php if ($oPedido->estado != 'Recepcionado'): ?>
            <div class="form-group">
                <form action="/pedido/editarpro/<?php echo $oPedido->id ?>" method="POST">
                    <div class="form-group form-group-select2">
                        <label><strong>Cambiar proveedor</strong></label>
                        <select id="sel2" name="id_proveedor" style="width: 300px;" required="required">
                            <option value="">---</option>
                            <?php foreach ($aProveedor as $oProveedor): ?>
                                <option value="<?php echo $oProveedor->id ?>"><?php echo $oProveedor->nombre ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php endif ?>
        </div>
        <div class="main-box clearfix">
            <label style="font-size: 20px"><strong>Productos</strong></label>
            <form id="form_new_pedido" action="/pedido/guardarp/<?php echo $oPedido->id ?>" method="POST">
                <div class="form-group">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th><a href="#"><span>Nombre</span></a></th>
                                    <th><a href="#"><span>Cantidad de pedido</span></a></th>
                                    <th><a href="#"><span>Stock</span></a></th>
                                    <th><a href="#"><span>F.Vencimiento</span></a></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($aProducto as $oProducto): ?>
                                    <tr>
                                        <td><?php echo $oProducto->nombre ?></td>
                                        <td><input type="number" min="5" name="proped[<?php echo $aCantidad[$oProducto->id]['id'] ?>][]" value="<?php echo $aCantidad[$oProducto->id]['cantidad'] ?>" style="width: 50px;"<?php echo ($oPedido->estado == 'Recepcionado') ? 'disabled' : null ?>></td>
                                        <td><?php echo $oProducto->stock ?></td>
                                        <td><?php echo $oProducto->fecha_vencimiento ?></td>
                                        <td>
                                            <?php if ($oPedido->estado != 'Recepcionado'): ?>
                                                <a href="/pedido/peliminar/<?php echo $aCantidad[$oProducto->id]['id'] ?>" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <?php if ($oPedido->estado != 'Recepcionado'): ?>
                    <div class="form-group">
                        <div class="pull-left">
                            <button type="submit" class="btn btn-success">Guardar</button>
                        </div>
                    </div>
                <?php endif ?>
            </form>
        </div>
        <?php if ($oPedido->estado != 'Recepcionado'): ?>
        <a href="/pedido/eliminar/<?php echo $oPedido->id ?>" class="btn btn-danger">Cancelar Pedido</a>
        <?php endif ?>
    </div>
</div>