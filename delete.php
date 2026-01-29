<?php
require_once "db.php";
$id = $_GET['id'];
$DEL = DB::exec("DELETE FROM tasks WHERE id = $id");
if ($DEL) {
    echo "<script>alert('삭제의 성공했습니다.');location.href='index.php'</script>";
    exit;
} else {
    echo "<script>alert('삭제의 실패했습니다.');history.back()</script>";
    exit;
}
