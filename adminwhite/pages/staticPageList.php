<?php
$result  =  $funObj->staticPageListpage();
?>
<table width="880" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="5"><h2>Static Page Section</h2></td>
 
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
    <td align="right" style="display:none;"><a href="index.php?_page=add_edit_staticPage&action=add" title="Add"><img src="images/add-new.png" border="0" alt="add" /></a></td>
  </tr>
  </table>
  
  <table width="880" border="0" cellpadding="5" cellspacing="5" class="tabledisplay">
  <?php if($result[0]>0)
  {
	 
	  ?>
  <tr class="table_head">
    <td>Page Name</td>
    <td>Page Title</td>
   <!-- <td>Page Description</td>-->
      <td>Meta  Name</td>
    <td>Meta Description</td>
    <td>Meta Keywords</td>
    <td colspan="2">Action</td>
  </tr>
  <?php 
  
   $sn=1;
   $res    =  $funObj->exec($result[1]);
   while($row   =  $funObj->fetch_array($res))
	  { ?>
  <tr  <?php echo ($sn%2==0)?"class=even":"class=odd"; ?> onmouseover="mover(this);" onmouseout="mout(this);" >
    <td><?php echo $row['pagename']; ?></td>
    <td><?php echo $row['pagetitle']; ?></td>
      <!--  <td><?php echo substr($row['pagedesc'],0,40); ?></td>-->
    <td><?php echo $row['metaname']; ?></td>

    <td><?php echo substr($row['metadesc'],0,40); ?></td>
    <td><?php echo substr($row['metakeyword'],0,40); ?></td>

    <td><a href="index.php?_page=add_edit_staticPage&action=edit&aid=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" alt="Edit" /></a></td>
    <td style="display:none;"><a href="pages/act_staticPage.php?action=delete&aid=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this row!!');"><img src="images/delete.png" border="0" alt="Delete" /></a></td>
  </tr>
  
  <?php 
  $sn++;
  // while end
  } 
  ?>
  <tr>
  <td colspan="8" align="right"><?php echo $result[2]; ?></td>
  </tr>
  
  <?php
  } else { ?>
  <tr>
    <td colspan="8">No records Found!!</td>
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
