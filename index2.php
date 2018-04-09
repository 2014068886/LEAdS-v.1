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
 

var counter=0;

var bat=1200000;
bat=bat-1;
bat=bat/12122;
bat = parseInt(bat);
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
    setInterval("getResult()",500); //set theinterval for the update

});
function getResult(){  

	$("#bat").html(bat);

  jQuery.post("level.php",function(myfilenamec) {
         moisturelim1c=myfilenamec;
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

		$("#loc").html(myfilename0);});
	

	
    jQuery.post("update1.php",function(myfilename1) {
        var data1=myfilename1;
        var data1a=data1.replace("M:","");
	 $("#mois").html(data1a);

moisture1=data1a;

		});

    jQuery.post("update2.php",function(myfilename2) {
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
var datar=0;    
jQuery.post("update3.php",function(myfilename3) {
	   var data3=myfilename3;
        var data3a=data3.replace("E:","");
		$("#deg").html(data3a);
datar=data3a;
if ((datar==1)&&(rainsense<2)&&(moissense<2))
{
document.location="level2.php";

}

if ((datar==1)&&(rainsense==2)&&(moissense<2))
{
document.location="level2.php";

}
if ((datar==1)&&(rainsense<2)&&(moissense==2))
{
document.location="level2.php";

}
		});

var levelalarm=0;
    jQuery.post("update4.php",function(myfilename4) {
	levelalarm=myfilename4;
		$("#level").html(myfilename4);

		});


if (levelalarm==3){document.location="index3.php";}

var sen11= 0;
var sen12= 0;
var sen13= 0;


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

 $("#rain1").html(sen11);
 $("#rain2").html(sen12);
 $("#rain3").html(sen13);
 $("#rain4").html(sen21);
 $("#rain5").html(sen22);
 $("#rain6").html(sen23);



if (sen11>=0)
{ident1=1;}
if (sen12>=0)
{ident1=2;}
if (sen13>=0)
{ident1=3;}



if (sen21>=0)
{ident1a=1;}
if (sen22>=0)
{ident1a=2;}
if (sen23>=0)
{ident1a=3;}



if ((sen21>0)&&(sen22>0)&&(sen23<0))
{document.location="level22m.php";}


if ((sen11>0)&&(sen12>0)&&(sen13<0))
{document.location="level22r.php";}

if ((sen11>0)&&(sen12>0)&&(sen13>0))
{document.location="level32r.php";}
if ((sen21>0)&&(sen22>0)&&(sen23>0))
{document.location="level32m.php";}








		
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
  <p><a id="rain1"> a</p>
  <p><a id="rain2"> b</p>
  <p><a id="rain3"> c</p>
  <p><a id="rain4"> d</p>
  <p><a id="rain5"> e</p>
  <p><a id="rain6"> f</p>
  <p><a id="rain7"> g</p>
  <p><a id="rain8"> h</p>
  <p><a id="rain9"> i</p>
  <p><a id="rain10"> j</p>
  <p><a id="rain11"> k</p>
  <p><a id="rain12"> l</p>
	




</html>
