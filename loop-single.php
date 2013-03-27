<?php /* Start loop */ ?>

<?php while (have_posts()) : the_post(); ?>

	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
		<header>
	
			<h1 class="entry-title"><?php the_title(); ?></h1>
	
		</header>
	
		<div class="entry-content">
	
			<?php the_content(); ?>
	
		</div>
		
		<footer>
			<p class="post-<?php the_ID(); ?>-meta">发表时间: <?php the_time('F jS, Y') ?> | 分类: <?php the_category(', ') ?><span><?php comments_number( '没有评论', '1条评论', '%条评论' ); ?></span></p>
		</footer>
	
		<?php comments_template(); ?>
	
	</article>

<?php endwhile; // End the loop ?>
