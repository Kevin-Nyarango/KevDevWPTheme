<?php get_header(); ?>

    <div class="what_I_do">
      <h1>I design and create awesome web apps</h1>
    </div>

    <div class="container-fluid" >
      <div class="row hero-slogan-img">
        <div class="col-xs-6 " id="slogan" >
          <h2><?php bloginfo('name'); ?></h2>
          <h3>Your full stack <p> developer</h3>
        </div>
        <div class="col-xs-3 " id="hero_img" >
          <img src="<?php echo get_template_directory_uri(); ?>/img/hero.png" alt="" style=" height: 90%; width:85%;">
        </div>
      </div>
    </div>
  </div>
  <hr>

  <section>

   
    <div id="section_title">
      <a href="<?php echo site_url('/services'); ?>"> 
        <h6 class="stingo"></h6>
        SERVICES
      </a>
    </div>
    <div class="container-fluid">
      <div class="row d-flexd-flex justify-content-around " id="tuRow">
        <?php

          $args = array(
            'post_type' => 'Services',
            'posts_per_page' => 3,
          );

          $services= new WP_Query($args);

          while ($services -> have_posts()){
            $services -> the_post();

          ?>
          <?php get_template_part('content');?>
          
          <?php }
            wp_reset_query();
        ?>

      </div>
    </div>

  </section>
  
  <hr>
  <section>
    <div id="section_title">
      <a href="<?php echo site_url('/projects')?>"> 
        <h6 class="stingo" ></h6>
        <p style="padding-bottom: 2%;">PROJECTS</p> 
      </a>
    </div>
    
    <div class="container-fluid" id="projects">
      

    <?php $args = array(
          'post_type' => 'project',
          'posts_per_page' => 3,
        );

        $projects= new WP_Query($args);

        while ($projects -> have_posts()){
          $projects -> the_post();

    
    ?>
      
      <div class="accordion">
        <div class="accordion_item">
          <div class="accordion_header">
            <?php the_title(); ?>
          </div>
          <div class="accordion_body">
              <div class="accordion_body_content">
                <div class="container">
                  <a href="#" class="categories"><strong class="d-inline-block mb-2 text-success"><?php echo get_the_category_list(); ?></strong></a>
                  <div class="row">
                    <div class="col-lg-auto">
                      <div class="row d-flex ">
                        <div class="col-lg-4 p-4 d-flex flex-column position-static" id="tony">
                          <a class="accordion_item_title"href="<?php the_permalink(); ?>">
                            <h3 class="mb-1 "><?php the_title(); ?></h3>
                          </a>
                          <div class="mb-1 text-muted"><?php the_time( 'F j Y, g:i a');?></div>
                          <p class=""><?php echo wp_trim_words(get_the_excerpt(), 35); ?></p>
                         <a href="<?php the_permalink(); ?>"  class="btn " style="max-width: 6rem;">Read more</a>
                        </div>
                        <div class="col-lg-8 king" style="margin: auto;">
                          <?php if ( has_post_thumbnail()) : ?>
                            <a href="
                              <?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                              <?php the_post_thumbnail(); ?>
                            </a>
                          <?php endif; ?>
                            </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      
    <?php }
        wp_reset_query();
      ?>
    </div>
  </section>

  <hr>
  <section>

   
    <div id="section_title">
      <a href="<?php echo site_url('/blogs'); ?>"> 
        <h6 class="stingo"></h6>
        BLOGS
      </a>
    </div>
    <div class="container-fluid">
      <div class="row d-flexd-flex justify-content-around " id="tuRow">
        <?php

        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 3,
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
  <hr>
  
  <section>
    <div id="section_title">
      <a href="testimonial.html"> 
        <h6 class="stingo"></h6>
        TESTIMONIALS
      </a>
    </div>

    <div class="container">
      <div id="testimonials">
        <div class="testimonial_content">
          <p id="first_par">"Lorem ipsum amaets... <p>amet consectetur adipisicing elit. Vitae reiciendis corrupti Lorem, ipsum dolor...."</p></p> 
        </div>
        <div class="testimonial_img">
          <img src="img/testimonial.png" alt="testimonial image">
        </div>
        <div id="testimoninal_btn">
          <a href="testimonial.html">More</a>
        </div>
      </div>
    </div>
    
  </section>
  <hr> 
  <p style="margin-left: 50%;">
    <a href="#" >Back to top</a>
  </p>
  <hr>

  <?php get_footer(); ?>