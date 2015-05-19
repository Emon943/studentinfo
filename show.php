<html>
<?php 
	$link = mysql_connect("localhost", "root", "root123");
    mysql_select_db("student1", $link);
	function calculate_gpa($m){ 
	if($m <= 39){
		$gpa = "F";}
	elseif($m <= 44){
		$gpa = "D";}
	elseif($m <= 49){
		$gpa = "C";}
	elseif($m <= 54){
		$gpa = "C+";}
	elseif($m <= 59){
		$gpa = "B-";}
	elseif($m <= 64){
		$gpa = "B";}
	elseif($m <= 69){
		$gpa = "B+";}
	elseif($m <= 74){
		$gpa = "A-";}
	elseif($m <= 79){
		$gpa = "A";}
	elseif($m <= 100){
		$gpa = "A+";}

	return $gpa;
}
	$query = "SELECT * FROM information i";
	$result = mysql_query($query) or die( "Error in: ".mysql_error());
    $num = mysql_num_rows($result); 
	//echo $num;
	?>
	<center>
	<table widtd="200" border="1" cellspacing="1" cellpadding="1">
	

	<tr>
		
		<th>FIrst Name</th>
		<th>Last Name</th>
		<th>Student Roll</th>
		<th>Address</th>
		<th>E-mail</th>
		<th>Sex</th>
		<th>Extra have 1</th>
		<th>Extra have 1</th>
		<th>Department</th>
		<th>Session</th>
		<th>Grade</th>
	</tr>
  
 <tr>
 <?php while($row = mysql_fetch_array($result)){ ?>
   
    <td><?php echo $row[0];?> </td>
	<td><?php echo $row[1];?> </td>
    <td><?php echo $row[2];?> </td>
	<td><?php echo $row[3];?> </td>
    <td><?php echo $row[4];?> </td>
   	<td><?php echo $row[5];?> </td>
	<td><?php if($row[6]) echo $row[6];  else echo "X"; ?> </td>
    <td><?php if($row[7]) echo $row[7];  else echo "X"; ?> </td>
    <td><?php echo $row[8];?> </td>
	 <td><?php echo $row[9];?> </td>
	<td><?php echo calculate_gpa($row[10]);?> </td>
  </tr>
    
<?php } ?>

  
</table>
</center>
</html>