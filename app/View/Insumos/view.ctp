<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
	   		<h3 class="panel-title"><?php echo __('Detalle de Insumo #'),h($insumo['Insumo']['id']); ?></h3>
		</div>	
		<div class="panel-body">
			<ul class="list-group">
				<li class="list-group-item">
					<h4><?php echo __('Estado'); ?></h4>
					<p><?php echo $this->Html->link($insumo['Estado']['nombre'], array('controller' => 'estados', 'action' => 'view', $insumo['Estado']['id'])); ?>
						&nbsp;</p>
				</li>
				<li class="list-group-item">
					<h4><?php echo __('Nombre'); ?></h4>
					<p><?php echo h($insumo['Insumo']['nombre']); ?>
						&nbsp;</p>
				</li>
				<li class="list-group-item"><h4><?php echo __('Stock'); ?></h4>
					<p><?php echo h($insumo['Insumo']['stock']); ?>
						&nbsp;</p>
				</li>
			</ul>
		</div>
	<div class="panel-footer">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3 class="panel-title"><?php echo __('Formulas Relacionadas'); ?></h3>
			</div>
		<div class="panel-body">
			<?php if (!empty($insumo['Formula'])): ?>
			<div class="table-responsive">
				<table class="table table-bordered">
				<tr>
					<th class="col-md-1 col-xs-1"><?php echo __('Id'); ?></th>
					<th class="col-md-2 col-xs-2"><?php echo __('Nombre'); ?></th>
					<th class="col-md-9 col-xs-9"><?php echo __('Descripcion'); ?></th>
				</tr>
				<?php foreach ($insumo['Formula'] as $formula): ?>
					<tr>
						<td class="col-md-1 col-xs-1"><?php echo $formula['id']; ?></td>
						<td class="col-md-2 col-xs-2"><?php echo $formula['nombre']; ?></td>
						<td class="col-md-9 col-xs-9"><?php echo $formula['descripcion']; ?></td>
					</tr>
				<?php endforeach; ?>
				</table>
			<?php endif; ?>
			</div>
		</div>
		</div>
	</div>
	</div>	
	<div class="center-block"><?php echo $this->Html->link(__('Atras'), array('action' => 'index'), array('type'=>'button','class'=>'btn btn-primary')); ?></div>
</div>
