<!DOCTYPE html>
<html><head>
<title></title>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>

<body align="center">
<div align="center">

	  <?php
	 include("db_con.php");
	  $sql="select * from data ORDER BY soilnumber DESC";
	  $row=mysql_query($sql) or die (mysql_error($con));
	 
	  ?><table border="1">
	  	    <td width="180px"> Ref </td>
	  
	  	    <td width="180px"> Loc </td>
	  <td width="180px"> Moisture  </td>
	 <td width="220px">  Rain  </td>
 <td width="280px"> Erosion  </td>

 <td width="280px">Date </td>
 <td width="280px"> Level  </td>

	  <?php

	  while($data=mysql_fetch_array($row))
	  {
	  ?>
	  <tr>
  <td  ><?php echo $data[soilnumber]; ?></td>	
  <td  ><?php echo $data[loc]; ?></td>
	  <td  ><?php echo $data[mois]; ?></td>
	<td  ><?php echo $data[rain]; ?></td>
	<td  ><?php echo $data[gyro]; ?></td>
		<td  ><?php echo $data[dates]; ?></td>
		<td  ><?php echo $data[level]; ?></td>
	
  </tr>
	  <?php
	  }
	  
	  
	  ?>
	  </table>
	  
	  </div>
	   </div ></body></html>