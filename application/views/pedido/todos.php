<h1>Pedidos</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">

            <div class="table-responsive">
                <table class="table datatable2">
                    <thead>
                        <tr>
                            <th><a href="#"><span>#Pedido</span></a></th>
                            <th><a href="#"><span>Proveedor</span></a></th>
                            <th><a href="#"><span>Fecha de Emision</span></a></th>
                            <th><a href="#"><span>Fecha de Recepción</span></a></th>
                            <th><a href="#"><span>Estado</span></a></th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aPedido as $oPedido): ?>
                        <tr>
                            <td>#<?php echo $oPedido->id ?></td>
                            <?php $oProveedor = ORM::factory('Proveedor',$oPedido->id_prov) ?>
                            <td><?php echo $oProveedor->nombre ?></td>
                            <td><?php echo $oPedido->f_emision ?></td>
                            <td><?php echo $oPedido->f_recepcion ?></td>
                            <td><span class="label label-<?php echo $oPedido->get_color_estados($oPedido->estado); ?>"><?php echo $oPedido->get_estados($oPedido->estado) ?></span></td>
                            <td><a href="/pedido/detalle/<?php echo $oPedido->id ?>" class="table-link">
                                    <span class="fa-stack">
                                        <i class="fa fa-square fa-stack-2x"></i>
                                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
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