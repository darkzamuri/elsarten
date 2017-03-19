<div class="articulos view">
<h2><?php echo __('Articulo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Art'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['co_art']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Art Des'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['art_des']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Reg'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['fecha_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manj Ser'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['manj_ser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articulo['lin']['id'], array('controller' => 'lins', 'action' => 'view', $articulo['lin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($articulo['categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $articulo['categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Subl'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['co_subl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Color'); ?></dt>
		<dd>
			<?php echo h($articulo['Articulo']['co_color']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Articulo'), array('action' => 'edit', $articulo['Articulo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Articulo'), array('action' => 'delete', $articulo['Articulo']['id']), array(), __('Are you sure you want to delete # %s?', $articulo['Articulo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articulos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Articulo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Lins'), array('controller' => 'lins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lin'), array('controller' => 'lins', 'action' => 'add')); ?> </li>
	</ul>
</div>
