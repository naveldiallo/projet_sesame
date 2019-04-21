<?php
require 'phpheader.php';

	$req_chromosome = 'SELECT * FROM chromosomes';
	$query= $DB->query2($req_chromosome, null, 0);
	$chromosomes =  $DB->fetchAllArray($query);

	// formatter laffichage dun array
	// echo json_encode($chromosomes);
	// echo print_r($chromosomes,true);
?> 

<td valign="top">
			<td valign="top">
			<p align="justify"><div class="slideshow"><style>

.slideshow {

   width: 250px;

   height: 250px;

   overflow: hidden;
   border-radius:20px;
   border: 0px solid #99FFCC;

}

.slideshow ul {

    /* 3 images donc 4 x 100% */

   width: 250%;

   height: 250px;

   padding:0; margin:0;

   list-style: none;

}

.slideshow li {

   float: left;

}</style>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

<script type="text/javascript">

   $(function(){

      setInterval(function(){

         $(".slideshow ul").animate({marginLeft:-350},800,function(){

            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));

         })

      }, 3500);

   });

</script>

<ul>

             <li><img src="assets/img/sesames/sesame111.PNG" alt="" width="250" height="250" /></li>
             <li><img src="assets/img/sesames/sesame17.PNG" alt="" width="250" height="250" /></li>   
			 <li><img src="assets/img/sesames/sesame112.PNG" alt="" width="250" height="250" /></li>
			 <li><img src="assets/img/sesames/sesame010.PNG" alt="" width="250" height="250" /></li>
			 <li><img src="assets/img/sesames/sesame08.PNG" alt="" width="250" height="250" /></li>
			 <li><img src="assets/img/sesames/sesame06.PNG" alt="" width="250" height="250" /></li>
			 <li><img src="assets/img/sesames/sesame09.PNG" alt="" width="250" height="250" /></li> 
			 <li><img src="assets/img/sesames/sesame04.PNG" alt="" width="250" height="250" /></li>        
			 <li><img src="assets/img/sesames/sesame05.PNG" alt="" width="250" height="250" /></li>
			 <li><img src="assets/img/sesames/sesame03.PNG" alt="" width="250" height="250" /></li>

       </ul>

<td class="table-responsive"  valign="top"><b><font color="black"  size="4"></font></b><div class="table-responsive" align="center" style="border-radius:20px;border:1px;background-color:99FFCC;width:900; height:285;padding:10px; margin:10px">
<p align="justify">
<span lang="EN-US" style="font-size: 12.0pt; font-family: 'Times New Roman',serif">
<font size="4"color="black">
Since 2014, the reference genome of sesame (<i>Sesamum indicum L.</i>), an ancient
oilseed crop with a significant importance in the developing regions, was publicly
released and has triggered several genetic and genomic studies on this crop’s
biology. These studies have shed light on several genomic regions governing
important agronomical traits. Up to date, hundreds of candidate genes, QTLs and
functional molecular markers were discovered throughout the sesame genome.
These valuable genomic resources are a prerequisite for the genetic improvement of
sesame through molecular breeding. Because different approaches such as genome
wide association study, bi-parental QTL mapping, association mapping, gene
cloning and transgenic analysis, transcriptome sequencing, etc., were employed to
identify these genomic resources, it is essential to gather them together on a
physical map using the reference genome sequence of sesame. More importantly, to
facilitate the exploitation of these data by the scientific community working on
sesame, it is important to develop a user-friendly online database. Here, we present
SiGeDiD (<i>Sesamum indicum Genetic Discovery Database</i>), a versatile database for
functional analysis of the available candidate genes, QTLs and functional
molecular markers in sesame. SiGeDiD will be updated regularly with new
available genetic discoveries.

</span><span lang="EN-US" style="font-size: 12.0pt; font-family: 'Times New Roman',serif">
			</span></td>
			</tr>
			<tr>
