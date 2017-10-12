<?Php
$action  =  $_GET['action'];
$aid   =  $_GET['aid'];
if($action=='edit')
{
$row   = $funObj->adminUserSel($aid);	
}

?>
<div id="form_table">
<form action="pages/act_adminuser.php?action=<?php echo $action; ?>&aid=<?php echo $aid; ?>" method="post" onSubmit="return adminUserformCheck();">
<table width="500" border="0" align="center" class="formtable" cellpadding="5" cellspacing="5">
  <tr>
    <td colspan="2"><h2><?php echo ($action=='add')?" Add ":" Edit "; ?> Admin User </h2><hr></td>
    </tr>
  <tr>
    <td width="120">Username</td>
    <td><label>
      <input type="text" name="username" id="username" onKeyUp="remove('username');" value="<?php echo $row['username']; ?>">
    </label>
    <div id="usernameErr" class="loginErr"></div>
    </td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" id="password" onKeyUp="remove('password');">
        <div id="passwordErr" class="loginErr"></div>
        <?php if($action=='edit')
		{
		echo "Current Password : <b>".base64_decode($row['password'])."</b>";	
		}
		?>
    </td>
  </tr>
  <tr>
    <td>Fullname</td>
    <td><input type="text" name="fullname" id="fullname" onKeyUp="remove('fullname');" value="<?php echo $row['fullname']; ?>">
        <div id="fullnameErr" class="loginErr"></div>
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