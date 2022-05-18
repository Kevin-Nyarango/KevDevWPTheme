<?php get_header(); ?>
    <section class="project-showcase" style="margin: 0%;
      background: url(<?php echo get_template_directory_uri(); ?>/img/projectImg2.jpg) no-repeat fixed center center;
      background-size: cover;" >
      <div class="container-fluid">
        <div class="showcase-content">
          <h1>Full Stack Web Developer</h1>
          <p>archive.php dolor sit amet consectetur adipisicing elit. Voluptates, rerum quo, atque reprehenderit sit natus alias officia ducimus quos dignissimos illum ad rem accusantium, harum adipisci libero explicabo tempore magnam...</p>
        </div>
      </div>
    </section>
    <hr>
  </div>
<section>
  <div class="container ">
    <div class="row d-flexd-flex justify-content-around " id="tuRow">
      <?php

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 4,
        );

        $blogposts = new WP_Query($args);

        while ($blogposts -> have_posts()){
          $blogposts -> the_post();

        ?>
        <?php get_template_part('content', get_post_format());?>

        <?php }
          wp_reset_query();
      ?>

        
    </div>
  </div>
</section>

</div>
<hr> 
  <p style="margin-left: 50%;">
    <a href="#" >Back to top</a>
  </p>
  <hr>
<?php get_footer(); ?>