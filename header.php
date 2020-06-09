<header>
  <div id="headerContainer">
    <?php if ($_SERVER["REQUEST_URI"] == "/portfolio/index.php") : ?>
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
              <li><a href="./index.php" onclick="confirmFunction()">Top</a></li>
              <li><a href="./index.php#about" onclick="confirmFunction()">About</a></li>
              <li><a href="./index.php#service" onclick="confirmFunction()">Service</a></li>
              <li><a href="./index.php#works" onclick="confirmFunction()">Works</a></li>
              <li><a href="./index.php#skills" onclick="confirmFunction()">Skills</a></li>
              <li><a href="./index.php#contact" onclick="confirmFunction()">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>
    <?php endif; ?>
  </div>
</header>

<img src="./photos/cairns.jpg" id="bg-img">