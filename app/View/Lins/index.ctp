<div class="Facturas index table-responsive">
	<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categorias <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Lista de Categorias
                            </li>
                        </ol>
                    </div>
                </div>

<div class="lins index">
	
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('co_lin'); ?></th>
			<th><?php echo $this->Paginator->sort('lin_des'); ?></th>
			<th>Imagen</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($lins as $lin): ?>
	<tr>
		<td><?php echo h($lin['Lin']['id']); ?>&nbsp;</td>
		<td><?php echo h($lin['Lin']['co_lin']); ?>&nbsp;</td>
		<td><?php echo h($lin['Lin']['lin_des']); ?>&nbsp;</td>
		<td><?php  $file = $this->webroot.'files/productos/'.$lin['Lin']['co_lin'].'.png';?>
			<img width="120" height="120" src="<?php echo $file;?>"/>
		</td>
		<td class="actions">
			<a href="#myModal" id="art" role="button" class="btn modal1 btn-large btn-primary" data-toggle="modal" data-id="<?php echo $lin['Lin']['co_lin']; ?>">Subir foto</a>
		</td>
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

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Subir Imagen</h4>
            </div>
            <div class="modal-body">
                <form id="formfoto">
                	<input type="file" id="image" name="file" >
                	<input type="hidden" id="articulo_id" name="articulo_id"> 
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>