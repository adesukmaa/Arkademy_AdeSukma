<?php
function thirdHighest($angka){
   if(is_array($angka)){
       $leng = count($angka);
           if ($leng < 3){
               echo "Minimal array length is 3!";
           } else {
               rsort($angka);
               echo $angka[2];
           }
       } else {
           echo "Parameter Should be an Array!";
       }
    }
    ?>

    <?php thirdHighest([1,2,3,4,5,6]); ?>
    <br>
    <?php thirdHighest("Hallo World"); ?>
    <br>
    <?php thirdHighest([2]); ?>