<x-tests.app>
  <x-slot name="header">ヘッダー１</x-slot>
コンポーネントテスト１

  <x-tests.card title="タイトル" content="本文" :message="$message"/>
  <!-- コンポーネント名 + タグに値を記載 -->
  <x-tests.card title="タイトル"/>
  <!-- コンポーネントのCSSを変更したい場合 -->
  <x-tests.card title="CSSを変更したい" class="bg-red-300"/>
</x-tests.app>