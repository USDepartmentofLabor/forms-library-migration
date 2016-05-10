<P><H2 CLASS="headermed">Forms By Title</H2></P>   
<P><FONT COLOR="#000000">Click on a letter to jump to a section or scroll through the list of forms.</FONT><P><!--status end-->

	<TABLE SUMMARY="Alphabetical Search" CELLPADDING="3" BORDER=".5" CELLSPACING="0" BORDERCOLORDARK="#003399" BORDERCOLORLIGHT="#FFFFFF"> 
		<TR VALIGN="TOP"> 
<?php 

$img_top_red_arrow = array(
		'type' => 'image',
		'src' => 'assets/images/topdoc.gif',
		'alt' => 'Back to Top',
		'align' => 'middle',
		'height' => '18',
		'border' => 0,
		'width' => 18,
		'class' => 'searchButton'
);
		$letters = range('a', 'z');
?>
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListA">A</A></B></FONT></TD> 			
			<TD ALIGN="CENTER" VALIGN="MIDDLE">B</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListC">C</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListD">D</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListE">E</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListF">F</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">G</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListH">H</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">I</TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">J</TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">K</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListL">L</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListM">M</A></B></FONT></TD> 	
		</TR>
		<TR VALIGN="TOP">
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListN">N</A></B></FONT></TD> 		
			<TD ALIGN="CNTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListO">O</A></B></FONT></TD> 			
			<TD ALIGN="CENTER" VALIGN="MIDDLE">P</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListQ">Q</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListR">R</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListS">S</A></B></FONT></TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">T</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListU">U</A></B></FONT></TD> 	
			<TD ALIGN="CENTER" VALIGN="MIDDLE">V</TD> 
			<TD ALIGN="CENTER" VALIGN="TOP"><FONT SIZE="+1"><B><A HREF="#ListW">W</A></B></FONT></TD> 			
			<TD ALIGN="CENTER" VALIGN="MIDDLE">X</TD> 	
			<TD ALIGN="CENTER" VALIGN="MIDDLE">Y</TD> 
			<TD ALIGN="CENTER" VALIGN="MIDDLE">Z</TD> 
		</TR> 
	</TABLE> 
 
<?php 
 
 $needle = '';
 foreach($title_results as $title_obj){
	
	if($title_obj->Title[0] !== $needle) {
		$needle = $title_obj->Title[0];

		if($title_obj->Title[0] !== "A"){
		
		print_r("<a href='#'><b><font style='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 8pt' color='#003399'> Back to Top</font></b></a>");
		echo '</ul><hr>';
		
		}
		print_r("<P><A NAME='List".$needle."'></A></P><H3 tabindex = '-1'>".$needle."</H3>");
		echo '<ul>';
 	}
 	
 	echo '<li>'.anchor('forms/agency_view/'.$title_obj->FormNumber, $title_obj->Title, array('title' => 'Form Description: '.$title_obj->FormDesc)).'</li>';

 }
 print_r("<a href='#'><b><font style='font-family: Verdana, Arial, Helvetica, Sans-serif; font-size: 8pt' color='#003399'> Back to Top</font></b></a>");
 
?>

</TD>
</TR>
</TABLE>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

</div><!--Content End -->