<?php
/*
  * Template name: Home
  * */
get_header();

?>
 


<?php if(ale_get_option('galleryon')){?>
   <?php
    if(ale_get_option('customgalleryon')){?>
        
       <section class="gallery" id="gallery" style="background-color: <?php echo ale_get_option('background'); ?>;
background-image: url('https://www.transparenttextures.com/patterns/checkered-light-emboss.png');">
	    <div class="container">
	        <div class="row">
                <div class="title-wr">
	                <h1 class="mod-title"><?php echo ale_get_option('gallerytitle'); ?></h1>
	            </div>
	            
	            <div class="gallery-box">
	            
	            <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts1 = get_posts('numberposts=1&category_name=Галерея');
                    foreach ($my_posts1 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    <a href="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="mfp-gallery">
	            <div class="col-md-3 col-sm-6 big">
	                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	                
	            </div>
	            </a>
                    
                    
                    
                    <?php endforeach; ?>
                <?php } ?>
                
                <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts2 = get_posts('numberposts=20&category_name=Галерея&offset=1');
                    foreach ($my_posts2 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    
                    <a href="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="mfp-gallery">
	            <div class="col-md-3 col-sm-3">
	                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	            </div>
                </a>
                    
                    
                    <?php endforeach; ?>
                <?php } ?>
	            
	            
                
	            </div>  
	        </div>
	    </div>
	</section>       
      
    <?php
     } else{
    ?>
            
    <section class="gallery" id="gallery" style="background-color: <?php echo ale_get_option('background'); ?>;
background-image: url('https://www.transparenttextures.com/patterns/checkered-light-emboss.png');">
	    <div class="container">
	        <div class="row">
                <div class="title-wr">
	                <h1 class="mod-title"><?php echo ale_get_option('gallerytitle'); ?></h1>
	            </div>
	            
	            <div class="gallery-box">
	            
	            <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts1 = get_posts('numberposts=1&category_name=Галерея');
                    foreach ($my_posts1 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    <a href="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="mfp-gallery">
	            <div class="col-md-6 col-sm-6 big">
	                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	                <i class="fa fa-play-circle" aria-hidden="true"></i>
	            </div>
	            </a>
                    
                    
                    
                    <?php endforeach; ?>
                <?php } ?>
                
                <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts2 = get_posts('numberposts=8&category_name=Галерея&offset=1');
                    foreach ($my_posts2 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    
                    <a href="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" class="mfp-gallery">
	            <div class="col-md-3 col-sm-3">
	                <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	            </div>
                </a>
                    
                    
                    <?php endforeach; ?>
                <?php } ?>
	            
	            
                
	            </div>  
	        </div>
	    </div>
	</section>
	<?php } ?>
<?php } ?>
<?php if(ale_get_option('serviceson')){?>	
	<section class="services" id="services" style="background: url('<?php echo ale_get_option('serviceswall'); ?>') center no-repeat; background-size: cover">
	    <div class="filter"></div>
	    <div class="container">
	        <div class="row">
	            <div class="title-wr">
	                <h1 class="mod-title" style=""><?php echo ale_get_option('servicestitle'); ?></h1>
	            </div>
	            <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts3 = get_posts('numberposts=6&category_name=Сервисы');
                    foreach ($my_posts3 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    <div class="serv-box">
	                <div class="col-md-4 col-sm-6">
	                    <div class="service-logo">
	                        <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	                    </div>
	                    <h2 class="service-title"><?php echo get_the_title();?></h2>
	                    <p><?php echo get_the_excerpt();?></p>
	                </div>
	                
	                </div>
                    
                    
                    <?php endforeach; ?>
                <?php } ?>
	            
	        </div>
	    </div>
	</section>
	
<?php } ?>

