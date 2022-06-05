<?php
    $arr = array("Perlis", "Kedah", "Pahang", "Kelantan", "Terengganu", "Selangor", "Perak", "Johor", 
    "Negeri Sembilan", "W.P. Labuan", "Sabah", "Sarawak", "W.P. Kuala Lumpur", "W.P. Putrajaya", "Melaka",
    "Pulau Pinang");

    $req = $_REQUEST['q'];

    $hint = "";

    if($req !== ""){
        $req= strtolower($req);
        $len=strlen($req);
        foreach($arr as $name){
            if(stristr($req, substr($name, 0, $len))){
                if($hint === "")
                    $hint = $name;
                else
                    $hint .= ", $name";
            }
        }
    }
    //echo $arr;
    //echo $req;
    echo $hint === "" ? "Nothing Found..." : $hint;
?>
