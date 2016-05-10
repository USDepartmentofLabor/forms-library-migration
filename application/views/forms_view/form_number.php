<?php 
echo $title_page.'<BR><BR><BR>';
 foreach($title_results as $title_obj){
 	
 	echo anchor('forms/agency_view/'.$title_obj->FormNumber, $title_obj->AgencyFormNumber );
 	 	echo '<br>';
 	 	echo $title_obj->FormDesc;
 	 	echo '<br>'; 	 	
 	 	echo '<br>';
 	 	echo '<br>';	
 }
?>
<br>

  
</TD>
</TR>
</TABLE>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

</div><!--Content End -->