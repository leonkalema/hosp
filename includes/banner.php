    <table border="0" width="100%" cellpadding="2" cellspacing="2">
        <tr>
            <td align="left" style="padding-top:15px; padding-bottom:5px;">
               <?php
                    if($num != 0)
					{
					?>
                    <div id="s3" class="pics3" style="position: relative;">
                        <?php
						while($pics = mysql_fetch_array($qry))
						{
						?>
                        <div style="width:1009px; height:376px; background-color:#000000;">
                        <table border="0" width="100%" cellpadding="0" cellspacing="0">
                        	<tr>
                            	<td>
                                	
									<?php 
									
									$image = getimagesize("../file_loads/".$pics['picture']);
								?>
								   <img src="../file_loads/<?php echo $pics['picture']; ?>" width="<?php echo $image[0]; ?>" height="<?php echo $image[1]; ?>" />
                    
                                </td>
                            </tr>
                        </table>
                        </div>
                        <?php	
						}
						?>
              		</div>
                    <?php
					}
					?>
        	</td>
      	</tr>
        <tr>
        	<td align="right">
            	<table border="0" width="8%" cellpadding="0" cellspacing="0">
                	<tr>
                    	<td align="right">
                        	<a id="prev3" href="../start/index.php#"><img src="../images/left.gif" width="32" height="29" /></a>
                        </td>
                        <td align="right">
                        	<a id="next3" href="../start/index.php#"><img src="../images/right.gif" width="32" height="29" /></a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
   </table>