<div class="epedidos index">
	<h2><?php echo __('Epedidos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('subestado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($epedidos as $epedido): ?>
	<tr>
		<td><?php echo h($epedido['Epedido']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($epedido['User']['username'], array('controller' => 'users', 'action' => 'view', $epedido['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($epedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $epedido['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($epedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $epedido['Subestado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($epedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $epedido['Producto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($epedido['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $epedido['Tipo']['id'])); ?>
		</td>
		<td><?php echo h($epedido['Epedido']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($epedido['Epedido']['fecha']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $epedido['Epedido']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $epedido['Epedido']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $epedido['Epedido']['id']), array(), __('Are you sure you want to delete # %s?', $epedido['Epedido']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Epedido'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subestados'), array('controller' => 'subestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subestado'), array('controller' => 'subestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
	</ul>
</div>
