<?php
$uname  =  $_GET['id'];

mysql_connect("localhost","root","");
mysql_select_db("db_whitehouse");
$sql  = "select * from tbl_adminuser where username like '%$uname%'";
$result  =  mysql_query($sql);
$num   = mysql_num_rows($result);
?>
<table cellpadding="5" cellspacing="5" border="0" bgcolor="#CCCCCC">
<?php
if($num>0)
{
while($row  = mysql_fetch_array($result))
{
?>

<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo base64_decode($row['password']); ?></td>
<td><?php echo $row['fullname']; ?></td>
</tr>
<?php }
}
else
{
?><tr><td colspan="5">No record found</td></tr>
<?Php	
}?>
</table>