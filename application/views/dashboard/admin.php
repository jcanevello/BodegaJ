<div class="row">
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box">
            <i class="fa fa-user red"></i>
            <span class="headline">Trabajadores</span>
            <span class="value"><?php echo $nUser ?></span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box">
            <i class="fa fa-shopping-cart emerald"></i>
            <span class="headline">Productos Vendidos</span>
            <span class="value"><?php echo $venta ?></span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12">
        <div class="main-box infographic-box">
            <i class="fa fa-money green"></i>
            <span class="headline">Ingreso Mensual</span>
            <span class="value">S/.<?php echo $ingreso ?></span>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box">
            <h2>Ventas del último mes</h2>
            <table class="table datatable2">
                <thead>
                    <tr>
                        <th><a href="#"><span>N° Venta</span></a></th>
                        <th><a href="#"><span>Nombre Cliente</span></a></th>
                        <th><a href="#"><span>Fecha de Emision</span></a></th>
                        <th><a href="#"><span>Total(S/.)</span></a></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($aOrden as $oOrden): ?>
                        <tr>
                            <td>N° <?php echo str_pad($oOrden->id, 6, "0", STR_PAD_LEFT) ?></td>
                            <td><?php echo $oOrden->nombre_cliente ?></td>
                            <td><?php echo $oOrden->fecha_emision ?></td>
                            <td style="text-align: right;padding-right: 70px;"><?php echo $oOrden->total ?></td>
                            <td>
                                <a href="/venta/orden/<?php echo $oOrden->id ?>" class="btn btn-info btn-add"><span class="fa fa-search"></span></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
