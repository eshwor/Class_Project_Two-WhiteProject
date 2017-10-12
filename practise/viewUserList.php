<?php
//server connection
$con    =   mysql_connect("localhost","root","") or die("Failed connecting to server".mysql_error());
if($con)
{
	//echo "server connected succesfully<br>";
}

$seldb    =   mysql_select_db("db_whitehouse") or die("Failed connecting to database".mysql_error());
if($seldb)
{
	//echo "database connected succesfully<br>";
}
?>
<style>
.tabledisplay
{
background:#333;
color:#FFF;
border:1px solid #F00;
}

.table_head
{
background:#666;
text-transform:uppercase;
}

</style>
<a href="joinform.php">Add Data</a>
<table cellpadding="5" cellspacing="5"  class="tabledisplay">
<tr class="table_head">
<td>Username</td>
<td>Password</td>
<td>Fullname</td>
<td>Phone</td>
<td>Location</td>
</tr>
<?php
$sql   =   "select * from tbl_user,tbl_user_desc where tbl_user.id=tbl_user_desc.user_id order by tbl_user.id desc";
$result   =   mysql_query($sql);
while($row  =   mysql_fetch_array($result))
{

?>
<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['fullname']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['location']; ?></td>
</tr>

<?php } ?>
</table>
