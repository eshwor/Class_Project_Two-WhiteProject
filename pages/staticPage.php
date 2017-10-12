 
            <h4><a href="#"><?php echo ucwords($pagename);  ?></a></h4><br />
			<p><?php echo html_entity_decode( $pagedesc );  ?></p>
            
            <?php
			if($_GET['sid']==6)
			{ ?>
            
       <a  href="pages/feedback.php?KeepThis=true&TB_iframe=true&height=500&width=500"  class="thickbox big_black_link">send Feedback</a>
            <?php
			}		
			?>