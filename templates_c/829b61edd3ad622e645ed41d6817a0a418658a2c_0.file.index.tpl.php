<?php
/* Smarty version 3.1.30, created on 2016-10-22 02:40:08
  from "C:\xampp\htdocs\ntd\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580ab5689415a1_85260042',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '829b61edd3ad622e645ed41d6817a0a418658a2c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ntd\\templates\\index.tpl',
      1 => 1477096804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580ab5689415a1_85260042 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> No Te Detengas </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

	<header>
			<h1>No te detengas!</h1>

  </header>
</head>

<body>

	<nav class="navbar navbar-default ">
  		<div class="container-fluid letraprincipal " >
		    <!-- Brand and toggle get grouped for better mobile display -->
				    <div class="navbar-header ">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand " href="">NTD!</a>
				    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						      <ul class="nav navbar-nav" "navbar-rigth">
							        <li><a   href="#" >Coleccion</a></li>
							        <li><a  href="#"> Productos </a></li>
							        <li><a   href="#">Contacto</a></li>
											<li><a  id="adminCategoriaBtn" href="#">Admin Categoria</a></li>
						      </ul>
			    	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="conteiner">
	<section class="info row">
		<article class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
			<div id="cargarContenido">
			</div>
		</article>
	</section>
</div>

	<footer>
			<div class="conteiner letraprincipal">
			<h5> &copy Peliculas Tandil Argentina. Todos los derechos reservados. </h5>
			<h5> - Contacto : peliculastandil@gmail.com - </h5>
	</footer>



 <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"><?php echo '</script'; ?>
>
 <?php echo '<script'; ?>
 src="js/ntd.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
