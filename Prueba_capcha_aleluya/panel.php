<?php
session_start();
?>
<html>
<head>
<title>aleluya</title>
</head>
<body>
<?php
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero'])
	
	echo header('location:hola.php');
else
	echo "Incorrecto";


?>

<a href=" index.php">Regresar</a>





<!--aleluya JEHOVÁ DE LOS EJERCITOS--></body></html>