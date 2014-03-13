<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title><?php echo($page_title); ?></title>
        
        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>
        
        <?php get_header(); ?>
    </head>

    <body>
        <?php $path = explode('/',$_SERVER["REQUEST_URI"]);
        if($is_home) { ?>
            <div id="background" style="background: url(/templates/puddle/puddle.jpg) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($intro_title); ?></h1>
                </div>
            </div>
        <?php } else if($path[1] == "category") { ?>
            <div id="background" style="background: url(/templates/puddle/puddle.jpg) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($post_category); ?></h1>
                </div>
            </div>
        <?php } else { ?>
            <div id="background" style="background: url(<?php echo($post_image)?>) no-repeat center center fixed;"></div>
            <div id="hero">
                <div id="hero-content">
                    <h1><?php echo($post_title); ?></h1>
                </div>
            </div>
        <?php } ?>
        <div id="main">
            <?php if($is_home) { ?>
                <article id="header">
                    <div class="row">
                        <div id="info">
                            <!--<li><span><?php echo($blog_title); ?></span></li>-->
                            <span><a href="mailto:<?php echo($blog_email); ?>?subject=Hello"><?php echo($blog_email); ?></a></span>
                            <div class="thumbnail">
                                <img src="<?php echo get_twitter_profile_img($blog_twitter); ?>" alt="profile" />
                            </div>
                            <span><a href="http://twitter.com/<?php echo($blog_twitter); ?>">&#64;<?php echo($blog_twitter); ?></a></span>
                        </div>

                        <p class="three-quarters"><?php echo($intro_text); ?></p>
                    </div>
                </article>
            <?php } ?>
            <?php echo($content); ?>
        
            <?php get_footer(); ?>
        </main>
    </body>
</html>
