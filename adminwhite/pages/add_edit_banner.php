<?Php
$action  =  $_GET['action'];
$aid   =  $_GET['aid'];
if($action=='edit')
{
$row   = $funObj->bannerSel($aid);	
}

?>
<div id="form_table">
<form action="pages/act_banner.php?action=<?php echo $action; ?>&aid=<?php echo $aid; ?>" method="post" onSubmit="return bannerCheck();" enctype="multipart/form-data">

<table width="880" border="0" align="center" class="formtable" cellpadding="5" cellspacing="5" align="left">

  <tr>
    <td colspan="2"><h2><?php echo ($action=='add')?" Add ":" Edit "; ?> Banner</h2></td>
    </tr>
  <tr> 	 	 	 	 	 
    <td width="120">Banner Name</td>
    <td><label>
      <input type="text" name="banner_name" id="banner_name" onKeyUp="remove('banner_name');" value="<?php echo $row['banner_name']; ?>">
    </label>
    <div id="banner_nameErr" class="loginErr"></div>
    </td>
  </tr>
  <?php
  if($action=='edit')
  {
  ?>
  <tr> 	 	 	 	 	 
    <td width="120">Current Image</td>
    <td><?php $img    =   $row['banner_image'];
	if(file_exists("images/banner/".$img) && !empty($img))
	{
	?>
    
   <a href="images/banner/<?php echo $img; ?>" rel="lyteshow[banner]">
 <img src="../phpthumb/phpthumb.php?src=../adminwhite/images/banner/<?php echo $img; ?>&aoe=1&h=250&w=250" border="0" />
 </a>
    <?php } ?>
    <div id="banner_nameErr" class="loginErr"></div>
    </td>
  </tr>
  <?php
  }?>
  
  
  <tr>
    <td>Banner Image</td>
    <td><input type="file" name="image" id="image" /> 
    <input type="hidden" name="old_image"  id="old_image" value="<?php echo $img; ?>" />
    <div id="imageErr" class="loginErr"></div>
    </td>
  </tr>
  
  
  
 
  <tr>
    <td width="120">Page Name</td>
    <td>
    <select name="static_id" id="static_id">
    <option value="-1">Choose page Name</option>
    <?php $res   =  $funObj->staticpages();
	while($rowpage   =  $funObj->fetch_object($res))
	{
	?>
    <option value="<?php echo $rowpage->id; ?>"  <?php echo ($row['static_id']==$rowpage->id)?"selected":""; ?>  ><?php echo $rowpage->pagename; ?></option>
    <?php } ?>
    </select>
    <div id="static_idErr" class="loginErr"></div>
    </td>
  </tr>
  
  <tr>
    <td width="120">Status</td>
    <td><select name="status" id="status">
    <option value="-1">Choose Status</option>
    <option value="1" <?php echo ($row['status']==1)?"selected":""; ?>  >Active</option>
        <option value="0" <?php echo ($row['status']==0)?"selected":""; ?> >Inactive</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="save" id="save" value="Save">
    </label>
    <input type="reset">
    <input type="button" value="Back" onclick="history.go(-1);">
    
    </td>
  </tr>
</table>


</form>
</div>