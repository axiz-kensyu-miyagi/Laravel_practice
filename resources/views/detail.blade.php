<!DOCTYPE html>
<html>
    <head>
        <title>ユーザー詳細</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h3>ユーザー詳細</h3>
        <p>ユーザーID：{{ $user->id }}</p>
        <p>名前：{{ $user->name }}</p>
        <p>スコア：{{ $user->score }}</p>
    </body>
</html>