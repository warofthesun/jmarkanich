<!--FORMAT POST-->

<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
<div class="top-post post-format"><?php the_post_thumbnail('portfolio_gallery_thumbnail') ?></div>
<header class="article-header">

  <h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
  <p class="byline entry-meta vcard">
                                                         <?php printf( __( '', 'bonestheme' ).'%2$s - %1$s ',
                        /* the time the post was published */
                        '<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                        /* the author of the post */
                        '<span class="by">'.__( '', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                  ); ?>
  </p>

</header>

  <section class="entry-content cf" itemprop="articleBody">
    <?php
      // the content (pretty self explanatory huh)
      the_content();
    ?>
  </section> <?php // end article section ?>

  <footer class="article-footer">

    <?php printf( __( 'filed under', 'bonestheme' ).': %1$s', get_the_category_list(', ') ); ?>

    <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>

  </footer> <?php // end article footer ?>

  <?php //comments_template(); ?>

</article> <?php // end article ?>
