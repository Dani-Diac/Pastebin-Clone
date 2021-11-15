<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/app.css">
  </head>
  <body>
    <div class="navbar">
      <a id="home" href="/welcome">Home</a>
      <a id="archive" href="/archive">Pastes</a>
    </div>
    <div class="info">
      <form action="showData" method="get">
        @csrf
        <div class="nameTime">
          <p style="">{{$data->name}}</p>
          <p style="">{{$data->created_at}}</p>
        </div>
        <div class="showText">
          <div class="paste">
            {{$data->paste}}
          </div>
          <div class="description">
            {{$data->description}}
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
 
