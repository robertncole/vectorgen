<!--

<?php get_header(); ?>

<div class="container single">

	<h1>Blog Post</h1>
	<?php 
		if(have_posts()){
			while(have_posts()){
				the_post();?>
				<h2><?php the_title(); ?></h2>
				<p class="p"><?php echo "Published: " . get_the_date(); ?></p>
				<p class="p l"><?php echo "Article written by: " . get_the_author(); 
				?></p>
				<?php the_content(); ?>
				
			<?php } // end while loop
		}// end if statement
	?>
</div>
<?php get_footer(); ?>

-->
