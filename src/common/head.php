<?php session_start(); ?>
<head>
  <meta charset="UTF-8" />

  <!-- icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
  <link rel="manifest" href="images/icons/site.webmanifest">
  <link rel="mask-icon" href="images/icons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="images/icons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="images/icons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <?php
    $secure = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on';
    $protocol = $secure ? 'https://' : 'http://';
    $base = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['CONTEXT_PREFIX'] . '/';
  ?>
  <base href="<?php echo $base ?>" />
  <meta name="viewport" content="width=device-width initial-scale=1" />
  <link rel="stylesheet" href="css/output.css" />
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
  <title>TimeWarp Consoles</title>
</head>