   <!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <title>Pastebin</title>
    <link rel="stylesheet" href="/app.css">
  </head>
  <body>
    <form method="post" action="/welcome">
    @csrf
    <div class="header">
      <div class="navbar">
        <a id="home" href="/welcome">Home</a>
        <a id="archive" href="/archive">Pastes</a>
      </div>
    </div>
    <div class="newPaste">
      <p>New Paste</p>
      <div style="color: red; margin-left: 2%;">
        @foreach($errors->all() as $errors)
        {{$errors}}<br>
        @endforeach
      </div>
      <textarea class="textarea" rows="14" cols="135" name="paste"></textarea>
    </div>
    <div class="details">
      <div class="block">
        <label>Paste Name / Title:</label>
        <input type="text" name="name">
        <button id="btn" type="submit" name="button">➕Add Paste</button>
      </div>
      <div>
        <textarea class="descriptionBox" rows="3" cols="40" placeholder="Description: " name="description"></textarea>
      </div>
    </div>
  </form>
    <script src="app.js"></script>
  </body>
</html>
