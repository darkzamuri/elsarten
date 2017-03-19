
<div id="top_column">
         <?php echo $this->element('home-slider');?>
         <?php echo $this->element('ofertas');?>
</div>
<script>
   articulos= <?php echo json_encode($articulo); ?>;
   //console.log(articulos);
</script>
<div id="page">
  
   <div class="columns-container">
      <div id="columns" class="container">
         <div class="row">
            <div id="center_column" class="center_column col-xs-12 col-sm-12">
               
               <div class="tab-content">
                  <div class="bx-wrapper" style="max-width: 1690px; margin: 0px auto;">
                     <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 425px;">
                     <ul id="homepage-carousel" class="homepage-carousel product_list grid bxslider"  style="width: 2215%; position: relative; left: -722px;" >
                           
                           <?php foreach($articulo as $key=> $articulos){?>
                           <li class="ajax_block_product col-xs-12 col-sm-4 col-md-3 first-in-line last-item-of-tablet-line first-item-of-mobile-line" style="float: left; list-style: none; position: relative; margin-right: 30px; opacity: 1; transform: translate3d(0px, 0px, 0px); width: 150.5px;">
                              <div class="product-container" itemscope="" itemtype="http://schema.org/Product">
                                 <div class="left-block">
                                    <div class="product-image-container">
                                       <a class="product_img_link" href="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="Butter-Maker" itemprop="url">
                                       <img class="replace-2x img-responsive" src="img/286-tm_home_default.jpg" alt="Butter-Maker" title="Butter-Maker" itemprop="image">
                                       </a>
                                       <ul class="gallery-thumb-list">
                                          <?php foreach ($articulos['ArticulosImagene'] as  $imagen){ ?>
                                             <li id="thumb-9-286" class="gallery-image-thumb active">
                                                <a href="#" title="Butter-Maker" data-href="img/286-tm_home_default.jpg">
                                                <img class="img-responsive" id="thumb-286" src="<?php echo $imagen['url']; ?>" alt="Butter-Maker" title="Butter-Maker" itemprop="image">
                                                </a>
                                             </li>
                                          <?php } ?>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="right-block">
                                    <h5 itemprop="name">
                                       <a class="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="<?php echo $articulos["Articulo"]["art_des"];?>" itemprop="url">
                                       <span class="list-name"><?php echo $articulos["Articulo"]["art_des"];?></span>
                                       <span class="grid-name"><?php echo $articulos["Articulo"]["art_des"];?></span>
                                       </a>
                                    </h5>
                                    
                                    <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="content_price">
                                       <meta itemprop="priceCurrency" content="USD">
                                    </div>
                                    <div class="bottom_product_box">
                                       <div class="button-container">
                                          <a class="btn btn-default" onclick="WishlistCart(<?php echo $articulos["Articulo"]["id"];?>)" rel="nofollow" title="Añadir al carrito">
                                          <span>Añadir al carrito</span>
                                          </a>
                                          <a itemprop="url" class="lnk_view btn btn-default" href="<?php echo $this->webroot;?>producto/<?php echo $articulos['Articulo']['id']?>" title="Ver">
                                          <span>Más</span>
                                          </a>
                                       </div>
                                       
                                       <div class="product-flags"></div>
                                       <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" class="availability">
                                          <span class="available-now">
                                             <link itemprop="availability" href="http://schema.org/InStock">
                                             En stock 
                                          </span>
                                       </span>
                                       
                                    </div>
                                    <div style="clear:both;"></div>
                                 </div>
                              </div>
                           </li>
                          <?php }?>
                     </ul>
                     </div>
                     <div class="bx-controls bx-has-controls-direction">
                        <div class="bx-controls-direction"><a class="bx-prev" href=""></a><a class="bx-next" href=""></a></div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- #center_column -->
         </div>
         <!-- .row -->
      </div>
      <!-- #columns -->
      <div class="bottom_content">
         <div id="htmlcontent_home">
            <div class="">
               
            </div>
         </div>
      
         <script>
            $(document).ready(function(){               
               
            	if ($('#homepage-blog .block_content').width() < 940)
            		carousel_elements = 1;
            	if($('#homepage-blog .block_content').width() >= 940)
            		carousel_elements = 2;
            		
            	$('#homepage-carousel-blog > li').removeClass(),
            	
            	$('#homepage-carousel-blog').bxSlider({
            		responsive:true,
            		useCSS: false,
            		minSlides: carousel_elements,
            		maxSlides: carousel_elements,
            		slideWidth: 940,
            		slideMargin: 30,
            		moveSlides: 1,
            		pager: false,
            		autoHover: false,
            		speed: 500,
            		pause: 3000,
            		controls: true,
            		autoControls: true,
            		startText:'',
            		stopText:'',
            		prevText:'',
            		nextText:'',
            	});
               
            });
         </script>  
         <?php echo $this->element('manufactures'); ?>
      </div>
   </div>
   <!-- .columns-container -->
   <!-- Footer -->
   
   <!-- #footer -->
</div>
