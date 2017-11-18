<div class="epedidos view">
<h2><?php echo __('Epedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($epedido['Epedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($epedido['User']['username'], array('controller' => 'users', 'action' => 'view', $epedido['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($epedido['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $epedido['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subestado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($epedido['Subestado']['nombre'], array('controller' => 'subestados', 'action' => 'view', $epedido['Subestado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($epedido['Producto']['nombre'], array('controller' => 'productos', 'action' => 'view', $epedido['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($epedido['Tipo']['nombre'], array('controller' => 'tipos', 'action' => 'view', $epedido['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($epedido['Epedido']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($epedido['Epedido']['fecha']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Epedido'), array('action' => 'edit', $epedido['Epedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Epedido'), array('action' => 'delete', $epedido['Epedido']['id']), array(), __('Are you sure you want to delete # %s?', $epedido['Epedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Epedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Epedido'), array('action' => 'add')); ?> </li>
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
