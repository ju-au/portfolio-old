//Contact formに空欄があればメッセージを表示する
let checkName = true;
let checkEmail = true;
let checkMessage = true;
function checkAndSend() {
  const form = document.query;
  const ablankName = document.getElementById("blankName");
  const ablankEmail = document.getElementById("blankEmail");
  const ablankMessage = document.getElementById("blankMessage");
  // フォームの「お名前」が空欄だった時にエラーメッセージを表示
  if (form.queryName.value == "") {
    ablankName.classList.add("showBlankMessage");
    checkName = false;
  } else {
    if (ablankName.classList.contains("showBlankMessage")) {
      ablankName.classList.remove("showBlankMessage");
      checkName = true;
    };
  };
  // フォームの「Email」が空欄だった時にエラーメッセージを表示
  if (form.queryEmail.value == "") {
    ablankEmail.classList.add("showBlankMessage");
    checkEmail = false;
  } else {
    if (ablankEmail.classList.contains("showBlankMessage")) {
      ablankEmail.classList.remove("showBlankMessage");
      checkEmail = true;
    };
  };
  // フォームの「お問い合わせ内容」が空欄だった時にエラーメッセージを表示
  if (form.queryMessage.value == "") {
    ablankMessage.classList.add("showBlankMessage");
    checkMessage = false;
  } else {
    if (ablankMessage.classList.contains("showBlankMessage")) {
      ablankMessage.classList.remove("showBlankMessage");
      checkMessage = true;
    };
  };
  //全ての項目に入力されていればtrueを返し、確認画面に遷移
  if (checkName && checkEmail && checkMessage) {
    return true;
  } else {
    return false;
  };
}

// jQuery
$(function () {

  //スムーススクロール
  $('a[href^="#"]').click(function () {
    let speed = 1000;
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });



  //スクロールアニメーションの設定
  let window_h = $(window).height();
  //スクロールイベント
  $(window).on("scroll", function () {
    //スクロールの位置を取得する
    let scroll_top = $(window).scrollTop();
    $(".scroll").each(function () {
      //各box要素のtopの位置を取得する
      let elem_pos = $(this).offset().top;
      //どのタイミングでフェードインさせるか
      if (scroll_top >= elem_pos - window_h +100) {
        $(this).addClass("show");　//特定の位置を超えたらクラスを追加
      }
    });
  });



  //hoverアニメーションの設定
  $('.works-item').hover(function () {
    $(this).children(".works-img").addClass("show");
    $(this).children(".works-text").addClass("show-tab");
    $(this).delay(100).queue(function () {
      $(this).children(".works-text").addClass("show");
    });
  });
})



// confirmページのリンククリック時の警告
function confirmFunction() {
  //確認ダイアログを表示する
  let conf = confirm( "Topページに移動します。ページを移動すると、ご入力いただいた内容は消えてしまいます。よろしいですか？" );
  return conf;
  }