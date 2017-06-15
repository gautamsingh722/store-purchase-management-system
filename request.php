<?php  

	require 'decide_index.php';
	
	if(loggedin()){
		if(isset($_POST['book'])){
			$book = $_POST['book'];
			$roll = $_SESSION['roll'];
			if(empty($book)){
				echo "<script>alert('Fill in the name of product.');</script>";
				header('refresh: 0; url = search.php');
			}
			else{
				$query = "SELECT `total` FROM `book_request` WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				$total = mysql_result($query_run,0,'total');
				if($total==0){
					$one = 1;
					$query1 = "UPDATE `book_request` SET `book1` = '$book' WHERE `roll` = '$roll'";
					$query2 = "UPDATE `book_request` SET `total` = '$one' WHERE `roll` = '$roll'";
					$query_run1 = mysql_query($query1);
					$query_run2 = mysql_query($query2);
					$query = "UPDATE `student` SET `requested` = '$one' WHERE `roll` = '$roll'";
					$query_run = mysql_query($query);
					echo "<script>alert('The product has been requested successfully!');</script>";
					header('refresh: 0; url = search.php');
				}
				else if($total==1){
					$two=2;
					$query1 = "UPDATE `book_request` SET `book2` = '$book' WHERE `roll` = '$roll'";
					$query2 = "UPDATE `book_request` SET `total` = '$two' WHERE `roll` = '$roll'";
					$query_run1 = mysql_query($query1);
					$query_run2 = mysql_query($query2);
					$query = "UPDATE `student` SET `requested` = '$two' WHERE `roll` = '$roll'";
					$query_run = mysql_query($query);
					echo "<script>alert('The product has been requested successfully!');</script>";
					header('refresh: 0; url = search.php');
				}
				else if($total==2){
					$null = 0;
					$query1 = "UPDATE `book_request` SET `total` = '$null' WHERE `roll` = '$roll'";
					$query2 = "UPDATE `student` SET `requested` = '$null' WHERE `roll` = '$roll'";
					$query_run1 = mysql_query($query1);
					$query_run2 = mysql_query($query2);
					echo "<script>alert('You have already requested two products!');</script>";
					header('refresh: 0; url = search.php');
				}
			}
		}
	}
	else{
		echo "<script>alert('You must be logged in as a member.');</script>";
		header('refresh: 0; url = index.php');
	}

?>