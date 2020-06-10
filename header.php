<header>
  <div id="headerContainer">
    <?php echo ($_SERVER["REQUEST_URI"]) ?>
    <?php if ($_SERVER["REQUEST_URI"] == "/index.php") : ?>

    <?php 
      /* if ($_SERVER["REQUEST_URI"] == "/portfolio/index.php") : */ ?>

      <h1>Junya's Portfolio Site</h1>
      <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
        </label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <nav>
            <ul>
              <li><a href="#">Top</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#service">Service</a></li>
              <li><a href="#works">Works</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>

    <?php else : ?>
      <h1>Junya's Portfolio Site</h1>
      <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input">
          <span id="span1"></span>
          <span id="span2"></span>
          <span id="span3"></span>
        </label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <nav>
            <ul>
              <li><a href="./index.php" onclick="return confirmFunction()">Top</a></li>
              <li><a href="./index.php#about" onclick="return confirmFunction()">About</a></li>
              <li><a href="./index.php#service" onclick="return confirmFunction()">Service</a></li>
              <li><a href="./index.php#works" onclick="return confirmFunction()">Works</a></li>
              <li><a href="./index.php#skills" onclick="return confirmFunction()">Skills</a></li>
              <li><a href="./index.php#contact" onclick="return confirmFunction()">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    <?php endif; ?>
  </div>
</header>

<img src="./photos/cairns.jpg" id="bg-img">