<?php

get_header();

echo "<p>This is single post template</p>";

while(have_posts())
{
    the_post();?>
    
    <p><?php the_content();?></p>
    
    


    

<?php
}

?>
<?php ?>