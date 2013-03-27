          <!-- loop tedxhongyadong_speaker home -->
          <?php query_posts('post_type=speaker&showposts=6'); ?>
          <?php /* Start loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
          	<?php roots_post_before(); ?>
          		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			    <?php roots_post_inside_before(); ?>
			      
			      <header>
			        <h1 class="entry-title"><?php the_title(); ?></h1>
			        <?php roots_entry_meta(); ?>
			      </header>
			      <div class="entry-content">
			        <?php the_post_thumbnail(); ?>
			        <?php the_content(); ?>
			      </div>
			      
			      <?php comments_template(); ?>
			      <?php roots_post_inside_after(); ?>
			    </article>
          	<?php roots_post_after(); ?>
          <?php endwhile; // End the loop ?>
          <?php wp_reset_query(); ?>
          
          
          
          <!-- loop tedxhongyadong_speaker Speakers page -->
          <?php query_posts('post_type=tedxhongyadong_speaker&showposts=6'); ?>
          <?php /* Start loop */ ?>
          <?php while (have_posts()) : the_post(); ?>
          	<?php roots_post_before(); ?>
          		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			    <?php roots_post_inside_before(); ?>
			      
			      <header>
			      	<?php the_post_thumbnail(); ?>
			        <h1 class="entry-title"><?php the_title(); ?></h1>
			        <h3 class="entry-title"><?php the_title(); ?></h3>
			        <?php roots_entry_meta(); ?>
			      </header>
			      <div class="entry-content">
			        <?php the_content(); ?>
			      </div>
			      
			      <?php comments_template(); ?>
			      <?php roots_post_inside_after(); ?>
			    </article>
          	<?php roots_post_after(); ?>
          <?php endwhile; // End the loop ?>
          <?php wp_reset_query(); ?>