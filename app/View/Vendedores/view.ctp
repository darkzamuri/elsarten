<div class="vendedores view">
<h2><?php echo __('Vendedore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Ven'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['co_ven']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ven Des'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['ven_des']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direc1'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['direc1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonos'); ?></dt>
		<dd>
			<?php echo h($vendedore['Vendedore']['telefonos']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vendedore'), array('action' => 'edit', $vendedore['Vendedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vendedore'), array('action' => 'delete', $vendedore['Vendedore']['id']), array(), __('Are you sure you want to delete # %s?', $vendedore['Vendedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendedore'), array('action' => 'add')); ?> </li>
	</ul>
</div>
