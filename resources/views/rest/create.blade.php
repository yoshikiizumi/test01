<form action="/rest"method="post">
<table>
  @csrf
  <tr><th>message:</th><td><input type="text"name="message"velue="{{old('message')}}"></td></tr>
  <tr><th>message:</th><td><input type="text"name="url"velue="{{old('url')}}"></td></tr>
  <tr><th></th><td><input type="sumbit"velue="send"></td></tr>
  </table>
  </form>