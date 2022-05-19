<?php get_header(); ?>

  <main id="main">    
 <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href=" <?php echo site_url(); ?> ">Home</a></li>
          <li><a href="<?php echo site_url(); ?>">Blog</a></li>
          <li>Blog Single</li>
        </ol>
        <h2>Blog Single</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <?php
		while (have_posts()) {
			the_post();
          ?>
          <?php echo thedate(); ?>

<?php } ?>
</div>
  </main><!-- End #main -->
<?php get_footer() ?>