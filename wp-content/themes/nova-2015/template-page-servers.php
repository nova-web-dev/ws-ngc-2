<?php
/*
Template Name: CS-Page-Servers
*/
?>

<?php get_header(); ?>


<body>
  

  <!-- Logo Starts -->
    <div class="container sides-unpadded text-center unselectable" id="logo-container">
      <h1 id="logo-text">nova</h1>
      <h1 id="logo-subtext">gaming community</h1>
    </div>
  <!-- Logo Ends -->

  <!-- Main Content Starts -->
    <div class="container text-center" id="main-content" style="overflow: auto">
    	<!-- <h1 class="thin">Servers</h1> -->
    	<?php if ( have_posts() ) : ?>
	    <?php while ( have_posts() ) : the_post(); ?>
	    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	        <div class="post-header">
	            
	            <h2><?php the_title(); ?></h2>
	            <!-- <div class="author"><?php the_author(); ?></div> -->
	        </div>
	        <!--end post header-->
	        <div class="entry clear">
				<div class="post-text">
	            	<?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
	            	<?php the_content(); ?>
	            </div>
	            <?php wp_link_pages(); ?> 
	        </div>
	        <!--end entry-->
	        <!-- <hr class="dark-thick"> -->
	        <!--end post footer-->
	    </div>
	    <!--end post-->
	    <?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
	    <div class="navigation index">
	        <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
	        <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	    </div>
	    <!--end navigation-->
	    <?php else : ?>
	    <?php endif; ?>
	</div>
  <!-- Main Content Ends -->
  <!-- <script src="bower_components/jquery/dist/jquery.min.js"></script> -->
  <!-- <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script> -->
</body>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
