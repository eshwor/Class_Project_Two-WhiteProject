<?Php
$action  =  $_GET['action'];
$aid   =  $_GET['aid'];
if($action=='edit')
{
$row   = $funObj->staticPageSel($aid);	
}

?>
<div id="form_table">
<form action="pages/act_staticPage.php?action=<?php echo $action; ?>&aid=<?php echo $aid; ?>" method="post" onSubmit="return adminUserformCheck();">
<table width="880" border="0" align="center" class="formtable" cellpadding="5" cellspacing="5" align="left">
  <tr>
    <td colspan="2"><h2><?php echo ($action=='add')?" Add ":" Edit "; ?> Static Page</h2><hr></td>
    </tr>
  <tr> 	 	 	 	 	 
    <td width="120">Pagename</td>
    <td><label>
      <input type="text" name="pagename" id="pagename" onKeyUp="remove('pagename');" value="<?php echo $row['pagename']; ?>">
    </label>
    <div id="pagenameErr" class="loginErr"></div>
    </td>
  </tr>
  
  <tr>
    <td>PageTitle</td>
    <td><input type="text" name="pagetitle" id="pagetitle" onKeyUp="remove('pagetitle');" value="<?php echo $row['pagetitle']; ?>">
        <div id="pagetitleErr" class="loginErr"></div>
    </td>
  </tr>
  
  <tr>
    <td width="120">PageDescription</td>
    <td>
    <?php
	    $oFCKeditor = new FCKeditor("pagedesc");
		$oFCKeditor->BasePath = "../fckeditor/" ;
		$oFCKeditor->Value = html_entity_decode($row['pagedesc']); 
		$oFCKedtior->Height = 500;
		$oFCKedtior->Width = '100%';
		$oFCKeditor->Create();
	
	?>
    
    </td>
  </tr>
  
  <tr>
    <td>Metaname</td>
    <td><input type="text" name="metaname" id="metaname" onKeyUp="remove('metaname');" value="<?php echo $row['metaname']; ?>">
        <div id="metanameErr" class="loginErr"></div>
    </td>
  </tr>
  <tr>
    <td width="120">MetaDescription</td>
    <td><textarea name="metadesc" id="metadesc" rows="10" cols="40"><?php echo $row['metadesc']; ?></textarea>
  
    <div id="metadescErr" class="loginErr"></div>
    </td>
  </tr>
  
  <tr>
    <td width="120">MetaKeyword</td>
    <td><textarea name="metakeyword" id="metakeyword" rows="10" cols="40"><?php echo $row['metakeyword']; ?></textarea>
  
    <div id="metakeywordErr" class="loginErr"></div>
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