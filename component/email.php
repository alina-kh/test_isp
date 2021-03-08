<?php
require "common.inc.php";
$title = "Запросы пользователя"
?>

<body>
  <div class="data">
    <div class="container">
      <div class="data__qw">
        <div class="data__title">
          Пожалуйста введите email пользователя.
        </div>
        <form class="data__form" action="" method="post">
          <input type="email" class="data__email" name="email" id="data__email" placeholder="Email"><br>
          <button class="btn btn__data" name="submit">SEND MESSAGE</button>
        </form>
      </div>
    </div>
  </div>
  <?php
  if (isset($_POST['submit'])) {
    $errors = array();

    $email = $_POST['email'];
    $head = '
      <div class="rq">
        <div class="container">
          <div class="rq__header">Все запросы пользователя</div>
            <table class="table">
              <tr>
                <td>name</td>
                <td>email</td>
                <td>subject</td>
                <td>message</td>
              </tr>
          </div>
        </div>';
    $not = '<br/>
    <div class="rq__header">
      Пользователь не найден.
    </div>';

    if (trim($email) == '') {
      $errors[] = "Input Email!";
    }

    if (!preg_match("/[0-9a-z_]+@[0-9a-z_^\.]+\.[a-z]{2,3}/i", $email)) {
      $errors[] = 'Неверно введен е-mail!';
    }

    if (empty($errors)) {
      $query = "SELECT name, email, subject, message FROM form WHERE email='$email'";
      $result = mysqli_query($dbc, $query) or die(mysqli_error($dbc));
      
        $rows = mysqli_num_rows($result);
        if($rows === 0) {
          echo $not;
        } else {
          echo $head;
          for ($i = 0; $i < $rows; ++$i) {
            $row = mysqli_fetch_row($result);
            echo "<tr>";
            for ($j = 0; $j < 4; ++$j) echo "<td>$row[$j]</td>";
            echo "</tr>";
          }
          echo "</table>";
          mysqli_free_result($result); 
        }
    }
   
  mysqli_close($dbc);
  }
  ?>
</body>
</html>