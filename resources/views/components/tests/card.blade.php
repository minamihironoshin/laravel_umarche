<!-- 初期値の設定 ※初期値を設定しないとblade.phpの値がないとエラーになる -->
@props([
   'title',
   'message' => '初期値です',
   'content' => '本文初期値です',
  ])

<!-- <div {{ $attributes }} class = 'border-2 shadow-md w-1/1 p-2' > -->

<!-- $attributes->margeでbladeとコンポーネントのclassを統合できる -->
<div {{ $attributes->merge ([
  'class' => 'border-2 shadow-md w-1/1 p-2'
  ]) }} >
  <div>{{ $title }} </div>
  <div>画像</div>
  <div>{{ $content }} </div>
  <div>{{ $message }} </div>
</div>