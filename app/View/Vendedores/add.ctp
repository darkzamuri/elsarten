<div class="vendedores form">
<?php echo $this->Form->create('Vendedore'); ?>
	<fieldset>
		<legend><?php echo __('Add Vendedore'); ?></legend>
	<?php
		echo $this->Form->input('co_ven');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('ven_des');
		echo $this->Form->input('cedula');
		echo $this->Form->input('direc1');
		echo $this->Form->input('telefonos');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vendedores'), array('action' => 'index')); ?></li>
	</ul>
</div>
