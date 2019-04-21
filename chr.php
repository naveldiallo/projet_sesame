<tr>
<?php
require 'phpheader.php';

	$queries = array();
	
	$arr = explode("?",$_SERVER['QUERY_STRING']);
	 $id_lg  =  explode("=",$arr[0])[1];
	 $name_chrom =  explode("=",$arr[1])[1];
	 $chro_size =  explode("=",$arr[2])[1];

	//  echo($id_chrom);
	 

	 $sql1 = "SELECT * FROM `genes_fonc` WHERE lg=:lg";
	 $query = $DB->query2($sql1, array('lg'=>$id_lg), 0);
			$resultats = $DB->fetchAllArray($query);
			// echo json_encode($resultats);
		  // $genes_fonc=$resultats[0];
	 		//var_dump($genes_predic);
	 		//echo($genes_predic[1]);
											 
	// echo($genes_fonc[2]);									 
								

	?>

 <table align=center>
	<tr ALIGN="center" valign="top">
		<tr ALIGN="center" valign="top">
		<tr>
	<center><font color="007700" size="3"><i>Please click on QTLs or Markers  to obtain the associated fonctional genes</font></i></center>
	<td>
<table class="table table-sm table-dark">  
         <tbody> 
		<body>
<center>
	</style>
    </style>
		<table class="table table-sm table-dark">  
         <tbody> 
		 <tr><th><font size="5"> <i><?php  echo $name_chrom; ?></i> </font></th></tr>							
                 <tr> 
	<table align="center">
	<div  style=";valign:top; border-radius:10px;solid:grey; z-index:-1; margin: 5px 22px; border: 1px solid; width:10px; height:<?php  echo $chro_size*20; ?>; position:absolute"></div>
	</table>  
	<?php foreach ($resultats as $gene) {
				$v=($gene["Start(bp)"]/1000000)*20;?>
			<div style="position: absolute;margin:<?php echo $v; ?>px 23px; border: 0px solid; color:black">
			<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
				<font size="2" id=""><a href="genesinfo.php?param=<?php echo $gene['ID']; ?>"><font color="00BB00"><?php echo $gene['ID']; ?></font></a></font>
			</div>
			<?php			} ?>
	 
	<!-- <div style="position: absolute;margin-left:22px;margin:335px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.4px solid; width:50px; display:inline-block"></div>
		<font size="2" id=""><a href="markersinfos.php?param=Hs672"><font color="00BB00">Hs672</font></a></font>
	</div>
		<div style="position: absolute;margin-left:10px;margin:184px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:200px; display:inline-block"></div>
		<font size="2" id=""><a href="markersinfos.php?param=Hs376"><font color="00BB00">Hs376</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=Hs377"><font color="00BB00">Hs377</font></a></font>
	</div>
	<div style="position: absolute;margin-left:22px;margin:260px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:150px; display:inline-block"></div>
		<font size="2" id=""><a href="markersinfos.php?param=M4E17-7"><font color="00BB00"> M4E17-7</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=M13E11-2"><font color="00BB00"> M13E11-2</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=E6M9-4"><font color="00BB00"> E6M9-4</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=M9E8-2"><font color="00BB00"> M9E8-2</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=M19E17-3"><font color="00BB00"> M19E17-3</font></a></font>
		<font size="2" id=""><a href="markersinfos.php?param=M14E2-19"><font color="00BB00"> M14E2-19</font></a></font>
	</div>
   
	<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1010870"><font color="blue">SIN_1010870</font></a></font>
	</div>
	<div style ="position: absolute;margin:226.4px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1009480"><font color="blue">SIN_1009480</font></a></font>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1009490"><font color="blue">SIN_1009490</font></a></font>
	</div>
	<div style ="position: absolute;margin:27.5px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1021592"><font color="blue">SIN_1021592</font></a></font>
	</div>
	<div style ="position: absolute;margin:191.4px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1013723"><font color="blue">SIN_1013723</font></a></font>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1013730"><font color="blue">SIN_1013730</font></a></font>

	</div>
	<div style ="position: absolute;margin:201.6px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1013658"><font color="blue">SIN_1013658</font></a></font>
	</div>
	<div style ="position: absolute;margin:245.7px 23px; border: 0px solid; color:black">
		<div style="vertical-align: middle; border: 0.5px solid; width:50px; display:inline-block"></div>
		<font size="1" id=""><a href="genesinfo.php?param=SIN_1009625"><font color="blue">SIN_1009625</font></a></font>
	</div> -->
	
	</center>
 </tbody> 
 
</table>

	</tr>
