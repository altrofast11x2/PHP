<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <title>PHP 퀴즈 세트 2</title>
</head>

<body>

  <?php
  /* =====================
   문제 1
   변수 $num 이 짝수면
   <p>짝수</p>
   홀수면
   <p>홀수</p>
===================== */
  $num = 7;
  if ($num % 2 == 0) {
    echo "<p>짝수</p>";
  } else {
    echo "<p>홀수</p>";
  }
  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 2
   숫자 배열이 주어진다.
   10 이상인 숫자만
   <li>로 출력
===================== */

  $numbers = [3, 10, 25, 7, 12];
  ?>

  <ul>
    <?php
    // TODO
    foreach ($numbers as $num) {
      if ($num >= 10) {
        echo "<li> (" . $num . ") </li>";
      }
    }
    ?>
  </ul>

  <hr>

  <?php
  /* =====================
   문제 3
   상품 목록 출력
   출력 형식:
   <p>상품명 - 가격원</p>
===================== */

  $products = [
    ["name" => "키보드", "price" => 30000],
    ["name" => "마우스", "price" => 15000],
    ["name" => "모니터", "price" => 200000]
  ];
  // TODO
  foreach ($products as $product) {
    echo "<p>" . $product['name'] . " " . $product['price'] . "원" . "</p>";
  }
  ?>
  <hr>

  <?php
  /* =====================
   문제 4
   GET으로 mode 받기
   값이 "dark" 면
   <p>다크모드</p>
   아니면
   <p>라이트모드</p>
===================== */
  if ($_GET['mode'] ?? 0) {
    echo "<p> 다크모드 </p>";
  } else {
    echo "<p> 라이트모드 </p>";
  }
  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 5
   로그인 상태에 따라
   메시지 출력
   true  -> <p>환영합니다</p>
   false -> <p>로그인이 필요합니다</p>
===================== */

  $isLogin = true;
  if ($isLogin) {
    echo "<p>환영합니다</p>";
  } else {
    echo "<p>로그인이 필요합니다.</p>";
  }
  // TODO
  ?>

</body>

</html>