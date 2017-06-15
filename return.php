<?php 

	require 'decide_index.php';
	if(loggedin()){
		$issued = $_SESSION['issued'];
		$roll = $_SESSION['roll'];
		$id1 = $_SESSION['id1'];
		$id2 = $_SESSION['id2'];
		if($issued==1 && isset($id1) && !empty($id1)){
			$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id1'";
			$query_run = mysql_query($query);
			$total = mysql_result($query_run,0,'total');
			$total = $total + 1;
			$query = "UPDATE `book` SET `total` = '$total' WHERE `book_id` = '$id1'";
			$query_run = mysql_query($query);
			
			$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id1'";
			$query_run = mysql_query($query);
			$fine = mysql_result($query_run,0,'fine');
			
			$query = "SELECT `idate1` FROM `book_issue` WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			$issue_date = mysql_result($query_run,0,'idate1');
			$return_date = date("Y-m-d");
			
			$date1 = date_create($issue_date);
			$date2 = date_create($return_date);
			
			$diff=date_diff($date1,$date2);
			$x = $diff->format("%R%a");
			if($x<=20){
				echo "<script>alert('The product has been returned successfully.');</script>";
				header('refresh: 0; url = search.php');
			}
			else{
				$total_fine = $fine*($x-20);
				$query = "SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				$late_fine = mysql_result($query_run,0,'late_fine');
				$late_fine = $late_fine + $total_fine;
				
				$query = "UPDATE `student` SET `late_fine` = '$late_fine' WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				echo "<script>alert('The product has been returned successfully.');</script>";
				header('refresh: 0; url = search.php');
			}
			
			$null = 0;
			$query1 = "UPDATE `book_issue` SET `book1` = '$null' WHERE `roll` = '$roll'";
			$date = "0000-00-00"; 
			$query2 = "UPDATE `book_issue` SET `idate1` = '$date' WHERE `roll` = '$roll'";
			$query_run1 = mysql_query($query1);
			$query_run2 = mysql_query($query2);
			
			$query = "UPDATE `student` SET `issued` = '$null' WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			
			
		}
		else if($issued==1 && isset($id2) && !empty($id2)){
			$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id2'";
			$query_run = mysql_query($query);
			$total = mysql_result($query_run,0,'total');
			$total = $total + 1;
			$query = "UPDATE `book` SET `total` = '$total' WHERE `book_id` = '$id2'";
			$query_run = mysql_query($query);
			
			
			$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id2'";
			$query_run = mysql_query($query);
			$fine = mysql_result($query_run,0,'fine');
			
			$query = "SELECT `idate2` FROM `book_issue` WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			$issue_date = mysql_result($query_run,0,'idate2');
			$return_date = date("Y-m-d");
			
			$date1 = date_create($issue_date);
			$date2 = date_create($return_date);
			
			$diff=date_diff($date1,$date2);
			$x = $diff->format("%R%a");
			if($x<=20){
				echo "<script>alert('The product has been returned successfully.');</script>";
				header('refresh: 0; url = search.php');
			}
			else{
				$total_fine = $fine*($x-20);
				$query = "SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				$late_fine = mysql_result($query_run,0,'late_fine');
				$late_fine = $late_fine + $total_fine;
				
				$query = "UPDATE `student` SET `late_fine` = '$late_fine' WHERE `roll` = '$roll'";
				$query_run = mysql_query($query);
				echo "<script>alert('The product has been returned successfully.');</script>";
				header('refresh: 0; url = search.php');
			}
			
			$null = 0;
			$query1 = "UPDATE `book_issue` SET `book2` = '$null' WHERE `roll` = '$roll'";
			$date = "0000-00-00";  
			$query2 = "UPDATE `book_issue` SET `idate2` = '$date' WHERE `roll` = '$roll'";
			$query_run1 = mysql_query($query1);
			$query_run2 = mysql_query($query2);
			
			$query = "UPDATE `student` SET `issued` = '$null' WHERE `roll` = '$roll'";
			$query_run = mysql_query($query);
			
			
		}
		else if($issued==2){
			if(isset($_POST['id'])){
				$id = $_POST['id'];
				if(empty($id)){
					echo "<script>alert('Fill in the product id.');</script>";
					header('refresh: 0; url = returnbook.php');
				}
				else{
					if($id!=$id1 && $id!=$id2){
						echo "<script>alert('Invalid product id.');</script>";
						header('refresh: 0; url = returnbook.php');
					}
					else if($id==$id1){
						$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id1'";
						$query_run = mysql_query($query);
						$total = mysql_result($query_run,0,'total');
						$total = $total + 1;
						$query = "UPDATE `book` SET `total` = '$total' WHERE `book_id` = '$id1'";
						$query_run = mysql_query($query);
						
						$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id1'";
						$query_run = mysql_query($query);
						$fine = mysql_result($query_run,0,'fine');
			
						$query = "SELECT `idate1` FROM `book_issue` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$issue_date = mysql_result($query_run,0,'idate1');
						$return_date = date("Y-m-d");
			
						$date1 = date_create($issue_date);
						$date2 = date_create($return_date);
			
						$diff=date_diff($date1,$date2);
						$x = $diff->format("%R%a");
						if($x<=20){
							echo "<script>alert('The product has been returned successfully.');</script>";
							header('refresh: 0; url = search.php');
						}
						else{
							$total_fine = $fine*($x-20);
							$query = "SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$late_fine = mysql_result($query_run,0,'late_fine');
							$late_fine = $late_fine + $total_fine;
				
							$query = "UPDATE `student` SET `late_fine` = '$late_fine' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							echo "<script>alert('The product has been returned successfully.');</script>";
							header('refresh: 0; url = search.php');
						}
						
						$null = 0;
						$query1 = "UPDATE `book_issue` SET `book1` = '$null' WHERE `roll` = '$roll'";
						$date = "0000-00-00";
						$query2 = "UPDATE `book_issue` SET `idate1` = '$date' WHERE `roll` = '$roll'";
						$query_run1 = mysql_query($query1);
						$query_run2 = mysql_query($query2);
						
						$null = 1;
						$query = "UPDATE `student` SET `issued` = '$null' WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						
						
					}
					else if($id==$id2){
						$query = "SELECT `total` FROM `book` WHERE `book_id` = '$id2'";
						$query_run = mysql_query($query);
						$total = mysql_result($query_run,0,'total');
						$total = $total + 1;
						$query = "UPDATE `book` SET `total` = '$total' WHERE `book_id` = '$id2'";
						$query_run = mysql_query($query);
						
						$query = "SELECT `fine` FROM `book` WHERE `book_id` = '$id2'";
						$query_run = mysql_query($query);
						$fine = mysql_result($query_run,0,'fine');
			
						$query = "SELECT `idate2` FROM `book_issue` WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						$issue_date = mysql_result($query_run,0,'idate2');
						$return_date = date("Y-m-d");
			
						$date1 = date_create($issue_date);
						$date2 = date_create($return_date);
			
						$diff=date_diff($date1,$date2);
						$x = $diff->format("%R%a");
						if($x<=20){
							echo "<script>alert('The product has been returned successfully.');</script>";
							header('refresh: 0; url = search.php');
						}
						else{
							$total_fine = $fine*($x-20);
							$query = "SELECT `late_fine` FROM `student` WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							$late_fine = mysql_result($query_run,0,'late_fine');
							$late_fine = $late_fine + $total_fine;
				
							$query = "UPDATE `student` SET `late_fine` = '$late_fine' WHERE `roll` = '$roll'";
							$query_run = mysql_query($query);
							echo "<script>alert('The book has been returned successfully.');</script>";
							header('refresh: 0; url = search.php');
						}
						
						$null = 0;
						$query1 = "UPDATE `book_issue` SET `book2` = '$null' WHERE `roll` = '$roll'";
						$date = "0000-00-00"; 
						$query2 = "UPDATE `book_issue` SET `idate2` = '$date' WHERE `roll` = '$roll'";
						$query_run1 = mysql_query($query1);
						$query_run2 = mysql_query($query2);
						
						$null = 1;
						$query = "UPDATE `student` SET `issued` = '$null' WHERE `roll` = '$roll'";
						$query_run = mysql_query($query);
						
					}
				}
			}
		}
	}
	else{
		echo "<script>alert('You must be logged in as a member.');</script>";
		header('refresh: 0; url = index.php');
	}

?>