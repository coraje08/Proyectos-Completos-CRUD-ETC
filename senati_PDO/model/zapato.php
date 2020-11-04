<?php // paso 4

	class zapato{
		
		public $cnx;

		public function __construct(){
			try{
				$this->cnx = conexion::conectar();
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		//paso 5.1 mostrar los datos en la pantalla
		public function listar(){
			try{
				$query = "SELECT z.id_zapato, z.precio, z.color, e.estilo, t.talla, g.gernero, z.cantidad FROM dbzapato z INNER JOIN bdestilo e ON z.id_estilo = e.id_estilo INNER JOIN  dbtalla t ON z.id_talla = t.id_talla INNER JOIN dbgenero g On z.id_genero = g.id_genero";

				$stm = $this->cnx->prepare($query);
				$stm->execute();
				return $stm->fetchAll(PDO::FETCH_OBJ);
				//return $stm;
			}catch(Exception $e){
				die($e->getMessage());
			}
		}

		//fin del paso 5.1

	}
	/*
	
	<?php // paso 5.2 
					foreach ($this->model->listar() as $k) :?>
					<tr>
						<td><?php echo $k->id_zapato; ?></td>
						<td><?php echo $k->precio; ?></td>
						<td><?php echo $k->color; ?></td>
						<td><?php echo $k->estilo; ?></td>
						<td><?php echo $k->talla; ?></td>
						<td><?php echo $k->gernero; ?></td>
						<td><?php echo $k->cantidad; ?></td>
					</tr>
				<?php endforeach; ?>
				*/
 ?>