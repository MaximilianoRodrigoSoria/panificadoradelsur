<div class="container">
	<form action="/hms/accommodations" method="GET"> 
		<div class="row">
			<div class="col-md-8 col-xs-6">
				<?php echo $this->element('navtabs-producto-consulta'); ?>
			</div>	
		<div class="col-xs-6 col-md-4">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Buscar" id="txtSearch"/>
				<div class="input-group-btn">
					<button class="btn btn-primary" type="submit">
					<span class="glyphicon glyphicon-search"></span>
					</button>
				</div>
			</div>
		</div>
		</div>
	</form>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Productos</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
		<thead>
		<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('formula_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('detalle'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($productos as $producto): ?>
		<tr>
			<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>
			</td>
			<td>
				<?php echo $this->Html->link($producto['Formula']['estado_id'], array('controller' => 'formulas', 'action' => 'view', $producto['Formula']['id'])); ?>
			</td>
			<td><?php echo h($producto['Producto']['nombre']); ?>&nbsp;</td>
			<td><?php echo h($producto['Producto']['detalle']); ?>&nbsp;</td>
			<td class="actions">
				<div class="btn-group">
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				     <span class="glyphicon glyphicon-edit"></span>
				  </button>
				  <ul class="dropdown-menu dropdown-menu-right">
				    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $producto['Producto']['id'])); ?></li>
				    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $producto['Producto']['id'])); ?></li>
				    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $producto['Producto']['id'])); ?></li>
				    
				  </ul>
			</td>
		</tr>
		<?php endforeach; ?>
		</tbody>
		</table>
		</div>
		<p class="text-center"><br><?php echo $this->Paginator->counter(array('format' => __('Pagina {:page} de {:pages}, total {:count}')));?>	</p>
		</div>
	</div>
	<div class="paging center-block">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-primary'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));
		?>
	</div>
</div>