<?php

class Stack {

    private $items = array();

    public function push($item) {
        $lastIndex = $this->getLastIndex();
        $this->items[$lastIndex + 1] = $item;
        return $lastIndex;
    }

    public function pop() {
        if ($this->isEmpty()) return -1;
        $lastIndex = $this->getLastIndex();
        unset($this->items[$lastIndex]);
        $this->items = array_values($this->items);
        return $lastIndex;
    }

    public function isEmpty() {
        return $this->getLastIndex() == -1;
    }

    public function getLastIndex() {
        return count($this->items) - 1;
    }

    public function getItems() {
        return $this->items;
    }
    
}


$stack = new Stack;

$stack->push('item1');
$stack->push('item2');
$stack->push('item3');

$stack->pop();

$stack->pop();

$stack->push('item4');

print_r($stack->getItems());

