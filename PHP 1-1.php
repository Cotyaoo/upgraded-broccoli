  <?php
$a = 0;
$b = 1;
if ($a && $b == true):
    echo "�� ������?","\n", "�������, �������";
elseif ($a or $b == true):
    if ($a == 0): 
        echo "� ��� ����������� �������?","\n";
        else:
            echo "�� ���� ����! ���������!","\n";
        endif;
  echo "������ �� ������!";
else:
    echo "�� ���������";
endif;