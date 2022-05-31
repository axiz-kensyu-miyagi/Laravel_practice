<!DOCTYPE html>
<html>
    <head>
        <title>計算</title>
        <link href="css/styles.css">
    </head>
    <body>
        <p>計算してみよう</p>
        <form action="calc" method="POST">
            @csrf
            <input type="number" name="num1">
            <select name="operator">
                <option value="1">+</option>
                <option value="2">-</option>
                <option value="3">×</option>
                <option value="4">÷</option>
            </select>
            <input type="number" name="num2">
            <button type="submit">計算</button>
        </form>
    </body>
</html>