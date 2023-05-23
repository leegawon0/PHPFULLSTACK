<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <h1>test.index</h1>
    <h3>{{$name}}</h3>
    <hr>
    <a href="{{route('tasks.index');}}">Tasks.index</a>
    <br>
    <a href="{{route('tasks.show', ['task' => 13])}}">Tasks.show</a>
    <form action="{{route('tasks.update', ['task' => 1])}}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="php506">
        <input type="hidden" name="pw" value="506">
        <input type="hidden" name="name" value="admin">
        <button type="submit">Tasks.update</button>
    </form>
    <a href="{{route('tasks.edit', ['task' => 999])}}">Tasks.edit</a>
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <br>
        <label for="pw">PW</label>
        <input type="password" name="pw" id="pw">
        <br>
        <button type="submit">Tasks.store</button>
    </form>
</body>
</html>