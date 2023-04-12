<?php

?>

<!-- 1. GET Method
    1-1. GET Method로 데이터를 넘겨주는 방법1
        - Query String에 키와 값을 셋팅해 준다.
        http://localhost/mini_board/src/board_update.php?board_no=1
        http://localhost/mini_board/src/board_update.php?board_no=1&key1=10

    1-2. form Tag를 이용하는 방법 -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="20_1_httpget.php">
        <input type="text" name="test1" value="testValue1">
        <input type="text" name="test2" value="testValue2">
        <input type="text" name="test3" value="testValue3">
        <button type="submit">Submit</button>
    </form>
        <!-- 1-3. url에 직접 입력하는 방법
    http://localhost/20_1_httpget.php?aaa=1&bbb=1 -->
    <a href="http://localhost/20_1_httpget.php?aaa=1&bbb=1">A태그</a>
</body>
</html>