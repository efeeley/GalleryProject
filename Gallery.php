<?php include 'head.inc'; ?>


<!--This is where the feild, table, or whatever, where all the pictures go should go -->
	<?php
$files = glob("uploads/thumbs/*.*");
echo '<h2>To Download pictures, right-click and select <em>Save Image as...</em></h2><br/>';
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];
	$num2 = str_replace('thumbs/', '', $num);
	
	
	
	echo '<a href="'.$num2.'" target="_blank"> <img src="'.$num.'" alt="random image"></a>'."&nbsp;&nbsp;";
	
	}
?>


<?php include 'FootandMenu.inc'; ?>
