<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
           
        </style>
    </head>
    <body>
        <div>
            
            <a href="todo_show">Back</a>
            <form method="post" action="{{route('todo.update', [$todoArr->id])}}">   
               @csrf
                <table>
                    <tr>
                        <td>Name</td>
                        <input type="text" name="name" value="{{$todoArr->name}}"/>
                    </tr>
                    <tr>
                        <td></td>
                        <input type="submit" name="submit">
                    </tr>
                </table>

            </form>
        </div>
    </body>
</html>
