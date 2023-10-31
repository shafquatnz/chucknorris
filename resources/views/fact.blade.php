<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chuck Norris Facts</title> 
    </head>
    <body>
        <h3>Random Chuck Norris Quote</h3>
        <div>{{$thing}}</div><br/>
        <div>
            <form>
                <input type="button" onclick="window.location.href='/';" value="More facts" />
            </form>
        </div>
    </body>
</html>
