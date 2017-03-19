
<div class="columns-container">
	<div id="columns" class="container">

		<div class="breadcrumb clearfix">
			<a class="home" href="" title="Volver a Inicio">
				<i class="fa fa-home"></i>
			</a>
			<span class="navigation-pipe">&gt;</span>
			Su carrito
		</div>

		<div class="row">
			<div id="center_column" class="center_column col-xs-12 col-sm-12">

				<h1 id="cart_title" class="page-heading">Productos en su carrito
					<span class="heading-counter">Su carrito contiene
						<span id="summary_products_quantity">1 producto</span>
					</span>
				</h1>
				<p style="display:none" id="emptyCartWarning" class="alert alert-warning">Su carrito está vacío.</p>
				<div class="cart_last_product">
					<div class="cart_last_product_header">
						<div class="left">Último producto añadido</div>
					</div>
					<a class="cart_last_product_img" href="">
						<img src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/5/0/250-tm_small_default.jpg" alt="Holder-with-Tools-Set">
					</a>
					<div class="cart_last_product_content">
						<p class="product-name">
							<a href="">
								Holder-with-Tools-Set
							</a>
						</p>
						<small>
							<a href="">
								Color : Grey, Packege quantity : 5 Piece, Type : Kitchen gadgets
							</a>
						</small>
					</div>
				</div>
				<div id="order-detail-content" class="table_block table-responsive">
					<table id="cart_summary" class="table table-bordered stock-management-on">
						<thead>
							<tr>
								<th class="cart_product first_item">producto</th>
								<th class="cart_description item">Descripción</th>
								<th class="cart_avail item">Avail.</th>
								<th class="cart_quantity item">Cant.</th>
								<th class="cart_delete last_item">&nbsp;</th>
							</tr>
						</thead>
						<tbody class="itemCartView">
							
						</tbody>
					</table>
				</div>  
			</div>
		</div>
		<div class="col-xs-12 col-sm-12">
			<form method="post" id="login_form" class="box">
				<h3 class="page-subheading">Solicitar Presupuesto</h3>
				<div class="form_content clearfix">
					<div class="form-group">
						<div class="col-sm-6">

							<label for="fisrtname">Nombre</label>
							<input class="is_required validate account_input form-control"  type="text" id="fisrtname" name="fisrtname" value="">
						</div>
						<div class="col-sm-6">
							<label for="lastname">Apellido</label>
							<input class="is_required validate account_input form-control"  type="text" id="lastname" name="lastname" value="">
						</div>
						<div class="col-sm-6">
							<label for="identification">Rif / Cedula</label>
							<input class="is_required validate account_input form-control"  type="text" id="identification" name="identification" value="">
						</div>
						<div class="col-sm-6">
							<label for="telefono">Telefono</label>
							<input class="is_required validate account_input form-control"  type="text" id="telefono" name="telefono" value="">
						</div>
						<div class="col-sm-6">
							<label for="email">Correo electrnico</label>
							<input class="is_required validate account_input form-control"  type="text" id="email" name="email" value="">
						</div>
						<div class="col-sm-12">						
							<label for="comment">Comentario</label>
							<textarea class="is_required validate account_input form-control" name="comment" id="comment" rows="10"></textarea>
						</div>
						<div style="clear:both;"></div>
					</div>
					<p class="submit">
						<button type="button" onclick="sendP()" name="SubmitLogin" class="btn btn-default btn-md">
							<span>
								Solicitar
							</span>
						</button>
					</p>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
itemCardView();
</script>
