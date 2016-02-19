<html>
    <head>
        <meta charset="UTF-8">
        <title>main page</title>
    </head>
    <body>
        {include file='login.tpl'}
        <h1>Мой супер сайт</h1>
        {include file="menu.tpl"}
        {include file="$content_tpl"}
        <br>
        {$content_tpl}
    </body>
</html>
