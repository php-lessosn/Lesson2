<?php

$folders = [
    "1.png",
    "2.png",
    "test_folder" => [
        "3.png",
        "4.png",
        "inner_folder" => array(
            "my_secret_port" => array(
                "vid1.mov",
                "vid2.mov",
            )
        )
    ],
    "3.jpg",
    "folder_2" => [
        "5.jpg",
        "huy.docx",
        "secret" => [
            "dick_pic" => ["big dik"]
        ],
    ]
];




function strLenAll($a){
    return mb_strtoupper($a);
}
StrLenAll ($foldersALL);

$a = "_";
$b = "";
function str_replaceSpace($a, $b, $subject){

    foreach($subject as &$oneSubject){
        $oneSubject = str_replace($a, $b, $oneSubject);}
    return $subject;

}

str_replaceSpace($folders);




function strReplaceSpace($search, $replace, $subject)
{
    if (is_array($subject))
    {
        foreach($subject as &$oneSubject)
            $oneSubject = strReplaceSpace($search, $replace, $oneSubject);
        unset($oneSubject);
        return $subject;
    } else {
        return str_replace($search, $replace, $subject);
    }
}

function getFileExtention($filename) {
    $exploded = explode(".",$filename);
    return $exploded [count($exploded)-1];
}



function getIcon($filename) {
    if (getFileExtention($filename) === "png"){
        return "Ɓ";
    }
    elseif (getFileExtention($filename) ==="mov"){
        return "Ǝ";
    }
    else {
        return "Ƣ";}

}


function long($lenght) {
    $a="";
    for ($i = 0; $i < $lenght; $i++) {
        ($a=$a." ");
    }
    return $a;
}


function tree($unbox, $count=0) {
    foreach ($unbox as $key => $value){
        if (gettype($value) === "array") {
            echo long($count).$key."\n";
            tree ($value,$count+1);
        } else {
            echo long($count).getIcon($value).$value."\n";
        }
    }
}

tree($folders);














/**
 * Func1 - вывод структуры рекурсивно
 */

/**
 * Выводить какой нибудь значек напротив имени файла
 * Свой значек для папки
 * СВОЙ ДЛЯ jpg, dcox, mov ...
 *
 * Прочитать имя файла. понять разрешение
 */



/**
 * 1 Name
 * 2 Name
 * 3 Name
 * 4 Name
 *      1 Name
 *      2 Name
 *      3 Name
 *              1 Name
 *              2 Name
 *      4 Name
 *      5 Name
 * 5 Name
 */