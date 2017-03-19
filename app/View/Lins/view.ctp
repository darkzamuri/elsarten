<div class="lins view">
<h2><?php echo __('Lin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($lin['Lin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Lin'); ?></dt>
		<dd>
			<?php echo h($lin['Lin']['co_lin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lin Des'); ?></dt>
		<dd>
			<?php echo h($lin['Lin']['lin_des']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Lin'), array('action' => 'edit', $lin['Lin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Lin'), array('action' => 'delete', $lin['Lin']['id']), array(), __('Are you sure you want to delete # %s?', $lin['Lin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Lins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Lin'), array('action' => 'add')); ?> </li>
	</ul>
</div>
