<div class="formulas view">
<h2><?php echo __('Formula'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($formula['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $formula['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($formula['Formula']['descripcion']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Formula'), array('action' => 'edit', $formula['Formula']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Formula'), array('action' => 'delete', $formula['Formula']['id']), array(), __('Are you sure you want to delete # %s?', $formula['Formula']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('controller' => 'insumos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($formula['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Formula Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Detalle'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formula['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['estado_id']; ?></td>
			<td><?php echo $producto['formula_id']; ?></td>
			<td><?php echo $producto['nombre']; ?></td>
			<td><?php echo $producto['detalle']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Insumos'); ?></h3>
	<?php if (!empty($formula['Insumo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($formula['Insumo'] as $insumo): ?>
		<tr>
			<td><?php echo $insumo['id']; ?></td>
			<td><?php echo $insumo['estado_id']; ?></td>
			<td><?php echo $insumo['nombre']; ?></td>
			<td><?php echo $insumo['stock']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'insumos', 'action' => 'view', $insumo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'insumos', 'action' => 'edit', $insumo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'insumos', 'action' => 'delete', $insumo['id']), array(), __('Are you sure you want to delete # %s?', $insumo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
