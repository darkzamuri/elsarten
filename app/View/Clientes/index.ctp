<div class="clientes index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Clientes <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Lista de Clientes
                            </li>
                        </ol>
                    </div>
                </div>
	<table id="table"cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<thead>
	<tr>
			<th>Codigo Cliente</th>
			<th>Tipo</th>
			<th>Cliente</th>
			<th>Direccion</th>
			<th>Telefonos</th>
			<th>Vendedor</th>
			<th>Rif</th>
			<th>Email</th>
			<th>Sitio Web</th>

	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['co_cli']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['tipo']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['cli_des']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['telefonos']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cliente['Vendedore']['ven_des'], array('controller' => 'vendedores', 'action' => 'view', $cliente['Vendedore']['id'])); ?>
		</td>
		<td><?php echo h($cliente['Cliente']['rif']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['website']); ?>&nbsp;</td>
	
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
</div>

