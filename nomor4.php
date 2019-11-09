<?php
Kalimat("arkademy");
//conversi text ke array


function Kalimat($kata){
    $convert = str_split($kata);
    $vcl = array();
    $kns = array();
foreach ($convert as $Array) {
 if(preg_match('/^[aiueo]/', $Array[0]))
  {
    $vcl[] = $Array[0];
  }
  else
  {
    $kns[] = $Array[0];
  }
}
?>

<?php foreach ($vcl as $vcls) : ?>
   <?php echo $vcls; ?> <br>
<?php endforeach; ?>

<?php foreach ($kns as $knss) : ?>
   <?php echo $knss; ?> <br>
<?php endforeach; ?>

<?php } ?>

