<html>
   <body>
      
      <?php
         echo Form::open(array('url'=>'foo/bar'));

         echo Form::text('username', 'UserName');
         echo '<br>';

         echo Form::text('email', 'example@gmail.com');
         echo '<br>';

         echo Form::password('password');
         echo '<br>';

         echo Form::checkbox('name', 'value');
         echo '<br>';

         echo Form::radio('name', 'value');
         echo '<br>';

         echo Form::file('image');
         echo '<br>';

         echo Form::select('size', array('L'=>'Large', 'S'=>'Small'));
         echo '<br>';

         echo Form::close();
      ?>
   
   </body>
</html>