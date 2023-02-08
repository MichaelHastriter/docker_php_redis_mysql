


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="style.css">

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
 <script src="js/slideshow.js?x=1"></script>



</head>
<body>

<div class="slideshow-container">

    <?php foreach($english_movies as $english_movie ){ ?>

    <div class="mySlides fade">
    <img src="<?php echo $english_movie ?>" style="width:100%">
    <div class="text">Caption Two</div>
    </div>
    <?php }   ?>
</div>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" id="target1"></span> 
  <span class="dot t2" id="target2" ></span> 
  <span class="dot" id="target3"></span> 
</div>


</body>
</html> 
