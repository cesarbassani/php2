<DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title> Smarty </title>
</head>
<body>

{* comentário smarty *}
olá {$nome}<br>

{section name=i loop=$users}
    {$users[i]|capitalize}<br>
{/section}

</body>
</html>