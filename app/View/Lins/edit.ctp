<div class="lins form">
<?php echo $this->Form->create('Lin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Lin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('co_lin');
		echo $this->Form->input('lin_des');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Lin.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Lin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Lins'), array('action' => 'index')); ?></li>
	</ul>
</div>
