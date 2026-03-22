<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Pobieranie danych z żądania POST</title>
  </head>
  <body>
      <form method="post" action="CWICZENIE2_pobieranieDanych.php">
          <div>
              <label for="name">firstName</label>
              <input type="text" id="firstName" name="firstName">
          </div>
          <div>
              <label for="name">lastName</label>
              <input type="text" id="lastName" name="lastName">
          </div>
          <div>
              <label for="name">email</label>
              <input type="text" id="email" name="email">
          </div>
          <div>
              <label for="name">age</label>
              <input type="number" id="age" name="age">
          </div>
          <div>
              <input type="submit" name="send" value="send">
          </div>
      </form>
  </body>
</html>