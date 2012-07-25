<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.form{
	width:400px;
	border:#006600 8px double;
	margin:0 auto;
	padding:15px;
	text-align:center;
}
.form input{
	border: solid #0C0 2px;
	margin-bottom:30px;
}
</style>
</head>

<body>
<div class="form">
    <form  action="" method="post" enctype="multipart/form-data">
    	file:<input type="file" name="file"/><br />
    	<input type="submit" name="send" value="send" />
    </form>
</div> 
<?php

if(isset($_POST['send'])){
	if(isset($_FILES['file'])){
		$file=$_FILES['file'];
		 if($file['error']==0){
			 $file_url="./".$file["name"];
			 move_uploaded_file($file["tmp_name"],$file_url);
		
		 }else{
			 $attache_err=$file['error'];
		 }
	}
}
echo $attache_err ;
?>

</body>
</body>
</html>