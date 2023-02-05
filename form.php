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
    <script src="/js/formm.js"></script>

  </head>
  <body>
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <h1>Processing an AJAX Form</h1>

        <form action="process_form.php" method="POST">
          <div id="name-group" class="form-group">
            <label for="name">Name</label>
            <input
              type="text"
              class="form-control"
              id="name"
              name="name"
              placeholder="Full Name"
            />
          </div>

          <div id="email-group" class="form-group">
            <label for="email">Email</label>
            <input
              type="text"
              class="form-control"
              id="email"
              name="email"
              placeholder="email@example.com"
            />
          </div>

          <div id="superhero-group" class="form-group">
            <label for="superheroAlias">Superhero Alias</label>
            <input
              type="text"
              class="form-control"
              id="superheroAlias"
              name="superheroAlias"
              placeholder="Ant Man, Wonder Woman, Black Panther, Superman, Black Widow"
            />
          </div>

          <button type="submit" class="btn btn-success">
            Submit
          </button>
        </form>
      </div>
    </div>

    
    <footer>
  <p>Footer</p>
</footer>


  </body>
</html>