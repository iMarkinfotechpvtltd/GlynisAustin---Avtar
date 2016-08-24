<?php 
// Template Name: Demo
get_header();
?>
<br><br><br><br><br>
<?php 
echo "hello";?>
<?php echo $date = date('l, F j, Y',time()+86400*3); ?>
<!-- <input type="radio">
<div class="fotorama" data-nav="thumbs">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
<img src="http://glynisaustin.stagingdevsite.com/dev/wp-content/uploads/2016/07/team_person2.jpg">
</div>


<div class="fotorama" data-nav="thumbs">
<a href="http://youtube.com/watch?v=C3lWwBslWqg">Desert Rose</a>
  <a href="http://vimeo.com/61527416">Celestial Dynamics</a>
  <a href="http://youtube.com/watch?v=C3lWwBslWqg">Desert Rose</a>
  <a href="http://vimeo.com/61527416">Celestial Dynamics</a>
  
</div>
-->
<?php $r = array();
		$r=$_GET['r']; echo '<pre>'; print_r($r); echo '</pre>';
		?> 


<br><br><br><br><br>
<?php get_footer(); ?>