<head>
	<html lang="en">
        <meta charset="utf-8">
        <base href="<?= URL::base(); ?>">
        <title><?= $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
        <meta name="description" content="<?php echo Kohana::$config->load('site.description') ?>">
        <meta name="author" content="<?php echo Kohana::$config->load('site.author') ?>">
    
        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="media/img/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="media/img/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="media/img/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="media/img/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="media/img/apple-touch-icon-57-precomposed.png">
    
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        
         <?php 
            foreach($styles as $file => $type)
            { 
                echo HTML::style($file, array('media' => $type)), ""; 
            }    
        ?>  
          
        <!--[if lt IE 9]>
        	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <!--[if lt IE 10]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->