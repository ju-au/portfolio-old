<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junya's Portfolio Site</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <img src="photos/index-background.jpg" alt="" id="background-img">
    <header>
        <h1>Junyaの<br class="br-sp">ポートフォリオサイトへ<br class="br-sp">ようこそ</h1>
    </header>
    <section>
        <h2>ご覧になりたいサイトを<br class="br-tab">選択してください</h2>
        <div class="container">
            <div class="item">
                <h3>自己紹介サイト</h3>
                <a href="top.php"><img src="photos/portfolio1.png" alt="自己紹介サイトのスクリーンショット"></a>
                <h4>使用技術</h4>
                <ul>
                    <li>HTML</li>
                    <li>SCSS</li>
                    <li>Vanilla JS (JavaScript)</li>
                    <li>PHP</li>
                </ul>
            </div>
            <div class="item">
                <h3>架空ECサイト</h3>
                <!-- 本番用 -->
                <!-- <a href="http://junyaportfolio.com/wordpress"><img src="photos/portfolio2.png" alt="架空ECサイトのスクリーンショット"></a> -->
                <!-- 開発用 -->
                <a href="http://localhost/wp-portfolio-ecommerce"><img src="photos/portfolio2.png" alt="架空ECサイトのスクリーンショット"></a>
                <h4>使用技術</h4>
                <ul>
                    <li>WordPress</li>
                    <li>Woo Commerce (プラグイン)</li>
                    <li>Contact Form 7 (プラグイン)</li>
                </ul>
            </div>
        </div>
    </section>
</body>

</html>