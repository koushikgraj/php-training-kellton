<?php
$list = array (
  array("Sachin", "Rahul" ,"Virat", "Mahendra Singh"),
  array("Tendulkar", "Rahul Dravid", "Kohli", "Dhoni")
);

$file = fopen("contacts.csv","w");

foreach ($list as $line) {
  fputcsv($file, $line);
}

fclose($file);

$filename = './contacts.csv';
$data = [];

try {
  $f = fopen($filename, 'r');

  while ($row = fgetcsv($f)) {
    $data[] = $row;
  }
  echo "<pre>";
  print_r($data);
  echo "</pre>";
} catch (\Throwable $e) {
  echo $e->getMessage();
} finally {
  if (!$f) {
    fclose($f);
  }
}
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');
$data = array(
        'aaa,bbb,ccc,dddd',
        '123,456,789',
        '"aaa","bbb"'
);

$fp = fopen('php://output', 'wb');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
?>