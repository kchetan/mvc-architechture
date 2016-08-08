<?php
   if(isset($_FILES['data'])){
      $errors= array();
      $file_name = $_FILES['data']['name'];
      $file_size =$_FILES['data']['size'];
      $file_tmp =$_FILES['data']['tmp_name'];
      $file_type=$_FILES['data']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['data']['name'])));
      
      $expensions= array("txt","csv",".docx",".pages");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a text file.";
      }
      
      if($file_size > 10097152){
         $errors[]='File size must be less than 10 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"models/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
<title>MVC</title>
</head>
<body>
	<center>
		<marquee>
			<h1>Welcome to Home page.</h1>
		</marquee>
		<br />
		
		<p>
			To view the file enter the file name in the url or upload ur own file
		</p>
		 <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="data" />
         <input type="submit"/>
      </form>
	</center>
	

</body>
</html>
