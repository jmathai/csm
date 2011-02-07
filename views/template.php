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
          <li><a href="/">Home</a></li>
          <li><a href="/">Updates</a></li>
          <li><a href="/">Get Involved</a></li>
          <li><a href="/">About</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <div class="container">
    <?php include $body; ?>
  </div>
  <div class="container">
    <footer>
      Christhia Seva Mission, &copy; <?php echo date('Y'); ?>
    </footer>
  </div>
</body>
</html>
