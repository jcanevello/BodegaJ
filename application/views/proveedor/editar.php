<h1>Editar Proveedor</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box">
            <form class="form-horizontal" action="" role="form" method="POST">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Nombre: </label>
                    <div class="col-lg-10">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $oProveedor->nombre ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">RUC: </label>
                    <div class="col-lg-10">
                        <input type="text" name="ruc" class="form-control"  value="<?php echo $oProveedor->ruc ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Dirección</label>
                    <div class="col-lg-10">
                        <input type="text" name="direccion" class="form-control"  value="<?php echo $oProveedor->direccion ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Teléfono</label>
                    <div class="col-lg-10">
                        <input type="text" name="telefono" class="form-control"  value="<?php echo $oProveedor->telefono ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">E-mail</label>
                    <div class="col-lg-10">
                        <input type="email" name="email" class="form-control"  value="<?php echo $oProveedor->email ?>">
                    </div>
                </div>
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