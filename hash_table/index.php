<?php
define("Max_name",256);
define("Table_size",10);
$hash_table=[];
function hash_f($name){
    $length=strlen($name);
    $hash_value=0;
    for($i=0;$i<$length;$i++){
        $hash_value+=ord($name[$i]);
        $hash_value=($hash_value*ord($name[$i]))%Table_size;
    }
    return $hash_value;
}
function insert($name){
    // if (array_key_exists(hash_f($name),$GLOBALS["hash_table"])){
    //     for($i=hash_f($name);$i<Table_size && @$GLOBALS["hash_table"][$i]!=null;$i++){
    //         // $ptr=$i;
    //         $GLOBALS["hash_table"][$i+1]=$name;
    //     }
    //     // for($i=0;$i<Table_size && @$GLOBALS["hash_table"][$i]!=null;$i++){
    //     //     $ptr=$i;
    //     // }
    //     // echo $ptr."<br>";
    //     // echo "collaigen<br>";
    // }
    // else{
    //     echo "not collaigen<br>";
    //     $GLOBALS["hash_table"][hash_f($name)]=$name;
    // }
    
    if(!array_key_exists(hash_f($name),$GLOBALS["hash_table"])){
        $GLOBALS["hash_table"][hash_f($name)]=$name;
    }
    else{
    $end=false;
    for($i=hash_f($name);$i<Table_size-1 && array_key_exists($i,$GLOBALS["hash_table"]);){
        $i++;
        if(!array_key_exists($i,$GLOBALS["hash_table"])){
            $GLOBALS["hash_table"][$i]=$name;
            $end=True;
            break;
        } 
    }
    if(!$end){
        if(!array_key_exists(0,$GLOBALS["hash_table"])){
            $GLOBALS["hash_table"][0]=$name;
            $end=true;
        }
        else{
            $bool=true;
            for($i=0;$bool&&$i<hash_f($name) && array_key_exists($i,$GLOBALS["hash_table"]);){
                $i++;
                if(!array_key_exists($i,$GLOBALS["hash_table"])){
                    $GLOBALS["hash_table"][$i]=$name;
                    // echo "add";
                    $bool=false;
                    $end=true;
                } 
            }
        }
    }
    if(!$end){
        echo "full<br>";
    }
    }
}
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
insert("hgh");
echo hash_f("hgh");
echo "<pre>";
var_dump($hash_table);