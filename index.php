<?php 
    get_header();
?>

<section class="wrapper">
				<div class="inner">
                    <section>
                        <header class="special">
                            <h2><?php wp_title(''); ?></h2>
                        </header>
                            <?php
                                if(have_posts()):
                                    while(have_posts()) : 
                                        the_post(); ?>

                                        <h3 class="byline"> <?php the_title(''); ?> </h3>

                                        <?php 
                                            $content = get_the_excerpt();
                                            $resumo = substr($content, 0, 500);
                                            echo '<p>' .$resumo. '</p>';
                                        ?>

                                        <a href="<?php the_permalink(); ?>" class="button"> Saiba Mais</a>
                                        <hr>
                                        <br>
                                    <?php endwhile;
                                else :
                                    echo '<p> Nada encontrado </p>';
                                endif;
                            ?>
                    </section>
                </div>
        </section>

<?php 
    get_footer();
?>