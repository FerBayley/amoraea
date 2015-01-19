<?php
/*
Template Name: agenda
*/
?>

<?php get_header(); ?>


<body>

	<section id="contenedor">

			<!-- HEADER -->
                <?php include('cabeza.php') ?>
            <!-- HEADER -->

            <!-- MENU RESPONSIVE -->
                <?php include('menu-responsive.php') ?>
            <!-- FIN MENU RESPONSIVE -->

            <nav>
                <ul>
                    <?php wp_list_pages('title_li=&');?>
                </ul>
            </nav> <!-- End of nav -->

             <section id="columnas">

                <div class="columnaIndex01">

                <!-- LOOP -->
                <?php query_posts('category_name=columna-agenda-01&showposts=1'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>">

                <section class="verMasServicios">
                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>
                </section>

                <?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
                if ($postimageurl) {
                ?>
                <img src="<?php echo $postimageurl; ?>" alt="alt"/>
                <?php } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/imagen-no-disponible.jpg" alt="alt"/>
                <?php } ?>

                <?php the_excerpt('<a href="#"><small>ver +</small></a>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- LOOP -->

                </div> <!-- End of columnaIndex01 -->

                <div class="columnaIndex02">
                <!-- LOOP -->
                <?php query_posts('category_name=columna-agenda-02&showposts=1'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>">

                <section class="verMasServicios">
                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>
                </section>

                <?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
                if ($postimageurl) {
                ?>
                <img src="<?php echo $postimageurl; ?>" alt="alt"/>
                <?php } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/imagen-no-disponible.jpg" alt="alt"/>
                <?php } ?>

                <?php the_excerpt('<a href="#"><small>ver +</small></a>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- LOOP -->
                </div> <!-- End of columnaIndex02 -->

                <div class="columnaIndex03">
                <!-- LOOP -->
                <?php query_posts('category_name=columna-agenda-03&showposts=1'); ?>
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>">

                <section class="verMasServicios">
                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>
                </section>

                <?php $postimageurl = get_post_meta($post->ID, 'thumb', true);
                if ($postimageurl) {
                ?>
                <img src="<?php echo $postimageurl; ?>" alt="alt"/>
                <?php } else { ?>
                <img src="<?php bloginfo('template_directory'); ?>/images/imagen-no-disponible.jpg" alt="alt"/>
                <?php } ?>

                <?php the_excerpt('<a href="#"><small>ver +</small></a>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- LOOP -->
                </div> <!-- End of columnaIndex03 -->

            </section> <!-- End of columnas -->

<?php get_footer(); ?>