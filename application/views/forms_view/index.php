<?php 

$img_search_forms = array(
		'type' => 'image',
		'src' => base_url('assets/images/SearchButton.gif'),
		'alt' => 'Search DOL Forms',
		'value' => 'Search',
		'border' => '0'
);

$attr_FormOpen = array('id'=>'search-forms');

$attr_FormSubmit = array('value' =>'Submit', 'type'=>'submit',);
$data = array(
		'name'        => 'FullText',
		'id'          => 'FullText',
		'maxlength'   => '100',
		'size'        => '30'
		
);

?>

<!-- START CONTENT HERE  *************************************************** -->

<P><FONT CLASS="headermed">DOL Forms</FONT></P>   
<TABLE WIDTH="100%" cellpading="5"><TR>
<TD  VALIGN="TOP"> 
<TABLE BGCOLOR="#ffffff" CELLPADDING="5" CELLSPACING="0" WIDTH="40%" ALIGN="RIGHT" style="height:100%;"> 
		<TR> 
		  <TD><FONT CLASS="textnorm"> 
			 <TABLE BGCOLOR="#990000" CELLPADDING="0" CELLSPACING="0" VSPACE="0"
			  HSPACE="0" BORDER="0" WIDTH="100%"> 
				<TR> 
				  <TD BGCOLOR="#990000" VALIGN="TOP" ALIGN="LEFT" HEIGHT="18">
				  </TD> 
				  <TD BGCOLOR="#990000" ALIGN="CENTER" HEIGHT="18"><div class="box-title">Search DOL Forms</div></TD> 
				  <TD BGCOLOR="#990000" VALIGN="TOP" ALIGN="RIGHT" HEIGHT="18">
				  </TD> 
				</TR> 
				<TR VALIGN="TOP"> 
				  <TD COLSPAN="3" VALIGN="TOP" BGCOLOR="#ffcc00"> 
					 <TABLE BGCOLOR="#990000" CELLPADDING="1" CELLSPACING="0"
					  WIDTH="100%" VSPACE="0" HSPACE="0" BORDER="0"> 
						<TR> 
						  <TD> 
							 <TABLE BGCOLOR="#FFFFCC" BORDER="0" HSPACE="0" VSPACE="0"
							  CELLPADDING="5" CELLSPACING="0" WIDTH="100%"> 
								<TR> 
								  <TD COLSPAN="3" ALIGN="LEFT" BGCOLOR="#FFFFFF"
									BACKGROUND="<?= base_url('assets/images/shadow-bot-wh.gif') ?>" HEIGHT="9"></TD> 
								</TR> 
								<TR> 
								  <TD COLSPAN="3" ALIGN="LEFT" BGCOLOR="#FFFFFF"> 
                                     <label for ='FullText'>Enter a keyword, phrase, or question:</label> 
                          <?php 
	                          echo form_open("{$action}", $attr_FormOpen);
	      					  echo '<p>';
	                          echo form_input($data);
	                          echo '<br><br>';
	 						  echo form_input($img_search_forms);
	      					  echo '</p>';
	      					  echo form_close(); 
      					  ?>
 
                                  </TD> 
								</TR> 
							 </TABLE></TD> 
						</TR> 
					 </TABLE></TD> 
				</TR> 
			 </TABLE> </FONT></TD> 
		</TR> 
	 </TABLE>
	 <P>These are the most frequently requested Department of Labor forms. You can complete some forms online, while you can download and print all others. We add new forms often, so be sure to come back! For forms from other agencies, visit <A
 HREF="http://www.dol.gov/cgi-bin/leave-dol.asp?exiturl=http://www.FedForms.gov&exitTitle=Fed Forms&fedpage=yes">FedForms.gov</A>. </P>
<br> 
  <ul>
<LI>
<?php echo anchor('forms/agency_title', 'Forms by Title', 'title="Forms by Title"');?> 
<LI>
<?php echo anchor('forms/agency_form_number', 'Forms by Form Number', 'title="Forms by Form Number"');?> 
<LI>
<?php echo anchor('forms/agency_form', 'Forms by Agency', 'title="Forms by Agency"');?> 
</UL>
<br>
  <p>At this time, many of the forms here are available only in Portable Documents Format(PDF). To view the forms, the free <A
 HREF="http://www.dol.gov/cgi-bin/leave-dol.asp?exiturl=http://www.adobe.com/Acrobat/freeread.html&exitTitle=Adobe Acrobat Reader">Acrobat
Reader</A> is available for download.</p>
  
</TD>
</TR>
</TABLE>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

</div><!--Content End -->


