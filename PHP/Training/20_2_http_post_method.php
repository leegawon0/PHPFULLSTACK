<?php

// 1. Post Method로 사용자가 입력한 데이터를 HTTP Request 합니다.
// 2. 입력한 데이터의 상세 내역은 아래와 같습니다.
//      2-1. key : id, pw, name, birth_date
// 3. 유저가 입력하지 않은 데이터도 함께 전송
//      3-1. key : h_page, val : h1
// 4. echo를 이용해서 각각의 데이터를 출력해 주세요.

?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="20_2_http_post_method.php">
        <label for="id">아이디</label>
        <input type="text" name="id">
        <br>
        <label for="pw">비밀번호</label>
        <input type="password" name="pw">
        <br>
        <label for="name">이름</label>
        <input type="text" name="name">
        <br>
        <label for="bdate">생일</label>
        <input type="date" name="birth_date">
        <br>
        <input type="hidden" name="h_page" value="h1">
        <br>
        <button type="submit">제출</button>
    </form>

<?php
$id = "";
$pw = "";
$name = "";
$bdate = "";
$h_page = "";

    // POST 체크
    if( count($_POST) === 0 )
    {
        echo "아직 입력값이 없습니다.";
    }
    else
    {
        $id = $_POST["id"];
        $pw = $_POST["pw"];
        $name = $_POST["name"];
        $bdate = $_POST["birth_date"];
        $h_page = $_POST["h_page"];
?>

<p><?php echo "아이디 : ".$id; ?></p>

<p><?php echo "비밀번호 : ".$pw; ?></p>

<p><?php echo "이름 : ".$name; ?></p>

<p><?php echo "생일 : ".$bdate; ?></p>

<p><?php echo "h_page : ".$h_page; ?></p>

<?
    }

?>
</body>
</html>
