
  <?php
  //��������� ���������
$string = 'Python is the best programming language in the world!'; 
$substring1 = substr($string, 2);
$substring2 = substr($string, 2, 6);
echo $substring1;
echo "\n";
echo $substring2;
echo "\n\n";

//������ ���� � ������
$string = 'Python is the best programming language in the world!'; 
$string = str_replace("Python", "PHP", $string);
echo $string;
echo "\n\n";

//����� ������� ���������
$string = 'Python is the best programming language in the world!'; 
$search = 'is';
$position = strpos($string, $search); // 2
if($position!==false)
{
    echo "������� ��������� '$search' � ������ '$string': $position";
}
//��������� ��������
$input = 'Python is the best programming language in the world!';
$input = strtoupper($input);
echo $input;
?>

