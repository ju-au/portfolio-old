<header>
  <div id="headerContainer">
    <h1>Junya's Portfolio Site</h1>
    <!-- モバイル表示時のナビゲーションドロワー -->
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
            <!-- top画面 -->
            <?php if ($page_flag === 0) : ?> 
              <li><a href="#">Top</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#service">Service</a></li>
              <li><a href="#works">Works</a></li>
              <li><a href="#skills">Skills</a></li>
              <li><a href="#contact">Contact</a></li>
            <!-- 確認画面 -->
            <?php elseif ($page_flag === 1) : ?>
              <li><a href="./top.php" onclick="return confirmFunction()">Top</a></li>
              <li><a href="./top.php#about" onclick="return confirmFunction()">About</a></li>
              <li><a href="./top.php#service" onclick="return confirmFunction()">Service</a></li>
              <li><a href="./top.php#works" onclick="return confirmFunction()">Works</a></li>
              <li><a href="./top.php#skills" onclick="return confirmFunction()">Skills</a></li>
              <li><a href="./top.php#contact" onclick="return confirmFunction()">Contact</a></li>
            <!-- 送信完了画面 -->
            <?php else : ?>
              <li><a href="./top.php">Top</a></li>
              <li><a href="./top.php#about">About</a></li>
              <li><a href="./top.php#service">Service</a></li>
              <li><a href="./top.php#works">Works</a></li>
              <li><a href="./top.php#skills">Skills</a></li>
              <li><a href="./top.php#contact">Contact</a></li>
            <?php endif; ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>

<img src="./photos/cairns.jpg" id="bg-img">