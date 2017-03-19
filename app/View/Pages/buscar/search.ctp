<script>
   articulos= <?php echo json_encode($articulo); ?>;
   //console.log(articulos);
</script>
<div class="columns-container">
	<div id="columns" class="container">

		<div class="breadcrumb clearfix">
			<a class="home" href="http://livedemo00.template-help.com/prestashop_53429/" title="Volver a Inicio">
				<i class="fa fa-home"></i>
			</a>
			<span class="navigation-pipe">&gt;</span>
			Buscar Productos
		</div>

		<div class="row">

			<div id="left_column" class="column col-xs-12 col-sm-3"> 
				<?php echo $this->element('bestSeller');?>
				


				<section id="viewed-products_block_left" class="block">
					<h4 class="title_block">Productos más vistos</h4>
					<div class="block_content products-block" style="">
						<ul>
							<li class="clearfix last_item">
								<a class="products-block-image" href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_product=2&amp;controller=product&amp;id_lang=4" title="Más acerca de Glass-Nesting-Bowl-Set">
									<img class="img-responsive" src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_small_default.jpg" alt="Glass-Nesting-Bowl-Set">
								</a>
								<div class="product-content">
									<h5>
										<a class="product-name" href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_product=2&amp;controller=product&amp;id_lang=4" title="Más acerca de Glass-Nesting-Bowl-Set">
											Glass-Nesting-Bowl-Set
										</a>
									</h5>
									<p class="product-description">Kitchen Supplies store was founded by...</p>
								</div>
							</li>
						</ul>
					</div>
				</section>

				<section id="informations_block_left_1" class="block informations_block_left">
					<h4 class="title_block">
						<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms_category=1&amp;controller=cms&amp;id_lang=4" title="Information">
							Information </a>
						</h4>
						<div class="block_content list-block" style="">
							<ul>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms=1&amp;controller=cms&amp;id_lang=4" title="Delivery">
										Delivery
									</a>
								</li>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms=2&amp;controller=cms&amp;id_lang=4" title="Legal Notice">
										Legal Notice
									</a>
								</li>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms=3&amp;controller=cms&amp;id_lang=4" title="Terms and conditions of use">
										Terms and conditions of use
									</a>
								</li>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms=4&amp;controller=cms&amp;id_lang=4" title="About us">
										About us
									</a>
								</li>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_cms=5&amp;controller=cms&amp;id_lang=4" title="Secure payment">
										Secure payment
									</a>
								</li>
								<li>
									<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=stores" title="Nuestras tiendas">
										Nuestras tiendas
									</a>
								</li>
							</ul>
						</div>
					</section>


					<section id="stores_block_left" class="block">
						<h4 class="title_block">
							<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=stores" title="Nuestras tiendas">
								Nuestras tiendas
							</a>
						</h4>
						<div class="block_content blockstore" style="">
							<p class="store_image">
								<a href="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=stores" title="Nuestras tiendas">
									<img class="img-responsive" src="http://livedemo00.template-help.com/prestashop_53429/modules/blockstore/store.jpg" alt="Nuestras tiendas">
								</a>
							</p>
							<div>
								<a class="btn btn-default btn-sm icon-right" href="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=stores" title="Nuestras tiendas">
									<span>
										Descubra nuestras tiendas
									</span>
								</a>
							</div>
						</div>
					</section>

				</div><div id="center_column" class="center_column col-xs-12 col-sm-9">
				<h1 class="page-heading  product-listing">
					Buscar&nbsp;
					<span class="lighter">
						<?php echo $this->request->query['data']['search'];?>
					</span>
					<span class="heading-counter">
						
						<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} of {:pages}, Viendo {:current} Resultados de  {:count} en total, empezando por el registro {:start}, terminando en el registro {:end}')
	));
	?>


					</span>
					</h1>
				
	<ul class="pagination col-sm-12">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>
<?php if(empty($articulo)){?>
<p class="alert alert-warning col-sm-12">
No se encontraron resultados
</p>
<?php }?>

					<?php foreach($articulo as $key=> $articulos){?>
					<ul class="product_list grid row col-sm-6">
						
						<li class="ajax_block_product col-xs-12 col-sm-12 col-md-12 first-in-line last-line first-item-of-tablet-line first-item-of-mobile-line last-mobile-line" style="opacity: 1; transform: translate3d(0px, 0px, 0px);">
							<div class="product-container" itemscope="" itemtype="http://schema.org/Product">
								<div class="left-block">
									<div class="product-image-container">
										<a class="product_img_link" href="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="Glass-Nesting-Bowl-Set" itemprop="url">
											<img class="replace-2x img-responsive" src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_home_default.jpg" alt="Glass-Nesting-Bowl-Set" title="Glass-Nesting-Bowl-Set" itemprop="image">
										</a>
										<ul class="gallery-thumb-list">
											<?php foreach ($articulos['ArticulosImagene'] as  $imagen){ ?>
	                                             <li id="thumb-2-244" class="gallery-image-thumb active">
													<a href="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="Glass-Nesting-Bowl-Set" data-href="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_home_default.jpg">
														<img class="img-responsive" id="thumb-244" src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_cart_default.jpg" alt="Glass-Nesting-Bowl-Set" title="Glass-Nesting-Bowl-Set" itemprop="image">
													</a>
												</li>
                                            <?php } ?>											
										</ul>
										<a class="new-box" href="">
											<span class="new-label">Nuevo</span>
										</a>
										<a class="sale-box" href="">
											<span class="sale-label">¡Oferta!</span>
										</a>
									</div>
								</div>
								<div class="right-block">
									<h5 itemprop="name">
										<a class="product-name" href="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="Glass-Nesting-Bowl-Set" itemprop="url">
											<span class="list-name"><?php echo $articulos["Articulo"]["art_des"];?></span>
											<span class="grid-name"><?php echo $articulos["Articulo"]["art_des"];?></span>
										</a>
									</h5>
									<p class="product-desc" itemprop="description">
										<span class="list-desc"><?php echo $articulos["Articulo"]["art_des"];?></span>
										<span class="grid-desc"><?php echo $articulos["Articulo"]["art_des"];?></span>
									</p>
									<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
										<!--<span itemprop="price" class="price product-price product-price-new">
											$16.00 </span>
											<meta itemprop="priceCurrency" content="USD">
											<span class="old-price product-price">
												$20.00
											</span>
											<span class="price-percent-reduction">-20%</span>
										</div>-->
										<div class="bottom_product_box">
											<div class="button-container">
												<a class="btn btn-default" onclick="WishlistCart(<?php echo $articulos["Articulo"]["id"];?>)" rel="nofollow" title="Añadir al carrito" >
													<span>Añadir al carrito</span>
												</a>
												
											</div>
											
											
											</div>
										</div> 
									</li>
									
								</ul>
						<?php }?>
							</div> 
						</div> 
					</div> 
				</div>