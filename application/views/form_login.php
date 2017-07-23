<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div id="formlogin">
      <h2>Login Member</h2>

      <div align="center">
        <?php
          echo form_open('login/validate_login');
          echo form_input('username','Username');
          echo form_password('password','Password');
          echo form_submit('submit','Login');
          echo form_close();
         ?>
      </div>
    </div>
  </body>
</html>
