<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
    
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<p class="post-<?php the_ID(); ?>-meta">发表时间: <?php the_time('F jS, Y') ?> | 分类: <?php the_category(', ') ?><span><?php comments_number( '没有评论', '1条评论', '%条评论' ); ?></span></p>
		</header>
		<div class="entry-content">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				}
			?>
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>" class="readMore">阅读全文</a>
		</div>
	</article>
    
<?php endwhile; // End the loop ?>
