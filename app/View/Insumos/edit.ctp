<div class="insumos form">
<?php echo $this->Form->create('Insumo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Insumo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('stock');
		echo $this->Form->input('Formula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Insumo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Insumo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Insumos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
