<div class="container">
	<form action="/hms/accommodations" method="GET"> 
		<div class="row">
			<div class="col-md-8 col-xs-6">
				<?php echo $this->element('navtabs-cpedido-consulta'); ?>
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
			<h3 class="panel-title">Pedidos de Cliente</h3>
		</div>
		<div class="panel-body">
		<div class="table-responsive">
		<table class="table table-hover">
				<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subestado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($cpedidos as $cpedido): ?>
			<tr>
				<td><?php echo h($cpedido['Cpedido']['id']); ?>&nbsp;</td>
				<td>
					<?php echo $this->Html->link($cpedido['Cliente']['dni'], array('controller' => 'clientes', 'action' => 'view', $cpedido['Cliente']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cpedido['Estado']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $cpedido['Subestado']['id'])); ?>
				</td>
				<td>
					<?php echo $this->Html->link($cpedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $cpedido['Producto']['id'])); ?>
				</td>
				<td><?php echo h($cpedido['Cpedido']['cantidad']); ?>&nbsp;</td>
				<td><?php echo h($cpedido['Cpedido']['fecha']); ?>&nbsp;</td>
				<td class="actions">
					<div class="btn-group">
					  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					     <span class="glyphicon glyphicon-edit"></span>
					  </button>
					  <ul class="dropdown-menu dropdown-menu-right">
					    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $cpedido['Cpedido']['id'])); ?></li>
					    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $cpedido['Cpedido']['id'])); ?></li>
					    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $cpedido['Cpedido']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $cpedido['Cpedido']['id'])); ?></li>
					    
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