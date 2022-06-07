<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>student⼀覧</title>
</head>
<body>
<form action="student_regist" method="post">
    @csrf

    名前：<input type="text" name="name">
    @error('name')
    <span class="error">{{ $message }}</span>
    @enderror
    <br>

    学年：<select name="grade">
            <option value="grade1">1</option>
            <option value="grade2">2</option>
        </select>年
    @error('grade')
    <span class="error">{{ $message }}</span>
    @enderror
    <br>

    所属：<select name="major_name">
            <option value="major_name1">英文学</option>
            <option value="major_name2">応用科学</option>
            <option value="major_name3">情報工学</option>
            <option value="major_name4">経済学</option>
            <option value="major_name5">国際文化</option>
        </select>学部
    @error('major_name')
    <span class="error">{{ $message }}</span>
    @enderror
    <br>

    出身地：<input type="text" name="hometown">
    @error('hometown')
    <span class="hometown">{{ $message }}</span>
    @enderror
    <br>

    <button>登録</button>
</form>

    <table border=1>
        <tr>
            <th>学生ID</th>
            <th>氏名</th>
            <th>学年</th>
            <th>所属</th>
            <th>出身地</th>
        </tr>
        <!--blade.phpは@を使用することで簡単書ける phpを埋め込む必要がなくなるよね！-->
        @foreach($student_lessons as $student)  <!--animals(tableの中身が配列で入る) as animal(1レコード）-->
        <tr>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->grade }}</td>
            <td>{{ $student->major_id }}</td>
            <td>{{ $student->hometown }}</td>
        </tr>
    @endforeach <!--foreachの}と同じ役割-->
    </table>
</body>
</html>