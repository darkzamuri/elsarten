<div class="articulos form">
<?php echo $this->Form->create('Articulo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Articulo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('co_art');
		echo $this->Form->input('art_des');
		echo $this->Form->input('fecha_reg');
		echo $this->Form->input('manj_ser');
		echo $this->Form->input('co_lin');
		echo $this->Form->input('co_cat');
		echo $this->Form->input('co_subl');
		echo $this->Form->input('co_color');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Articulo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Articulo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lins'), array('controller' => 'lins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lin'), array('controller' => 'lins', 'action' => 'add')); ?> </li>
	</ul>
</div>
