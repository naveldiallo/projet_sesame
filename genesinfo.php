<?php
require 'phpheader.php';
?> 

<table    width="800" height="30"  border-radius="10" border="0" align="center" class="table table-striped" border="0" >
<tr>
	<th><center><font color="007700">mRNA sequence: <i><?php echo $_GET['param']?></i></font></center></th>
	<th><center><font color="007700">Peptide sequence:</i></font></center></th>
	<th><center><font color="007700">3D Structure</i></font></center></th>
	<th><center><font color="007700">Trait</i></font></center></th>
	
<tr ALIGN="center" valign="top">



<?php


$lecture = file_get_contents("gene_folder/sin_gen_pr/".$_GET['param'].".txt"); 
$lecturepr = file_get_contents("gene_folder/sin_gen_pr/".$_GET['param']."pr.txt");
$sql = "SELECT `Gene predicted function`,`Trait` FROM `genes` WHERE id=:id";
$query = $DB->query2($sql, array('id'=>$_GET['param']), 0);
					$resultats = $DB->fetchAllArray($query);
					foreach($resultats as  $resultat)
					{
					
					
					}
					


?>
 <br><center><font size="5" color="red">Gene predicted function :</i></font>  <font color= "blue"   size="3"><?php echo  $resultat['Gene predicted function'].'<br>';?></td></p></blockquote></font><center>
</font></i>
<center>
<tr>
<td padding=10 ><font  face="Consolas" size="2"><?php echo $lecture;?></p></blockquote></font></td>
<td padding=10 ><font face= "Consolas" size="2"><?php echo $lecturepr;?></td></p></blockquote></font>
<td padding=10  valign="top"><a href="https://swissmodel.expasy.org/interactive"><img width="300" height="300" src="<?php echo 'assets/img/3d_structs/'.$_GET['param'].'st.png'?>"></a></td>
<td padding=10 ><font   size="3"><?php echo  $resultat['Trait'];?></td></p></blockquote></font>

</tr>
<center>	
</table>

