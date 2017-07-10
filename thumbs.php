<?php include 'head.inc'; ?>


	
<?php
$files = glob("uploads/*.*");
echo '<h2>To Download pictures, right-click and select <em>Save Image as...</em></h2><br/>';
for ($i=1; $i<count($files); $i++)
{
	$num = $files[$i];

	echo '<img src="'.$num.'" alt="random image" width="200px">'."&nbsp;&nbsp;";
	//echo <a href="http://www.espn.com" target="_blank"> <img src="ahman.gif" />
	//echo '<a href="'.$num.'" target="_blank"> <img src="'.$num.'" />"&nbsp;&nbsp;</a>";
	
	
	//echo '<a href="'.$num.'" target="_blank"> <img src="http://dev.cictspace.net/nfw2/uploads'.$num.'" alt="random image" width="200px"></a>'."&nbsp;&nbsp;";
	
//</a>
	}
?>



<?php include 'FootandMenu.inc'; ?>