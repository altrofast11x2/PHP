<!DOCTYPE html>
<html lang="ko">

<head>
  <meta charset="UTF-8">
  <title>PHP 퀴즈 세트 1</title>
</head>

<body>

  <?php
  /* =====================
   1번 문제
   score가 60 이상이면 "합격"
   아니면 "불합격"
===================== */

  $score = 75;
  // TODO: if문 작성
  if ($score >= 60) {
    echo "합격";
  } else {
    echo "불합격";
  }
  /* =====================
   2번 문제
   배열의 값을 li로 출력
===================== */

  $nums = [1, 2, 3, 4];
  ?>

  <ul>
    <!-- TODO: foreach 작성 -->
    <?php foreach ($nums as $nums) { ?>
      <li><?php echo $nums; ?></li>
    <?php } ?>
  </ul>

  <?php
  /* =====================
   3번 문제
   GET으로 age 받기
   20 이상이면 "성인"
   아니면 "미성년자"
===================== */

  // TODO: ?? 사용해서 age 받기
  $age = $_GET['age'] ?? 0;

  // TODO: if문 작성
  if ($age >= 20) {
    echo "성인";
  } else {
    echo "미성년자";
  }
  ?>

</body>

</html>