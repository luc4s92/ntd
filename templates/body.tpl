<body>

	<nav class="navbar navbar-inverse ">
  		<div class="container-fluid letraprincipal " >
		    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header ">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand " href="">No Te Detengas!</a>
				    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav navbar-right">
							        <li><a   id="Productos" href="#" >Productos</a></li>
											<li><a  id="mostrarContactoBtn" href="#">Contacto</a></li>
											<li><a  id="mostrarlogin" href="#">Login</a></li>
											<li class="dropdown">
													<a class="dropdown-toggle active" data-toggle="dropdown" href="#"> Administracion <span class="caret"></span></a>
													<ul class="dropdown-menu">
													<li><a  id="adminProductoBtn" href="#"> Admin Productos </a></li>
													<li role="presentation" class="divider"></li>
													<li><a  id="adminCategoriaBtn" href="#"> Admin Categoria </a></li>
													<li><a  id="AdminUsuarios" href="#"> Admin Usuarios  </a></li>
													</ul>
											</li>
								 </ul>
			    	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="conteiner">
	<section class="info row">
		<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<div id="cargarContenido" class="col-md-offset-3">
						{include file="home.tpl" } <!-- moverlo a un tpl -->
			</div>
		</article>
	</section>
</div>
