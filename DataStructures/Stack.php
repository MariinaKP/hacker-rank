<?php


class Stack
{
    public $bottom;
    public $top;
    public $stack = [];
    public $length;

    function __construct() {
        $this->bottom = null;
        $this->top = null;
        $this->stack = [];
        $this->length = 0;
    }

    function push($value) {
        array_push($this->stack, $value);
        if ($this->length === 0) {
            $this->bottom = $value;
            $this->top = $value;
        }
        $this->length++;
        return $this;
    }

    function pop() {
        if($this->length === 0) {
            return null;
        }
        array_pop($this->stack);
        $this->length--;
        return end($this->stack);
    }

    function peek() {
        return end($this->stack);
    }

    function search($value) {
        return array_search($value, $this->stack);

    }
    function show(){
        return $this->stack;
    }
}

$MyStack = new Stack();
$MyStack->push(4);
$MyStack->push(1);
$MyStack->push(2);
$MyStack->push(3);
$MyStack->push(5);
$MyStack->push(8);
$MyStack->push(9);
$top = $MyStack->peek();
echo $top."\n";
$pop = $MyStack->pop();
echo $pop."\n";
