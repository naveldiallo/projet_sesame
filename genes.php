<?php
require 'phpheader.php';
?> 

	<font size="4" color="red">Note:</font><i><font size="4"color="black"> Funtional genes</i><br>
 

	<br><table border=1 align="center" class="table table-striped" >
<tr>
<th><center>Num</center></th><th><center>ID</center></th><th><center>LG</center></th><th><center>Start(bp)</center></th><th><center>End(bp)</center></th><th><center>Trait</center></th><th><center>Gene predicted function</center></th><th><center>Category</center></th>
<tr ALIGN="center" valign="top">
</center>
<center>
<?php
$sql = 'SELECT * FROM genes_fonc WHERE lg >= :lg2 ORDER BY Num, category, lg ';
$query = $DB->query2($sql, array('lg2'=>'1'), 0);
$resultats = $DB->fetchAllArray($query);
//var_dump($resultats);
foreach($resultats as  $resultat)
{
?>

<tr>
<td><center><font size="2"><?php echo $resultat['Num'];?><fon></center></td>
		<td><center><font size="2"><a href="<?php echo  'genesinfo.php?param=' . $resultat['ID'] ;?>"><?php echo  $resultat['ID'];?></a></center></td>
		<td><center><font size="2"><?php echo $resultat['LG'];?><fon></center></td>
		<td><center><font size="2"><?php echo $resultat['Start(bp)'];?><fon></center></td>
		<td><center><font size="2"><?php echo $resultat['End(bp)'];?><fon></center></td>
		<td><center><font size="2"><?php echo $resultat['Trait'];?><fon></center></td>
		<td><center><font size="2"><?php echo $resultat['Gene_predicted_function'];?><fon></center></td>
		<td><center><font size="2"><?php echo $resultat['Authors'];?><fon></center></td>

		
</tr>
</center>
<?php

}
?>

<table>							

<tr>
	
	
	</br></br><table   border="0" width="1100" height="6" align="" bgcolor="111111"  class="table-responsive">

	<center><div style="border-radius:10px;border:1px;background-color:99FFCC;width:1200; height:30;align=center ;padding:5px; margin:5px"><font  size= "2"><i><font color="black">  Adresse: UCAD-Senegal   SiGeDiD-Sesame   2018 -- Copyright  Mai 2018 -- Admin: Idrissa navel DIALLO(idrissanaveldiallo65@gmail.com) </div></a></td>
<a target="_blank" href="https://www.ucad.sn/"><img alt="UCAD" height="50" hspace="0" vspace="0" border="0" src="ucad1.PNG"></a>


	   <img alt="ceraas" height="50" hspace="0" vspace="0" border="0" src="./logoSesame.PNG"></td></td><td align="left" width="450">
	
	
	    

</table>

	</tr>