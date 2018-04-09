<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LEAdS</title></head>


	

	<style type="text/css">
		* {margin: 0; padding: 0}
td { text-align: center; border: solid #000 1px; padding: 1px 1px; white-space: }
	</style>
	<script src="jquery.min.js"></script>



 <script>
 
var datar=0;   
var counter=0;

var localadd;
 

var moisture1=0;
var moisturelim1=0;
var moisturelim2=0;
var moisturelim3=0;
var rain1=0;
var rainlim1=0;
var rainlim2=0;
var rainlim3=0;
var rainsense=0;
var moissense=0;
jQuery().ready(function(){
    setInterval("getResult()",1200); //set theinterval for the update

});
function getResult(){  

	

  jQuery.post("level.php",function(myfilenamec) {
         moisturelim1c=myfilenamec;
});

    jQuery.post("updatebat.php",function(myfilename01) {
      
   var data1bat=myfilename01;
        var data1abat=data1bat.replace("X:","");
$("#bat").html(data1abat);
		});

    jQuery.post("update1a.php",function(myfilename01) {
         moisturelim1=myfilename01;

		$("#chem1a").html(myfilename01);});

    jQuery.post("update1b.php",function(myfilename02) {
        moisturelim2=myfilename02;

		$("#chem3a").html(myfilename02);});

    jQuery.post("update1c.php",function(myfilename03) {
        moisturelim3=myfilename03;

		$("#chem5a").html(myfilename03);});



    jQuery.post("update1d.php",function(myfilename04) {
        rainlim1=myfilename04;
		$("#chem2a").html(myfilename04);});

    jQuery.post("update1e.php",function(myfilename05) {
rainlim2=myfilename05;
	
		$("#chem4a").html(myfilename05);});



    jQuery.post("update1f.php",function(myfilename06) {
rainlim3=myfilename06;
	
		$("#chem6a").html(myfilename06);});














   jQuery.post("update0.php",function(myfilename0) {
	localadd=myfilename0;
		$("#loc").html(myfilename0);});


	
    jQuery.post("update2.php",function(myfilename1) {
        var data1=myfilename1;
        var data1a=data1.replace("M:","");
	 $("#mois").html(data1a);

moisture1=data1a;

		});

    jQuery.post("update3.php",function(myfilename2) {
	   var data2=myfilename2;
        var data2a=data2.replace("R:","");
		$("#rain").html(data2a);
rain1=data2a;

		});




    jQuery.post("update23.php",function(myfilename2) {
	   var data2=myfilename2;
  
rainsense=data2;

		});



    jQuery.post("update24.php",function(myfilename2) {
   var data2=myfilename2;
  
	
moissense=data2;

		});
 
jQuery.post("update1.php",function(myfilename3) {
	   var data3=myfilename3;
           var data3a=data3.replace("E:","");
		$("#deg").html(data3a);
                 datar=data3a;


		});

var levelalarm=0;
    jQuery.post("update4.php",function(myfilename4) {
	levelalarm=myfilename4;
		



		});


var sen11= 0;
var sen12= 0;
var sen13= 0;
var level= 0;
var sen21= 0;
var sen22= 0;
var sen23= 0;
 var ident1a=0;
 var ident1=0;
 sen11= rain1-rainlim1;
 sen12= rain1-rainlim2;
 sen13= rain1-rainlim3;
 sen21= moisture1-moisturelim1;
 sen22= moisture1-moisturelim2;
 sen23= moisture1-moisturelim3;
var addr="?s1="+localadd+"&s2="+rainsense+"&s3="+moissense+"&s4="+datar+"&s5="+Date()+"&s6";


var s11= 0;
var s12= 0;
var s13= 0;
var s21= 0;
var s22= 0;
var s23= 0;




if (sen21>=0){s21= 0;}
if (sen22>=0){s22= 0;}
if (sen23>=0){s23= 0;}
if (sen11>=0){s11= 0;}
if (sen12>=0){s12= 0;}
if (sen13>=0){s13= 0;}



if (sen21<0){s21= 1;}
if (sen22<0){s22= 1;}
if (sen23<0){s23= 1;}

if (sen11<0){s11= 1;}
if (sen12<0){s12= 1;}
if (sen13<0){s13= 1;}

var ind1=s21+s22+s23;
var ind2=s11+s12+s13;

//$("#d1").html(ind1);
//$("#d2").html(ind2);
//$("#d3").html(datar);
if ((datar==0)&&(ind1==3)&&(ind2==3)){level=0; document.getElementById('f1').src="sound0.php"+addr;}
if ((datar==0)&&(ind1==2)&&(ind2==3)){level=1;document.getElementById('f1').src="sound1.php"+addr;}
if ((datar==0)&&(ind1==3)&&(ind2==2)){level=1;document.getElementById('f1').src="sound1.php"+addr;}
if ((datar==0)&&(ind1==2)&&(ind2==2)){level=1;document.getElementById('f1').src="sound1.php"+addr;}

if ((datar==0)&&(ind1==1)&&(ind2==2)){level=1;document.getElementById('f1').src="sound1.php"+addr;}


if ((datar==0)&&(ind1==2)&&(ind2==1)){ level=1;document.getElementById('f1').src="sound1.php"+addr;}

if ((datar==0)&&(ind1==1)&&(ind2==1)){level=2;document.getElementById('f1').src="sound2.php"+addr;}

if ((datar==0)&&(ind1==0)&&(ind2==0)){level=3;document.getElementById('f1').src="sound3.php"+addr;}



if (datar==1)
{level=3;
document.getElementById('f1').src="sound3.php"+addr;
}

$("#level").html(level);




























}






</script>



<body align="center" >
 <div align="center" >
	  <h1>LEAdS       <a id="signal"></h1>

<font size=2 >Battery <a id="bat"></a>%</font>
	<table border="1">


	  	  <td width="180px">Location</td>
	  <td width="210px"><a id="loc"> </td>
	 
	  	<tr>
	  <td width="80px">Movement</td>
	  
	  
	  <td id="gg2" width="40px"><a id="deg"> </a> </td>
	 
	  	</tr>

  	<tr>
	  <td width="80px">Moisture</td>
	  
	  
	  
	  <td width="40px"><a id="mois"> </a> %</td>
	 
	  	</tr>
	
	  	<tr>
	  <td width="80px">Rain</td>
	  
	  
	  
	  <td width="40px"><a id="rain"> </a> mL</td>
	 
	  	</tr>
		
		
		
		
		
		
		<p>
		</p>
		<p>
		</p>
		
		
		
	  	  <td width="80px">Alert Level</td>
	  <td width="40px"><a id="level"> </a> </td>
	 
	  	<tr>
	
	  	</tr>

		

	</table>
		
			<p>&nbsp;</p>
		<p>&nbsp;</p>

		
			
	
<a href="http://admin:admin@192.168.2.10/">I.P. cam</a>
		

		
	  
	  </div>
	   </div >

</body>


<a id="d1"> </a>
<a id="d2"> </a>
<a id="d3"> </a>
<a id="d4"> </a>
<a id="d5"> </a>
<a id="d6"> </a>
<a id="d7"> </a>
<a id="d8"> </a>

<iframe id="f1" frameborder="0" src=""><iframe>
<iframe id="f2" src=""><iframe>




</html>
