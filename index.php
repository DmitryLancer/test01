<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>





<div class="container">
  <div class="wrapper">
      <?php

      include_once __DIR__ . '/tree.php';


      foreach($data as $date)
      {
      ?>
 <ul class="one">
      <li class="one-one"><?php echo $date['NAME']?></li>
      <ul class="one">
          <li class="one-one"><?php echo $date['NAME']?></li>
          <ul class="one">
              <li class="one-one"><?php echo $date['NAME']?></li>
              <ul class="one">
                  <li class="one-one"><?php echo $date['NAME']?></li>
              </ul>
          </ul>
          <ul class="one">
              <li class="one-one"><?php echo $date['NAME']?></li>
          </ul>
      </ul>
      <ul class="one">
          <li class="one-one"><?php echo $date['NAME']?></li>
      </ul>
      </ul>
      <?php
      }

      ?>

  </div>
</div>


</body>
</html>