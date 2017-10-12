<?php
$result  =  $funObj->adminUserList();
$num     =  $funObj->total_rows($result);
?>
<table width="880" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="5"><h2>Admin User Section</h2></td>
 
  </tr>
    <tr>
      <td align="left"><?php
	  if(isset($_SESSION['successMessage'] ))
	  {
		echo $_SESSION['successMessage'];  
		unset($_SESSION['successMessage']);
		  
	  }
	  ?>
      </td>
    <td align="right"><a href="index.php?_page=add_edit_adminuser&action=add" title="Add"><img src="images/add-new.png" border="0" alt="add" /></a></td>
  </tr>
  </table>
  
  <table width="880" border="0" cellpadding="5" cellspacing="5" class="tabledisplay">
  <?php if($num>0)
  {
	 
	  ?>
  <tr class="table_head">
    <td>Username</td>
    <td>Password</td>
    <td>Fullname</td>
    <td colspan="2">Action</td>
  </tr>
  <?php 
  
   $sn=1;
   while($row   =  $funObj->fetch_array($result))
	  { ?>
  <tr  <?php echo ($sn%2==0)?"class=even":"class=odd"; ?> onmouseover="mover(this);" onmouseout="mout(this);" >
    <td><?php echo $row['username']; ?></td>
    <td><?php echo base64_decode($row['password']); ?></td>
    <td><?php echo $row['fullname']; ?></td>
    <td><a href="index.php?_page=add_edit_adminuser&action=edit&aid=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" alt="Edit" /></a></td>
    <td><a href="pages/act_adminuser.php?action=delete&aid=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this row!!');"><img src="images/delete.png" border="0" alt="Delete" /></a></td>
  </tr>
  
  <?php 
  $sn++;
  // while end
  } 
  } else { ?>
  <tr>
    <td colspan="5">No records Found!!</td>
  </tr>
  <?php } ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
