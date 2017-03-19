<div id="homepage-slider">
            <div class="bx-wrapper" style="max-width: 10000px; margin: 0px auto;">
               <div class="bx-viewport" style="width: 100%; overflow: hidden; position: relative; height: 183px;">
                  <ul id="homeslider" style="max-height: 520px; width: auto; position: relative;" >
                     <?php foreach($medias as $media){ ?>
                        <li class="homeslider-container" style="float: none; list-style: none; position: absolute; display: none; width: 722px; z-index: 0;" >
                           
                           <a href="" title="sample-1" >
                           
                           <img src="<?php echo $media["Medias"]["img_url"];?>" width="2048" height="520" alt="sample-1">
                           
                           
                           </a>
                           
                        </li>
                     <?php }?>
                  </ul>
               </div>
               
            </div>
         </div>
         