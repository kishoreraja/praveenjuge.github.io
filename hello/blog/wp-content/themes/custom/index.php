<?php
get_header(); ?>


<body>
    <aside class="col-md-3 pjnav">
        <div class="pjlogo">
            <a href="../"><img src="../images/logo.png" alt="logo"></a>
        </div>
        <nav class="pjnavul">
            <ul>
                <li><a href="../about">About</a></li>
                <li><a href="../works">Works</a></li>
                <li><a href="../contact">Contact</a></li>
                <li><a class="current"  href="#">Blog</a></li>
            </ul>
        </nav>
        <nav class="pjsocial">
            <ul>
                <li><a target="_blank" href="https://twitter.com/praveenjuge"><i class="fa fa-twitter"></i></a></li>
                <li><a target="_blank" href="https://github.com/praveenjuge"><i class="fa fa-github"></i></a></li>
                <li><a target="_blank" href="https://www.reddit.com/user/praveenjuge/"><i class="fa fa-reddit"></i></a></li>
                <li><a target="_blank" href="https://in.linkedin.com/in/praveenjuge"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </nav>
    </aside>
    <div class="container-fluid pjgrid">
        <div class="row">
            <div class="col-md-9">
                <h1 class="pjhello">My Random Thoughts</h1>
            </div>
        </div>
    </div>
  
    <hr>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();
    
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
          
			// End the loop.
			endwhile;
                
			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>
        
		</main><!-- .site-main -->
	</div><!-- .content-area -->
                </div>
            </div>
        </div>
    </section>

</body>
</html>

	
