<?php
	session_start();
	include_once('../include/database.php');

	if(isset($_POST['edit'])){
		$database = new Connection();
		$db = $database->open();
		try{
			//make use of prepared statement to prevent sql injection
			$sql = $db->prepare("UPDATE elements SET name = :name, group_id = :group_id, atomic_no = :atomic_no, atomic_weight = :atomic_weight, description = :description WHERE id = :elementsid ");

			//bind
			$sql->bindParam(':name', $_POST['name']);
            $sql->bindParam(':group_id', $_POST['group_id']);
			$sql->bindParam(':atomic_no', $_POST['atomic_no']);
            $sql->bindParam(':atomic_weight', $_POST['atomic_weight']);
            $sql->bindParam(':description', $_POST['description']);
			$sql->bindParam(':elementsid', $_GET['id'], PDO::PARAM_INT);


			//if-else statement in executing our prepared statement
			$_SESSION['message'] = ( $sql->execute()) ? 'Element edited successfully' : 'Something went wrong. Cannot edit element.';	
	    
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//close connection
		$database->close();
	}

	else{
		$_SESSION['message'] = 'Fill up edit form first';
	}

	header('location: ../index.php');
	
?>