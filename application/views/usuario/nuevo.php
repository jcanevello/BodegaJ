<h1>Nuevo Producto</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box">
            <form class="form-horizontal" action="" role="form" method="POST">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Nombre: </label>
                    <div class="col-lg-6">
                        <input type="text" name="nombre" class="form-control" id="inputnombre">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Usuario: </label>
                    <div class="col-lg-6">
                        <input type="text" name="ruc" class="form-control" id="inputruc">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tipo</label>
                    <select class="col-lg-6" style="width:500px" id="sel2">
                        <option value="United States">Administrador</option> 
                        <option value="United Kingdom">Jefe de Logística</option> 
                        <option value="Afghanistan">Vendedor</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Date</label>
                    <div class="input-group col-lg-6" style="left: 8px;">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input type="text" class="form-control" id="datepickerDate">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <a href="/usuario" class="btn btn-default">Cancelar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div><br><br><br><br><br><br>
            </form>									
        </div>
    </div>	
</div>



