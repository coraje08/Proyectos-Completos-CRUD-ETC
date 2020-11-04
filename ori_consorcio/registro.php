<?php
    session_start();
    include ('serv.php');
    if(isset($_SESSION['usuario'])){
    header('Content-Type: text/html; charset=UTF-8');
?>
<html>
	<head>
		<title>BIENVENIDOS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
           <div class="row">
                <div class="col-md-2">
                    <center>
                        <img src="img/consorcio.png" class="img img-responsive"><br><br>
                        <a href="#" class="btn btn-info" role="button">Foros</a><br> <br> 
                      
                        <a href="logout.php" class="btn btn-info" role="button">Cerrar sesión</a> <br>

                    </center>
                      
                </div>
                <div class="col-md-9">
                    <h1>CONSORCIO</h1>
                   <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="iniciar.php">CONSORCIO</a>
                            </div>
                                <ul class="nav navbar-nav">
                                <li><a href="panel.php">Inicio</a></li>
                                <li class="active"><a href="registro.php">Registro</a></li>
                                <li><a href="lista.php">Lista</a></li>
                                <li><a href="consulta.php">Consulta</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="row">
                        <div class="col-md-3">
                            <h3>Cliente</h3>
                            <img src="img/cliente.jpg" class="img img-responsive">
                            <p align="center"><a href="cliente.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Personal</h3>
                             <img src="img/personal.jpg" class="img img-responsive">
                             <p align="center"><a href="personal.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Producto</h3>
                             <img src="img/producto.png" class="img img-responsive">
                             <p align="center"><a href="producto.php">Ingresar</a></p>
                        </div>
                        <div class="col-md-3">
                             <h3>Boleta</h3>
                             <img src="img/boleta.png" class="img img-responsive">
                             <p align="center"><a href="#">Ingresar</a></p>
                        </div>
                    </div>                    
                </div>
                <div class="col-md-1">
                    <header>
                        <h2><small>Bienvenido </small><b><?php echo $_SESSION['usuario']; ?></b></h2>
					</header>                   
                </div>
            </div>
        </div>
        <div class="container">
           <div class="row">
               <div class="col-md-12">
                   				
				</div>			
            </div>
        </div>			
	</body>
</html>
<?php
}
else{
echo '<script>window.location="iniciar.php"; </script>';
}
$profile=$_SESSION['usuario'];
?>