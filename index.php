<?php
require_once "db.php";
$sql = DB::fetchAll("SELECT * FROM tasks ORDER BY id ASC");
$search = $_GET['search'] ?? '';
if ($search) {
    $query = "SELECT * FROM tasks WHERE subject LIKE '%$search%'";
} else {
    $query = "SELECT * FROM tasks";
}
$sql = DB::fetchAll($query);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Team Tasks</title>
    <link rel="stylesheet" href="asset/css/task.css">
</head>

<body>
    <div class="container">
        <h1>
            📋 업무 현황
            <a href="writer.php" class="btn btn-primary btn-write">+ 새 업무</a>
        </h1>
        <div style="margin-bottom: 20px; text-align: right;">
            <form action="index.php" method="get">
                <input type="text" name="search" placeholder="검색어 입력" value="<?= $search ?>" style="padding: 5px;">
                <button type="submit" class="btn btn-secondary">검색</button>
                <a href="index.php" class="btn btn-secondary">전체보기</a>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th width="60">No.</th>
                    <th>업무명 (Subject)</th>
                    <th width="100">담당자</th>
                    <th width="150">작성일</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sql as $data) { ?>
                    <tr>
                        <td><?= $data['id'] ?></td>
                        <td><a href="view.php?id=<?= $data['id'] ?>"><?= $data['subject'] ?></a></td>
                        <td><?= $data['writer'] ?></td>
                        <td><?= substr($data['created_at'], 0, 10) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <div class="nothing">
            <?php if (empty($sql)) {
                echo "<h2>업무 현황이 없습니다.</h2>";
            }
            ?>
        </div>
    </div>
</body>

</html>