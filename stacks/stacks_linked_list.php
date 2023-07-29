<?php
class Node{
    public $data;
    public $next;
}
$head=null;
function push($value){
    $new_node=new node;
    $new_node->data=$value;
    $new_node->next=$GLOBALS["head"];
    global $head;
    $head=$new_node;
}
function pop(){
    if ($GLOBALS["head"]==null){
        echo "empty<br>";
    }
    else{
        $first_node=$GLOBALS["head"];
        $GLOBALS["head"]=$first_node->next;
        unset($first_node);
    }
}
function display(){
    if($GLOBALS["head"] == null){
        echo "linked list is empty";
    }
    else{
        $current_node=$GLOBALS["head"];
        while($current_node!=null){
            echo $current_node->data."<br>";
            $current_node=$current_node->next;
        }
    }
}
function peek(){
    echo $GLOBALS["head"]->data."<br>";
}
echo "<pre>";
// $test=new unitTest;
// $test->testcase();
push("ss");
push("ll");
push("nn");
push("mm");
push("hh");
peek();
pop();
peek();
// var_dump($head);