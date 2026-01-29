<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>function</h1>
  <?php
  $str = "Lorem ipsum dolor, sit amet consectetur adipisicing elit.
   Optio consectetur voluptates sunt odio accusamus magni harum, cumque


  iusto voluptatum voluptatem velit laborum praesentium recusandae, quasi adipisci 
  fugit hic repudiandae vitae!";
  echo $str;
  ?>
  <h2>strlen()</h2>
  <!-- 글자의 수를 계산해주는 함수 strlen -->
  <?php echo strlen($str); ?>

  <!-- 줄바꿈 을 자동으로 해주는 함수. newline to  br 줄여서 nl2br -->
  <h2>nl2br</h2>
  <?php echo nl2br($str); ?>
</body>

</html>