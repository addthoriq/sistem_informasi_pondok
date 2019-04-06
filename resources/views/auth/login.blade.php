<!DOCTYPE html>
<html lang="id" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form action="{{url('/login')}}" method="post">
            @csrf
            <div>
                Email : <br>
                <input type="email" name="email">
            </div>
            <br>
            <div>
                password : <br>
                <input type="password" name="password">
            </div>
            <input type="submit">
        </form>
    </body>
</html>
