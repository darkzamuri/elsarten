<section class="page-product-box blockproductscategory">
               <h3 class="productscategory_h3 page-product-heading"><?php echo count($productos);?> otros productos de la misma categoría:</h3>
               <div id="productscategory_list" class="clearfix">
                  <div class="bx-wrapper" style="max-width: 1168px; margin: 0px auto;">
                     <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 230px;">
                        <ul id="bxslider1" class="bxslider clearfix" style="width: 2115%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                           <?php foreach ($productos as $key => $articulo) {?>
                           <li class="product-box item" style="float: left; list-style: none; position: relative; margin-right: 20px; width: 178px;">
                              <a href="<?php echo $this->webroot;?>producto/<?php echo $articulo['Articulo']['id']?>" class="lnk_img product-image" title="Nesting-Mixing-Bowl-Set"><img src="http://livedemo00.template-help.com/prestashop_53429/img/p/2/4/1/241-tm_home_default.jpg" alt="Nesting-Mixing-Bowl-Set"></a>
                              <h5 class="product-name">
                                 <a href="<?php echo $this->webroot;?>producto/<?php echo $articulo['Articulo']['id']?>" title="<?php echo $articulo['Articulo']['art_des']?>"><?php echo $articulo['Articulo']['art_des']?></a>
                              </h5>
                           </li>
                           <?php }?>
                        </ul>
                     </div>
                     <div class="bx-controls bx-has-controls-direction">
                        <div class="bx-controls-direction"><a class="bx-prev disabled" href=""></a><a class="bx-next" href=""></a></div>
                     </div>
                  </div>
               </div>
            </section>