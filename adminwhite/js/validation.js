// JavaScript Document
function mover(object)
{
   if(object.className=='odd')
    object.className='odd1';
	
	if(object.className=='even')
    object.className='even1';
}

function mout(object)
{
   if(object.className=='odd1')
    object.className='odd';
	
	if(object.className=='even1')
    object.className='even';
}

function adminUserformCheck()
{
    if(document.getElementById('username').value=="")
	{
		
		document.getElementById('username'+'Err').innerHTML='Please enter the Username!!';
		document.getElementById('username').focus();
	return false;	
	}
	else  if(document.getElementById('password').value=="")
	{
	
		document.getElementById('password'+'Err').innerHTML='Please enter the password!!';
		document.getElementById('password').focus();
	return false;	
	}
	
	else  if(document.getElementById('fullname').value=="")
	{
	
		document.getElementById('fullname'+'Err').innerHTML='Please enter the fullname!!';
		document.getElementById('fullname').focus();
	return false;	
	}
	else
	return true;
	
	
}


function remove(divId)
{
	document.getElementById(divId+'Err').innerHTML='';
}


function bannerCheck()
{
    if(document.getElementById('banner_name').value=="")
	{
		
		document.getElementById('banner_name'+'Err').innerHTML='Please enter the Banner Name!!';
		document.getElementById('banner_name').focus();
	return false;	
	}
	else  if(document.getElementById('image').value=="" && document.getElementById('old_image').value=="" )
	{
	
		document.getElementById('image'+'Err').innerHTML='Please upload the image!!';
	
	return false;	
	}
	else  if(document.getElementById('image').value!="" && !document.getElementById('image').value.match(/\.jpg|gif|png|jpeg|JPG|GIF|PNG|JPEG/)  )
	{
	
		document.getElementById('image'+'Err').innerHTML='Please upload the valid image!!';
	
	return false;	
	}
	
	else  if(document.getElementById('static_id').value=="-1")
	{
	
		document.getElementById('static_id'+'Err').innerHTML='Please select the pagename!!';
		document.getElementById('static_id').focus();
	return false;	
	}
	else  if(document.getElementById('status').value=="-1")
	{
	
		document.getElementById('status'+'Err').innerHTML='Please select the status!!';
		document.getElementById('status').focus();
	return false;	
	}
	else
	return true;
	
	
}
