<?php
//server connection
$con    =   mysql_connect("localhost","root","") or die("Failed connecting to server".mysql_error());
if($con)
{
	echo "server connected succesfully<br>";
}

$seldb    =   mysql_select_db("db_whitehouse") or die("Failed connecting to database".mysql_error());
if($seldb)
{
	echo "database connected succesfully<br>";
}

// insert
/*
$insert     =    "INSERT INTO 	`tbl_user`  SET `username`='kiran',
												`password`='kiran',
												`fullname`='kiran uperati'
                                                 ";
												 
$result    =     mysql_query( $insert ) or die("Wrong query".mysql_error());
if($result)
{
echo "data inserted succesfully<br>";	
}
*/


/*$update     =    "UPDATE 	`tbl_user`  SET `username`='shyam',
												`password`='shyam',
												`fullname`='shyam shrestha'
												where username='ram' 
                                                 ";
												 //id='1'
$result    =     mysql_query( $update ) or die("Wrong query".mysql_error());
if($result)
{
echo "data updated succesfully";	
}*/


/*$delete     =    "Delete from 	`tbl_user` 	where id='1' ";
												 //id='1'
$result    =     mysql_query( $delete ) or die("Wrong query".mysql_error());
if($result)
{
echo "data deleted succesfully";	
}
*/

$sql   =   "select * from tbl_user order by id asc limit 0,5";
$result   =   mysql_query($sql);
echo mysql_num_rows($result);
echo "<br>";
while($row  =   mysql_fetch_array($result))
{
	
echo $row['username']."<br>";	
echo $row['password']."<br>";	
echo $row['fullname']."<hr>";	
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

<table cellpadding="5" cellspacing="5"  class="tabledisplay">
<tr class="table_head">
<td>Username</td>
<td>Password</td>
<td>Fullname</td>
</tr>
<?php
$sql   =   "select * from tbl_user order by id asc limit 0,5";
$result   =   mysql_query($sql);
while($row  =   mysql_fetch_array($result))
{

?>
<tr>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['fullname']; ?></td>
</tr>

<?php } ?>
</table>