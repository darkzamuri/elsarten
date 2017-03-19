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
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Usuarios <small>Editar Usuario</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-users"></i> Usuarios
                            </li>
                        </ol>
                    </div>
                </div>
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="register">
				<div class="um_box_mid_content_mid_left">
					<?php echo $this->Form->create('User'); ?>
					<?php echo $this->Form->input("id" ,array('type' => 'hidden', 'label' => false,'div' => false))?>
			<?php   if (count($userGroups) >2) { ?>
						<div class="form-group input-group" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span><?php echo $this->Form->input("user_group_id" ,array('type' => 'select', 'label' => false,'div' => false,'class'=>"form-control" ))?>
						</div>
							
			<?php   }   ?>
					<div>
						
						<div class="form-group input-group" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span><?php echo $this->Form->input("username" ,array('label' => false,'div' => false,'class'=>"form-control" , 'placeholder' => 'usuario'))?></div>
						
					</div>
					<div>
						
						<div class="form-group input-group" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span><?php echo $this->Form->input("first_name" ,array('label' => false,'div' => false,'class'=>"form-control" ,'placeholder' => 'nombres'))?></div>
						
					</div>
					<div>
						
						<div class="form-group input-group" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span><?php echo $this->Form->input("last_name" ,array('label' => false,'div' => false,'class'=>"form-control",'placeholder' => 'apellidos' ))?></div>
						
					</div>
					<div>
						
						<div class="form-group input-group" >
						<span class="input-group-addon"><i class="fa fa-user"></i></span><?php echo $this->Form->input("email" ,array('label' => false,'div' => false,'class'=>"form-control" , 'placeholder' => 'correo' ))?></div>
						
					</div>
					<div>
						<div class="umstyle3"></div>
						<div class="umstyle4"><?php echo $this->Form->Submit(__('Guardar') , array('class' => 'btn btn-primary'));?></div>
						<div style="clear:both"></div>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
<script>
document.getElementById("UserUserGroupId").focus();
</script>