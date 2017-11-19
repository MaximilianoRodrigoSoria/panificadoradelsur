<div class="container">


<form action="/hms/accommodations" method="GET"> 
  <div class="row">
	<div class="col-md-8">
		<?php echo $this->element('navtabs-usuario-consulta'); ?>

	</div>	

    <div class="col-xs-6 col-md-4">
      <div class="input-group">
   <input type="text" class="form-control" placeholder="Buscar" id="txtSearch"/>
   <div class="input-group-btn">
        <button class="btn btn-primary" type="submit">
        <span class="glyphicon glyphicon-search"></span>
        </button>
   </div>
   </div>
    </div>
  </div>
</form>

<div class="panel panel-primary">
  <div class="panel-heading">

	


    <h3 class="panel-title">Usuarios - Consulta </h3>
  </div>
  <div class="panel-body">
   
 
<div class="table-responsive">
		

	
	<table class="table ">
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
			<th class="actions"><?php echo __('Acciones'); ?></th>
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



		<td>
			<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
     <span class="glyphicon glyphicon-edit"></span>
  </button>
  <ul class="dropdown-menu">
    <li><?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?></li>
    <li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?></li>
    <li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), array(), __('Estas seguro que queres borrar el usuario # %s?', $user['User']['id'])); ?></li>
    
  </ul>
</div>

	</tr>
<?php endforeach; ?>

	</tbody>

	</table>
 </div>



 <p>
		<br>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, total {:count}')
	));
	?>	</p>
</div>
</div>
	
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled btn  btn-primary'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled btn btn-primary'));
	?>
	</div>
</div>

</div>