</p></blockquote>
</font></i>
</div></a></td>
		</td>

		<table>
		
		<td>
		
		</br><i><font color="FF3366"size="4">The different databases available for Sesamum indicum </font>
	 <li><font <i><a target="_blank" href="https://www.ncbi.nlm.nih.gov/genome/gdv/browser/?acc=GCF_000512975.1&context=genome"> <font color="black">NCBI</font></font></a></li>
	<li><i><a target="_blank" href="http://www.sesame-bioinfo.org/Sinbase2.0/"><font color="black">Sinbase2.0</font></font></a></li>
	<li><a target="_blank" href="http://www.sesame-bioinfo.org/SesameFG/"><font color="black">SesameFG</font></font></a></li>
	<li><a target="_blank" href="http://www.sesame-bioinfo.org/SisatBase/"><font color="black">SisatBase</font></font></a></li>
	<li><a target="_blank" href="http://sesame-bioinfo.org/SesameFG/FAQ.html"><font color="black">SesameHapMap</font></font></a></li>
	
	</td>
		</table>
			</td>
				</table>

		</table>

<center><td><font color="111111" size="4"><i>
<font color="FF3366"> Click the chromosome bar to obtain the interested QTLs, Markers and functional Genes in corresponding chromosome </font></td>
    </font></i><td></center>
			<Center>
			
			<TABLE  width="60%" height="10%"bgcolor="FFFFFF" > 
	<font> </font>
	
 <div class="table table-striped" class="table-responsive">
 
<tr>
<?php
		foreach ($chromosomes as $chr)
		 { 
 ?>
		<th> <?php  echo $chr['name']; ?></th>
<?php 
	}
	
	?>
</tr>
<tr ALIGN="center" valign="top">
	<?php
	 foreach ($chromosomes as $chr) { 
		$size = $chr['size']*10;
	?>
			<td><a href="chr.php?id_chrom=<?php  echo $chr['id_chrom']; ?>?name=<?php  echo $chr['name']; ?>?size=<?php  echo $chr['size']; ?>"><div style="border-radius:10px;border:1px;background-color:black;width:10; height:<?php  echo $size; ?>"></div></a></td>
	<?php 
} 
 ?>
		</tr>

	</table>
	

<div border="1" width="10000" height="2" class="table table-striped" ><TD></TD></div>



	
	<center><div style="border-radius:10px;border:1px;background-color:99FFCC;width:1200; height:30;align=center ;padding:5px; margin:5px"><font  size= "2"><i><font color="black">  Adresse: UCAD-Senegal   SiGeDiD-Sesame   2018 -- Copyright  Mai 2018 -- Admin: Idrissa navel DIALLO ( <adress><i><a href="mailto:idrissanaveldiallo65@gmail.com"><font size='2' color="black">idrissanaveldiallo65@gmail.com </font></a></adress>)</center></th><th><center> </div></a></td>
<a target="_blank" href="https://www.ucad.sn/"><img alt="UCAD" height="50" hspace="0" vspace="0" border="0" src="ucad1.PNG"></a>


<table border=0 width="1000" class="table-responsive"  >
<tr>

	<th><center><font color="black" size="2"><i><a href="mailto:komiri.dossa@ucad.edu.sn">Dr. Komivi DOSSA </a></center></th><th><center><font color="black"  size="2"><adress><i><a href="mailto:idrissanaveldiallo65@gmail.com">Idrissa Navel DIALLO </a></adress></center></th><th><center><font color="black" size="2"><i><a href="mailto:papeadama.mboup@ucad.edu.sn">Dr. Pape Adama MBOUP  </a> </i></font></center></th><th><center><font color="black" size="2"><i><a href="mailto:diaga.diouf@ucad.edu.sn">Pr. Diaga DIOUF </a></i></font></center></th>
<tr ALIGN="center" valign="top">
							
									
									<td><center><font  size="1"><i></i>komiri.dossa@ucad.edu.sn</center></font></td>
									<td><center><font  size="1"><i>idrissanaveldiallo65@gmail.com</i></font></center></td>
									<td><center><font  size="1"><i>papeadama.mboup@ucad.edu.sn</i></center></font></td>
									<td><center><font  size="1"><i>diaga.diouf@ucad.edu.sn</i></center></font></td>

									
</tr></br>

	</tr>

	
</body>

</html>