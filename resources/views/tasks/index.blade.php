<html>
    <head>
        <title>Test Blog</title>
    </head>
    <body>
        <ul>
        @foreach($tasks as $task)
            <li><a href="/tasks/{{ $task->id }}">{{ $task->action }}</a></li>
        @endforeach
        </ul>
    </body>
</html>