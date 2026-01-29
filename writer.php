<?php
require_once "db.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $writer = $_POST['writer'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';
    if (empty($writer) || empty($subject) || empty($message)) {
        echo "<script>alert('내용을 적어주세요.');</script>";
        exit;
    } else {
        DB::exec("INSERT INTO tasks (id,subject,writer,message,status,created_at) VALUES ('','$subject','$writer','$message','',now());");
        echo "<script>alert('업로드 성공!');location.href='index.php';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <title>새 업무 등록</title>
    <link rel="stylesheet" href="asset/css/task.css">
</head>

<body>
    <div class="container">
        <h1>✏️ 새 업무 등록</h1>
        <form method="post">
            <div class="form-group">
                <label>담당자</label>
                <input type="text" name="writer" class="form-control" placeholder="담당자 이름" required>
            </div>
            <div class="form-group">
                <label>업무 제목</label>
                <input type="text" name="subject" class="form-control" placeholder="업무 제목을 입력하세요" required>
            </div>
            <div class="form-group">
                <label>상세 내용</label>
                <textarea name="message" class="form-control" placeholder="내용을 입력하세요" required></textarea>
            </div>
            <div style="text-align: right;">
                <a href="index.php" class="btn btn-secondary">취소</a>
                <button type="submit" class="btn btn-primary">등록하기</button>
            </div>
        </form>
    </div>
</body>

</html>