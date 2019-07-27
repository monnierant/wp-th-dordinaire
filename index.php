<?php
get_header();
?>


<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Page Content -->
<div id="content" class="container">


    <?php
    if (have_posts()) : while (have_posts()) : the_post();
            get_template_part('content', get_post_format());
        endwhile;
    endif;
    ?>


</div>

<?php
get_footer();
?>

</body>

</html>