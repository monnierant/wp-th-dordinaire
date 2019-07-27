    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">

            <h1 class="font-weight-light"><?php the_title(); ?></h1>
            <p class="lead"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
            <div class="blog-post-content"><?php the_content(); ?></div>

        </div>
    </div>