
<?php
require 'phpheader.php';
?> 

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <font size="4" color="red"> Note:</font><i><font size="4"color="black"> Funtional markers</i><br>
<center>
<br><table  border=1 align="center" class="table table-striped" border="1">
<tr>
<th><center>ID</center></th><th><center>LG</center></th><th><center>Start(bp)</center></th><th><center>End</center></th><th><center>Trait</center></th><th><center>Authors</center></th>

<tr ALIGN="center" valign="top">

</center>

<center>
<?php
$sql = "SELECT * `ID`,`LG`,`Start_qtls`, `End_qtls`,`Trait`,`Authors` FROM `Markers` WHERE id=:id";
$sql = 'SELECT * FROM markers WHERE lg >= :lg2 ORDER BY lg';
$query = $DB->query2($sql, array('lg2'=>'1'), 0);
$resultats = $DB->fetchAllArray($query);
//var_dump($resultats);
foreach($resultats as  $resultat)
{
?>

<tr>
		<td><center><a href="<?php echo  'markersinfos.php?param=' . $resultat['ID'] ;?>"><?php echo  $resultat['ID'];?></a></center></td>
		<td><center><font size="2"><?php echo $resultat['LG'];?></font></center></td>
		<td><center><font size="2"><?php echo $resultat['Start(bp)'];?></font></center></td>
		<td><center><font size="2"><?php echo $resultat['End(bp)'];?></font></center></td>
		<td><center><font size="2"><?php echo $resultat['Trait'];?></font></center></td>
		<td><center><font size="2"><?php echo $resultat['Authors'];?></font></a></center></td>

</center>
</tr>
<?php 


}
?>
<table>							

<tr>
	
	
	</br></br><table   border="0" width="1050" height="6" align="" bgcolor="111111"  class="table-responsive">
	<center><div style="border-radius:10px;border:1px;background-color:99FFCC;width:1200; height:30;align=center ;padding:5px; margin:5px"><font  size= "2"><i><font color="black">  Adresse: UCAD-Senegal   SiGeDiD-Sesame   2018 -- Copyright  Mai 2018 -- Admin: Idrissa navel DIALLO(idrissanaveldiallo65@gmail.com) </div></a></td>
<a target="_blank" href="https://www.ucad.sn/"><img alt="UCAD" height="50" hspace="0" vspace="0" border="0" src="ucad1.PNG"></a>


	   <img alt="ceraas" height="50" hspace="0" vspace="0" border="0" src="./logoSesame.PNG"></td></td><td align="left" width="450">
	
	
	    

</table>

	</tr>

