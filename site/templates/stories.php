<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"> 

  <title>Stories Been Told by Misha Berveno</title>

  <meta name="description" content="A collection of stories written and books read by Misha Berveno">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <?= css('/assets/css/normalize.css') ?>
  <?= css('/assets/css/app.css') ?>
	
  <link rel="apple-touch-icon" sizes="57x57" href="/favicons/apple-touch-icon-57x57.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="60x60" href="/favicons/apple-touch-icon-60x60.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="72x72" href="/favicons/apple-touch-icon-72x72.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="76x76" href="/favicons/apple-touch-icon-76x76.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="114x114" href="/favicons/apple-touch-icon-114x114.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="120x120" href="/favicons/apple-touch-icon-120x120.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="144x144" href="/favicons/apple-touch-icon-144x144.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="152x152" href="/favicons/apple-touch-icon-152x152.png?v=zX6QBrgJb8">
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon-180x180.png?v=zX6QBrgJb8">
  <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png?v=zX6QBrgJb8" sizes="32x32">
  <link rel="icon" type="image/png" href="/favicons/android-chrome-192x192.png?v=zX6QBrgJb8" sizes="192x192">
  <link rel="icon" type="image/png" href="/favicons/favicon-96x96.png?v=zX6QBrgJb8" sizes="96x96">
  <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png?v=zX6QBrgJb8" sizes="16x16">
  <link rel="manifest" href="/favicons/manifest.json?v=zX6QBrgJb8">
  <link rel="shortcut icon" href="/favicons/favicon.ico?v=zX6QBrgJb8">
  <meta name="apple-mobile-web-app-title" content="Stories Been Told">
  <meta name="application-name" content="Stories Been Told">
  <meta name="msapplication-TileColor" content="#00aba9">
  <meta name="msapplication-TileImage" content="/favicons/mstile-144x144.png?v=zX6QBrgJb8">
  <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=zX6QBrgJb8">
  <meta name="theme-color" content="#ffffff">


  <meta property="og:url" content="http://www.storiesbeentold.com/" /> 
  <meta property="og:title" content="Stories Been Told by Misha Berveno" /> 
  <meta property="og:description" content="There is writing, the stories I have to tell, and reading, the books I want to share." /> 
  <meta property="og:image" content="http://storiesbeentold.com/assets/images/SBT-logo2.png" />


  <script src="//use.typekit.net/wis8nvy.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
</head>

<body>
  <div class="grid">
    <header><?php snippet('header') ?></header>
      <?php foreach($page->children()->visible()->flip() as $story): ?>  
        <div class="main">
          <div class="col-4 title">
            <div class="title-float-right">
              <h2><?php echo $story->title() ?></h2>
            </div>
          </div>
          <div class="col-8 text">
            <div class="text-float-left">
              <div class="text-dimensions">
                <span class="no_margin"><?php echo kirbytext($story->text()) ?></span>
                    <img style="margin-top:0px;" src="/favicons/apple-touch-icon-57x57.png?v=zX6QBrgJb8" width="25px">
              </div>
            </div>
          </div>
        </div>
      <?php endforeach ?> 
  </div>
</body>
</html>