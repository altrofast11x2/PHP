<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $id = $_GET['id'] ?? 'welcome';
  ?>

  <ul>
    <li style="color: <?= $id === 'html' ? 'red' : 'black' ?>">HTML</li>
    <li style="color: <?= $id === 'css' ? 'red' : 'black' ?>">CSS</li>
  </ul>

</body>

</html>