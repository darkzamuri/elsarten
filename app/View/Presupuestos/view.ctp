<div class="Presupuestos index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Presupuesto N° <?php echo $presupuesto['Presupuesto']['id'];?><small></small>
                        </h1>

                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> <?php echo $presupuesto['Presupuesto']['firstname'];?> , <?php echo $presupuesto['Presupuesto']['email'];?> , <?php echo $presupuesto['Presupuesto']['identification'];?> , <?php echo $presupuesto['Presupuesto']['telefono'];?>
                            </li>
                        </ol>
                    </div>
                </div>
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<thead>
	<tr>
			<th>id</th>
			<th>co art</th>
			<th>art des</th>

			<th>co lin</th>
            <th>Imagen</th>
			
	</tr>
	</thead>
	<tbody>
	<?php foreach ($presupuesto['ArticulosPresupuesto'] as $articulo): ?>
	<tr>
		<td><?php echo h($articulo['Articulo']['id']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['co_art']); ?>&nbsp;</td>
		<td><?php echo h($articulo['Articulo']['art_des']); ?>&nbsp;</td>
	
		<td>
			<?php echo $this->Html->link($articulo['Articulo']['co_lin'], array('controller' => 'lins', 'action' => 'view', $articulo['Articulo']['co_lin'])); ?>
		</td>
        <td>
            <img width="120" height="120" src="<?php echo $this->webroot;?>files/productos/<?php echo $articulo['Articulo']['co_art']; ?>.png"
        </td>
		
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>	
</div>

