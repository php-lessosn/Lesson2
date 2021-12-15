<?php


/**
 * Корзина
 * Функции:
 *  Добавление товара
 *     Добавлять можно сколько угодно раз
 *  Вывод таблицы товаров для пользователя
 */

$item = ["orange","samotik"];

class Cart {
    private $cart = [];

    public function addItem(Item $item) {
        $this->cart[] = $item;
    }

    public function showCart() {
        $this ->cart;
        foreach ($this->cart as $goods){
            echo $goods;
        };
    }
}

class Item {
private $name;
private $price;
public function __construct($name,$price)
{
    $this ->name = $name;
    $this ->price = $price;
}
public function getName($name){
    return $this->name;
}
public function getPrice($price){
    return $this->price;
}
}