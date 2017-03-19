<div class="Presupuestos index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Presupuestos <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Lista de Presupuestos
                            </li>
                        </ol>
                    </div>
                </div>
	<table id="table2"cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<thead>
	<tr>
			<th>N° Presupuesto</th>
			<th>Email</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Rif/C.I</th>
			<th>Telefono</th>
			<th>Creado</th>
			<th>Acciones</th>
				
	</tr>
	</thead>
	<tbody>
	<?php foreach ($Presupuestos as $Presupuesto): ?>
	<tr>
		<td><?php echo h($Presupuesto['Presupuesto']['id']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['email']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['firstname']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['lastname']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['identification']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($Presupuesto['Presupuesto']['created']); ?>&nbsp;</td>
		<td><a href="<?php echo $this->webroot; ?>Presupuestos/view/<?php echo $Presupuesto['Presupuesto']['id']; ?>">Ver</a></td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

<p>
<?php
echo $this->Paginator->counter(array(
  'format' => __('Pagina {:page} de {:pages}, Mostrando {:current} de {:count} en total, empezando por el registro {:start}, terminando en {:end}')
));
?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>	
</div>

