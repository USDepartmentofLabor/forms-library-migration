<!DOCTYPE html>
<HTML> 
  <HEAD> 
    <TITLE>DOL Forms Library: Home page</TITLE><LINK REL="STYLESHEET" HREF="http://www.dol.gov/index-ns4.css" TYPE="text/css">
<?php


$style = array(
	'href' => base_url('assets/css/style.css'),
    'rel' => 'stylesheet',
    'type' => 'text/css'
);


$agency = array(
		'href' => base_url('assets/css/agency.css'),
		'rel' => 'stylesheet',
		'type' => 'text/css'
);

$print = array(
		'href' => base_url('assets/css/print.css'),
		'rel' => 'stylesheet',
		'type' => 'text/css',
		'media' => 'print'
);

echo link_tag($style);
echo link_tag($agency);
echo link_tag($print);


$img_spacer = array(
	'type' => 'image',	
	'src' => 'assets/images/spacer.gif',
	'alt' => 'skip to page content',	
	'width' => '1',
	'height' => '1'
);

$img_subscribe = array(
	'type' => 'image',
	'src' => base_url('assets/images/SubscribeButton.gif'),
	'alt' => 'Subscribe',	
	'class' => 'subscribeButton'
);


$img_search = array(
		'type' => 'image',
		'src' =>  base_url('assets/images/SearchButton.gif'),
		'alt' => 'Search',
		'class' => 'searchButton'
);




$img_print = array(
		'type' => 'image',
		'src' => 'assets/images/Print_Icon.gif',
		'alt' => 'Print This Page'
);

$img_separator = array(
		'type' => 'image',
		'src' => 'assets/images/utilseparator.gif',
		'alt' => ''
);

$img_text_zoom_out = array(
		'type' => 'image',
		'src' => 'assets/images/TextSizeDecr_Icon.gif',
		'alt' => 'Decrease Text Size'
);

$img_text_zoom_in = array(
		'type' => 'image',
		'src' => 'assets/images/TextSizeIncr_Icon.gif',
		'alt' => 'Increase Text Size'
);

$img_email = array(
		'type' => 'image',
		'src' => 'assets/images/Email_Icon.gif',
		'alt' => 'Email This Page'
);

?>
 
<!-- begin dol-styles.shtm -->

<META NAME="DCS.dcscfg" CONTENT="4" />

<meta name="WT.sp" content="libraryforms">
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>
<link rel="icon" href="/favicon.ico" type="image/x-icon"/>

<META NAME="DCS.dcssip" CONTENT="www.dol.gov" />
<!-- end dol-styles.shtm -->
  </HEAD> 
  <BODY LEFTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0"> 
<center>

<?php echo script_tag('assets/scripts/textsize.js'); ?>

<script language="javascript" id="_fed_an_ua_tag" src="<?= base_url('assets/scripts/federated-analytics-webapps.js?agency=DOL&subagency=WEBAPPS') ?>"></script>

<!-- Google Analytics Script below -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-33041359-2', 'auto');
  ga('send', 'pageview');

</script>         
<!-- Google Analytics Script Above -->


<div id="Main">
	<!--Header Start -->

<A HREF="#pagecontent"><?= img($img_spacer) ?></A>

	<div id="Header">
		<a href="http://www.dol.gov"><div id="Banner"></div></a>
		<div id="RightColumn"><table><tr><td valign="bottom">
			<div id="Subscribe">
			  <div id="Subscribelabel"><label for='Login'>Subscribe to <a href="http://www.dol.gov/dol/email.htm">E-mail Updates</a></label></div>
				<div id="SubscribeForm">
				<form  action="https://service.govdelivery.com/service/multi_subscribe.html" method="POST">
				<input type="hidden" name="code" value="USDOL" />
				<input type="hidden" name="origin" value="http://www.dol.gov" />
				<input type="text" name="login" value="Enter E-mail Address" onClick="this.value=''" id = 'login' class="subscribeText" />
				<?= form_input($img_subscribe) ?>
				</form>	
				</div>
			</div>
			</td><td>
			<div id="Search">
				<div id="SearchForm">
				<FORM METHOD="GET" ACTION="http://www.dol.gov/search/AdvSearch.aspx" ID="searchform" NAME="searchform">
				  <div id="Searchlabel"><label for='Text1'><a href="http://www.dol.gov/dol/search/schall.htm">Advanced Search</a></label></div>
					<input type="text" value="Find It In DOL" onClick="this.value=''" class="searchText" NAME="search_term" ID="Text1"  />
					<?= form_input($img_search) ?>
					
					<INPUT TYPE="hidden" NAME="taxonomy" ID="taxonomy" /> 
					<INPUT TYPE="hidden" VALUE="0" NAME="offset" ID="Hidden1" />
				</form>
				</div>
			</div>
          </td></tr>
		  <tr><td colspan="2">
			<div id="Nav" class="navlinks">
				<a href="http://www.dol.gov/dol/siteindex.htm">A to Z Index</a>&nbsp;|&nbsp;
				<a href="http://www.dol.gov/dol/findit.htm">Site Map</a>&nbsp;|&nbsp;
				<a href="/dolfaq/dolfaq.asp">FAQs</a>&nbsp;|&nbsp;
				<a href="/libraryforms">DOL Forms</a>&nbsp;|&nbsp;
				<a href="http://www.dol.gov/dol/aboutdol/main.htm">About DOL</a>&nbsp;|&nbsp; 
				<a href="http://www.dol.gov/dol/contact/index.htm">Contact Us</a>
			</div>
			</td></tr></table>
		</div>
	</div>
	<!--Header End -->
	<!--Body Start -->
	<div id="Body">
		     <div id="UtilityBar" class="tools">
		            <div class="utilitybarleft">
		                <div id="agencyname">Secretary of Labor Thomas E. Perez
		                </div>
		            </div>

                    <div class="utilitybarright">
			            <a href="#" onclick="window.open('/dol/findit.htm?PrinterFriendly=true&','PrinterFriendly');">
			            <?php echo img($img_print) ?>&nbsp;</a>
			            <a href="#" onclick="window.open('/dol/findit.htm?PrinterFriendly=true&','PrinterFriendly');">Print This Page</a>&nbsp;<?php echo img($img_separator) ?> 
			            <a href="#" onClick="changeFontSize(-1)"><?php echo img($img_text_zoom_out) ?> </a>
			            <a href="#" onClick="changeFontSize(+1)"><?php echo img($img_text_zoom_in) ?></a>&nbsp;<a href="#" onClick="changeFontSize(+1)">Text Size</a>&nbsp;<?php echo img($img_separator) ?>
			            <a href="/emailfriend/emailfriend.asp"><?php echo img($img_email) ?>&nbsp;</a><a href="/emailfriend/emailfriend.asp">E-mail This Page</a>
				    </div>
		     </div>
		<div class="crumb-links">
        <!-- begin crumb-nonav-auto.shtm -->
        <table border="0" cellspacing="0" cellpadding="0" vspace="0" hspace="0">
          <tr>
            <td valign="middle" align="LEFT" height="7" style="padding-left:2px"><span class="crumb-links">
              <a href="http://www.dol.gov/index.htm">DOL Home</a> &gt; <a href="http://www.dol.gov/dol/topic/">Find It! By Topic</a> &gt;  DOL Forms
              </span> </td>
          </tr>
        </table>
        <!-- end crumb-nonav-auto.shtm -->
        </div>

			
			
		</div>
		
        <div id="content" style="margin-left:190px;" />
			<div style="width:768px;font-size:0;line-height:0;"></div>	


			