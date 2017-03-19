<script>
   articulos= [];
   articulos.push(<?php echo json_encode($producto); ?>); 
   //console.log(articulos);
</script>
<div id="columns" class="container">
   <div class="breadcrumb clearfix">
      <a class="home" href="" title="Volver a Inicio">
      <i class="fa fa-home"></i>
      </a>
      <span class="navigation-pipe">&gt;</span>
      <?php echo $producto['Articulo']['art_des'];?>
   </div>
   <div class="row">
      <div id="center_column" class="center_column col-xs-12 col-sm-12">
         <div itemscope="" itemtype="http://schema.org/Product">
            <div class="primary_block row one-column">
               <div class="pb-left-column col-sm-6 col-md-6 col-lg-8">
                  <div id="image-block" class="clearfix is_caroucel">
                     <span class="sale-box no-print">
                     <span class="sale-label">¡Oferta!</span>
                     </span>
                     <span id="view_full_size">
                        <a class="jqzoom" title="" rel="gal1" href="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_thickbox_default.jpg" itemprop="url" style="outline-style: none; text-decoration: none;">
                           <div class="zoomPad">
                              <img itemprop="image" src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_large_default.jpg" title="Glass-Nesting-Bowl-Set" alt="Glass-Nesting-Bowl-Set" style="opacity: 1;">
                              <div class="zoomPup" style="width: 422px; height: 422px; position: absolute; display: none; border-width: 1px; left: 227px; top: 198px;"></div>
                              <div class="zoomWindow" style="position: absolute; z-index: 5001; cursor: default; left: 0px; top: 0px; display: none;">
                                 <div class="zoomWrapper" style="width: 650px; border-width: 1px; cursor: crosshair;">
                                    <div class="zoomWrapperTitle" style="width: 100%; position: absolute; display: none;"></div>
                                    <div class="zoomWrapperImage" style="width: 100%; height: 650px;"><img src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/4/244-tm_thickbox_default.jpg" style="position: absolute; border: 0px; display: block; left: -350.769px; top: -306.154px;"></div>
                                 </div>
                              </div>
                              <div class="zoomPreload" style="top: 312.5px; left: 289px; position: absolute; visibility: hidden;">Loading zoom</div>
                           </div>
                        </a>
                     </span>
                  </div>
                  <div id="views_block" class="clearfix">
                     <a id="view_scroll_left" class="" title="Otras vistas" href="javascript:{}" style="cursor: default; opacity: 0; display: none;">
                     Previo
                     </a>
                     
                     <a id="view_scroll_right" title="Otras vistas" href="javascript:{}" style="cursor: default; opacity: 0; display: none;">
                     Siguiente
                     </a>
                  </div>
                  <p class="resetimg clear no-print">
                     <span id="wrapResetImages" style="display: none;">
                     <a href="http://livedemo00.template-help.com/prestashop_53429/index.php?id_product=2&amp;controller=product&amp;id_lang=4" name="resetImages">
                     <i class="fa fa-repeat"></i>
                     Mostrar todas las imágenes
                     </a>
                     </span>
                  </p>
               </div>
               <div class="pb-right-column col-sm-6 col-md-6 col-lg-4">
                  <div class="product-info-line">
                     <p id="product_reference">
                        <label>Referencia </label>
                        <span class="editable" itemprop="sku">00102</span>
                     </p>
                  </div>
                  <h1 itemprop="name"><?php echo $producto['Articulo']['art_des'];?></h1>
                  <div class="product-info-line">
                     <p id="availability_statut" style="display: none;">
                        <label id="availability_label">Disponibilidad:</label>
                        <span id="availability_value"></span>
                     </p>
                     <p id="product_condition">
                        <label>Condición: </label>
                        <link itemprop="itemCondition" href="http://schema.org/NewCondition">
                        <span class="editable">Nuevo</span>
                     </p>
                  </div>
                  <p class="warning_inline" id="last_quantities" style="display: none;">Advertencia: ¡Últimos artículos en inventario!</p>
                  <p id="availability_date" style="display: none;">
                     <span id="availability_date_label">Disponible el: </span>
                     <span id="availability_date_value"></span>
                  </p>
                  <div id="oosHook" style="display: none;"></div>
                  <form id="buy_block" action="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=cart" method="post">
                     <p class="hidden">
                        <input type="hidden" name="token" value="01ade8a68c5202cd5134eb506a06dd04">
                        <input type="hidden" name="id_product" value="2" id="product_page_product_id">
                        <input type="hidden" name="add" value="1">
                        <input type="hidden" name="id_product_attribute" id="idCombination" value="474">
                     </p>
                    
                  </form>
                  <div class="extra-right">
                     <p class="socialsharing_product no-print">
                        <button data-type="twitter" type="button" class="btn btn-twitter social-sharing">
                        <i class="fa fa-twitter"></i>
                        </button>
                        <button data-type="facebook" type="button" class="btn btn-facebook social-sharing">
                        <i class="fa fa-facebook"></i>
                        </button>
                        <button data-type="google-plus" type="button" class="btn btn-google-plus social-sharing">
                        <i class="fa fa-google-plus"></i>
                        </button>
                        <button data-type="pinterest" type="button" class="btn btn-pinterest social-sharing">
                        <i class="fa fa-pinterest"></i>
                        </button>
                     </p>
                     
                  </div>
                  <ul id="usefull_link_block" class="clearfix no-print">
                  </ul>
               </div>
            </div>
           
            <?php echo $this->element('category_art');?>
         </div>
      </div>
   </div>
</div>