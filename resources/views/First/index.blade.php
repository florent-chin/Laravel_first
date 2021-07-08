<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
body {
    line-height:1;
}
article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}
nav ul {
    list-style:none;
}
blockquote, q {
    quotes:none;
}
blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}
a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}
ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}
mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}
del {
    text-decoration: line-through;
}
abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}
table {
    border-collapse:collapse;
    border-spacing:0;
}
hr {
    display:block;
    height:1px;
    border:0;  
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}
input, select {
    vertical-align:middle;
}

body{
  background-color: rgb(49, 27, 109);
  
}
body h1{
  font-size: 24px;
  padding-bottom: 15px;
}

.card{
  background-color: white;
  margin: 30px 22vw;
  border-radius: 13px;
  height: 450px;
}

.card-content{
  padding: 30px 30px;
}

.input-text input{
  border-radius: 5px;
  border:1px solid #cccccc;
  width: 450px;
  height: 30px;
  margin-right: 30px;
}

.content-1{
  display: flex;
}

.content-1-btn input{
  height: 35px;
  width: 55px;
  border: 2px solid rgb(255, 0, 255);
  background-color: white;
  border-radius: 5px;
  color: rgb(255, 0, 255);
  font-weight: bold;
}
.content-1-btn input:hover{
  background-color:rgb(255, 0, 255);
  color: white;
  transition: 0.5s;
}

.content-2{
  display: flex;
  margin: 30px 0;
  font-weight: bold;
}
.p1{
  margin:0 140px 0 80px;
}
.p2{
  margin: 0 30px 0 100px;
}

table{
  margin: 0 auto;
}
tr{
  height: 50px;
}

.date{
  padding-right: 20px;
}
.text input{
  border-radius: 5px;
  border: 1px solid #cccccc;
  height: 23px;
  width: 200px;
}
.update{
  padding: 0 10px;
}
.update input{
  background-color: white;
  border-radius: 5px;
  border: 2px solid #ffa500;
  color: #ffa500;
  width: 60px;
  height: 35px;
  font-weight: bold;
}
.update input:hover{
  background-color:#ffa500;
  color: white;
  transition: 0.5s;
}
.delete input{
  background-color: white;
  border-radius: 5px;
  border: 2px solid #00fa9a;
  color: #00fa9a;
  width: 60px;
  height: 35px;
  font-weight: bold;
}
.delete input:hover{
  background-color:#00fa9a;
  color: white;
  transition: 0.5s;
}



</style>
</head>
<body>
  <div class="card">
    <div class="card-content">
      <h1 class="logo">Todo List</h1>
      <form action="/todo/create" method="POST" class="content-1">
      @csrf
      <div class="input-text">
        <input type="text" name="newTask">
      </div>
      <div class="content-1-btn">
        <input type="submit" value="追加">
      </div>
      </form>
      <div class="content-2">
        <p class="p1">作成日</p>
        <p>タスク名</p>
        <p class="p2">更新</p>
        <p class="p3">削除</p>
      </div>
      <table>
        
        
        
        
          
            @foreach ($tasks as $task)
            <tr>
             <form action="/todo/update" method="POST">
              @csrf
              <td class="date">{{$task->created_at}}</td>
              <td class="text"><input type="text" name="newTask" value="{{$task->name}}"></td>
              <td class="update">
                <input type="submit" name="taskDo" value="更新">
                <input  type="hidden" name="taskId" value="{{$task->id}}">
              </form>
              </td>
              <td class="delete">
                <form action="/todo/delete" method="GET">
                @csrf
                  <input type="submit" value="削除">
                <input type="hidden" name="taskId" value="{{$task->id}}">
                </form>
              </td>
            </tr>
            @endforeach
      </table>
    </div>
  </div>
</body>

</html>
                     
         