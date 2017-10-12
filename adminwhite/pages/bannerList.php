<?php
$result  =  $funObj->bannerListpage();
?>
<table width="880" border="0" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="5"><h2>Banner Management  Section</h2></td>
 
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
    <td align="right"><a href="index.php?_page=add_edit_banner&action=add" title="Add"><img src="images/add-new.png" border="0" alt="add" /></a></td>
  </tr>
  </table>
  
  <table width="880" border="0" cellpadding="5" cellspacing="5" class="tabledisplay">
  <?php if($result[0]>0)
  {
	 
	  ?>
  <tr class="table_head">
    <td>Banner Name</td>
    <td>Banner Image</td>
   <td>Static Page Name</td>
      <td>Status</td>
    <td colspan="2">Action</td>
  </tr>
  <?php 
  
   $sn=1;
   $res    =  $funObj->exec($result[1]);
   while($row   =  $funObj->fetch_array($res))
	  { ?>
  <tr  <?php echo ($sn%2==0)?"class=even":"class=odd"; ?> onmouseover="mover(this);" onmouseout="mout(this);" >
    <td><?php echo $row['banner_name']; ?></td>
    <td><?php $img    =   $row['banner_image'];
	if(file_exists("images/banner/".$img) && !empty($img))
	{
	?>
    
   <!-- <img src="images/banner/<?php echo $img; ?>" height="150" width="150" border="0" />-->
   
   
   <!--
   rel="lytebox[banner]"
   rel="lyteframe[banner]"
   
   fltr[]=wmt|kiran|5|TR
   wmi|../adminwhite/images/add-new.png
   flip|x
   
   flip|y
   fram|10
   ra=30
   ra=60
   fltr[]=elip
   -->
  <a href="images/banner/<?php echo $img; ?>" rel="lyteshow[banner]">
 <img src="../phpthumb/phpthumb.php?src=../adminwhite/images/banner/<?php echo $img; ?>&aoe=1&h=150&w=150&fltr[]=wmt|white" border="0" />
 </a>
    <?php } ?>
    </td>
    
    
    
    
    
     <td><?php $staticId   =  $row['static_id'];
	 echo $funObj->staticPagename($staticId);
	 
	 ?></td>
   <td><?php echo ($row['status']==1)?"Active":"Inactive"; ?></td>
   	 	
    <td><a href="index.php?_page=add_edit_banner&action=edit&aid=<?php echo $row['id']; ?>" title="Edit"><img src="images/edit.gif" border="0" alt="Edit" /></a></td>
    <td><a href="pages/act_banner.php?action=delete&aid=<?php echo $row['id']; ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this row!!');"><img src="images/delete.png" border="0" alt="Delete" /></a></td>
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
