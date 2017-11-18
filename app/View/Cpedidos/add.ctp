<div class="cpedidos form">
<?php echo $this->Form->create('Cpedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Cpedido'); ?></legend>
	<?php
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('subestado_id');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cpedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados'), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado'), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subestados'), array('controller' => 'subestados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subestado'), array('controller' => 'subestados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
