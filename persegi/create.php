<!doctype html>
<html lang = "en">
<head>
<!-- Required meta tags -->
<meta charset = "utf-8">
<meta name    = "viewport" content = "width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous">

<title>Insert Data Persegi</title>
</head>
<body>    
<div class="container mt-4">
    <div class="row">
        <div  class  = "col-sm-5 col-sm-offset-3"><h3>Insert Data Persegi</h3>
            <form method = "POST" action = "persegi-action.php">   
                <input type="hidden" name="id"/>
                <div class = "form-group">
                    <label for   = "inputSisi">Sisi</label>
                    <input type  = "number" required = "required" class = "form-control" id = "inputSisi" name = "sisi" placeholder = "Sisi">
                    <span  class = "help-block"></span>
                </div>
                <div class = "form-actions">
                    <button type  = "submit" class = "btn btn-success" name="persegi-submit">Submit</button>
                    <a class = "btn btn btn-default" href = "persegi.php">Back</a>
                </div>
            </form>
        </div>
    </div>        
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src = "https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity                          = "sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin = "anonymous"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity = "sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin = "anonymous"></script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity       = "sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin = "anonymous"></script>
  </body>
</html>