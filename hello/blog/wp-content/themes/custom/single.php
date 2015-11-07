<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Someone is Working Harder than you!</title>
    <script src="../../pace/pace.min.js"></script>
    <link href="../../pace/pace.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../elegentfont/stylesheet.css">
    <link rel="shortcut icon" href="../../favicon.png">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="<?php bloginfo( 'stylesheet_url' ); ?>" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" href="../../font-awesome-4.4.0/css/font-awesome.min.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <aside class="col-md-3 pjnav">
        <div class="pjlogo">
            <a href="../"><img src="../../images/logo.png" alt="logo"></a>
        </div>
        <nav class="pjnavul">
            <ul>
                <li><a href="#">About</a></li>
                <li><a href="../../works">Works</a></li>
                <li><a href="../../contact">Contact</a></li>
                <li><a class="current" href="../../blog">Blog</a></li>
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
    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-9">
                <?php
			if ( is_single() ) :
				the_title( sprintf( '<h1 class="entry-title pjhello">', esc_url( twentyfifteen_get_link_url() ) ), '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title pjhello"><a href="%s">', esc_url( twentyfifteen_get_link_url() ) ), '</a></h1>' );
			endif;
		?>
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

                            <?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			get_template_part( 'content-link', get_post_format() );

//if u want comments

//			// If comments are open or we have at least one comment, load up the comment template.
//			if ( comments_open() || get_comments_number() ) :
//				comments_template();
//			endif;
       
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
					'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
					'<span class="post-title">%title</span>',
			) );

		// End the loop.
		endwhile;
		?>

                        </main>
                        <!-- .site-main -->
                    </div>
                    <!-- .content-area -->
                </div>
            </div>
        </div>
    </section>
</body>

</html>