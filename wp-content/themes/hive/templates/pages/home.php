<?php
/**
 * Template Name: Home
 */
?>

<main>
  <div class="component-split">
  <div class="component-block component--service">
    <div class="overlay">
    <a href="/services" class="btn btn-light">Our Services</a>
  </div>
  </div>
  <div class="component-block component-block--light">
    <h2>
      <?php if(get_field('main_copy')) : ?>
      <?php the_field('main_copy'); ?>
    <?php else : ?>
      Growing our nest, one client at a time.
    <?php endif; ?>
  </h2>
    <img src="" /> <!-- cone img -->
  </div>
</div>
</main>
