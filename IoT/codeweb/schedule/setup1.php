<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
    <title>đồng hồ báo thức</title>
    <!-- Favicon -->
    <link rel="icon" href="image/main.jpg" type="image/x-icon" />   
    <!-- Bootstrap Core CSS -->
    <link href="base/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="base/css/custom.css" rel="stylesheet">
    <link href="base/css/guages.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet">
    
    <!-- Slider -->
    <link href="base/css/slider/freshslider.min.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<p id="doam"></p>
 <script>

            $(document).ready(function() {
                setInterval(function(){get_data()},500);
                function get_data()
                {
                    jQuery.ajax({
                        type:"GET",
                        url: "checktime.php",
                        data:"",
                        beforeSend: function() {
                        },
                        complete: function() {
                        },
                        success:function(data) {
                            $("#doam").html(data);
                        }
                    });
                }
            });
        </script>

</body>

</html>