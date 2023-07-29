<?php
$queue=[];
define("size",5);
$front=-1;
$rear=-1;
function enqueue($value){
    if($GLOBALS["rear"]==size-1){
        echo "the queue is full";
    }
    else{
        if ($GLOBALS["front"]==-1){
            $GLOBALS["front"]++;
            $GLOBALS["rear"]++;
            $GLOBALS["queue"][$GLOBALS["rear"]]=$value;
        }
        else{
            $GLOBALS["rear"]++;
            $GLOBALS["queue"][$GLOBALS["rear"]]=$value;
        }
    }
}
function dequeue(){
    if ($GLOBALS["front"]!=-1 && $GLOBALS["rear"]!=-1 && $GLOBALS["front"]<=$GLOBALS["rear"]){
        $GLOBALS["front"]++;
        // echo $GLOBALS["front"];
    }
    else{
        echo "the queue is empty";
    }
}
function display(){
    if ($GLOBALS["front"]!=-1 && $GLOBALS["rear"]!=-1 && $GLOBALS["front"]<=$GLOBALS["rear"]){
        for($i=$GLOBALS["front"];$i<=$GLOBALS["rear"];$i++){
            echo $GLOBALS["queue"][$i]."<br>";
        }
    }
    else{
        echo "the queue is empty";
        
    }
}
function peek(){
    if ($GLOBALS["front"]!=-1 && $GLOBALS["rear"]!=-1 && $GLOBALS["front"]<=$GLOBALS["rear"]){
        echo $GLOBALS["queue"][$GLOBALS["front"]]."<br>";
    }
    else{
        echo "the queue is empty";

    }
}
enqueue(5);
peek();
enqueue(4);
enqueue(3);
enqueue(2);
enqueue(1);
dequeue();
dequeue();
dequeue();
// enqueue("odd");
display();
// dequeue();
// dequeue();
// dequeue();
// dequeue();
// dequeue();
// dequeue();
// dequeue();
// dequeue();
// enqueue(3);
// enqueue(3);
// enqueue(3);
// enqueue(3);
// enqueue(3);
var_dump($queue);