<html>
  <head>
    <title>1 PHP with SQL</title>
    <link href="customization.css" rel="stylesheet">
  </head>
  <body>
    <?php
      $username = "trader";
      $password = "1234";
      $database = "test_replic";
      $mysqli = new mysqli("10.142.14.8", $username, $password, $database);
      $query = "SELECT * FROM book_order";

      echo '<div class="dbtable" align="center">
              <table border="1" cellspacing="1" cellpadding="10">
                <tr>
                  <td> No </td>
                  <td> ID </td>
                  <td> Name </td>
                  <td> STATUS </td>
                  <td> DATE </td>
                </tr>
              </div>';

      if ($result = $mysqli->query($query)) {
          while ($row = $result->fetch_assoc()) {
              $field1name = $row["No"];
              $field2name = $row["ID"];
              $field3name = $row["Name"];
              $field4name = $row["STATUS"];
              $field5name = $row["DATE"];

              echo '<tr>
                        <td>'.$field1name.'</td>
                        <td>'.$field2name.'</td>
                        <td>'.$field3name.'</td>
                        <td>'.$field4name.'</td>
                        <td>'.$field5name.'</td>
                    </tr>';
          }
          $result->free();
      }
    ?>
    <div class="container">
      <form action="index.php" method="post">
          Your ID:   <input type="id" name = "id" /><br/><br/>
          Book name: <input type="text" name = "name" /><br/><br/>
          <input type="submit" value="Submit" />
      </form>
    </div>
    <br><br><br><br>
    <?php
      $username = "trader";
      $password = "1234";
      $database = "test_replic";
      $mysqli = new mysqli("10.142.14.8", $username, $password, $database);
      $date = date('Y-m-d');
      if ($_POST) {
        $field1 = $mysqli->real_escape_string($_POST['id']);
        $field2 = $mysqli->real_escape_string($_POST['name']);
        $field3 = $mysqli->real_escape_string("1");

        $query = "INSERT INTO book_order ( ID, Name, STATUS, DATE )
                    VALUES ('{$field1}','{$field2}', '{$field3}','$date')";

        $mysqli->query($query);
        $mysqli->close();
        header("Location: /index.php");
        exit;
      }
    ?>
  </body>
</html>
