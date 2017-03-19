<div class="zonas view">
<h2><?php echo __('Zona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zona['Zona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Zon'); ?></dt>
		<dd>
			<?php echo h($zona['Zona']['co_zon']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zon Des'); ?></dt>
		<dd>
			<?php echo h($zona['Zona']['zon_des']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Us In'); ?></dt>
		<dd>
			<?php echo h($zona['Zona']['co_us_in']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Zona'), array('action' => 'edit', $zona['Zona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zona'), array('action' => 'delete', $zona['Zona']['id']), array(), __('Are you sure you want to delete # %s?', $zona['Zona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Zonas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zona'), array('action' => 'add')); ?> </li>
	</ul>
</div>
