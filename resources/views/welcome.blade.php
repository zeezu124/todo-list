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
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="todo-div">
                <h1>Todo List</h1><br>

                @foreach ($listItems as $listItem)
                    <p>Item: {{ $listItem->name }}</p>
                    <button type="submit">Mark Complete</button>
                @endforeach

                <form method="post" action="{{ route('saveItem') }}" accept-charset="UTF-8">
                    {{ csrf_field() }}
                    <br>
                    <label for="listItem">New Todo Item</label><br>
                    <input type="text" name="listItem" required><br>
                    <button type="submit">Save Item</button>
                </form>

            </div>
        </div>
    </body>
</html>
