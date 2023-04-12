<?php

    // GET 체크
    if( count($_GET) === 0 )
    {
        echo "입력값이 없습니다.";
    }
    else
    {
        $id = $_GET["id"];
        $pw = $_GET["pw"];
        $name = $_GET["name"];
        $bdate = $_GET["birth_date"];
    }

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
<p><?php echo "아이디 : ".$id; ?></p>

<p><?php echo "비밀번호 : ".$pw; ?></p>

<p><?php echo "이름 : ".$name; ?></p>

<p><?php echo "생일 : ".$bdate; ?></p>
</body>
</html>

