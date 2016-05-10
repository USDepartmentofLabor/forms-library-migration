<TABLE CELLPADDING="0" CELLSPACING="0" VSPACE="0" HSPACE="0" BORDER="0" WIDTH="40%" ALIGN="RIGHT" > 

<TR> 
<TD BGCOLOR="#990000" VALIGN="TOP" ALIGN="LEFT" HEIGHT="18">
</TD> 
<TD BGCOLOR="#990000" ALIGN="CENTER" HEIGHT="18">
<B><FONT STYLE="font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 12pt" COLOR="#ffffff">On This Page</FONT></B></TD> 
<TD BGCOLOR="#990000" VALIGN="TOP" ALIGN="RIGHT" HEIGHT="18">
</TD> 
</TR> 
<TR VALIGN="TOP"> 
<TD COLSPAN="3" VALIGN="TOP" BGCOLOR=""> 
<TABLE BGCOLOR="#990000" CELLPADDING="1" CELLSPACING="0" WIDTH="100%" VSPACE="0" HSPACE="0" BORDER="0"> 
<TR> 
<TD> 
<TABLE BGCOLOR="#990000" BORDER="0" HSPACE="0" VSPACE="0" CELLPADDING="5" CELLSPACING="0" WIDTH="100%"> 
<TR> 
<TD COLSPAN="3" ALIGN="LEFT" BGCOLOR="#FFFFFF">
<UL> 


<?php 

$sub_header = '';

foreach($title_results as $title_obj){

	if($title_obj->AgencyName !== $sub_header) {
		$sub_header = $title_obj->AgencyName;
 		echo ("<LI><A HREF='#$title_obj->AgencyID'>$title_obj->AgencyName</A></LI>");	
	}
}
?>

 </UL>
		</TD></TR></TABLE>
	</TD></TR></TABLE>
</TD></TR></TABLE> 
<?php 
echo $title_page.'<BR><BR><BR>';
 
$sub_header = '';
$needle = 0;
//print_r($title_results);exit;

 foreach($title_results as $title_obj){

 	if($title_obj->AgencyName !== $sub_header) {
 		if($needle !== 0){
 		echo '</ul>';		
 		}
 		$sub_header = $title_obj->AgencyName;
 		
 		echo('<h2><A NAME='.$title_obj->AgencyID.'>'.$title_obj->AgencyName.'</A></h2>');
 		echo '<ul>';			 		
 	}
 	echo '<li>';
 	echo anchor('forms/agency_view/'.$title_obj->FormNumber, $title_obj->Title );
 	echo '</li>';	
 	$needle++;
 }
?>
<br> 
</TD>
</TR>

</TABLE>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<br /><br /><br /><br /><br /><br /><br /><br />


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

</div><!--Content End -->