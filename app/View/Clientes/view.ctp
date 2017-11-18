<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cliente['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cliente['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('controller' => 'cpedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('controller' => 'cpedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cpedidos'); ?></h3>
	<?php if (!empty($cliente['Cpedido'])): ?>
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
	<?php foreach ($cliente['Cpedido'] as $cpedido): ?>
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
