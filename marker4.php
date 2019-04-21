<?php
require 'phpheader.php';
?> 

<table padding=60  margin=10    width="700" height="30"  border-radius="10" border="1" align="center" class="table table-striped" border="1" >
<tr>
    

    <th><center><font color="007700">Gene ID <i></i></font></center></th>
    <th><center><font color="007700">LG <i></i></font></center></th>
	<th><center><font color="007700">mRNA sequence</i></font></center></th>
	<th><center><font color="007700">Peptide sequence</i></font></center></th>
	<th><center><font color="007700">function predicted</i></font></center></th>
    
<tr ALIGN="center" valign="top">

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
                                        
                                        
                                          
                                                if  ($pep[$i][2]==$genes[2] && $pep[$i][3] == $genes[3])
                              
                                        {

                                                
                                        }
                                            }
                                                     
                                        


 
$lecture2 = file_get_contents("Sesamum_indicum_v1.0.gene.cds.fa.txt");
$pam = explode(">", $lecture2);

$exploded = preg_split("/[>]/",$lecture2);
//var_dump($exploded);
//echo $exploded[1];




$seq =array();

for($x=1; $x < sizeof($exploded);$x=$x+1)
{	
	$sbtr = [];
	$sbtr = preg_split("/[\: ]/",$exploded[$x]);
    array_push($seq,[$sbtr[0],substr($sbtr[2],8),$sbtr[3], $sbtr[4], $sbtr[5]]);
}

 //echo sizeof($exploded);
    //echo sizeof($seq);
       // echo json_encode($seq); 
      //
       // $sql= "INSERT INTO `genes` (`ID`, `LG`, `Start_gene`, `End_gene`, `Gene predicted function`, `Trait`, `Authors`, `Category`, `Sequence`) VALUES ('$sequs', '0', '$seqS', '$seqE', 'NA ', 'NA ', 'NA ', 'NA ', 'NA')";
      //echo $seqSe.'</br>';
     
       
       
      
$sql1 = 'SELECT * FROM `genes_predic` WHERE id=:id ';

$query = $DB->query2($sql1, array('id'=>$_GET['param']), 0);
     $resultats = $DB->fetchAllArray($query);
      $genes_predic=$resultats[0];
//var_dump($genes_predic);

for($i=0;$i < sizeof($seq);$i++  ){
                                        
                                        
                                          
    if  ($seq[$i][0]==$genes_predic[1]) 
{

}
}
             
                   
                   //
                   $sql = "SELECT * FROM `genes` WHERE id=:id"; 

                    //$sqlgenes = "SELECT * FROM `genes` WHERE LG=:lg and (`End_gene` and `Start_gene` between :start and :end or`End_gene` between :start and :end or `Start_gene` between :start and :end)";
                                        $query = $DB->query2($sql, array('id'=>$_GET['param']), 0);
                                        $resultats = $DB->fetchAllArray($query);
                                        $genes=$resultats[0];
                                       
                        $seqE= array();
                        $sequs =array();
                        $seqS =array();
                        $seqSe=array();   
				
                        $n = sizeof($seq);
                        for($i=0;$i < $n;$i++ ){ 

                            
                            $seqS=$seq[$i][2];
                            $seqE=$seq[$i][3];
                            $seqSe=$seq[$i][4];
                            $seqlg=$seq[$i][1];
                            $sequs=$seq[$i][0];
//echo($seq[$i][1]);
       //for($seqlg=2;$seqlg < 10 ;$seqlg++ ){ 
                            //$sql = "UPDATE `genes_predic` SET `LG` = '$seqlg' WHERE `genes_predic`.`ID` = '$sequs'";
                         // $sql = " UPDATE `genes_predic` SET `Start(bp)` = '$seqS' WHERE `genes_predic`.`ID` = '$sequs'";
                       // $query = $DB->query2($sql);
                     //   }
                            //$sql= "INSERT INTO `genes` (`ID`, `LG`, `Start_gene`, `End_gene`, `Gene predicted function`, `Trait`, `Authors`, `Category`, `Sequence`) VALUES ('$sequs', '$seqlg', '$seqS', '$seqE', 'NA ', 'NA ', 'NA ', 'NA ', 'NA')";
							if  ($seq[$i][2]==$genes[2] && $seq[$i][3] == $genes[3]) 
						{
                                

                                ?>
   
                                <tr>
                                
                                <td background-color=99FFCC width=150  ><font face="Tahoma"  size="4"><center><?php echo $genes_predic[1].'</br>';?></a></p></center></font></td> 
                                <td background-color=99FFCC width=150  ><font face="Tahoma"  size="4"><center><?php echo $genes_predic[2].'</br>';?></a></p></center></font></td> 
                                <td background-color=99FFCC width=100  class="table-responsive" class="table table-striped"><font face="Consolas" size="2"><?php echo $seq[$i][4].'</br>';?></a></p></center></font></td>
                                <center><td background-color=99FFCC width=100  ><font face="Consolas" size="2"><?php echo $pep[$i][4].'</br>';?></a></p></center></font></td> 
                                <center> <td background-color=99FFCC width=1100  ><font face= "Consolas"  size="3"><?php echo $genes_predic[3].'</br>';?></a></p></center></font></td> 
                                
                            </tr>
                            
                            <?php 
                        }


                                
                            
                    
                    }
                    
                    
                    ?>
                    <table>
                    <tr>
     