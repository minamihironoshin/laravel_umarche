<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TestClassBase extends Component
{
    //blade.php→コンポーネントへ受け渡す変数は下記のコントローラーに記載
    public $classBaseMessage;
    public $defaultMessage;
    /**
     * Create a new component instance.
     */
    public function __construct($classBaseMessage,$defaultMessage="初期値です")
    {
        //コンポーネントで使用する変数を宣言する
        $this->classBaseMessage = $classBaseMessage;
        $this->defaultMessage = $defaultMessage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tests.test-class-base-component');
    }
}
