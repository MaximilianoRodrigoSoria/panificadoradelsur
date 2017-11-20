<div class="cpedidos view">
<h2><?php echo __('Cpedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cpedido['Cpedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cpedido['Cliente']['dni'], array('controller' => 'clientes', 'action' => 'view', $cpedido['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cpedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $cpedido['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subestado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cpedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $cpedido['Subestado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cpedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $cpedido['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($cpedido['Cpedido']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($cpedido['Cpedido']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cpedido'), array('action' => 'edit', $cpedido['Cpedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cpedido'), array('action' => 'delete', $cpedido['Cpedido']['id']), array(), __('Are you sure you want to delete # %s?', $cpedido['Cpedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cpedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cpedido'), array('action' => 'add')); ?> </li>
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
