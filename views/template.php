<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="<?php echo getAsset('css', array('styles.css')); ?>">
  <title><?php if(isset($title)) { printf('%s :: ', $title); } ?>Christhia Seva Mission</title>
</head>
<body>
  <div class="container">
    <header>
      <img src="<?php echo img('/img/logo.png'); ?>">
      <nav>
        <ul>
          <li class="active"><a href="/">Home</a></li>
          <li><a href="/">Updates</a></li>
          <li><a href="/">Get Involved</a></li>
          <li><a href="/">About</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="top border"></div>
  <div class="content-outer">
    <div class="container" id="content">
      <?php include $body; ?>
    </div>
  </div>
  <div class="bottom border"></div>
  <div class="footer">
    <footer>
      <div class="container">
        <img src="<?php echo img('/img/india-footer.png'); ?>">
        <span>Christhia Seva Mission, &copy; <?php echo date('Y'); ?></span>
      </div>
    </footer>
  </div>
</body>
</html>
