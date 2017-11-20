<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $producto['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Formula'); ?></dt>
		<dd>
			<?php echo $this->Html->link($producto['Formula']['estado_id'], array('controller' => 'formulas', 'action' => 'view', $producto['Formula']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalle'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['detalle']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('controller' => 'cpedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('controller' => 'epedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cpedidos'); ?></h3>
	<?php if (!empty($producto['Cpedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Subestado Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Cpedido'] as $cpedido): ?>
		<tr>
			<td><?php echo $cpedido['id']; ?></td>
			<td><?php echo $cpedido['cliente_id']; ?></td>
			<td><?php echo $cpedido['estado_id']; ?></td>
			<td><?php echo $cpedido['subestado_id']; ?></td>
			<td><?php echo $cpedido['producto_id']; ?></td>
			<td><?php echo $cpedido['cantidad']; ?></td>
			<td><?php echo $cpedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cpedidos', 'action' => 'view', $cpedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cpedidos', 'action' => 'edit', $cpedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cpedidos', 'action' => 'delete', $cpedido['id']), array(), __('Are you sure you want to delete # %s?', $cpedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Epedidos'); ?></h3>
	<?php if (!empty($producto['Epedido'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Subestado Id'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Fecha'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($producto['Epedido'] as $epedido): ?>
		<tr>
			<td><?php echo $epedido['id']; ?></td>
			<td><?php echo $epedido['user_id']; ?></td>
			<td><?php echo $epedido['estado_id']; ?></td>
			<td><?php echo $epedido['subestado_id']; ?></td>
			<td><?php echo $epedido['producto_id']; ?></td>
			<td><?php echo $epedido['tipo_id']; ?></td>
			<td><?php echo $epedido['cantidad']; ?></td>
			<td><?php echo $epedido['fecha']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'epedidos', 'action' => 'view', $epedido['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'epedidos', 'action' => 'edit', $epedido['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'epedidos', 'action' => 'delete', $epedido['id']), array(), __('Are you sure you want to delete # %s?', $epedido['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Epedido'), array('controller' => 'epedidos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
