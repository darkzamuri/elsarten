<div class="articulosImagenes form">
<?php echo $this->Form->create('ArticulosImagene'); ?>
	<fieldset>
		<legend><?php echo __('Add Articulos Imagene'); ?></legend>
	<?php
		echo $this->Form->input('articulo_id');
		echo $this->Form->input('url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Articulos Imagenes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
