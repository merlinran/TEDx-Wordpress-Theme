				<?php get_header(); ?>
				
				<section class="flexslider row">
					<ul class="slides">
						<li>
							<a href="/event-details" title="2012年TEDxHongyadong大会"><img src="/img/TEDxHongyadong.jpg" alt="2012年TEDxHongyadong大会" width="940" height="446" /></a>
						</li>				
					</ul>
				</section>
				
				<section class="featuredSpeakers row">
				
					<div class="row">
						<div class="four columns">
							<h2>2012年度演讲嘉宾</h2>
						</div>
						<div class="eight columns">
							<p>TEDxHongyadong已于2012年9月28日举办，演讲人来自教育、文学、生物、IT、音乐等领域，为大家奉上了一场精彩纷呈的思想盛会。<a href="/speakers" class="readMore">查看演讲嘉宾</a></p>
						</div>
					</div>
					<?php
						$args = array(			  		
			  				'post_type' => 'speakers',
			  				'taxonomy' => 'tedxhongyadongYear',
			  				'term' => '2012',
			  				'posts_per_page' => -1,
			  				'orderby' => 'title',
			  				'order' => 'ASC'
							);
						query_posts($args);
					?>

					<?php /* Start loop */ ?>
					<ul class="row clearfix">
					<?php while (have_posts()) : the_post(); ?>
						<li class="four columns">
							<a href="<?php the_permalink(); ?>" class="speakerLink">
								<?php the_post_thumbnail('wide_thumb', array(
									'alt' => ''.get_the_title().'',
									'title' => ''.get_the_title().'' 
								)); ?>
								<h3><?php the_title(); ?></h3>
							</a>
						</li>
					<?php endwhile; // End the loop ?>
					</ul>
					<?php wp_reset_query(); ?>
					
					<a href="/speakers" class="sectionCTA row">查看所有<span class="tedx">TEDx</span><span class="hongyadong">Hongyadong</span>演讲嘉宾</a>
				
				</section>
									
				<section class="recentNews row">
				
					<h2>近期新闻</h2>
					
					<?php
						$args = array(
			  				'posts_per_page' => 3,
			  				'year' => '2012'
							);
						query_posts($args);
					?>
					
					<div class="row">
						<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" class="four columns">
							<header>
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								<p>发表时间 <?php the_time('F jS, Y') ?></p>
							</header>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="readMore">查看详情</a>
						</article>
						<?php endwhile; // End the loop ?>
						<?php wp_reset_query(); ?>
					</div>
					
					<a href="/news" class="sectionCTA row">查看所有<span class="tedx">TEDx</span><span class="hongyadong">Hongyadong</span>新闻</a>
					
				</section>
				
				<section class="videoPicks row">
					
					<div class="row">
				
						<div class="three columns">
							<h2>精彩视频</h2>
							<p>我们崇尚分享与协作。您有特别喜欢的TED视频吗？<a href="mailto:info@tedxhongyadong.com?subject=TED视频推荐&body=我推荐以下的TED视频" class="readMore">告诉我们</a></p>
						</div>
						
						<?php
						$args = array(
							'post_type' => 'videopick',
			  				'posts_per_page' => 3
							);
						query_posts($args);
						?>
						<?php while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" class="videoPick three columns">
							<?php the_post_thumbnail('video_thumb', array(
									'alt' => ''.get_the_title().'',
									'title' => ''.get_the_title().'' 
								)); ?>
							<h3><?php the_title(); ?></h3>
						</a>
						<?php endwhile; // End the loop ?>
						<?php wp_reset_query(); ?>
					
					</div>
					
					<a href="/ted-video-picks/" class="sectionCTA row">查看所有推荐<span class="tedx">TEDx</span>视频</a>
					
				</section>
				
				<section class="whatisTED row">
				
          <h2>关于TEDxHongyadong</h2>
          <p>经TED官方授权，秉承“Ideas Worth Spreading”的理念，致力于发掘重庆以及周边地区社会创新活动、搭建思想的分享平台。此次活动名字源于重庆市的“洪崖洞”，它是长江、嘉陵江两江交汇的滨江地带，有2300多年的历史，是巴渝文化和山城人文的一条根脉，取此名也意味着：新旧文化的交替,跨界思想的交流。希望通过TEDx的本地化活动，能让我们在思想文化的碰撞交汇中，从不同视角重新挖掘、诠释巴渝文化的精髓。<a href="/about" class="readMore">查看详情</a></p>
          <h2>关于TEDx</h2>
          <p>In the spirit of ideas worth spreading, TED has created a program called TEDx. TEDx is a program of local, self-organized events that bring people together to share a TED-like experience. Our event is called TEDxHongyadong, where x = independently organized TED event. At our TEDxHongyadong event, TEDTalks video and live speakers will combine to spark deep discussion and connection in a small group. The TED Conference provides general guidance for the TEDx program, but individual TEDx events, including ours, are self-organized.</p>

          <a href="http://www.ted.com/tedx" class="sectionCTA row">learn more about the <span class="tedx">TEDx</span> program</a>

        </section>

        <?php get_footer(); ?>
