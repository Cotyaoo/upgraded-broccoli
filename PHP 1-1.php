  <?php
$a = 0;
$b = 1;
if ($a && $b == true):
    echo "Всё сделал?","\n", "Молодец, автомат";
elseif ($a or $b == true):
    if ($a == 0): 
        echo "А где выполненные задания?","\n";
        else:
            echo "Не сдал тест! Непорядок!","\n";
        endif;
  echo "Садись за работу!";
else:
    echo "На пересдачу";
endif;