<?php

function selectFromSpotify($url){
    $folgen_liste = array();
    $array = json_decode(file_get_contents($url));
    foreach ($array as $key => $jsons) {
        foreach($jsons as $key => $value) {
            if($key == 'spotify'){
                if(str_contains($value,"https://")){
                    $url_segment_one = explode("/album/", $value);
                    $url_segment_two = explode("?si", $url_segment_one[1]);
                    $folgen_liste[] = $url_segment_two[0];
                }else{
                    $folgen_liste[] = $value;
                }
            }
        }
    }
    $folge = $folgen_liste[array_rand($folgen_liste)];
    return '<iframe src="https://open.spotify.com/embed/album/' .$folge .'" width="100%" height="380" style="margin-top: 10px;" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>';
}


function diedr3i($url){
    $folgen_liste = array();
    $array = json_decode(file_get_contents($url));
    foreach ($array as $key => $jsons) {
        foreach($jsons as $key => $value) {
            if($key == "name"){
                $folgen_liste[] = $value;
            }
        }
    }
    try {
        $random_number = random_int(0, 7);
        $folge = $folgen_liste[$random_number];

        return '<div width="100%" class="container"> <div class="row"> <div class="col"><img src="files/images/dd_' .($random_number +1) .'.webp" width="250" height="250" class="rounded float-start" alt="Cover: ' .$folge .'"></div> <div class="col"><h3>' .$folge .'</h3></div></div></div>';
    } catch (Exception $e) {
        return "Fehler: " .$e;
    }
}

?>