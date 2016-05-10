<?php 
//print_r($metaform);
?>
<div id="wrapper">
	<!-- /.navbar-static-top -->
	<?php // load dashboard admin menu ?>
	<!-- /.navbar-static-side -->
	<div id="page-wrapper">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">
					<?= $subtitle; ?>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
		</div>
		<!-- /.row -->
		<div class="row">
			<!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="panel panel-warning">

					<!-- /.panel-heading -->
					<div class="panel-body">
						<!-- Nav tabs -->

						<!-- Tab panes -->
						<div class="tab-content">
						<?php  	echo anchor_popup($metaform->FormURL, 'View '.$metaform->AgencyID.' Form Online');
								echo '<br>';
						?>						
							<h3>Agency</h3>
							<p><?= $metaform->AgencyID ?></p>
							<h3>Title</h3>
							<p><?= $metaform->Title ?></p>
							<h3>Form Description</h3>
							<p><?= $metaform->FormDesc ?></p>
							<h3>OMB Control Number</h3>
							<p><?= $metaform->OMBNumber ?></p>
						</div>
					</div>
					<!-- /.panel-body -->
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<br>

  
</TD>
</TR>
</TABLE>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br /><br /><br /><br /><br /><br /><br /><br />


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

