<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include 'header.php';?>
  <section>
      <div class="row">
          <div class="col-md-6" style="height:auto;">
            <form>
				      <label for="name">Name:</label>
			      	<input type="text" name="name" class="form-control">
				      <label for="email">Email:</label>
				      <input type="text" name="email" class="form-control">
				      <label for="message">Message:</label>
				      <textarea name="message" cols="45" rows="6" class="form-control"></textarea>
              <button type="button" class="btn btn-primary btn-lg">Submit</button>
			      </form>
          </div>
            <div class="col-md-6" style="height:auto;">
                    <img src="p1.jpg" id="img1" class="img-fluid" />
            </div>
        </div>

  </section>  
<?php include 'footer.php';?>       
</body>
</html>