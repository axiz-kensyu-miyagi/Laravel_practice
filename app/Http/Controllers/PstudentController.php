<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student_lesson;

class PstudentController extends Controller
{
    public function index()
    {
        $student = Student_lesson::all(); //受け取りたいデータを指定
        //↑本ファイルで使用可能の変数名＝モデルクラスのモデル名->抽出するデータの指定
        return view('pinsert')->with('student_lessons', $student);  //withで渡したいデータをしてして、viewで表示させるようにする
    }

    function student_regist(Request $request)
    {
        $request->validate([
            'name' => 'required',  //バリデーションルール
            'grade' => 'required|integer|between:1,2', //バリデーションルール
            'major_name' => 'required',  //バリデーションルール
            'hometown' => 'required'  //バリデーションルール
        ]);

        $student = new student_lessons;
        $student->name = $request->name;
        $student->grade = $request->grade;
        $student->major_name = $request->major_name;
        $student->hometown = $request->hometown;
        $student->save();
        return redirect('pinsert');
    }
}