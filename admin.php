
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title>Calibration</title>
	<style type="text/css">
		* {margin: 0; padding: 0}
		body {text-align: center; }
		form, div#wrap {border: none; margin: 10px;  text-align: center; position: center; align:center; width: 40px;}
		fieldset {padding: 10px; border: solid #999 2px;}
		img {width: 320px; height: 240px;}
		table { align:center; border: solid #000 1px; border-collapse: collapse;}
		td {border: solid #000 1px; padding: 2px 5px; white-space: }
		br {width: 400px; height: 1px; clear: both; }
	</style>
	<script src="jquery.min.js"></script>

	
	
<script>
 

var counter=0;

jQuery().ready(function(){
    setInterval("getResult()",1000); //set theinterval for the update

});
function getResult(){  



    jQuery.post("update0.php",function(myfilename0) {

		$("#namea").html(myfilename0);});


    jQuery.post("update1a.php",function(myfilename0) {

		$("#chem1a").html(myfilename0);});

    jQuery.post("update1b.php",function(myfilename0) {

		$("#chem3a").html(myfilename0);});

    jQuery.post("update1c.php",function(myfilename0) {

		$("#chem5a").html(myfilename0);});

    jQuery.post("update1d.php",function(myfilename0) {

		$("#chem2a").html(myfilename0);});

    jQuery.post("update1e.php",function(myfilename0) {

		$("#chem4a").html(myfilename0);});



    jQuery.post("update1f.php",function(myfilename0) {

		$("#chem6a").html(myfilename0);});




}







</script>


</head>


<body align="center">



<div align="center">






<table >
<tbody>

<?php


session_start();

	
if (isset($_POST['sub']))
{
$data0=$_POST['name'];
$data1=$_POST['chem1'];
$data2=$_POST['chem2'];
$data3=$_POST['chem3'];
$data4=$_POST['chem4'];
$data5=$_POST['chem5'];
$data6=$_POST['chem6'];




$ret0 = file_put_contents('loc.txt',$data0);	
$ret1 = file_put_contents('ml1.txt',$data1);	
$ret2 = file_put_contents('rl1.txt',$data2);	
$ret1 = file_put_contents('ml2.txt',$data3);	
$ret2 = file_put_contents('rl2.txt',$data4);	
$ret3 = file_put_contents('ml3.txt',$data5);	
$ret4 = file_put_contents('rl3.txt',$data6);	
}




?>


<tr>



<td>



<table  >

 <form method="POST" action="admin.php"  >

  <tr>
  
  <td>Location </td>  <td>      <a id="namea" ></a></td>

<td>      <input  name="name" type="text " size="10"  /></td>

  </tr>
 <tr>
  
  <td>Moisture lvl1 </td>    <td><a id="chem1a" ></a> </td> <td>  
  <input  name="chem1" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>Rain lvl1  </td> <td><a id="chem2a" ></a> <td>      <input id="chem2" name="chem2" type="text " size="10"  /></td>
</tr>
  <tr>
  <tr>
  
  <td>Moisture lvl2 </td> <td><a id="chem3a" ></a> <td>  
  <input  name="chem3" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>Rain lvl2  </td> <td><a id="chem4a" ></a><td>      <input id="chem4a" name="chem4" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>Moisture lvl3  </td> <td><a id="chem5a" ></a> <td>      <input name="chem5" type="text " size="10"  /></td>
</tr>
  <tr>
  
  <td>Rain lvl3 </td> <td><a id="chem6a" ></a> <td>      <input name="chem6" type="text " size="10"  /></td>
</tr>
  <tr>
  
 

<input type="submit" name="sub" value=" Save " >
</form>



</table>




</td>



</tr>

</tbody>
</table>
<!-- DivTable.com -->















<br />
</div>
</body>
</html>
