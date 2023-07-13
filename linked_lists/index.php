<?php
namespace App;
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
function mid_add($bef,$val){
    // echo "<pre>";
    // var_dump($GLOBALS[$bef])."<br>";
    // var_dump();
    global $object;
    $object=new linkedlist($val);
    $object->next=$GLOBALS[$bef]->next;
    $GLOBALS[$bef]->next=$object;
    return $object;
}
$mylist=new node();
add("tjrij");
add("asd");
add("wq");
add("f");
$odd=mid_add("cn1","5");
mid_add("odd","6");
$mylist->head=$cn1;
// $cn=null;
// $cn3->next=$cn3->next->next;
// $cn2=new linkedlist("1234");
// $cn1->next=$cn2;
// $cn2->next=$cn3;
echo "<pre>";
var_dump($mylist);
if($mylist->head!=null){
    $temp=$mylist->head;
    while($temp!=null){
        echo $temp->value."<br>";
        $temp=$temp->next;
    }
}
