<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (perch_layout_has('blog-post')) {
        perch_blog_post_meta(perch_get('s'));
    }else{
        echo '<title>' . perch_pages_title(true) . '</title>';
    }
    $domain        = 'https://'.$_SERVER["HTTP_HOST"];
    $url           = $domain.$_SERVER["REQUEST_URI"];
    $sitename      = 'xxxx';
    $twittername   = 'xxxx';
    $sharing_image = '../img/we_fb_image.png';
    PerchSystem::set_var('domain',$domain);
    PerchSystem::set_var('url',$url);
    PerchSystem::set_var('sitename',$sitename);
    PerchSystem::set_var('sharing_image',$sharing_image);
    PerchSystem::set_var('twittername',$twittername);
    perch_page_attributes(array('template' => 'seo.html')); ?>
    <!-- CSS -->
    <?php $CSSversion = filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/css/apps.min.css'); ?>
<link rel="stylesheet" href="/assets/css/apps.min.<?php echo $CSSversion ?>.css" type="text/css" media="screen">
    <?php $CSSversion = filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/css/print.min.css'); ?>
<link rel="stylesheet" href="/assets/css/print.min.<?php echo $CSSversion ?>.css" type="text/css" media="print">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#fff">
    <script>
    var first = "<?php echo $contactDetails[0]['emailFirst']; ?>";
    var last = "<?php echo $contactDetails[0]['emailLast']; ?>"; 
    </script>
</head>

<body id="page_top" role="application">

    <div class="wrapper"><!-- grid -->
      <a href="#content" class="skip">Skip to content</a>
