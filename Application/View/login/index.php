<?php
	require 'Application/View/public/header.php';
	require 'Application/View/public/navbar.php';
?>
		<main>
			<div class="container">
				<div class="row" style="margin-bottom: 0;">
					<div class="col s12">
						<div class="card teal lighten-3">
							<div class="card-content white-text">
							<span class="card-title"><?php echo $title;?></span>
							</div>
						</div>
					</div>
				</div>
		      	<div class="row">
		      		<!--card 1-->
		        	<div class="col s12 m6">
		          		<div class="card teal lighten-3 white-text hoverable">
			          		<form id="form" name="inventario" action ="?view=inventario" method="post">
					            <div class="card-content">
				                    <div class="row">
				                        <div class="input-field col s12">
				                            <input id="nombre" name="nombre" type="text" tabindex="1" />
				                            <label class="white-text" for="rut">Nombre</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s12">
				                            <input id="precio" name="precio" type="number" tabindex="2" />
				                            <label class="white-text" for="pass">Precio</label>
				                        </div>
				                    </div>
				                    <div class="row">
				                        <div class="input-field col s12">
				                            <input id="stock" name="stock" type="number" tabindex="3" />
				                            <label class="white-text" for="pass">Stock</label>
				                        </div>
				                    </div>
				                    <div class="row">
						              	<button type="submit" class="btn btn-large waves-effect waves-light">Guardar</button>
						            </div>
					            </div>
					    	</form>        
			          	</div>
		        	</div>
		        	<!--card 2-->
		        	<div class="col s12 m6">
		          		<div class="card teal lighten-3">
							<div class="card-content">
								<span class="card-title white-text">Resumen</span>
								<div class="row s12 m12 l12">
									<!--Tarjeta que muestra los diferentes marcos-->
									<div class="col s12 m12">
									  <div class="card">
										<div class="card-content">
										  <p>Cantidad de marcos diferentes: 43</p>
										</div>
									  </div>
									</div>
									<!--Tarjeta que muestra la cantidad marcos-->
									<div class="col s12 m12">
									  <div class="card">
										<div class="card-content">
										  <p>Cantidad de marcos totales: 265</p>
										</div>
									  </div>
									</div>
									<!--Tarjeta que muestra el valor total de los marcos-->
									<div class="col s12 m12">
									  <div class="card">
										<div class="card-content">
										  <p>Valor total de los marcos: $439.000 clp</p>
										</div>
									  </div>
									</div>	
								</div>
							</div>
						</div>
		        	</div>
		      	</div>
		      	<!--inicio row de tabla de productos-->
[@table]
				<!--fin row tabla de productos-->
		    </div>
		</main>
[@footer]