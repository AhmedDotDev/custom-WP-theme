<?php get_header();
the_post(); 
$imgpath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');?>
<div style="height:200px; background-image: url('<?php echo $imgpath[0] ?>'); background-size:cover;">
<h2 class="brd-txt"> <a href= "<?php echo site_url(); ?>" >Home</a> / <?php the_title()?></h2>
</div>
<?php the_content(); ?>

<?php get_footer(); ?>