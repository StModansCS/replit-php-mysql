<?php require('db_connection.php'); ?>
<!DOCTYPE html>
<html>

<head>
  <title>replit rdbms</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <?php
    // Setup query
    $query_string = 'SELECT DATABASE()';

    // Run query to get result object
    if ($result = $mysqli->query($query_string)) {  
      // Fetch row array
      $row = $result->fetch_row();

      // Set to first element in array
      $default_database = $row[0];
      
      // Free the $result set
      $result->free_result();

      echo '<h1>Connected to: <i>' . $default_database . '</i></h1>';
    }
  ?>


  <h3>Recruits</h3>
  
  <table>
    <thead>
      <tr>
        <th>Title</th>
        <th>First name</th>
        <th>Second Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
        // Setup query
        $query_string = 'SELECT * from recruits;';
  
        // Run query to get result object
        if ($result = $mysqli->query($query_string)) {  
          // Fetch each row object
          while ($row = $result->fetch_object()) {
            echo '<tr>';
            echo '<td>' . $row->title . '</td>';
            echo '<td>' . $row->first_name . '</td>';
            echo '<td>' . $row->second_name . '</td>';
            echo '</tr>';
          }

          // Free the $result set
          $result->free_result();
        }
      ?>
      <?php $mysqli->close(); ?>

    </tbody>
  </table>

</body>
  
</html>
