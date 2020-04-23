This is our amazing custom theme - single.php
<h1><?php bloginfo('name'); ?></h1> 
<h1><?php bloginfo('description'); ?></h1>
<hr></hr>
<?php
while(have_posts()){
	the_post();
	echo the_title();
	echo the_content();
}

?>