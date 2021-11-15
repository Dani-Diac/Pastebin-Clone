<!DOCTYPE html>
<html>
  <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="/app.css">
 </head>
 <body>
  <div>
    <div class="navbar">
      <a id="home" href="/welcome">Home</a>
      <a id="archive" href="/archive">Pastes</a>
    </div>
    <div class="body">
      <p id="title">Pastes Archive</p>
      <div class="contentText">
        [ℹ️] This page contains the most recently created pastes.
      </div>
      <div class="tableContent">
        <table class="table">
          <tbody>
            <tr class="tableHeaders">
              <th>NAME / TITLE</th>
              <th class="thRight">POSTED</th>
            </tr>
            @foreach($pastes as $paste)
            <tr>
              <td class="tdName">
                <a href="paste/{{$paste['id']}}" style="text-decoration:none">
                  {{$paste->name}}
                </a>
              </td>
              <td class="tdTime"> {{ $paste->created_at }} </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
   </div>
 </body>
</html>
