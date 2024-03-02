<html>
<head>
<title>Page Title</title>
  <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
        <div class="container">
            <h1><center>customer details</center></h1>
            <table class="table table-warning table-bordered">
                <thead>
                  <tr>
                    <th>customer_id</th>
                    <th>customer_name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>city</th>
                  </tr>
                </thead>
                <tbody>
                   <?php
                    require_once "conn.php";
      ?>
                </tbody>
              </table>
        </div>
    

</body>
</html>