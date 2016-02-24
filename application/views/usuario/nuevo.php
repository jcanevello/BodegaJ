<h1>Nuevo Usuario</h1>

<div class="row">
    <div class="col-lg-12">
        <div class="main-box">
            <form class="form-horizontal" action="" role="form" method="POST">
                <div class="form-group">
                    <label class="col-lg-2 control-label">Usuario: </label>
                    <div class="col-lg-6">
                        <input type="text" name="usuario" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Contraseña: </label>
                    <div class="col-lg-6">
                        <input type="text" name="contrasena" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Tipo:</label>
                    <div class="col-lg-6">
                        <select class="form-control" name="tipo">
                            <option value="0">Administrador</option> 
                            <option value="1">Jefe de Logística</option> 
                            <option value="2">Vendedor</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Nombre y Apellido: </label>
                    <div class="col-lg-6">
                        <input type="text" name="nombres" class="form-control" id="inputruc">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Email: </label>
                    <div class="col-lg-6">
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Teléfono: </label>
                    <div class="col-lg-6">
                        <input type="text" name="telefono" class="form-control">
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



