<?php
class Node {
public $next;
public function __construct($value){
		$this->val=$value;
		$next=null;	
	}
}
class linkedlist{
	public $next=null;
	function printlist(){
		$temp=$this->next;
		if ($temp ==null){
			echo "empty";
		}
        while($temp!=null){
			echo $temp->val."<br>";
			$temp=$temp->next;
		}
	}
}
$i=1;
function add($v,$next=null){
    $in=(int)$GLOBALS["i"]++ ;
    $n="n".$in;
    GLOBAL $$n;
    $$n = new Node($v);
    global $bn;
    $bn="n".$in-1;
    if($next==null){
        if ($in != 1){
            $GLOBALS[$bn]->next=$GLOBALS[$n];
        }
    }
    else{
        $GLOBALS[$bn]->next="s";
    }
}
$list = new linkedlist();
add(13);
$list->next=$n1;
add(18,"n3");
add(23);
add(28);
add(33);
$list->printlist();
echo "<pre>";
var_dump($list);
echo "<pre>";