<?php

class Node{
    public $value;
    public $next;

    public function __construct($value){
        $this->value = $value;
        $this->next = null;
    }

}
class linkedList{
    public $head;

    public function __construct($head){
        $this->head = null;
    }
    // add a node to the list
    public function add($value){
        $newNode = new Node( $value );
        // in case this node is first node in the list
        if($this->head === null){
            $this->head = $newNode;
        }
        else{
            $current = $this->head;
            // iterate till reaching end of list
            while($current->next !== null){
                $current = $current->next;   
            }
            // point the list next to the newNode
            $current->next = $newNode;

        }        
    }
}