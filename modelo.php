<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<link type="text/css" href="styles/simple.css" rel="stylesheet" />
		<script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.js"></script>
		<script type="text/javascript" src="lib/jquery.pikachoose.js"></script>
		<script language="javascript">
			$(document).ready(function (){
					$("#pikame").PikaChoose({transition:[1]});
				});
		</script>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SOMEC - Sociedade de Meio Ambiente, Educa&ccedil;&atilde;o e Cidadania</title>
		
</head>
<body>
<!-- not really needed, i'm using it to center the gallery. -->
<div class="pikachoose">
	<ul id="pikame" >
		<?php require_once('player.php'); ?>

		
	</ul>
</div>

</body>
</html>
