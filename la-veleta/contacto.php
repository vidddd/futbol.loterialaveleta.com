<?php include('templates/header.php') ?>

<section id="contacto" class="section contact">
	<div class="wrapper">
		<header class="section__header">
			<h1 class="section__title">Contacta con nosotros</h1>
		</header>

		<div class="section__main">
			<div class="grid grid--2-cols grid--contact">
				<form action="/beta2/web/contacto/formulario" method="POST" class="form form-contact">
					<h3 class="contact__heading">Déjanos un mensaje</h3>
					<div class="form__item">
						<label for="edit-nombre">Nombre*</label>
						<input type="text" name="nombre" id="edit-nombre" required>
					</div>
					<div class="form__item">
						<label for="edit-email">Email*</label>
						<input type="email" name="email" id="edit-email" required>
					</div>
					<div class="form__item">
						<label for="edit-telefono">Telefono*</label>
						<input type="text" name="telefono" id="edit-telefono" required>
					</div>
					<div class="form__item">
						<label for="edit-mensaje">Mensaje*</label>
						<textarea name="mensaje" id="edit-mensaje"></textarea>
					</div>
					<div class="form__item">
						<label for="edit-acepto"><input type="checkbox" name="acepto" id="edit-acepto" required> Acepto la política de <a id="acceptance-trigger" class="acceptance-trigger" href="#acceptance">protección de datos</a></label>
						<figure id="acceptance" class="acceptance">
							<div class="acceptance__container">
								<h3 class="acceptance__title">Información básica de protección de datos del sitio web <small><a href="#acceptance" class="acceptance-trigger">[Cerrar]</a></small></h3>
			                    <table class="acceptance__table">
			                        <tbody>
			                        	<tr>
				                        	<th>RESPONSABLE DEL TRATAMIENTO</th> 
				                        	<td>VENDEMOS ILUSION SL – CIF B88416425</td>
				                        </tr>
			                        	<tr>
			                        		<th>FINALIDAD DE LOS TRATAMIENTOS</th> 
			                          		<td>Atender sus consultas o enviarle información relacionada con su solicitud</td>
			                        	</tr>
			                        	<tr>
			                          		<th>PERIODO DE CONSERVACIÓN</th> 
			                          		<td>Siempre que continúe existiendo interés en mantener las relaciones por ambas partes.</td>
			                        	</tr>
			                        	<tr>
			                        		<th>LEGITIMACIÓN</th>
			                          		<td> Consentimiento del interesado que nos otorga al aceptar la política de privacidad de la web</td>
			                        	</tr>
			                        	<tr>
			                        		<th>TRANSFERENCIAS</th>
			                          		<td> Utilizamos una infraestructura de correo electrónico que almacena datos en España. Arsys.es</td>
			                        	</tr>
			                        	<tr>
			                          		<th>DESTINATARIOS</th>
			                          		<td>No se realizan cesiones de datos, salvo obligación legal</td>
			                        	</tr>
			                        	<tr>
			                          		<th>DERECHOS DE LOS INTERESADOS</th>
			                          		<td>Retirar el consentimiento, acceder, rectificar y suprimir los datos, así como otros derechos, como se informa en la información</td>
			                        	</tr>
			                      	</tbody>
			                    </table>
			                    <figcaption class="acceptance__link">Para mayor información, puede leer nuestra <a href="aviso-legal.php">política de protección de datos</a></figcaption>
			                    <br>
			                </div>
						</figure>
					</div>
					<div class="form__item">
						<button type="submit" class="btn btn--primary btn--block">Enviar</button>
					</div>
				</form>
				<div class="contact__address">
					<h3 class="contact__heading">Lotería La Veleta</h3>
					<p>Administración de Lotería  nº 320 de Madrid. Perteneciente a Loterías y Apuestas del Estado. Receptor <strong>95005</strong></p>
					<ul class="contact__address-list">
						<li class="contact__address-item"><span class="icon-location_city"></span>Hnos. Garcia Noblejas 1, 28013 Madrid</li>
						<li class="contact__address-item"><a href="tel:913671129"><span class="icon-phone_iphone"></span>91 367 11 29</a></li>
						<li class="contact__address-item"><a href="mailto:hola@loterialaveleta.com"><span class="icon-emailmailmarkunreadlocal_post_office"></span>hola@loterialaveleta.com</a></li>
					</ul>
				</div>
			</div>
			<div class="full-size contact__map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6073.389826122884!2d-3.637554!3d40.437754!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422f14887fbb5d%3A0x275323b9bee07b77!2sAv.%20de%20la%20Instituci%C3%B3n%20Libre%20de%20Ense%C3%B1anza%2C%201%2C%2028037%20Madrid!5e0!3m2!1sen!2ses!4v1578562506997!5m2!1sen!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
</section>


<?php include('templates/games.php') ?>
<?php include('templates/footer.php') ?>
