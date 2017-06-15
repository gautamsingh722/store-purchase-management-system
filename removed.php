<?php 

	require 'decide_index.php';
	
	if(loggedin_admin()){
		$id = "";
		if(isset($_POST['id'])){
			$id = test_input($_POST['id']);
			if(empty($id)){
				echo "<script>alert('Fill in the product id.');</script>";
				header('refresh: 0; url = admin.php');
			}
			else{
				$dept = $_SESSION['dept'];
				$query = "SELECT `book_id` FROM `book` WHERE `book_dept`='$dept'";
				$query_run = mysql_query($query);
				$flag=0;
				while($row = mysql_fetch_assoc($query_run)){
					if($row['book_id']==$id){
						$flag=1; break;
					}
				}
				if($flag==0){
					echo "<script>alert('Invalid product id.');</script>";
					header('refresh: 0; url = admin.php');
				}
				else{
					$query = "DELETE FROM `book` WHERE `book_id` = '$id'";
					if($query_run = mysql_query($query)){
						echo "<script>alert('Product removed successfully.');</script>";
						header('refresh: 0; url = admin.php');
					}
					else{
						echo "<script>alert('Product cannot be removed now, please try again later.');</script>";
						header('refresh: 0; url = admin.php');
					}
				}
			}
		}
	}
	else{
		echo "<script>alert('You must be logged in as admin.');</script>";
		header('refresh: 0; url = index.php');
	}
?>