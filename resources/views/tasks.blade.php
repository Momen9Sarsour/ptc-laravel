<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
</head>
<body>
    <h2>Tasks : </h2>
    <ul>
    @foreach ($tasks as $key => $task)
    {{-- <li><a href="{{'show/' . $key}}"><?php //echo $task ?></a></li> --}}
    <li>{{$task->id}}</li>
    <li>{{$task->name}}</li>
    <li>{{$task->created_at}}</li>
    @endforeach

    </ul>
</body>
</html>
