<div id="left_back">
		
			<?php include_once("login.php"); ?>
			<br />
		
			<h3>Company News</h3>
			<div class="title_back">
			<ul>
           <!-- <marquee direction="up" scrollamount="4" onmouseover="this.scrollAmount=0" onmouseout="this.scrollAmount=4">-->
           <div id="marqueecontainer" onmouseover="copyspeed=pausespeed" onmouseout="copyspeed=marqueespeed">
<div id="vmarquee" style="position: absolute; width: 80%;">
           
            <?php
			$result   =  $funObj->newsList();
			while( $row  = $funObj->fetch_assoc($result))
			{
			?>
			  <li>
				  <h4><?php echo $row['news_date']; ?></h4>
				  <p><a href="news-<?php echo $row['id']; ?>"> <?php echo  $row['news_title']; ?></a></p></li>
             <?php } ?>     
			<li><a href="news" title="More News..">More News...</a></li>
            
            
            
            </div>
            </div>
          <!-- </marquee> -->
			 </ul>
			 </div>
				  
				  
				  <BR />
                  <br />
				  
				  <h3>Advertisment</h3>
			<div class="title_back">
			<ul>
			  <li><img src="images/ad-001.jpg" border="0" /></li>
				  <li> <img src="images/ad-002.jpg" border="0" /></li>
			      </ul>
				  </div>
		 </div>