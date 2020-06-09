<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff"> -->
  <title>Junya's Portfolio Site</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="index.js"></script>
  <script src="https://kit.fontawesome.com/967f098682.js" crossorigin="anonymous"></script>
</head>

<body>
  <?php include "header.php" ?>

  <section id="top">
    <div class="topContainer">
      <h2>Welcome to my Portfolio Site</h2>
      <p>ポートフォリオサイトにお越しいただき、ありがとうございます。<br>
        このサイトでは、現在の私が出来ることを、余さず誇張せずに記載しています。<br>
        新しい技術を学ぶたびにアップデートされる予定です。<br><br>

        最後までご覧いただけたら幸いです。</p>
    </div>
  </section>

  <section id="about">
    <div class="wrapper">
      <div class="container">
        <h2>About</h2>
        <h3 id="history">経歴</h3>
        <div id="about-contents">
          <div class="about-item about-left scroll">
            <img src="./photos/waseda.jpg" alt="">
            <p><b>早稲田大学第一文学部卒</b><br>
              日本史学を学ぶ傍ら、航空部でグライダーの操縦にいそしむ。<br>
              関東大会準優勝。</p>
          </div>
          <div class="about-item about-right scroll">
            <img src="./photos/fsol.jpg">
            <p><b>大手SIer企業に入社</b><br>
              SEとして、大手飲料メーカーの担当になる。<br>
              システム開発の上流工程、お客様とのコミュニケーション方法を学ぶ。</p>
          </div>
          <div class="about-item about-left scroll">
            <img src="photos/aus1.JPG" alt="">
            <p><b>ワーキングホリデーでオーストラリアへ</b><br>
              英語力の向上はもとより、異なる環境への適応能力などを獲得。<br>
              他国籍の友人とふれあい、多様性を認めるマインドを得る。</p>
          </div>
          <div class="about-item about-right scroll">
            <img src="photos/chef.JPG" alt="">
            <p><b>日本橋で和食の板前修業</b><br>
              昔ながらの従弟社会。<br>
              厳しい環境でも投げ出さない根性、忍耐、責任感が養われた。</p>
          </div>
          <div class="about-item about-left scroll">
            <img src="photos/aus2.jpg" alt="">
            <p><b>再びオーストラリアへ</b><br>
              日本料理店で副料理長を2年<br>
              その後、日本食材の卸会社で勤務。2か月目で現場のまとめ役へ。<br>
              一念発起し、再度プログラミングの学習を始める。</p>
          </div>
        </div>
        <h3 id="character">性格</h3>
        <ul>
          <li class="scroll">穏やかで聞き上手。後輩の相談は日常茶飯事。<br><span class="scroll">⇒お客様のご要望を、丁寧に正確にヒアリングします</span></li>
          <li class="scroll">責任感が強い。入社後すぐに副料理長や現場のまとめ役を任される。
            <br><span class="scroll">⇒責任をもって、質の高い商品を、納期厳守で納品します。</span></li>
          <li class="scroll">行動力がある。異なる業種に飛び込み、海外に移住を決め、プログラミングの独学を継続。<br><span class="scroll">⇒常に新しいことに挑戦し、スキルアップし続けています。</span></li>
        </ul>
      </div>
    </div>
  </section>


  <section id="service">
    <div class="wrapper">
      <div class="container">
        <h2>Service</h2>
        <div class="service-contents">
          <div class="service-item lp scroll">
            <div class="service-text lp-text scroll">
              <h3>LP作成</h3>
              <p>お客様のゴール（成約増、お問い合わせ増など）に沿った効果的なLPを作成いたします
              </p>
            </div>
          </div>
          <div class="service-item cd scroll">
            <div class="service-text cd-text scroll">
              <h3>コーディング代行</h3>
              <p>お客様のデザイン・素材を基に、細部まで正確にWebサイトを構築いたします</p>
            </div>
          </div>
          <div class="service-item re scroll">
            <div class="service-text re-text scroll">
              <h3>レスポンシブ対応</h3>
              <p>画面のサイズに応じてレイアウトを変更するよう設定します</p>
            </div>
          </div>
        </div>
        <a href="#contact">お問い合わせ、ご依頼はこちら</a>
      </div>
    </div>
  </section>

  <section id="works">
    <div class="wrapper">
      <div class="container">
        <h2>Works</h2>
        <div class="works-contents">
          <div class="works-item">
            <img class="works-img works-img-left" src="./photos/portfolio.png" alt="">
            <div class="works-text works-text-right">
              <h3>ポートフォリオ</h3>
              <span>詳細は画像をタップ</span>
              <h4>実装機能</h4>
              <p>レスポンシブ対応<br>お問い合わせフォーム<br>各種アニメーション</p>
              <h4>使用言語</h4>
              <p>HTML, CSS, PHP, JavaScript, jQuery</p>
            </div>
          </div>
          <div class="works-item">
            <img class="works-img works-img-right" src="./photos/airbnbcopy.png" alt="">
            <div class="works-text works-text-left">
              <h3>サイト模写</h3>
              <p>Airbnb様 ランディングページ</p>
              <span>詳細は画像をタップ</span>
              <h4>使用言語</h4>
              <p>HTML, CSS</p>
            </div>
          </div>
          <div class="works-item">
            <div class="works-img works-img-left">Coming Soon</div>
            <div class="works-text works-text-right">
              <h3>Coming Soon</h3>
              <span>詳細は画像をタップ</span>
              <h4>使用言語</h4>
              <p>????</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="skills">
    <div class="wrapper">
      <div class="container">
        <h2>Skills</h2>
        <div class="skills-contents">
          <div class="skills-item">
            <p class="lang" id="html">HTML</p>
          </div>
          <div class="skills-item">
            <p class="lang" id="css">CSS</p>
          </div>
          <div class="skills-item">
            <p class="lang" id="js">Javascript<br>jQuery</p>
            <!-- <p class="lang" id="jquery">jQuery</p> -->
          </div>
          <div class="skills-item">
            <p class="lang" id="wp">Wordpress</p>
          </div>
          <div class="skills-item">
            <p class="lang" id="php">PHP</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="wrapper">
      <div class="container">
        <h2>Contact</h2>
        <form action="confirm-sent.php" method="post" name="query" onsubmit="return checkAndSend()">
          <div id="form-contents">
            <p>お名前</p>
            <input type="text" name="queryName" id="queryName">
            <p class="blank-message" id="blankName">※お名前を入力してください</p>
            <p>Emailアドレス</p>
            <input type="email" name="queryEmail" id="queryEmail">
            <p class="blank-message" id="blankEmail">※Emailアドレスを入力してください</p>
            <p>お問い合わせ内容</p>
            <textarea name="queryMessage" id="queryMessage" cols="30" rows="10"></textarea>
            <p class="blank-message" id="blankMessage">※お問い合わせ内容を入力してください</p>
            <input type="submit" id="submit" value="内容確認">
          </div>
        </form>
      </div>
      <footer class="scroll">
        <div id="footer-container">
          <h2>Thank you for visiting</h2>
          <p id="thanks">最後までご覧いただき、ありがとうございました<br>
            お問い合わせ、ご依頼、お気づきの点等ございましたら<br>
            上記お問い合わせフォームにてご連絡お願いいたします</p>
          <div id="footer-bottom">
            <div id="footer-left">
              <p id="follow-me">よろしければフォローもお願いいたします</p>
              <a href="https://twitter.com/junyaUeda"><i class="fab fa-twitter-square fa-3x"></i></a>
            </div>
            <div id="footer-right">
              <p>Junya Ueda 2020 -</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </section>


</body>

</html>