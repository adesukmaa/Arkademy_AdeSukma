
<?php

biodata("Ade Sukma Aulia", 22);

function biodata ($name, $age){

    $nama = $name;
    $umur = $age;
    $address = "Jalan Rajawali Sakti 1 no 57";
    $hobbies = ["Main Futsal, KMusik"];
    $is_married = false;
    $list_school = [
        ["keyname" => "SDN O30 Tampan",
        "year_in" => "2003",
        "year_out" => "2009",
        "major" => null],
       
        ["keyname" => "SMP 20 Pekanbaru",
        "year_in" => "2009",
        "year_out" => "2012",
        "major" => null],

        ["keyname" => "SMK 2 Pekanbaru",
        "year_in" => "2012",
        "year_out" => "2015",
        "major" => "elektronika industri"],

        ["keyname" => "Politeknik Caltex Riau",
        "year_in" => "2015",
        "year_out" => "2019",
        "major" => "teknik informatika"],
    ];
    $skills = [
        ["skill name" => "programmer",
        "level" => "beginner"],
       
        ["skill name" => "animasi",
        "level" => "advanced"]
    ];
    $interest_in_coding = true;
    $gabung = [$nama,$umur,$address,$hobbies, $is_married,$list_school,$skills,$interest_in_coding];

$jsonData = json_encode($gabung);
echo $jsonData. "\n";
}


?>