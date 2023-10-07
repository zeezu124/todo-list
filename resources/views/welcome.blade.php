<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    </head>
    <body class="antialiased">
        <div id="todo-div">
            <h1>Todo List</h1> <br>

            <div class="form-container">
                <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8" id="todo-form">
                    {{ csrf_field() }}
                    <label for="listItem">Insert task here:</label>
                    <input type="text" name="listItem" required>
                    <button type="submit" id="form-button">Save Task</button>
                </form>
            </div>

            <h2>Added tasks</h2>
            <div class="list-container">
                @foreach ($listItems as $listItem)
                <div id="list-item">
                    <p>Item: {{ $listItem->name }}</p>
                    <p>Date: {{ $listItem->created_at }}</p>
                    <button type="submit" id="mark-complete-button">Mark Complete</button>
                </div>
                @endforeach
            </div>
        </div>
    </body>
</html>
