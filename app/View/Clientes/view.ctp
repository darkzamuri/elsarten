<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Cli'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['co_cli']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cli Des'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['cli_des']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefonos'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefonos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zona'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Zona']['id'], array('controller' => 'zonas', 'action' => 'view', $cliente['Zona']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Seg'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['co_seg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vendedore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Vendedore']['id'], array('controller' => 'vendedores', 'action' => 'view', $cliente['Vendedore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rif'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['rif']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Pais'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['co_pais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Website'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['website']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lat'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['lat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lon'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['lon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vendedores'), array('controller' => 'vendedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vendedore'), array('controller' => 'vendedores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zonas'), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zona'), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
	</ul>
</div>
