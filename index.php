  <?php get_header(); ?>


  <!--<div class="row"> -->
    <?php $i=0; ?>
   <!-- <div class="col-md-3 portfolio-item"> -->

      <?php 
      if ( have_posts() ) : while ( have_posts() ) : the_post();
      ?>

      <?php if ($i%3==0) {  ?>
      <div class="row">
      <?php } ?>
      
      <div class="col-md-4">
       <?php get_template_part( 'content', get_post_format() ); ?>
      </div>

         <?php $i++; ?>

      <?php if($i%3==0) { // if counter is multiple of 3 ?>
          </div>
      <?php } ?>


      <?php
      endwhile; endif; 
      ?>

      <?php if($i%3!=0) { // put closing div if loop is not exactly a multiple of 3 ?>
      </div>
      <?php } ?>

      <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </nav>

    </div> <!-- /.blog-main -->

    <?php get_sidebar(); ?>

  </div> <!-- /.row -->

<?php get_footer(); ?>
