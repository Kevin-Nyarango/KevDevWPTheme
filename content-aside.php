<hr style="opacity:0; padding:4px;">
<div class="container-fluid">
  <div class="row d-flex">
    <div class="col-md-8">
      <div  class="aside-title" >
        <a href="<?php the_permalink();?>">
          <h1>
             <?php the_title(); ?>
          </h1>
        </a> 
      </div>
      
      <div class="mb-1 text-muted">
         <?php the_time( 'F j Y,');?> by <span class="text-primary"><?php the_author();?> </span>
      </div>
      <div class="aside-content">
      <?php the_content();?> 
      </div>
    </div> 
    <aside class="col-md-4 blog-sidebar">

      <?php if(is_active_sidebar('sidebar')): ?>
        <?php dynamic_sidebar('sidebar'); ?>
      <?php endif; ?>
    </aside><!-- /.blog-sidebar -->
  </div>  
</div>