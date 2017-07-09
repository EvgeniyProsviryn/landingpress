<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	
	<style>
        
        .services h2:first-letter {
         color: <?php echo ale_get_option('background'); ?>;
        }
        .the-team .title:first-letter{
         color: <?php echo ale_get_option('background'); ?>;
        }
        .products .owl-dot{
            width: 15px;
            height: 15px;
            background: #fff;
            border-radius: 50%;
            display: inline-block;
            margin: 10px;
            margin-top: 50px;
            
        }
        .products .owl-dot.active{
            background-color: #333;
        }
        
        .carousel-wrapper .owl-dot{
            width: 15px;
            height: 15px;
            background: #fff;
            border-radius: 50%;
            display: inline-block;
            margin: 10px;
            margin-top: 50px;
            
        }
        .owl-dot.active{
            background-color: <?php echo ale_get_option('background'); ?>;
        }
        
    </style>
    
</head>
<body <?php body_class(); ?> >

<?php /*if(ale_get_option('sitelogo')){
    echo "<img src='".ale_get_option('sitelogo')."' />";
}*/ ?>


<div class="accentColor hidden"><?php echo ale_get_option('background'); ?></div>
                       <?php 
                            wp_nav_menu(array(
                                'Mobile_Menu' => '', 
                                'container' => 'nav', 
                                'container_class' => '', 
                                'container_id' => 'my-menu', // 
                                'menu_class' => '', // 
                                'menu_id' => '', 
                            ));                     
                        ?>
    
	<header>
	    <div class="header-wrapper" id="my-header" style="background:url('<?php echo ale_get_option('siteimage'); ?>') center no-repeat; background-size: cover">
           <?php
            if(ale_get_option('backcover')){?>
            <div class="showbox">
              <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                  <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
              </div>
            </div>
            <?php
            }
            ?>
	        <div class="header-menu">
	            <div class="container">
	                <div class="row">
	                    <div class="col-md-2 col-xs-6">
	                        <div class="logo"><img src="<?php echo ale_get_option('sitelogo'); ?>" width="100px" height="100px" alt=""></div>
	                    </div>
	                    <div class="col-md-10 col-xs-6">
                        <?php 
                            wp_nav_menu(array(
                                'Desktop_Menu' => '', // название меню
                                'container' => 'div', // контейнер для меню, по умолчанию 'div', в нашем случае ставим 'nav', пустая строка - нет контейнера
                                'container_class' => '', // класс для контейнера
                                'container_id' => '', // id для контейнера
                                'menu_class' => 'mymenu', // класс для меню
                                'menu_id' => '', // id для меню
                            ));                     
                        ?>
	                        
	                        <a href="#my-menu" class="hamburger hamburger--spin hidden-md hidden-lg">
	                            <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
	                        </a>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="container">
	            <div class="row">
                <?php
            if(ale_get_option('customhomeon')){?>
               
               <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="header-box" style="text-align: center">
                        <div class="flex-center">
	                    <h1 class="header-title"><?php echo ale_get_option('hometitle'); ?></h1>
	                    <p class="header-text"><?php echo ale_get_option('hometext'); ?></p>
	                    </div>
	                    </div>
	                </div>
                
                <?php
            } else{
            ?>
                
	                <div class="col-md-4 col-sm-6 col-xs-12 hidden-xs">
                        <div class="header-box">
                        <div class="flex-center">
	                    <h1 class="header-title"><?php echo ale_get_option('hometitle'); ?></h1>
	                    <p class="header-text"><?php echo ale_get_option('hometext'); ?></p>
	                    </div>
	                    </div>
	                </div>
	                <div class="col-md-4 col-md-offset-4 col-sm-6 col-xs-12  mobile">
	                    <form action="https://formspree.io/<?php echo ale_get_option('emailcont'); ?>" method="post">
                            <div class="tb-wrapp">
	                            <div class="connect-box">
	                                <div class="connect-header">
	                                    <span class="connect-title" style="color: <?php echo ale_get_option('background'); ?>"><?php echo ale_get_option('homeformtitle'); ?></span>
	                                    <br>
	                                    <p><i class="fa fa-phone"></i><?php echo ale_get_option('phonecont'); ?></p>
	                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
	                                </div>
	                                <div class="inp-wrapp">
	                                <input type="text" class="connect-name" placeholder="<?php echo ale_get_option('homeformfield1'); ?>" name="<?php echo ale_get_option('homeformfield1'); ?>" required>
	                                <input type="text" class="connect-name" placeholder="<?php echo ale_get_option('homeformfield2'); ?>" name="<?php echo ale_get_option('homeformfield2'); ?>" required>
	                                <textarea placeholder="<?php echo ale_get_option('homeformfield3'); ?>" name="<?php echo ale_get_option('homeformfield3'); ?>" required></textarea>
	                                <input type="submit" value="<?php echo ale_get_option('homeformbutton'); ?>" class="button" style="background: <?php echo ale_get_option('background'); ?>">
	                                </div>
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                
	                <?php } ?>
	                <i class="fa fa-anchor animated bounce" aria-hidden="true"></i>
	            </div>
	        </div>
	    </div>
	      
	</header>