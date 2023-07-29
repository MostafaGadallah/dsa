<?php 
// define("size",5);
// $stack=[];
// $top=-1;
// function push($value){
//     $stack=$GLOBALS["stack"];
//     if ($GLOBALS["top"]>size-2){
//         echo "stack overflow<br>";
//     }else{
//         $top=++$GLOBALS["top"];
//         $stack[$top]=$value;
//     }
//     return $stack;
// } 
// function pop(){
//     $stack=$GLOBALS["stack"];
//     if ($GLOBALS["top"]<0){
//         echo "the array is empty no thing to delete <br>";
//     }else{
//         $top=$GLOBALS["top"]--;
//         echo $stack[$top]." is deleted sucssesfully <br>";
//         unset($stack[$top]);
//     }
//     return $stack;
// }
// function peek(){
//     $stack=$GLOBALS["stack"];
//     if ($GLOBALS["top"]<0){
//         echo "the array is empty no thing to display <br>";
//     }else{
//         $top=$GLOBALS["top"];
//         echo "the peek is ".$stack[$top]." <br>";
//     }
// }
// function display(){
//     $stack=$GLOBALS["stack"];
//     $top=$GLOBALS["top"];
//     while($top!=-1){
//         echo $stack[$top]."<br>";
//         $top--;
//     }
// }
// $stack=push("1");
// $stack=push("2");
// $stack=push("3");
// $stack=push("4");
// $stack=push("5");
// $stack=push("6");
// $stack=push("7");
// $stack=push("8");
// $stack=push("9");
// $stack=push("10");
// peek();
// display();
// echo "<pre>";
// var_dump($stack);
define("size",5);
$stack=[];
$top=-1;
function push($value){
    if ($GLOBALS["top"]>=size-1){
        echo "stack over flow<br>";
    }
    else{
        $GLOBALS["top"]++;
        $GLOBALS["stack"][$GLOBALS["top"]]=$value;
    }
}
function pop(){
    if($GLOBALS["top"]<0){
        echo "stack is empty<br>";
    }
    else{
        unset($GLOBALS["stack"][$GLOBALS["top"]]);
        $GLOBALS["top"]--;
    }
}
function peek(){
    if($GLOBALS["top"]<0){
        echo "stack is empty<br>";
    }
    else{
        echo $GLOBALS["stack"][$GLOBALS["top"]]."<br>";
    }
}
function display(){
    $ptr=$GLOBALS["top"];
    if($ptr<0){
        echo "stack is empty<br>";
    }
    else{
        while($ptr!=-1){
            echo $GLOBALS["stack"][$ptr]."<br>";
            $ptr--;
        }
    }
}

push("1");
push("1");
push("1");
push("1");
push("1");
display();
pop();
pop();
pop();
pop();
peek();
pop();
pop();
peek();