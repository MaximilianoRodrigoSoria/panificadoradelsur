<div class="insumos view">
<h2><?php echo __('Insumo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($insumo['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $insumo['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($insumo['Insumo']['stock']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Insumo'), array('action' => 'edit', $insumo['Insumo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Insumo'), array('action' => 'delete', $insumo['Insumo']['id']), array(), __('Are you sure you want to delete # %s?', $insumo['Insumo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Formulas'); ?></h3>
	<?php if (!empty($insumo['Formula'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estado Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($insumo['Formula'] as $formula): ?>
		<tr>
			<td><?php echo $formula['id']; ?></td>
			<td><?php echo $formula['estado_id']; ?></td>
			<td><?php echo $formula['nombre']; ?></td>
			<td><?php echo $formula['descripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'formulas', 'action' => 'view', $formula['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'formulas', 'action' => 'edit', $formula['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'formulas', 'action' => 'delete', $formula['id']), array(), __('Are you sure you want to delete # %s?', $formula['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
