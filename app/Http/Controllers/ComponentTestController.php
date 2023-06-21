<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComponent1(){
        //blade.php→コンポーネントへ受け渡す変数はコントローラーに記載
        $message = 'メッセージ';
        return view('tests.component-test1',compact('message'));
    }
    public function showComponent2(){
        return view('tests.component-test2');
    }
}