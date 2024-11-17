<?php

class Node{
    public $value;
    public $next;

    public function __construct($value, $next){
        $this->value = $value;
        $this->next = null;
    }

}