<?php if(ale_get_option('abouton')){?>	
	<section class="about" id="about" style="background-color: <?php echo ale_get_option('background'); ?>;
background-image: url('https://www.transparenttextures.com/patterns/checkered-light-emboss.png');">
	    <div class="container">
	        <div class="row">
                
	            <div class="col-lg-8 col-md-12 anim1">
	                <img src="<?php echo ale_get_option('aboutwall'); ?>" width="100%" alt="">
	            </div>
	            <div class="col-lg-4 col-md-12 anim2">
	                <div class="title-wr">
	                    <h1 class="mod-title" style=""><?php echo ale_get_option('abouttitle'); ?></h1>
	                </div>
	                <p>
	                    <?php echo ale_get_option('abouttext'); ?>
	                </p>
	                <a href="#contact" class="button" style="background-color: #fff;"><?php echo ale_get_option('aboutbuttontitle'); ?></a>
	            </div>
	        </div>
	    </div>
	</section>
<?php } ?>
<?php if(ale_get_option('teamon')){?>	
	<section class="the-team" id="team" style="background: url('<?php echo ale_get_option('teamwall'); ?>') center no-repeat; background-size: cover">
        <div class="filter"></div>
	    <div class="title-wr">
	       <h1 class="mod-title" style=""><?php echo ale_get_option('teamtitle'); ?></h1>
	    </div>
	   <div class="container">
	       <div class="row">
               <div class="col-md-12 carousel-wrapper">
               <div class="owl-carousel slider1">
               <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts4 = get_posts('numberposts=12&category_name=Команда');
                    foreach ($my_posts4 as $post) :
                    setup_postdata($post);
                    ?>
                    
                    <div class="item">
	                   <div class="photo-wrapp">
	                       <img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt="">
	                   </div>
	                   <p class="title"><?php echo get_the_title();?></p>
	                   <p class="position"><?php echo get_the_excerpt();?></p>
                   </div>
                    
                    <?php endforeach; ?>
                <?php } ?>
	               
	           </div>   
	           </div>
	       </div>
	   </div>
	</section>
<?php } ?>
<?php if(ale_get_option('productson')){?>	
	<section class="products" id="products" style="background-color: <?php echo ale_get_option('background'); ?>;
background-image: url('https://www.transparenttextures.com/patterns/checkered-light-emboss.png');">
	    <div class="title-wr">
	       <h1 class="mod-title" style=""><?php echo ale_get_option('productstitle'); ?></h1>
	       <p class="products-text"><?php echo ale_get_option('productstext'); ?></p>
	    </div>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="products-wrapper">
	                    <div class="owl-carousel slider2">
                            <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts5 = get_posts('numberposts=12&category_name=Продукция');
                    foreach ($my_posts5 as $post) :
                    setup_postdata($post);
                    ?>
                    
                            <div class="item">
	                            <div class="prodImg-wrapp">
	                               <a href="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" title="<?php echo get_the_title();?>" ><img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" alt=""></a>
	                            </div>
	                        </div>
                    
                    <?php endforeach; ?>
                <?php } ?>
                        
	                        
	                        
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<?php } ?>
<?php if(ale_get_option('brandson')){?>	
	<section class="brands" id="brands" style="background: url('<?php echo ale_get_option('brandsimage'); ?>') center no-repeat; background-size: cover">
        <div class="filter"></div>
	    <div class="title-wr">
	       <h1 class="mod-title" style=""><?php echo ale_get_option('brandstitle'); ?></h1>
	    </div>
	    <div class="container">
	        <div class="row">
	            <div class="col-md-12">
                    <div class="navigation">
	                    <div class="prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
	                    <div class="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
	                </div>
	                <div class="ow-container slider3 owl-carousel">
                       
                        <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts6 = get_posts('numberposts=8&category_name=Партнеры');
                    foreach ($my_posts6 as $post) :
                    setup_postdata($post);
                    ?>
                            <div class="br-photo"><img src="<?=wp_get_attachment_url( get_post_thumbnail_id() ); ?>" width="100%" height="" alt=""></div>
                    
                    <?php endforeach; ?>
                <?php } ?>
	                    
	                    
	                </div>
	            </div>
	        </div>
	    </div>
	</section>
<?php } ?>
<?php if(ale_get_option('contactson')){?>	
	<section class="contact" id="contact" style="background-color: <?php echo ale_get_option('background'); ?>;
background-image: url('https://www.transparenttextures.com/patterns/checkered-light-emboss.png');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 anim1">
                    <div class="title-wr">
	                    <h1 class="mod-title" style=""><?php echo ale_get_option('contacttitle'); ?></h1>
	                </div>
	                <p class="contact-text"><?php echo ale_get_option('contacttext'); ?></p>
	                <form action="https://formspree.io/<?php echo ale_get_option('emailcont'); ?>" method="post" class="contact-form">
	                    <input type="text" name="<?php echo ale_get_option('contactformfield1'); ?>" class="contact-name" placeholder="<?php echo ale_get_option('contactformfield1'); ?>" required>
	                    <input type="text" name="<?php echo ale_get_option('contactformfield2'); ?>" class="contact-email" placeholder="<?php echo ale_get_option('contactformfield2'); ?>" required>
	                    <textarea class="contact-area" name="<?php echo ale_get_option('contactformfield3'); ?>" placeholder="<?php echo ale_get_option('contactformfield3'); ?>" required></textarea>
	                    <button class="button" value="send"><?php echo ale_get_option('contactformbutton'); ?></button>
	                </form>
                </div>
                <div class="col-md-6 anim2">
                    <div class="map">
                    <div class="filter"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <iframe src="<?php echo ale_get_option('contactmap'); ?>" width="100%" height="100%" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
	</section>
<?php } ?>
<?php get_footer();?>

