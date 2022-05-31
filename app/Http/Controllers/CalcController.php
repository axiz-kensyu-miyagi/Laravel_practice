<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function calc(Request $request)
    {
        // 入力値の受け取り
        $num1 = $request->num1;
        $operator = $request->operator;
        $num2 = $request->num2;

        // 選択された演算子で計算
        switch($operator) {
            case "1": 
                $result = $num1 + $num2;
                break;
            case "2":
                $result = $num1 - $num2;
                break;
            case "3":
                $result = $num1 * $num2;
                break;
            case "4":
                $result = $num1 / $num2;
                break;
        }

        // 画面に結果を返す
        return view('result')->with('result', $result); 
    }

    public function param($id)
    {
        return view('param')->with('param', $id);
    }

    public function filter(Request $request)
    {
        //$filter = $request;
        // $users = collect([
        //     [
        //         'id' => 101,
        //         'name' => '佐藤 一郎',
        //         'age' => 23,
        //         'from' => '東京'
        //     ],
        //     [
        //         'id' => 102,
        //         'name' => '山田 次郎',
        //         'age' => 25,
        //         'from' => '大阪'
        //     ],
        //     [
        //         'id' => 103,
        //         'name' => '金城 三郎',
        //         'age' => 19,
        //         'from' => '沖縄'
        //     ],
        //     [
        //         'id' => 104,
        //         'name' => '今井 四郎',
        //         'age' => 22,
        //         'from' => '福岡'
        //     ],
        // ]);
        $users = DB::table('students')->get();
        return view('list')->with('users', $users);
    }

    public function detail($id)
    {
        $user = DB::table('students')->where('id', '=', $id)->first();
        return view('detail')->with('user', $user);
    }
}
