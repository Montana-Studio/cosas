<!-- sidebar -->
<aside class="sidebar hide">

	<?php //get_template_part('searchform'); ?>
    
    <div class="fb-page" data-href="https://www.facebook.com/revistacosas" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/revistacosas"><a href="https://www.facebook.com/revistacosas">Revista Cosas</a></blockquote></div></div>
    
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

</aside>
<!-- /sidebar -->
