<?php get_header();

while (have_posts()) {
    the_post();

?>
    <div id="banner">
        <h1 class="ml"><span class="secondary-color">About</span> page</h1>

    </div>
    </header>

    <main class="container secondary-color">
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
        Posted by <?php the_time('F j', 'Y');  ?>
        <?php if (has_post_thumbnail()); { ?>
            <img src="<?php echo get_the_post_thumbnail(get_the_ID()); ?>" alt="about-thumbnail">
        <?php } ?>
    </main>

<?php } ?>


<?php get_footer(); ?>