<div class="header">
<div class="container">
<?php echo $this->Html->css(array('mio')); ?>

<div id="header">
       
			<nav class="navbar navbar-default navbar-fixed-top" class="img-responsive">
 			<div class="container-fluid">
    	<div class="navbar-header">
          <a class="navbar-brand" href="#">Panificados del Sur</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
      </div>

     	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      			<ul class="nav navbar-nav">
        			<li><?php   echo $this->Html->link('Home',array('controller'=>'','action'=>'index'));?></li>
        			<li><?php   echo $this->Html->link('Usuarios',array('controller'=>'Usuarios','action'=>'index'));?></li>
                <li><?php   echo $this->Html->link('Clientes',array('controller'=>'Clientes','action'=>'index'));?></li>
        				<li class="dropdown">
          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pedidos<span class="caret"></span></a>
          			<ul class="dropdown-menu">
            			<li><a href="#">Pedidos de Cliente</a></li>
            			<li><a href="#">Pedidos de Producci&oacute;n</a></li>
          			</ul></li>
        			<li><?php   echo $this->Html->link('Productos',array('controller'=>'Productos','action'=>'index'));?></li>
        			<li><?php   echo $this->Html->link('Insumos',array('controller'=>'Insumos','action'=>'index'));?></li>
              <li><?php   echo $this->Html->link('Formulas',array('controller'=>'Formulas','action'=>'index'));?></li>
      				</ul>
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="#" type="button" data-toggle="modal" data-target="#salir">Salir</a></li>
        		</ul>
    		</div>
			</div>
		</nav>
	</div>

</div>
</div>