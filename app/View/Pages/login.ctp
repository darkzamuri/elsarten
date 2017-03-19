<?php
/*
   This file is part of UserMgmt.

   Author: Chetan Varshney (http://ektasoftwares.com)

   UserMgmt is free software: you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation, either version 3 of the License, or
   (at your option) any later version.

   UserMgmt is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>

   <?php echo $this->Session->flash(); ?>

<script>
document.getElementById("UserEmail").focus();
</script>
<div class="columns-container">
   <div id="columns" class="container">
      <div class="breadcrumb clearfix">
         <a class="home" href="http://livedemo00.template-help.com/prestashop_53429/" title="Volver a Inicio">
         <i class="fa fa-home"></i>
         </a>
         <span class="navigation-pipe">&gt;</span>
         Autenticación
      </div>
      <div class="row">
         
         <div id="center_column" class="center_column col-xs-12 col-sm-9">
            <h1 class="page-heading">Autenticación</h1>
            <div class="row">
               
               <div class="col-xs-12 col-sm-6">
                  
                     <?php echo $this->Form->create('User', array('action' => 'login' , 'class' => 'box' , 'id' => 'login_form')); ?>
                     <h3 class="page-subheading">¿Ya está registrado?</h3>
                     <div class="form_content clearfix">
                        <div class="form-group">
                           <label for="email">Correo electrónico</label>
                           
                           <?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"fis_required validate account_input form-control" , 'placeholder' => 'Usuario o Correo' ))?>
                        </div>
                        <div class="form-group">
                           <label for="passwd">Contraseña</label>
                           <span>
                           <?php echo $this->Form->input("password" ,array('label' => false,'div' => false,'class'=>"is_required validate account_input form-control" , 'placeholder' => 'Contraseña' , 'type' => 'password' ))?>
                           </span>
                        </div>
                        <p class="lost_password form-group">
                           <a href="http://livedemo00.template-help.com/prestashop_53429/index.php?controller=password" title="Recuperar la contraseña" rel="nofollow">¿Olvidó su contraseña?</a>
                        </p>
                        <p class="submit">
                           <input type="hidden" class="hidden" name="back" value="my-account">
                           <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-default btn-md">
                           <span>
                           <i class="fa fa-lock left"></i>
                           Iniciar sesión
                           </span>
                           </button>
                        </p>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
