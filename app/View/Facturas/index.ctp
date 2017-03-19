<div class="Facturas index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Facturas <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Lista de Facturas
                            </li>
                        </ol>
                    </div>
                </div>
	<table id="table2"cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<thead>
	<tr>
			<th>N° Factura</th>
			<th>Comentario</th>
			<th>Fecha Emision</th>
			<th>Fecha Vencimiento</th>
			<th>Vendedor</th>
			<th>Cliente</th>
			<th>Status</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($Facturas as $Factura): ?>
	<tr>
		<td><?php echo h($Factura['Factura']['fact_num']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['comentario']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['fec_emis']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['fec_venc']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['co_ven']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['co_cli']); ?>&nbsp;</td>
		<td><?php echo h($Factura['Factura']['status']); ?>&nbsp;</td>
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

