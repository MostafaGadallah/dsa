<?php
$queue=[];
define("size",5);
$front=-1;
$rear=-1;
function enqueue($value){
    if($GLOBALS["rear"]+1==$GLOBALS["front"] or ($GLOBALS["rear"]==size-1 and $GLOBALS["front"]==0)){
        echo "the queue is full";
    }
    else{
        if ($GLOBALS["front"]==-1){
            $GLOBALS["front"]++;
            $GLOBALS["rear"]++;
            $GLOBALS["queue"][$GLOBALS["rear"]]=$value;
        }
        elseif($GLOBALS["rear"]==size-1){
            $GLOBALS["rear"]=0;
            $GLOBALS["queue"][$GLOBALS["rear"]]=$value;
        }
        else{
            $GLOBALS["rear"]++;
            $GLOBALS["queue"][$GLOBALS["rear"]]=$value;
        }
    }
}
function dequeue(){
    if ($GLOBALS["rear"]==-1 && $GLOBALS["front"]==-1){
        echo "th queue is empty";
        // echo $GLOBALS["front"];
    }
    else{
        if ($GLOBALS["front"]==$GLOBALS["rear"]){
            $GLOBALS["front"]=-1;
            $GLOBALS["rear"]=-1;
        }elseif($GLOBALS["front"]==size-1){
            $GLOBALS["front"]=0;
        }else{
            $GLOBALS["front"]++;
        }
    }
}
function peek(){
    if ($GLOBALS["rear"]==-1 && $GLOBALS["front"]==-1){
        echo "the queue is empty";
    }
    else{
        echo $GLOBALS["queue"][$GLOBALS["front"]]."<br>";
    }
}
function display(){
    if ($GLOBALS["rear"]==-1 && $GLOBALS["front"]==-1){
        echo "the queue is empty";
    }
    else{
        if($GLOBALS["front"]<=$GLOBALS["rear"]){
            for($i=$GLOBALS["front"];$i<=$GLOBALS["rear"];$i++){
                echo $GLOBALS["queue"][$i]."<br>";
            }
        }
        else{
            for($i=$GLOBALS["front"];$i<=size-1;$i++){
                echo $GLOBALS["queue"][$i]."<br>";
            }
            for($i=0;$i<=$GLOBALS["rear"];$i++){
                echo $GLOBALS["queue"][$i]."<br>";
            }
        }
    }
}
enqueue(5);
enqueue(4);
enqueue(3);
enqueue(2);
enqueue(1);
dequeue();
dequeue();
dequeue();
dequeue();
dequeue();
// dequeue();
enqueue(0);
dequeue();
// enqueue("4s");
// dequeue();
// dequeue();
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
display();
// var_dump($queue);