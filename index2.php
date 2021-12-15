<?php

//echo "Hello World";

const a = 1;
const b = "string";
const c = array(1, 2);
const d = [1, 2];
const e = [
    "a" => 1,
    "b" => 2,
];


function calc($a, $b) {
    return $a * $b;
}

//var_dump(calc(2, 4));


class UmnojaetAnaBiPribalyaetChislo {
    private $a;
    private $b;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    private function calc() {
        return $this->a * $this->b;
    }

    public function pribavit($chislo) {
        return $this->calc() + $chislo;
    }
};

$f = new UmnojaetAnaBiPribalyaetChislo(2, 3);
$g = new UmnojaetAnaBiPribalyaetChislo(4, 5);

var_dump($f->pribavit(5));
//var_dump($g);


//var_dump(a);
//var_dump(b);
//var_dump(c);
//var_dump(d);
//var_dump($f);


