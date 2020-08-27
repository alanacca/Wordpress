<?php 
    get_header();
    echo "<!-- single.php -->";
?>

<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2><?php wp_title(''); ?></h2>
                    </header>
                        <?php
                            if(have_posts()):
                                while(have_posts()) : the_post(); ?>

                                    <h3 class="byline"> <?php the_title() ?> </h3>

                                    <?php 
                                        $content = get_the_excerpt();
                                        echo $content;
                                    ?>

                                <?php endwhile;
                            else :
                                echo '<p> Nada encontrado </p>';
                            endif;
                        ?>
                </div>
        </section>

<?php 
    get_footer();
?>





<?php 
    get_footer();
?>