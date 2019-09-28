<!DOCTYPE html>
<html>
<head>
   <title>Insert Form</title>
</head>
<body>
<html>
   <body>
      
      <?php

      {{ Form::open(array('url' => '/insert')) }}
       // echo Form::open(array('url' => '/'));
            echo Form::text('username','Username');
            echo '<br/>';
            
            echo Form::text('email', 'example@gmail.com');
            echo '<br/>';
     
            echo Form::password('password');
            echo '<br/>';
            
            echo Form::checkbox('name', 'value');
            echo '<br/>';
            
            echo Form::radio('name', 'value');
            echo '<br/>';
            
            echo Form::file('image');
            echo '<br/>';
            
            echo Form::select('size', array('L' => 'Large', 'S' => 'Small'));
            echo '<br/>';
            
            echo Form::submit('Send!');
          {{ Form::close() }}
        //echo Form::close();

      ?>
   
   </body>
</html>
</form>
</body>
</html>