<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <?php

    $date = date('Y');
    $title = "Homework. Lesson 2";
    $h1 = "Домашнее задание ко 2-ому уроку на курсе по изучению PHP.";
    echo "<title>$title</title>";

  ?>
</head>
<body>
<div class="container">
  <div class="content">
    <?php

      echo "<h1>$h1</h1>";


      // Задание № 1.

      echo '<br>Задание № 1.<br><br>';
      $a = -55;
      $b = 333;
      if ($a >= 0 and $b >= 0) {
        echo 'Разность чисел: ' . ($a - $b);
      } else if ($a < 0 and $b < 0) {
        echo 'Произведение чисел: ' . ($a * $b);
      } else if (($a < 0 and $b >= 0) or ($a >= 0 and $b < 0)) {
        echo 'Сумма чисел: ' . ($a + $b);
      }

      // Задание № 2.

      echo '<br><br>Задание № 2.<br><br>';
      $a = 3;
      switch ($a) {
        case '0':
          echo '0 | ';

        case '1':
          echo '1 | ';

        case '2':
          echo '2 | ';

        case '3':
          echo '3 | ';

        case '4':
          echo '4 | ';

        case '5':
          echo '5 | ';

        case '6':
          echo '6 | ';

        case '7':
          echo '7 | ';

        case '8':
          echo '8 | ';

        case '9':
          echo '9 | ';

        case '10':
          echo '10 | ';

        case '11':
          echo '11 | ';

        case '12':
          echo '12 | ';

        case '13':
          echo '13 | ';

        case '14':
          echo '14 | ';

        case '15':
          echo '15';
          break;

        default:
          echo 'Введено число не из диапазона от 0 до 15';
          break;
      }

      // Задание № 3.

      echo '<br><br>Задание № 3.<br><br>';
      function summ ($x, $y) {
        return $x + $y;
      }
      echo 'Cумма чисел равна: ' . summ(10, 25) . '<br>';

      function difference ($x, $y) {
        return $x - $y;
      }
      echo 'Разность чисел равна: ' . difference(10, 25) . '<br>';

      function multiplication ($x, $y) {
        return $x * $y;
      }
      echo 'Произведение чисел равно: ' . multiplication(10, 25) . '<br>';

      function division ($x, $y) {
        if ($y === 0) {
          echo "На ноль делить нельзя!";
        } else {
          return round($x / $y, 2);
        }
      }
      echo 'Частное чисел равно: ' . division(10, 25);


      // Задание № 4.

      echo '<br><br>Задание № 4.<br><br>';
      function mathOperation ($arg1, $arg2, $operation) {
        switch ($operation) {
          case '+':
            echo 'Cумма чисел равна: ' . summ($arg1, $arg2) . '<br>';
            break;

          case '-':
            echo 'Разность чисел равна: ' . difference($arg1, $arg2) . '<br>';
            break;

          case '*':
            echo 'Произведение чисел равно: ' . multiplication($arg1, $arg2) . '<br>';
            break;

          case '/':
            echo 'Частное чисел равно: ' . division($arg1, $arg2) . '<br>';
            break;

          default:
            echo "Введена некорректная операция.<br>";
            break;
        }
      }
      mathOperation (12345, 54321, '+');
      mathOperation (12345, 54321, '-');
      mathOperation (123, 321, '*');
      mathOperation (12345, 123, '/');
      mathOperation (12345, 123, '#');

      // Задание № 5.

      echo '<br>Задание № 5.<br><br>';
      echo "Начался $date год.";

    ?>
  </div>

  <footer class="footer">
    <?php

      echo "Copyright &copy. $date год."

    ?>
  </footer>
</div>
</body>
</html>
