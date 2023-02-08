<!DOCTYPE html>

<?php

//will need to pull values from database here
//in order to populate the images, etc. 


?>


<html>
  <head>
    <title>jQuery Form Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/js/movie_selector.js"></script>

  </head>
  <body>
    

    <div class="row">
      <div class="column">
        <img src="/images/frozen.jpg" id="movies-frozen">
        
      </div>
      <div class="column">
        <img src="/images/antman.jpg" id="movies-antman">
        
      </div>
    </div>
    <div class="row" id="movie-text">
    </div>

    
    <footer>
  <p>Footerr</p>
</footer>


  </body>
</html>