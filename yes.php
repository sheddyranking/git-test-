<?php
    include_once 'include/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale-1">
	<title>lessons</title>
    <link href="style/style.css" rel="stylesheet">
</head>
<body>
    <?php
        $sql ="SELECT * FROM `users`;";
        $result = mysqli_query($conn,$sql);
        $resultCheck =mysqli_num_rows($result);
    
        if( $resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                   echo $row['user_uid']."<br>"; 
                }
        }
    ?>
</body>
</html>