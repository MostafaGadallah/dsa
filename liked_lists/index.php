<?php
class Node{
    public $head=null;
}
class linkedlist{
    public $next;
    public $value;
    public function __construct($val){
        $this->next=null;
        $this->value=$val;
    }
}
$i=1;
function add($val){
    $index=(int) $GLOBALS["i"]++;
    $cn="cn".$index;
    $bn="cn".$index-1;
    global $$cn;
    global $$bn;
    $$cn=new linkedlist($val);
    if($index>1){
        $GLOBALS[$bn]->next=$$cn;
    }
    return $$cn;
}
$mylist=new node();
add("tjrij");
add("asd");
add("wq");
add("f");
$mylist->head=$cn1;
echo "<pre>"; 
var_dump($mylist);
if($mylist->head!=null){
    $temp=$mylist->head;
    while($temp!=null){
        echo $temp->value."<br>";
        $temp=$temp->next;
    }
}