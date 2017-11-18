<div class="formulas form">
<?php echo $this->Form->create('Formula'); ?>
	<fieldset>
		<legend><?php echo __('Edit Formula'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Insumo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Formula.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Formula.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('controller' => 'insumos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Insumo'), array('controller' => 'insumos', 'action' => 'add')); ?> </li>
	</ul>
</div>
