<?php
require_once "db.php";
$id = $_GET['id'];
$sql = DB::fetchAll("SELECT * FROM tasks WHERE id = $id");
DB::exec("UPDATE tasks SET status = status + 1 where id = '$id'");
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>업무 상세</title>
    <link rel="stylesheet" href="asset/css/task.css">
</head>

<body>
    <div class="container">
        <?php foreach ($sql as $data) { ?>
            <div class="view-header">
                <h2 style="margin:0;"><?= $data['writer']; ?></h2>
                <div class="view-info">
                    <span>담당자: <?= $data['writer']; ?> </span> |
                    <span><?= $data['created_at']; ?></span>
                    <span>조회수<?= $data['status']; ?></span>
                </div>
            </div>

            <div class="view-content">
                <?= $data['message']; ?>
            </div>
            <div class="view-actions">
                <a href="index.php" class="btn btn-secondary">목록으로</a>
                <a href="modify.php?id=<?= $id ?>" class="btn btn-primary">수정</a>
                <a href="delete.php?id=<?= $id ?>" class="btn btn-danger" onclick="return confirm('정말 삭제하시겠습니까?');">삭제</a>
            </div>
        <?php } ?>
    </div>
</body>

</html>