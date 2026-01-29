<?php
require_once "db.php";
$id = $_GET['id'];
$sql = DB::fetchAll("SELECT * FROM tasks WHERE id = $id");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $writer = $_POST['writer'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    if (empty($writer) || empty($subject) || empty($message)) {
        echo "<script>alert('내용을 적어주세요.');</script>";
        exit;
    } else {
        DB::exec("UPDATE tasks SET subject = '$subject', message= '$message' WHERE id = $id");
        echo "<script>alert('수정 성공!');location.href='index.php'</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>업무 수정</title>
    <link rel="stylesheet" href="asset/css/task.css">
</head>

<body>
    <div class="container">
        <?php foreach ($sql as $data) { ?>
            <h1>🛠 업무 내용 수정</h1>
            <form method="post">
                <div class="form-group">
                    <label>담당자</label>
                    <input type="text" name="writer" class="form-control" value="<?= $data['writer'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label>업무 제목</label>
                    <input type="text" name="subject" class="form-control" value="<?= $data['subject'] ?>" required>
                </div>
                <div class="form-group">
                    <label>상세 내용</label>
                    <textarea name="message" class="form-control" required><?= $data['message'] ?></textarea>
                </div>
                <div style="text-align: right;">
                    <a href="view.php?id=<?= $id ?>" class="btn btn-secondary">취소</a>
                    <button type="submit" class="btn btn-primary">수정 완료</button>
                </div>
            </form>
        <?php } ?>
    </div>
</body>

</html>