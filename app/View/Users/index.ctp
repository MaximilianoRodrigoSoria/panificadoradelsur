<div class="container">
<?php echo $this->element('navtabs-usuario-consulta'); ?>


<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Usuarios - consulta </h3>
  </div>
  <div class="panel-body">
   
 
<div class="table">
		

	
	<table class="table">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('role_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Role']['tipo'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $user['Estado']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		
		<td><?php echo h($user['User']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['dni']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
 </div>
</div>
</div>
	<p>
		<br>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, total {:count}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn btn-sm btn-primary'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-sm btn-primary'));
	?>
	</div>
</div>

</div>
