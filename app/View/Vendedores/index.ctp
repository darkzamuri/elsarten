<div class="vendedores index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vendedores <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Lista de Vendedores
                            </li>
                        </ol>
                    </div>
                </div>
	<table id="table"class="table table-bordered table-hover"cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			
			<th><?php echo $this->Paginator->sort('co_ven'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('ven_des'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('direc1'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonos'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($vendedores as $vendedore): ?>
	<tr>
		
		<td><?php echo h($vendedore['Vendedore']['co_ven']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['ven_des']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['direc1']); ?>&nbsp;</td>
		<td><?php echo h($vendedore['Vendedore']['telefonos']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $vendedore['Vendedore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $vendedore['Vendedore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $vendedore['Vendedore']['id']), array(), __('Are you sure you want to delete # %s?', $vendedore['Vendedore']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Vendedore'), array('action' => 'add')); ?></li>
	</ul>
</div>
