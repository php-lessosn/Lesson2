<?php
$Friends = [
    [
        "name" => "John",
        "birthday" => "20.05.1985",
        "city" => "kaliningrad",
        "hobby" => ["reading"],
        "sex" => "male",
        "age" => 2
    ],
    [
        "name" => "Bob",
        "birthday" => "21.05.1985",
        "city" => "kaliningrad",
        "hobby" => ["chatting", "reading"],
        "sex" => "male",
        "age" => 5
    ],
    [
        "name" => "Max",
        "birthday" => "25.05.1985",
        "city" => "kaliningrad",
        "hobby" => ["swimming", "chatting"],
        "sex" => "female",
        "sport" => ["football", "basketball"],
        "age" => 3
    ],
    [
        "name"=> "Marv",
        "birthday" => "13.12.1990",
        "city" => "moscow",
        "hobby" => ["reading"],
        "sex" => "female",
        "sport" => ["soccer"],
        "age" => 10
    ],
    [
        "name" => "Henry",
        "birthday" => "10.05.1999",
        "city" => "kaliningrad",
        "hobby" => ["driving", "skiing"],
        "sex" => "male",
        "age" => 5
    ]
];

$male = 0;
$female = 0;
foreach ($Friends as $number => $Friend) {
    foreach ($Friend as $key => $value) {
        if($value === "male") {
            $male++;
        } else if ($value === "female") {
            $female++;
        }
    }
}

echo "male -" . $male . "\n";
echo  "female -" . $female;

?>