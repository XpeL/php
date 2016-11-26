<?php
if ( have_posts() ) :
	while ( have_posts() ) : 
		the_post(); 
		the_title();
endwhile;
		
else :
	echo 'pas de post';
	
endif;
?>
<h1>hello world</h1>