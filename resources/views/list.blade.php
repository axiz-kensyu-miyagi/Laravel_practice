<!DOCTYPE html>
<html>
    <head>
        <title>ユーザーリスト</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <h3>ユーザーリスト</h3>
        <table>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>詳細</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td><a href="detail/{{ $user->id }}">詳細</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>