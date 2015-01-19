<?php
/*
Template Name: novedades
*/
?>

<?php get_header(); ?>

<body>

	<section id="contenedor">

		    <!-- HEADER -->
                <?php include('cabeza.php') ?>
            <!-- HEADER -->

            <nav>
                <ul>
                    <?php wp_list_pages('title_li=&');?>
                </ul>
            </nav> <!-- End of nav -->

            <section id="columnas">

              <section class="columnaNovedades">

                <!-- LOOP -->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                <?php the_post(); ?>

                <div id="post-<?php the_ID(); ?>">

                <section class="verMasServicios">
                    <hgroup>
                        <h2><?php the_title(); ?></h2>
                    </hgroup>
                </section>

                <?php the_content('<a href="#"><small>ver +</small></a>'); ?>
                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

                </div>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- LOOP -->

              </section> <!-- Endof columnaNovedades -->

            </section> <!-- End of columnas -->

<?php get_footer(); ?>