<?php session_start();
echo $_SESSION['userid'];?>
<!DOCTYPE html>
<html>
<head>
<script>
function changeImage()
{
	
}
</script>
</head>
<body>
<table width="200" border="1">
  <tbody>
    <tr>
      <td rowspan="3" width="70px"><img src="images/profile.png"></td>
      <td width="100%">U Id</td>
    	<td><input type="text" value="<?php echo $_SESSION['userid']; ?>"  readonly ></td> 
    </tr>
    <tr>
    	<td>Name</td>
      <td><input type="text" value="<?php echo $_SESSION['name']; ?>"  readonly ></td>
    </tr>
    <tr>  
      <td>Email</td>
      <td><input type="text" value="<?php echo $_SESSION['email']; ?>"  readonly ></td>
    </tr>
    <tr>
    <td>&nbsp;</td>
      <td>Phone </td>
      <td><?php
	  $con = mysqli_connect('localhost','root','','ems') or die (mysqli_error());
      $a=$_SESSION['userid'];
	  $sql = "SELECT * FROM participant_signup WHERE userid='$a'";
	$result = $con->query($sql);
	$array = $result->fetch_array(MYSQLI_BOTH);
	$num = $result->num_rows;
	echo $array['phone'];
      ?></td>
    </tr>
    <tr>
    <td><input type="file" value="Upload" >
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>

</body>
</html>