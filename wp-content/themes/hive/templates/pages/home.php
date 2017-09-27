<?php
/**
 * Template Name: Home
 */
?>

<main>
  <section class="service-section">
    <div class="component-split">
      <div class="component-block component--service">
        <div class="overlay">
          <a href="/services" class="btn btn-light">Our Services</a>
        </div>
      </div>
      <div class="component-block component-block--light">
        <div class="content-center">
        <h1 class="align-center">
          <?php if(get_field('main_copy')) : ?>
          <?php the_field('main_copy'); ?>
        <?php else : ?>
          Growing your nest, one client at a time.
        <?php endif; ?>
      </h1>
    </div>
        <img src="" /> <!-- cone img -->
      </div>
    </div>
  </section>
  <section class="strategy-section">
    <div class="component-one-third">
      <div class="component-block">
        <div class="content-center">
        <h2 class="uppercase">Our Strategy</h2>
      </div>
      </div>
      <div class="component-block component-block--dark">
        <div class="content-center">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      </div>
    </div>
  </section>
  <section class="contact-section">
    <div class="component-block component-block--primary">
      <div class="content-center">
      <h2>Are You Ready to start a buzz?</h2>
      <a href="/contact" class=" btn btn-light">Contact Us</a>
    </div>
    </div>
  </section>
</main>
