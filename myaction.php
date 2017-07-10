<?php include 'head.inc'; ?>


<!-- Yo shit ain't workin'!-->
<?php
$passCheck = sha1($_POST["pass"]);
$checker = "221cf4a82638920f8b43e42a02e21be4ed812d52";

if ($passCheck == $checker)
{
// run all normal password is good

if (isset($_FILES['image']))
{
   $errors = array();
   $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

   $file_name = $_FILES['image']['name'];
   $file_ext = strtolower(end(explode('.', $file_name)));
   $file_size = $_FILES['image']['size'];
   $file_tmp = $_FILES['image']['tmp_name'];
   


   if (in_array($file_ext, $allowed_ext) === false)
   {
      $errors[] = 'File extension not permitted';
   }
   if ($file_size > 3145728)
   {
      $errors[] = 'File must be under 3 megabytes'; 
   }

   if (empty($errors))
   {
      if (move_uploaded_file($file_tmp, 'uploads/'.$file_name))
      {
         echo 'File Uploaded';
		 //echo '<meta http-equiv="refresh" CONTENT="1; url="thumbs.php">';  
		 echo '<br/> <a href="thumbs.php">View Uploaded Pictures</a>';
      }
   }
   else
   {
      foreach ($errors as $error)
      {
         echo $error, '<br />';
      }
   }
}
}
else 
{
echo "Your password is incorrect.";
}
?>


<?php include 'FootandMenu.inc'; ?>