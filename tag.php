<?php
get_header();
?>
<div class="category">
<h1>Tag xxxxxxxxxxxx nom du tag xxxxxxxx <?php  the_search_query(); ?></h1>
<?php get_template_part('loop'); ?>
</div>
<?php
get_sidebar();
get_footer();
?>