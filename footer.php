  
  <footer class="footer-distributed">
    
    <div class="footer-left">

        <div id="footer-logo"><?php bloginfo('name'); ?><span id="footer-image-logo"> </span></div>

        <p class="footer-links">
            <a href="<?php echo site_url('/contacts'); ?>" class="link-1">Contacts</a>
            <a href="<?php echo site_url('/services'); ?>"> Services </a>
            <a href="<?php echo site_url('/projects'); ?>"> Projects </a>
            <a href="<?php echo site_url('/blogs'); ?>"> Blogs </a>
            <a href="<?php echo site_url('/testimonials'); ?>"> Testimonials </a>
            <a href="<?php echo site_url('/about'); ?>"> About </a>
        </p>
        <p class="footer-company-name"> <?php bloginfo('name'); ?>  &copy; <?php echo Date('Y'); ?></p>
    </div>
    <div class="footer-center">
        <div>
            <i class="fa fa-map-marker"></i>
            <p><span>Greenspan-mall, Kayole spine-road</span> Nairobi, Kenya</p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p>+12345645342</p>
        </div>

        <div>
            
            <p><a href="mailto:me@outlook.com"><i class="fa fa-envelope"></i>mail@email.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span>About <?php bloginfo('name'); ?></span>
            Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <p>
            <a href="#">
              <i class="fa fa-whatsapp"></i>
            </a>
            <a href="#">
              <i class="fa fa-facebook" aria-hidden="true"> </i>
            </a>
            <a href="#">
              <i class="fa fa-twitter" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-youtube-play" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-github" aria-hidden="true"></i>
            </a>
            <a href="#">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </p>
         
        </div>

    </div>

</footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <?php wp_footer(); ?>
  </body>
</html>