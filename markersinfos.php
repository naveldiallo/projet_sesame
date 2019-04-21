<?php
require 'phpheader.php';
?> 

<center>
<table >
<tr>



</center>
<tr>
	<th><p align="justify"><i><font color="red" size="3"><center>Genes for the Markers: <?php echo $_GET['param']?></i></p></blockquote></center></th>
<tr ALIGN="center" valign="top">
<table border=1 width="600" align="center"    >
<tr>

	<th><center>Forward_primer</center></th><th><center>Reverse primer</center></th>
<tr ALIGN="center" valign="top">
</center>
</tr>

<?php 

$sql = "SELECT `ID`,`Forward_primer`, `Reverse primer`, `Trait`, `LG`,`Authors` FROM `markers` WHERE id=:id";
					$query = $DB->query2($sql, array('id'=>$_GET['param']), 0);
					$resultats = $DB->fetchAllArray($query);
					foreach($resultats as  $resultat)
					{
						?>
                             
						<tr>
						
		
							<td><center><font color="red"  face="Consolas" size="3"><?php echo  $resultat['Forward_primer'].'<br>';?></blockquote></font></center></td>
							<td><center><font color="red"  face="Consolas" size="3"><?php echo $resultat['Reverse primer'].'<br>';?></blockquote></font></center></td>
						</tr>
						
						<?php 
					
					}

					?>
</tr>
</center>

<i><font color="black" size="3"><font color="red">Note:</font><i>Please click on Genes ID  to obtain the mRNA sequence,
peptide sequence and the
function predicted</font></i></i></br></br></td>

<table border=0 width="600" align="center" class="table table-striped" border="0" >
<tr>
</br><th><center>ID</center></th><th><center>Start(bp)</center></th><th><center>End(bp)</center></th>
<tr ALIGN="center" valign="top">
</center>


<?php






 ini_set('memory_limit', '1096M');
 
$lecture2 = file_get_contents("Sesamum_indicum_v1.0.gene.cds.fa.txt");
$pam = explode(">", $lecture2);

$exploded = preg_split("/[>+-]/",$lecture2);
//var_dump($exploded);

$genes =array();

for($x=1; $x < sizeof($exploded);$x=$x+2)
{	
	$sbtr = [];
	$sbtr = preg_split("/[\: ]/",$exploded[$x]);
	array_push($genes,[$sbtr[0],substr($sbtr[2],8),$sbtr[3], $sbtr[4]]);
}

//echo sizeof($genes);
//echo json_encode($genes);


$sql = "SELECT * FROM `markers` WHERE id=:id";
//$sqlgenes = "SELECT * FROM `genes` WHERE LG=:lg and (`End_gene` and `Start_gene` between :start and :end or`End_gene` between :start and :end or `Start_gene` between :start and :end)";
					$query = $DB->query2($sql, array('id'=>$_GET['param']), 0);
					$resultats = $DB->fetchAllArray($query);
					$markers=$resultats[0];
					

					for($i=0;$i < sizeof($genes);$i++  ){
						if ($markers[2]==$genes[$i][1])
						 {
							if (($genes[$i][2]>=$markers[3]-30000 && $genes[$i][2] <= $markers[4]+30000) 
							| ($genes[$i][3]>=$markers[3]-30000 && $genes[$i][3] <= $markers[4]+30000)) 
							{
								?>
                             
								<tr>
								
									<td><center><font size="2"><a href=" <?php echo 'marker4.php?param='.  $genes[$i][0];?>"><?php echo $genes[$i][0].'</br>';?></a></center></p></blockquote></font></td>
									<td><center><font size="2"><?php echo $genes[$i][2].'</br>';?></a></p></blockquote></center></font></td>
									<td><center><font size="2"><?php echo $genes[$i][3].'</br>';?></a></p></blockquote></center></font></td>
									
								</tr>
								
								<?php 
							}
						}

					}					
			
		




?>
<tr>