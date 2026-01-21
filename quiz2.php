<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <title>PHP 퀴즈 세트 ②</title>
</head>

<body>

  <?php
  /* =====================
   문제 1
   point 값에 따라
   90 이상: A
   80 이상: B
   그 외: C
   <span> 태그로 출력
===================== */

  $point = 85;
  if ($point >= 90) {
    echo "A";
  } else if ($point >= 80) {
    echo "B";
  } else {
    echo "C";
  }
  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 2
   나이가 20 이상인 회원만 출력
   출력 형식:
   <p>이름 (나이)</p>
===================== */

  $users = [
    ["name" => "철수", "age" => 17],
    ["name" => "영희", "age" => 22],
    ["name" => "민수", "age" => 20]
  ];

  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 3
   GET으로 page 받기
   값 없으면 1
   출력: 현재 페이지: X
===================== */

  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 4
   로그인 상태에 따라 버튼 출력
   true  -> 로그아웃
   false -> 로그인
===================== */

  $isLogin = false;
  if ($isLogin) {
  }

  // TODO
  ?>

  <hr>

  <?php
  /* =====================
   문제 5
   아래 코드의 문제점 2가지 설명
===================== */
  ?>

  <pre>
<?php
$nums = [10, 20, 30];

foreach ($nums as $nums) {
  if ($nums > 15)
    echo "<p>" . $nums . "</p>";
}
?>
<!-- 위에 foreach ($nums as $nums) 에서 배열 : 값인데 배열과 값을 똑같이 씀. 결과는 뜨긴 뜨는데 다음에 쓸때 오류가 뜰 확률이 높아 다른 이름으로 써야한다.  -->
</pre>

</body>

</html>