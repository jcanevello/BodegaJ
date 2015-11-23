<h1>Nuevo Pedido</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">

            <form id="form_new_pedido" action="" method="POST">
                <div class="form-group">
                    <label style="font-size: 20px;margin-bottom: 20px;"><strong>1. Active el producto para pedir e indique la cantidad:</strong></label>
                    <div class="table-responsive">
                        <table class="table table-hover datatable">
                            <thead>
                                <tr>
                                    <th><a href="#"><span>Nombre</span></a></th>
                                    <th><a href="#"><span>Stock</span></a></th>
                                    <th><a href="#"><span>F.Vencimiento</span></a></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($aProducto as $oProducto): ?>
                                    <tr>
                                        <td><?php echo $oProducto->nombre ?></td>
                                        <td><?php echo $oProducto->stock ?></td>
                                        <td><?php echo $oProducto->fecha_vencimiento ?></td>
                                <style>
                                    .onoffswitch-inner:before {
                                        content: 'Activo'
                                    }
                                    .onoffswitch-inner:after {
                                        content: 'Inactivo'
                                    }
                                    .onoffswitch-switch {
                                        right: 60px;
                                    }
                                </style>
                                <td>
                                    <div style="width: 120px;display: inline-block;vertical-align: middle;">
                                        <div class="onoffswitch onoffswitch-success">
                                            <input type="checkbox" class="onoffswitch-checkbox" id="switch_<?php echo $oProducto->id ?>" data-id="<?php echo $oProducto->id ?>">
                                            <label class="onoffswitch-label" for="switch_<?php echo $oProducto->id ?>">
                                                <div class="onoffswitch-inner"></div>
                                                <div class="onoffswitch-switch"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div style="padding-bottom: 7px;width: 100px;display: inline-block;vertical-align: middle;" id="content_stock_<?php echo $oProducto->id ?>">

                                    </div>
                                </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                        <?php if($id != 't'): ?>
                        <button class="btn btn-success" id="btn-mostrar-todo">Mostrar todos los productos</button>
                        <?php endif ?>
                    </div>
                </div>
                <hr>
                <div class="form-group form-group-select2">
                    <label style="font-size: 20px"><strong>2. Seleccione un proveedor:</strong></label>
                    <select id="sel2" name="id_proveedor" style="width: 300px;" >
                        <option value="">---</option>
                        <?php foreach ($aProveedor as $oProveedor): ?>
                            <option value="<?php echo $oProveedor->id ?>"><?php echo $oProveedor->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <div class="pull-left">
                        <button type="submit" id="submit_new_pedido" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>