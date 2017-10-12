<?php
/*$fol    =  mkdir("kiran",0700);
if($fol)
{
echo "folder created";	
}
*/

/*$p  =   touch("kiran/sanjay.txt");
if($p)
{
echo "file created";	
}*/
/*
$fp   =  fopen("kiran/sanjay.txt","a");

$str    =    "this is the file class";

$fw   =  fputs($fp,$str,1024);
if($fw)
{
echo "it is written";	
}

fclose($fp);
*/

//$fp   =  fopen("kiran/sanjay.txt","r");

/*while(!feof($fp))
{
echo fgets($fp,10);	
}*/

//echo fread($fp,filesize("kiran/sanjay.txt") );


//fclose($fp);


/*$f   =  file("kiran/sanjay.txt");

foreach($f as $v)
{
echo $v;	
}*/

//copy("kiran/sanjay.txt","kiran/ram.txt");
//rename("kiran/sanjay.txt","kiran/sita.txt");

/*$fp   =  fopen("kiran/sanjay.txt","w");
fclose($fp);
*/

//unlink("kiran/ram.txt");

if(file_exists("kiran"))
{
    $mydir   =  "kiran/";
	$d   = dir($mydir);
	while($entry   = $d->read())
	{
	if($entry !="." && $entry!="..")
	{
	echo $entry."<br>";	
	unlink($mydir.$entry);
	echo "=>Deleted<br>";
	}
		
		
	}
	$d->close();
	rmdir($mydir);
	
}


?>