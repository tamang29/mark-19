<?php

get_header();
?>
<div class="menu">
    <ul>
        <li>Home</li>
        <li>About</li>
        <li>Blog</li>
        <li>Contact</li>
        </ul>
</div>


<?php

while(have_posts())
{
    the_post();?>
    <h1><a href="<?php the_permalink(); ?>"></h1>
    <h1><?php the_title(); ?></a></h1>
    
    
    


    

<?php


}
?>
<?php
get_footer();
?>