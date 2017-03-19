<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('co_cli');
		echo $this->Form->input('tipo');
		echo $this->Form->input('cli_des');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefonos');
		echo $this->Form->input('co_zon');
		echo $this->Form->input('co_seg');
		echo $this->Form->input('co_ven');
		echo $this->Form->input('rif');
		echo $this->Form->input('email');
		echo $this->Form->input('estado');
		echo $this->Form->input('co_pais');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('website');
		echo $this->Form->input('lat');
		echo $this->Form->input('lon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Vendedores'), array('controller' => 'vendedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendedore'), array('controller' => 'vendedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zonas'), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zona'), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
	</ul>
</div>
