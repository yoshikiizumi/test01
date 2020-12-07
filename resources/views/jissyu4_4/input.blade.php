@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
ユーザ情報入力画面
@endsection

@section('content')
   <p>必要事項を記入してください。</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="/jissyu9" method="post">
       @csrf
       <tr><th>名　　　前: </th><td><input type="text" name="name" value="{{$data['name']}}"></td></tr>
       <tr><th></th><td>※必須項目。10文字以内。</td></tr>
       @if ($errors->has('name'))
       <tr><th></th><td><font color="red">{{$errors->first('name')}}</font></td></tr>
       @endif
       <tr><th>住　　　所: </th><td><input type="text" name="adress" value="{{$data['adress']}}" size="40"></td></tr>
       <tr><th></th><td>※必須項目。20文字以内。</td></tr>
       @if ($errors->has('adress'))
       <tr><th></th><td><font color="red">{{$errors->first('adress')}}</font></td></tr>
       @endif
       <tr><th>ログインID: </th><td><input type="text" name="login_id" value="___(10)___”></td></tr>
       <tr><th></th><td>※必須項目。半角英数数字のみ入力可。8文字以上16文字以内の入力。</td></tr>
       @if ($errors->has('login_id'))
       <tr><th></th><td><font color="red">{{$errors->first('login_id')}}</font></td></tr>
       @endif
       <tr><th>パスワード: </th><td><input type="password" name="password" value=""></td></tr>
       <tr><th></th><td>※必須項目。8文字以上16文字以内の入力。</td></tr>
       @if ($errors->has('password'))
       <tr><th></th><td><font color="red">{{$errors->first('password')}}</font></td></tr>
       @endif
       <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
   </form>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校.
@endsection

 
