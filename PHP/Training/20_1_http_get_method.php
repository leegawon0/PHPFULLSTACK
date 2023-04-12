<?php

// 1. Get Method로 사용자가 입력한 데이터를 HTTP Request 합니다. 
// 2. 입력한 데이터의 상세 내역은 다음과 같습니다.
//      2-1. key : id, pw, name, birth_date
// 3. echo를 이용해서 각각의 데이터를 출력해 주세요.

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
    <form method="get" action="20_1_http_get_method.php">
        <label for="id">아이디</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="pw">비밀번호</label>
        <input type="text" name="pw" id="pw">
        <br>
        <label for="name">이름</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="bdate">생일</label>
        <input type="date" name="birth_date" id="bdate">
        <br>
        <button type="submit">제출</button>
    </form>
</body>
</html>

<?php

$id = "";
$pw = "";
$name = "";
$bdate = "";

    // GET 체크
    if( count($_GET) === 0 )
    {
        echo "아직 입력값이 없습니다.";
    }
    else
    {
        $id = $_GET["id"];
        $pw = $_GET["pw"];
        $name = $_GET["name"];
        $bdate = $_GET["birth_date"];
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

<?
    }

?>

