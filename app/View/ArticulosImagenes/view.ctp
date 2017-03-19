<div class="articulosImagenes view">
<h2><?php echo __('Articulos Imagene'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articulosImagene['ArticulosImagene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Articulo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articulosImagene['Articulo']['id'], array('controller' => 'articulos', 'action' => 'view', $articulosImagene['Articulo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($articulosImagene['ArticulosImagene']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($articulosImagene['ArticulosImagene']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($articulosImagene['ArticulosImagene']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articulos Imagene'), array('action' => 'edit', $articulosImagene['ArticulosImagene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articulos Imagene'), array('action' => 'delete', $articulosImagene['ArticulosImagene']['id']), array(), __('Are you sure you want to delete # %s?', $articulosImagene['ArticulosImagene']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos Imagenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulos Imagene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('controller' => 'articulos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('controller' => 'articulos', 'action' => 'add')); ?> </li>
	</ul>
</div>
