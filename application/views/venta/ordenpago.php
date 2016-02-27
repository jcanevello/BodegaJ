<h1>Orden de Pago</h1>
<!--<style>
    #table-item thead > tr > th{
        text-align: center;
        padding: 0px 10px;
        vertical-align: middle;
        font-weight: 100;
        font-size: 12px;
        height: 30px;
    }

    #table-item thead > tr > th:first-child { 
        width: 40px;
    }

    #table-item thead > tr > th:nth-child(2) {
        width: 300px;
    }

    #table-item thead > tr > th:nth-child(3),
    #table-item thead > tr > th:nth-child(4) {
        width: 60px;
    }

    #table-item tbody > tr > td {
        padding: 0px;
        vertical-align: middle;
        border: 1px solid #000000;
        height: 30px;
    }

    #table-item tbody > tr > td:first-child {
        text-align: center;
    }

    #table-item tbody > tr > td:nth-child(2) {
        padding-left: 10px;
    }

    #table-item tbody > tr > td:nth-child(3),
    #table-item tbody > tr > td:nth-child(4) {
        text-align: right;
        padding-right: 10px;
    }

    #table-item tbody .boleta-total td {
        text-align: right !important;
        padding-right: 10px;
    }

    #table-item th,#table-item td{
        border: 1px solid #000000;

    }
</style>-->
<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="content-boleta" style="margin:auto;border: 1px solid #000000;display: table;padding: 20px;background-color: #FFFFFF;">
<!--                <div style="width: 100%;color: #000000;display: table;margin-bottom: 10px;">
                    <div style="width: 56%;float: left;">
                        <span style="font-size: 35px;font-style: italic;font-weight: bold;">Bodega Jessica</span>
                        <span style="font-style: italic;display: block;margin-top: -5px;margin-bottom: 10px;">Venta de abarrotes</span>
                        <span>Pasaje San Luis 136</span><br>
                        <span>Lince - Lima - Lima</span>
                    </div>
                    <div style="width: 44%;float: left;font-size: 20px;margin-top: 14px;border: 1px solid #000000;border-radius: 10px;padding: 10px;">
                        <span style="display: block;width: 100%;text-align: center;">R.U.C 1046555982</span>
                        <span style="display: block;width: 100%;text-align: center;font-weight: bold;">BOLETA DE VENTA</span>
                        <span style="display: block;width: 100%;text-align: center;font-size: 15px;">N° <?php echo str_pad($oOrden->id, 6, "0", STR_PAD_LEFT); ?></span>
                    </div>
                </div>-->
                <table style="width: 524px;margin-bottom: 10px;color:#000000">
                    <tbody>
                        <tr>
                            <td style="height:30px;width:60px;">Nombre:</td>
                            <td><span style="border-bottom: 1px solid #000000;width: 100%;display: block;"><?php echo $oOrden->nombre_cliente ?></span></td>
                        </tr>
                        <tr>
                            <td style="height:30px;padding-right: 10px;">Fecha:</td>
                            <td><span style="border-bottom: 1px solid #000000;width: 100%;display: block;"><?php echo $oOrden->fecha_emision ?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="" id="table-item" style="color:#000000;">
                    <thead>
                        <tr>
                            <th>CANT.</th>
                            <th>DESCRIPCIÓN</th>
                            <th>P.UNITARIO</th>
                            <th>IMPORTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aItem as $oItem): ?>
                            <tr>
                                <td><?php echo $oItem->cantidad ?></td>
                                <?php $oProducto = ORM::factory('Producto', $oItem->id_prod) ?>
                                <td><?php echo $oProducto->nombre ?></td>
                                <td><?php echo $oProducto->precio ?></td>
                                <td><?php echo $oItem->subtotal ?></td>
                            </tr>
                        <?php endforeach ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="boleta-total">
                            <td colspan="3">Total S/.</td>
                            <td><?php echo $oOrden->total ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button class="btn" id="btn-imprimir" style="margin: auto;float: none;display: block;margin-top: 20px;">Imprimir</button>
        </div>
    </div>
</div>