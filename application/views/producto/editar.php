<h1>Editar Producto</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box">
            <form class="form-horizontal" action="" role="form" method="POST">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Nombre: </label>
                    <div class="col-lg-6">
                        <input type="text" name="nombre" class="form-control" id="inputnombre" value="<?php echo $oProducto->nombre ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Stock</label>
                    <div class="col-lg-6">
                        <input type="number" name="stock" class="form-control" id="inputemail" value="<?php echo $oProducto->stock ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Precio (S/.)</label>
                    <div class="col-lg-6">
                        <input type="number" step="0.1" name="precio" class="form-control" id="inputtelefono" value="<?php echo $oProducto->precio ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label" for="datepickerDate">Fecha de Vencimiento</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="datepickerDate" name="fecha_vencimiento"  value="<?php echo $oProducto->fecha_vencimiento ?>" >
                        <span class="help-block" style="margin-bottom: 0px;">Formato mm-dd-yyyy</span>
                    </div>
                </div>
                <?php /*
                <div class="form-group">
                    <label class="col-lg-2 control-label">Proveedor</label>
                    <select class="col-lg-6" id="sel2" name="id_proveedor">
                        <?php foreach ($aProveedor as $oProveedor): ?>
                        <option value="<?php echo $oProveedor->id ?>" <?php echo ($oProducto->id_proveedor == $oProveedor->id) ? 'selected' : null ?>><?php echo $oProveedor->nombre ?></option>
                        <?php endforeach ?>
                    </select>
                </div>*/?>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/proveedor" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div><br><br><br><br><br><br>
            </form>									
        </div>
    </div>	
</div>



