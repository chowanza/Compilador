<div class="col-md-4"></div>
<div class="col-md-3">
	<div class="panel panel-primary" id="panel-margin">
		<div class="panel-heading">
			<center><h1 class="panel-title">Login Rookiex</h1></center>
		</div>
		<div class="panel-body">
			<form method="POST">
				<div class="form-group">
					<label for="username">Usuario</label>
					<input class="form-control" name="stud_no" placeholder="Usuario" type="text" required="required" >
				</div>
				<div class="form-group">
					<label for="password">Contraseña</label>
					<input class="form-control" name="password" placeholder="Contraseña" type="password" required="required" >
				</div>
				<?php include 'login_query.php'?>
				<div class="form-group">
					<button class="btn btn-block btn-primary"  name="login"><span class="glyphicon glyphicon-log-in"></span> Acceder</button>
				</div>
			</form>
			<div>	
				<div class="col-md-3"></div>
				<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Registrarse</button> <br>
				<center><a href="OlvidoClave.html"><span>Olvidé mi contraseña</span></a></center>
				<div class="modal fade" id="form_modal" aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form method="POST"">	
									<div class="modal-header">
										<h4 class="modal-title">Registrar Usuario</h4>
									</div>
									<div class="modal-body">
										<div class="col-md-3"></div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Usuario</label>
												<input type="text" name="stud_no" class="form-control" required="required"/>
											</div>
											<div class="form-group">
												<label>Correo</label>
												<input type="text" name="firstname" class="form-control" required="required"/>
											</div>
											<br />
											<div class="form-group">
												<label>Contraseña</label>
												<input type="password" name="password" class="form-control" required="required"/>
											</div>
											<?php include 'save_student.php'?>
										</div>
									</div>
									<div style="clear:both;"></div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
										<button name="save" class="btn btn-success" ><span class="glyphicon glyphicon-save"></span> Guardar</button>
									</div>
								</form>
							</div>
						</div>
					<?php include 'script.php'?>
				</div>
			</div>
		</div>
	</div>
</div>	
