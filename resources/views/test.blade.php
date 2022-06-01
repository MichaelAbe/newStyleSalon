{{-- <html lang="en">  
<head>  
    <title> Example of Bootstrap Timepicker </title>    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" rel="stylesheet">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>    
</head>  
<body>  
  
<div class="container" style="margin-top: 20px">  
    <div style="position: relative">  
        <input class="form-control" type="text" id="time"/>  
    </div>  
</div>  
  
<script>  
    $('#time').datetimepicker({  
        format: 'HH:mm'  
    });  
</script>  
  
</body>  
</html> --}}

<!DOCTYPE html>  
<html>  
<head>  
  <title> Example of Bootstrap Datepicker in Laravel </title>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
</head>  
    
<body>  
     
<div class="container">  
    <input class="date form-control" type="text">  
</div>  
    
<script type="text/javascript">  
    $('.date').datepicker({    
       format: dd-mm-yyyy'  
     });    
</script>   
    
</body>  
