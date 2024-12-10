<?php
// movieDB 데이터베이스 연결
$conn = mysqli_connect("localhost", "movie_user", "1234", "movieDB") or die("movieDB 접속 실패!!");

// POST 데이터 수신
$title = $_POST["movieTitle"];
$genre = $_POST["movieGenre"];
$myear = $_POST["movieYear"];
$price = $_POST["moviePrice"];
$file = $_FILES['upfile'];

$upload_dir = "/photo/";
$pathfile = $upload_dir . basename($file['name']);

if (isset($_FILES['upfile']) && $_FILES['upfile']['name'] != "") {
    if (move_uploaded_file($file['tmp_name'], $pathfile)) {
        // 준비된 문장 사용
        $stmt = mysqli_prepare($conn, "INSERT INTO MOVIE (id, title, genre, myear, price, photo) VALUES (NULL, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssis", $title, $genre, $myear, $price, $pathfile);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('$title 정보 추가되었습니다.');</script>";
        } else {
            echo "<script>alert('SQL문 오류 발생: " . mysqli_error($conn) . "');</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('파일이 업로드되지 않았습니다.');</script>";
    }
} else {
    echo "<script>alert('파일이 선택되지 않았습니다.');</script>";
}

mysqli_close($conn);

echo '<script>location.replace("main.php");</script>';
?>