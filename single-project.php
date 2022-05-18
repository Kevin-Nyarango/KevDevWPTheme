<?php get_header(); ?>
 
    <section class="showcase" style="margin: 0%;
      background: url(<?php echo get_template_directory_uri(); ?>/img/projectImg1.jpg) no-repeat fixed center center;
      background-size: cover;" >
      <div class="container-fluid">
        <div class="showcase-content">
          <h2> <?php the_title(); ?> </h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aut repudiandae id adipisci.</p>
        </div>
      
      </div>
    </section>
    <hr>
  </div>
<section>
<div class="container mr-2">
  <div class="row d-flex justify-content-between">
    <div class="col-md-8">
      <div  class="aside-title" >
          <h1>
             <?php the_title(); ?>
          </h1>
      
      </div>
      
      <div class="mb-1 text-muted">
         <?php the_time( 'F j Y,');?>
      </div>
      <div class="mt-4 aside-content">
      <?php the_content();?> 
      </div>
    </div> 
    <aside class="col-md-3 blog-sidebar">

      <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </aside><!-- /.blog-sidebar -->
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