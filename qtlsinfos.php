<?php
require 'phpheader.php';
?> 

<table >
<tr>


<tr>
	<th><p align="justify"><i><font size="3"><center>Genes for the QTLs: <?php echo $_GET['param']?></i></p></blockquote></center></th>
<tr ALIGN="center" valign="top">

<td><b><i><font color="007700" size="2"><font color="red" size="2"><i>Note</font>: Please click gene ID to get detail information of corresponding sesame  gene</font></i></i></br></br></td>


<table border=0 width="100" align="center" class="table table-striped" border="0" >
<tr>
	<th><center>ID</center></th><th><center>Start(bp)</center></th><th><center>End(bp)</center></th>
<tr  valign="top"></br>




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


$sqlqtl = "SELECT * FROM `qtls` WHERE id=:id";
//$sqlgenes = "SELECT * FROM `genes` WHERE LG=:lg and (`End_gene` and `Start_gene` between :start and :end or`End_gene` between :start and :end or `Start_gene` between :start and :end)";
					$query = $DB->query2($sqlqtl, array('id'=>$_GET['param']), 0);
					$resultats = $DB->fetchAllArray($query);
					$qtls=$resultats[0];
					

					for($i=0;$i < sizeof($genes);$i++  ){
						if ($qtls[1]==$genes[$i][1])
						 {
							if ( ($genes[$i][2]>=$qtls[2] && $genes[$i][2] <= $qtls[3]) 
							| ($genes[$i][3]>=$qtls[2] && $genes[$i][3] <= $qtls[3])) 
							{
								?>
                             
									<tr>
									

									

									<td ><center><font size="2"><a href=" <?php echo 'marker4.php?param='.  $genes[$i][0];?>"><?php echo $genes[$i][0].'</br>';?></a></center></p></blockquote></font></td>
									
									<td><center><font size="2"><?php echo $genes[$i][2].'</br>';?></a></p></blockquote></center></font></td>
									<td><center><font size="2"><?php echo $genes[$i][3].'</br>';?></a></p></blockquote></center></font></td>
								
								</tr>
								
								<?php 
							}
						}

					}					
			
		




?>
<tr>




