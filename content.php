    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">

            <h1 class="font-weight-light"><?php the_title(); ?></h1>
            <div class="blog-post-content">
                <p><?php the_content(); ?></p>
            </div>
            <p><?php the_date(); ?> by <?php the_author(); ?></p>
            <?php
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>
        </div>
    </div>