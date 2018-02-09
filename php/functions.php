<?php 
	include 'db_functions.php';

	switch ($_POST['function_name']) {
		case 'query':
			query();
			break;
		case 'insert':
			insert($_POST[""]);
			break;
		case 'update':
			update($_POST[""]);
			break;
		case 'delete':
			delete($_POST[""]);
			break;
		
		default:
			# code...
			break;
	}



	function query(){
		$sql = "SELECT id,name,path FROM elevator";
		$result = db_query($sql);
		$json = array();
		while($res = mysqli_fetch_array($result,MYSQLI_ASSOC)){

			array_push($json, $res);
		};
		echo json_encode($json);
		


		
	}

	function insert(){


	}

	function update(){


	}

	function delete(){

	}

 ?>