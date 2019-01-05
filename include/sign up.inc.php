 <?php
		
	 	
	if(isset($_POST['submit'])){
    include_once 'dbh.inc.php';
	
		$first = mysqli_real_escape_string($conn,$_POST['first']); 
		$last = mysqli_real_escape_string($conn,$_POST['last']);
		$email = mysqli_real_escape_string($conn,$_POST['email']);
		$uid = mysqli_real_escape_string($conn,$_POST['uid']);
		$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
		
			
				if(empty($first) || empty($first) || empty($first) || empty($first) || empty($pwd) ){
				header("location:../index.php?signup=empty");
				exit();
				}
				else{
					if(!filter_var($email.FILTER_VALIDATE_EMAIL)){
						header("loaction: ../index.php?signup=invalid_email");
					}else{
						echo'sign up the user!';
					}
				}
			
			
	}
	else{
		header("location: ../index.php?signup=error");
			
		}
		
		
		
		//the ? stands for placeholders..
		$sql ="INSERT INTO `users`(user_first,user_last,user_email,user_uid,user_pwd)VALUES(?,?,?,?,?);"; 
		//creating the prepared statment..
		$stmt=mysqli_stmt_init($conn);
		//preparing the prpared statment..
		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo'Sql error!';
		}else{
			//binding the parameters..
			$result = mysqli_stmt_bind_param($stmt,"sssss",$first,$last,$email,$uid,$pwd);
			//executing the prepared statement..
			mysqli_stmt_execute($stmt);
			if(!$result){
			header("location: ../index.php?signu=error");
			}else{
				header("loaction: ../index.php?sign=success");
				}
			
		}
 
 ?>