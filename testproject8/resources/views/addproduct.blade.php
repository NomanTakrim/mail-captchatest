<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ADD</title>
  </head>

  <body>
  <div class="container"> 
    <form  action="/saveproduct" method="POST">
        <br><br>
        <h1>ADD NEW PRODUCT</h1>
        <br><br>

        <div class="form-group">
            <label>Enter Product Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter here">
        </div>

    <br>    
        <div class="form-group">
            <label>Type</label>
            <input type="text" class="form-control" name="type" placeholder="Select the type"> 
        </div>
    <br>
     
        <div class="form-group">
            <label>Price</label>
            <input type="text" class="form-control" name="price" placeholder="Mention price">
        </div>
    <br>
    {!! NoCaptcha::renderJs() !!}
    {!! NoCaptcha::display() !!}
@csrf
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>