<?php 
	include 'Db.php';
	$obj = new Consultas();
	switch ($_POST['funcion']) {
		case 'query':
			$obj->query();
			break;
		case 'insert':
			$obj->insert($_POST[""]);
			break;
		case 'update':
			$obj->update($_POST[""]);
			break;
		case 'delete':
			$obj->delete($_POST[""]);
			break;
		
		default:
			# code...
			break;
	}

class Consultas{


	function query(){
		
		echo json_encode($json);
		


		
	}

	function insert(){


	}

	function update(){


	}

	function delete(){

	}


}

	

 ?>