<?Php
$action  =  $_GET['action'];
$aid   =  $_GET['aid'];
if($action=='edit')
{
$row   = $funObj->newsPageSel($aid);	
}

?>
<div id="form_table">
<form action="pages/act_newsPage.php?action=<?php echo $action; ?>&aid=<?php echo $aid; ?>" method="post" onSubmit="return adminUserformCheck();">
<table width="880" border="0" align="center" class="formtable" cellpadding="5" cellspacing="5" align="left">

  <tr>
    <td colspan="2"><h2><?php echo ($action=='add')?" Add ":" Edit "; ?> News Page</h2><hr></td>
    </tr>
  <tr> 	 	 	 	 	 
    <td width="120">News Title</td>
    <td><label>
      <input type="text" name="news_title" id="news_title" onKeyUp="remove('news_title');" value="<?php echo $row['news_title']; ?>">
    </label>
    <div id="news_titleErr" class="loginErr"></div>
    </td>
  </tr>
  
  <tr>
    <td>News Description</td>
    <td><textarea name="news_description" id="news_description" rows="10" cols="40"><?php echo $row['news_description']; ?></textarea>
  
    <div id="metakeywordErr" class="loginErr"></div>
    </td>
  </tr>
  
  
  
  <tr>
    <td>News Date</td>
    <td><input type="text" name="news_date" id="news_date" onKeyUp="remove('news_date ');" value="<?php echo $row['news_date']; ?>">
       
        <span>
            <img src="../calender/cal.gif" id="calendar-trigger"></span>
             <div id="news_dateErr" class="loginErr"></div>


        <script>			
        Calendar.setup({
		trigger    : "calendar-trigger",
		dateFormat: "%Y-%m-%d",
        inputField : "news_date",
		min: 20050408,
        max: 20111225,
		onSelect   : function() { this.hide() }
			
    });
</script>
    </td>
  </tr>
  <tr>
    <td width="120">News Author</td>
    <td><label>
      <input type="text" name="news_author" id="news_author" onKeyUp="remove('news_author');" value="<?php echo $row['news_author']; ?>">
    </label>
    <div id="news_authorErr" class="loginErr"></div>
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