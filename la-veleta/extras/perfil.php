<?php include('templates/header_logged.php') ?>

<section id="usuario-section" class="wrapper user">
	

		<header class="section__header user__header">
			<h1 class="section__title user__title"><span class="user__welcome">Bienvenido</span>veleta</h1>
			<span class="user__icon icon-person"></span>
		</header>

		<div class="user-menu">
			<a href="#" class="user-menu__active-element">Ir a página</a>
			<ul class="user-menu__tasks">
				<li><a href="/user/1" data-drupal-link-system-path="user/1">Ver<span class="visually-hidden">(solapa activa)</span></a></li>
				<li><a href="/user/1/edit" data-drupal-link-system-path="user/1/edit">Editar</a></li>
				<li><a href="/user/1/mi-monedero" data-drupal-link-system-path="user/1/mi-monedero" class="is-active">Mi Monedero</a></li>
				<li><a href="/user/1/payment-methods" data-drupal-link-system-path="user/1/payment-methods">Medios de pago</a></li>
				<li><a href="/user/1/shortcuts" data-drupal-link-system-path="user/1/shortcuts">Atajos</a></li>
				<li><a href="/user/1/orders" data-drupal-link-system-path="user/1/orders">Pedidos</a></li>
				<li><a href="/user/1/customer" data-drupal-link-system-path="user/1/customer">Datos del cliente</a></li>
				<li><a href="/devel/user/1" data-drupal-link-system-path="devel/user/1">Desarrollo</a></li>
				<li><a href="/entity_clone/user/1" data-drupal-link-system-path="entity_clone/user/1">Clonar</a></li>
			</ul>
		</div>

		<div class="card card--user">
			<header class="card__header">
				<h2 class="card__title">Ver</h2>
			</header>
			<article class="table-container user-data">
				<table class="table-responsive table-responsive--vertical-header">
					<tbody>
						<tr>
							<th scope="row">Nombre de Usuario</th>
							<td data-th="Nombre de Usuario">veleta</td>
						</tr>
						<tr>
							<th scope="row">Email</th>
							<td data-th="Email">hola@loterialaveleta.com</td>
						</tr>
						<tr>
							<th>Nombre</th>
							<td data-th="Nombre">Juan Palomo</td>
						</tr>
						<tr>
							<th>Apellidos</th>
							<td data-th="Apellidos">Martínez Ruiz de Azcárraga</td>
						</tr>
						<tr>
							<th>Dirección</th>
							<td data-th="Dirección">Calle Carretera de las Marismas 8, 5B, escalera A</td>
						</tr>
						<tr>
							<th>Código Postal</th>
							<td data-th="Código Postal">28013</td>
						</tr>
						<tr>
							<th>Provincia</th>
							<td data-th="Provincia">Madrid</td>
						</tr>
						<tr>
							<th>Documento</th>
							<td data-th="Documento">DNI</td>
						</tr>
						<tr>
							<th>Nr. Documento</th>
							<td data-th="Nr. Documento">123456789B</td>
						</tr>
						<tr>
							<th>Fecha de nacimiento</th>
							<td data-th="Fecha de nacimiento">05/12/1891</td>
						</tr>
						<tr>
							<th>Teléfono</th>
							<td data-th="Teléfono">666666666</td>
						</tr>
					</tbody>
				</table>
			</article>
		</div>

		<div class="card card--user">
			<header class="card__header">
				<h2 class="card__title">Monedero</h2>
			</header>
			<article class="user-wallet">
				<!-- <div class="user-wallet__image-container">
			    	<img src="images/cartera.png" alt="Mi monedero">
			    </div> -->
				<div class="user-wallet__text-container">
					<p>El <strong>Saldo actual</strong> que tienes en loterialavelta.com es de<p>
					<p class="user-wallet__total">936.00&nbsp;Euros</p>
					<p>El dinero es virtual, con el puedes comprar loteria en esta pagina</p>

					<div class="user-wallet--add">
					    <a href="http://beta.loterialaveleta.com/user/1/mi-monedero/depositar" title="Añadir saldo a mi monedero" class="btn btn--primary">Añadir Saldo a Mi Monedero</a>
					    <div class="payment-methods">
					    	<p>
					    		<small>Serás redirigido al TPV virtual para pagar con tu tarjeta de forma segura.</small>
					    		<span class="payment-method-icon payment-method-icon--visa"></span>   
					        	<span class="payment-method-icon payment-method-icon--mastercard"></span>   
					        	<span class="payment-method-icon payment-method-icon--maestro"></span> 
					    	</p>
					    </div>
					</div>       
				</div>

			</article>		
		</div>

		<div class="card card--user">
			<header class="card__header">
				<h2 class="card__title">Medios de pago</h2>
			</header>

			<article class="table-container user-payment-methods">
				<table class="table-responsive table-responsive--horizontal-header">
				    <thead>
				      <tr>
		                  <th>Forma de pago</th>
		                  <th>Expira</th>
		                  <th>Operaciones</th>
		              </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td data-th="Forma de pago">American Express</td>
				        <td data-th="Expira">21 / 10 / 2020</td>
				        <td data-th="Operaciones">
				        	<?php for($i=1;$i<10;$i++): ?>
				        		<p>2020/10/12 21:32 Compra por valor de 20€</p>
				        	<?php endfor ?>
				        </td>
				      </tr>
				    </tbody>
				</table>
			</article>
		</div>	

		<div class="card card--user">
			<header class="card__header">
				<h2 class="card__title">Pedidos</h2>
			</header>

			<article class="table-container">
				<table class="table-responsive table-responsive--horizontal-header">
				    <thead>
					    <tr>
					        <th id="view-order-number-table-column" class="views-field views-field-order-number" scope="col"><a href="?order=order_number&amp;sort=desc" title="ordenar por Número de pedido" rel="nofollow">Número de pedido</a></th>
					        <th id="view-placed-table-column" class="views-field views-field-placed is-active" scope="col">
					        	<a href="?order=placed&amp;sort=asc" title="ordenar por Date" rel="nofollow">Date
								<span class="tablesort tablesort--asc">
								  <span class="visually-hidden">
								    Ordenar ascendente
								      </span>
								</span>
								</a>
							</th>
							<th id="view-total-price-number-table-column" class="views-field views-field-total-price__number" scope="col">Total</th>
							<th id="view-state-table-column" class="views-field views-field-state" scope="col"><a href="?order=state&amp;sort=asc" title="ordenar por State" rel="nofollow">State</a></th>
					    </tr>
				    </thead>
				    <tbody>
				        <tr>
				            <td data-th="Número de pedido" headers="view-order-number-table-column" class="views-field views-field-order-number">
								<a href="/user/1/orders/89">50</a>
				          	</td>
				            <td data-th="Fecha" headers="view-placed-table-column" class="views-field views-field-placed is-active">
								04/09/2020 - 12:25
							</td>
				            <td data-th="Total" headers="view-total-price-number-table-column" class="views-field views-field-total-price__number">
								20,00&nbsp;€
							</td>
				            <td data-th="Estado" headers="view-state-table-column" class="views-field views-field-state">
								Completed
							</td>
				        </tr>
				        <tr>
				            <td data-th="Número de pedido" headers="view-order-number-table-column" class="views-field views-field-order-number">
								<a href="/user/1/orders/71">45</a>
							</td>
				            <td data-th="Fecha" headers="view-placed-table-column" class="views-field views-field-placed is-active">
								18/04/2020 - 11:54
							</td>
				            <td data-th="Total" headers="view-total-price-number-table-column" class="views-field views-field-total-price__number">
								6,00&nbsp;€
				        	</td>
				            <td data-th="Estado" headers="view-state-table-column" class="views-field views-field-state">
								Completed
							</td>
				        </tr>
				    </tbody>
				</table>
			</article>
		</div>

		<div class="card card--user">
			<header class="card__header">
				<h2 class="card__title">Datos del cliente</h2>
			</header>
			<article class="form-container">

				<form action="#" class="form grid grid--2-cols">
					<div class="form__item">
						<label for="nombre">Nombre*</label>
						<input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
					</div>
					<div class="form__item">
						<label for="apellidos">Apellidos*</label>
						<input type="text" name="apellidos" id="apellidos" placeholder="Apellidos" required>
					</div>
					<div class="form__item grid__item--full">
						<label for="empresa">Empresa</label>
						<input type="text" name="empresa" id="empresa" placeholder="Empresa">
					</div>
					<div class="form__item">
						<label for="direccion">Dirección*</label>
						<input type="text" name="direccion" id="direccion" placeholder="Dirección" required>
					</div>
					<div class="form__item">
						<label for="direccion2">Dirección 2</label>
						<input type="text" name="direccion2" id="direccion2" placeholder="Dirección 2">
					</div>
					<div class="form__item">
						<label for="ciudad">Ciudad*</label>
						<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" required>
					</div>
					<div class="form__item">
						<label for="codigo-postal">Código postal</label>
						<input type="text" name="codigo-postal" id="codigo-postal" placeholder="Código postal">
					</div>
					<div class="form__item grid__item--full">
						<label for="pais">País*</label>
						<select name="pais" id="pais" required>
							<option value="AF">Afganistán</option>
							<option value="AL">Albania</option>
							<option value="DE">Alemania</option>
							<option value="DE">Andorra</option>
							<option value="DE">Angola</option>
						</select>
					</div>
					<div class="form__item grid__item--reverse">
						<input type="submit" value="Guardar" class="btn btn--primary">
					</div>
				</form>
			</article>
		</div>




</section>
<?php include('templates/footer.php') ?>