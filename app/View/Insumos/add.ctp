<div class="insumos form">
<?php echo $this->Form->create('Insumo'); ?>
	<fieldset>
		<legend><?php echo __('Add Insumo'); ?></legend>
	<?php
		echo $this->Form->input('estado_id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('stock');
		//echo $this->Form->input('Formula');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Insumos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Formulas'), array('controller' => 'formulas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Formula'), array('controller' => 'formulas', 'action' => 'add')); ?> </li>
	</ul>
</div>
