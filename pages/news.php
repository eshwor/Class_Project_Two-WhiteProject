<?php
if(isset($_GET['newsId']))
{
$newsIds   =   $_GET['newsId'];
$row_news  =  $funObj->newsSelected($newsIds);
?>
<div id="newsdiv">
<table cellpadding="5" cellspacing="5" border="0" width="500">
<tr>
<td class="news_head"><?php echo ucwords($row_news['news_title']); ?> </td>
<td align="right"><?php echo $row_news['news_date']; ?></td>
</tr>

<tr>
<td colspan="2"><hr></td>
</tr>

<tr>
<td colspan="2"><p class="news_desc"><?php echo $row_news['news_description']; ?></p></td>
</tr>

<tr>
<td colspan="2" align="right"><b><i><?php echo $row_news['news_author']; ?></i></b></td>
<td></td>
</tr>
</table>
</div>


<?php
}
else
{
	$res_news  =    $funObj->getAllNews();
if($res_news[0]>0)
{
	$result_news  =  $funObj->exec($res_news[1]);
	while($row_news  = $funObj->fetch_assoc($result_news))
	{
?>
<div id="newsdiv">
<table cellpadding="5" cellspacing="5" border="0" width="500">
<tr>
<td class="news_head"><?php echo ucwords($row_news['news_title']); ?> </td>
<td align="right"><?php echo $row_news['news_date']; ?></td>
</tr>

<tr>
<td colspan="2"><hr></td>
</tr>

<tr>
<td colspan="2"><p class="news_desc"><?php echo $row_news['news_description']; ?></p></td>
</tr>

<tr>
<td colspan="2" align="right"><b><i><?php echo $row_news['news_author']; ?></i></b></td>
<td></td>
</tr>
</table>
</div>
<br>

<?php	
	}
	?>
    
    <?php
	echo $res_news[2]; 
}
}

?>