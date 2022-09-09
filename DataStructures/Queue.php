<?php

class Queue {
    public $first;
    public $last;
    public $queue = [];
    public $length;

    function __construct() {
        $this->first = null;
        $this->last = null;
        $this->queue = [];
        $this->length = 0;
    }

    function peek() {
        return $this->first;
    }

    function enqueue($value) {
        array_push($this->queue, $value);
        if ($this->length === 0) {
            $this->first = $value;
            $this->last = $value;
        }
        $this->length++;
        return $this;
    }

    function dequeue() {
        if($this->length === 0) {
            return null;
        }
        array_pop($this->queue);
        $this->length--;
    }

    function search($value) {
        return array_search($value, $this->queue);

    }
    function show(){
        return $this->queue;
    }

}

$MyQueue = new Queue();
$MyQueue->enqueue(4);
$MyQueue->enqueue(5);
$MyQueue->enqueue(2);
$MyQueue->enqueue(1);
$MyQueue->enqueue(9);
$MyQueue->enqueue(3);
$MyQueue->dequeue();
$search = $MyQueue->search(1);
echo $search."\n";
$first = $MyQueue->peek();
echo $first."\n";
print_r($MyQueue->show());
