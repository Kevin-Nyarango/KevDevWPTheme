
        <div class="col-md-4 d-flex " >
          <div class="card" >
            <?php if ( has_post_thumbnail()) : ?>
              <a href="
                <?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
              </a>
            <?php endif; ?>
              </a>
              <div class="card-body">
              <a href="<?php the_permalink(); ?>"> <h5 class="card-title"><?php the_title(); ?></h5></a>
                <p class="card-text"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
          </div>
        </div>  