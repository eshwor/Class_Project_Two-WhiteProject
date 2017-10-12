<?php
$index  =  array("ram","shyam","gita");

echo "<pre>";
print_r($index);
echo "</pre>";


echo "<br>";

echo $index[1];

echo "<br>";

foreach($index as $key=>$val)
{
echo $key."=".$val."<br>";	
}

echo "<br>";

//echo count($index);

echo sizeof($index);


echo "<br>";

//unset($index[1]);
//unset($index);
echo "<pre>";
print_r($index);
echo "</pre>";


//sort($index);
//rsort($index);
//asort($index);
arsort($index);
echo "<pre>";
print_r($index);
echo "</pre>";


$assoc   =   array("name"=>"ram",
				   "age"=>25,
				   "sex"=>"male"
				   );

foreach($assoc  as $key=>$val)
{
echo $key."=".$val."<br>";		
}



$mul  =  array("name"=>array("ram","shyam","gita"),
    		 "age"=>array("24","25","26"),
			 "sex"=>array("male","male","female")
							 );


foreach($mul  as $key=>$val)
{
echo $key."<br><br>";		
	
	foreach($val  as $k=>$v)
	{
	echo $k."=".$v."<br>";		

    }
}
							 
echo count($mul);


$ra   =  range(1,100,2);
echo "<pre>";
print_r($ra);
echo "</pre>";


$st  =  "This is the array class";
$ar   =  explode(" ",$st );
echo "<pre>";
print_r($ar);
echo "</pre>";

echo implode(",",$ar);
?>
<br>
<br>
DOB   
<select name="year">
<option value="-1">Choose year</option>
<?php
$year  =  range(2010,1900);
foreach($year as $val)
{
?>
<option value="<?php echo $val; ?>"><?php echo $val; ?></option>
<?php } ?>
</select>


<select name="mon">
<option value="-1">Choose month</option>
<?php
$mon  =  array("1"=>"jan",
			   "2"=>"feb",
			   "3"=>"mar",
			   "4"=>"apr"
			   );
			   
foreach($mon as $key=>$val)
{
?>
<option value="<?php echo $key; ?>"><?php echo $val; ?></option>
<?php } ?>
</select>


<select name="Day">
<option value="-1">Choose Day</option>
<?php
$day  =  range(1,31);
foreach($day as $val)
{
?>
<option value="<?php echo $val; ?>"><?php echo $val; ?></option>
<?php } ?>
</select>