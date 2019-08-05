<!--Si l'article est protégé par mot de passe, on affiche aucun commentaire mais un petit message d'information.-->
<?php if (!empty($post->post_password) && ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password)) : ?>
    <div id="commentaires">
        <p>Cet article est protégé par mot de passe</p>
        <p>Entrez le mot de passe pour voir les commentaires</p>
    </div>

    <!--Dans le cas contraire, on affiche la liste des commentaires.-->
<?php else : ?>
    <div id="commentaires">
        <p>Commentaires</p>
        <div id="liste-commentaires">
            <ul>
                <?php
                print_r(wp_list_comments(array(
                    'avatar_size' => 60,
                    'max_depth'   => 5,
                    'style'      => 'ol',
                    'short_ping' => true,
                    'type'       => 'comment',
                )));
                ?>
            </ul>
        </div>
        <div id="formulaire-commentaire">
            <?php comment_form(); ?>
        </div>
    </div>
<?php endif; ?>