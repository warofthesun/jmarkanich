<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/VideoObject">

  <section class="entry-content cf" itemprop="description">
    <?php
      // the content (pretty self explanatory huh)
      the_content();
    ?>
  </section> <?php // end article section ?>

  <footer class="article-footer">
    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

  </footer> <?php // end article footer ?>

  <?php //comments_template(); ?>

</article> <?php // end article ?>
