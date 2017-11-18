<div class="epedidos form">
<?php echo $this->Form->create('Epedido'); ?>
	<fieldset>
		<legend><?php echo __('Edit Epedido'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('estado_id');
		echo $this->Form->input('subestado_id');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('fecha');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Epedido.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Epedido.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('action' => 'index')); ?></li>
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
