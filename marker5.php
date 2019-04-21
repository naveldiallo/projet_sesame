<?php
require 'phpheader.php';
?> 

<center>
<table >
<tr>


<tr ALIGN="center" valign="top">

</center>
<tr>
	<th><blockquote><p align="justify"><i><font size="3"><center>mRNA sequence: <?php echo $_GET['param']?></i></p></blockquote></center></th>
	<th><blockquote><p align="justify"><i><font size="3"><center>Peptide sequence: <?php echo $_GET['param']?></i></p></blockquote></center></th>
<tr ALIGN="center" valign="top">
<center>
<tr>
<?php


 ini_set('memory_limit', '1096M');

$lecture2pr = file_get_contents("Sesamum_indicum_v1.0.gene.pep.fa.txt");
$pampr = explode(">", $lecture2pr);

$explodedpr = preg_split("/[>]/",$lecture2pr);

//var_dump($exploded);
//echo $exploded[1];
//var_dump($exploded);


$pep =array(); 
$N= sizeof($explodedpr);
for($x=1; $x < $N ;$x=$x+1)
{	 
    $sbtrpr = [];
	$sbtrpr = preg_split("/[\: ]/",$explodedpr[$x]);
    array_push($pep,[$sbtrpr[0],substr($sbtrpr[2],8),$sbtrpr[3], $sbtrpr[4], $sbtrpr[8]]);
}
//echo json_encode($pep);
    //echo $lecture2pr .'</br>';
  // echo json_encode($pep);
/////







      ///     
                    $sql = "SELECT * FROM `genes` WHERE id=:id";

                    //$sqlgenes = "SELECT * FROM `genes` WHERE LG=:lg and (`End_gene` and `Start_gene` between :start and :end or`End_gene` between :start and :end or `Start_gene` between :start and :end)";
                                        $query = $DB->query2($sql, array('id'=>$_GET['param']), 0);
                                        $resultats = $DB->fetchAllArray($query);
                                        $genes=$resultats[0];

                                        for($i=0;$i < sizeof($pep);$i++   ){
                                        
                                         //echo $seqSe.'</br>';
                                           $sql = "SELECT * FROM `genes` WHERE id=:id";
                                          // $sql= "INSERT INTO `genes` (`ID`, `LG`, `Start_gene`, `End_gene`, `Gene predicted function`, `Trait`, `Authors`, `Category`, `Sequence`) VALUES ('$sequs', '0', '$seqS', '$seqE', 'NA ', 'NA ', 'NA ', 'NA ', 'NA')";
                                          
                                                if  ($pep[$i][2]==$genes[2] && $pep[$i][3] == $genes[3])
                              
                                        {

                                                    ?>
                    
                                                    <tr>
                
                                                    <td>
                                                    <table width="50" height="100">
                
                                                        <td><blockquote><font  face="Consolas" size="2"><?php echo $pep[$i][4];?></p></blockquote></font></td>
                                                        
                                                    </table>
                                                    </td>
                                                    <?php
                                            
                                        }
                                            }
                                                    
                                        
                                                   
                