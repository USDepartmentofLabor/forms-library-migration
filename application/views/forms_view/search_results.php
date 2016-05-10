	<div class="col-lg-12">
		<h1 class="page-header">
			<?= $subtitle; ?>
		</h1>
	</div>
<?php 
 
 $needle = '';
 
 if(!empty($match)){
 echo '<p><strong>'.count($match).'</strong> search results for <strong>'.$pattern.'</strong></p>';
 echo '<ul>';
 
 foreach($match as $title_obj){
	
	if($title_obj->Title[0] !== $needle) {
		$needle = $title_obj->Title[0];
 	}
 	echo '<li>'.anchor('forms/agency_view/'.$title_obj->FormNumber, $title_obj->Title, array('title' => 'Form Description: '.$title_obj->FormDesc)).'</li>';
 }
 echo '</ul><br>';
 }else{
	echo '<p>Invalid Search Query. Please try again.</p>';
 }
 
?>


<!-- END CONTENT HERE  *************************************************** -->
<!---original location of this file: "/includes/" -->

</div><!--Content End -->