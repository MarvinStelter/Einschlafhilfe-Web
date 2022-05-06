<!DOCTYPE html>
<html lang="de" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Die drei Fragezeichen Einschlafhilfe ist ein Tool um dir eine Folge des Hörspiels vorzuschlagen, wenn du dich mal nicht entscheiden kannst.">
    <meta name="author" content="Marvin Stelter">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Die drei Fragezeichen Einschlafhilfe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="icons/favicon.ico" sizes="any">
    <link rel="apple-touch-icon" href="icons/apple-touch-icon.png">
    <meta name="theme-color" content="#000000">
    <link href="css/custom.css" rel="stylesheet">
</head>
<body class="d-flex flex-column h-100">
<?php
include("includes/navbar.php");
?>
<main class="flex-shrink-0">
    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <div class="pb-3">
                    <?php
                    $string_json = "https://api.citroncode.com/android/ddf/v4/folgen_php.json";
                    $folgen_liste = array();

                    $array = json_decode(file_get_contents($string_json));

                    foreach ($array as $key => $jsons) { // This will search in the 2 jsons
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
                    echo '<iframe src="https://open.spotify.com/embed/album/' .$folge .'" width="100%" height="380" frameBorder="0" allowtransparency="true" allow="encrypted-media"></iframe>';
                    ?>

                    <div class="d-flex justify-content-center">
                        <a href="<?php echo "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>" style="margin-top: 10px" type="button"  class="btn btn-dark form-control">Folge auswählen</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="card" style="width: 100%;">
                    <img src="https://citroncode.com/apps/6-drei-fragezeichen-einschlafhilfe/screen.png" class="card-img-top" alt="Android App Preview Banner">
                    <div class="card-body">
                        <h5 class="card-title">Einschhalfhilfe Android App</h5>
                        <p class="card-text">Die drei Fragezeichen Einschlafhilfe gibt es auch als native Android App mit einem größeren Funktionsumfang.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Android 6.0+</li>
                        <li class="list-group-item">Keine sensitiven Berechtigungen!</li>
                        <li class="list-group-item">Quelloffen</li>
                        <li class="list-group-item">Kostenlos und Werbefrei</li>
                    </ul>
                    <div class="card-body">
                        <a href="https://play.google.com/store/apps/details?id=de.msdevs.einschlafhilfe" class="card-link">Herunterladen</a>
                    </div>
                </div>

                <div style="margin-top: 10px" class="card text-white bg-dark mb-3" style="max-width: 100%;">
                    <div class="card-header">Information:</div>
                    <div class="card-body">
                        <p class="card-text">
                            „Die drei ???“ sind eine eingetragene Marke der Franckh-Kosmos Verlags-GmbH & Co. KG, Stuttgart.
                            Diese Internetseite und unsere App ist NICHT im Besitz von Kosmos, Europa, der Familie Roberts oder anderen Personen, die in die Produktion der Serie Die drei ??? eingebunden sind.
                            Alle Schutzmarken, Logos und Copyrights gehören ihren jeweiligen Besitzern.
                            Alle Bilder © copyright by Kosmos, Europa, Studios Hamburg, USM oder Random House.
                        </p>
                    </div>
                </div>


            </div>
        </div>

    </div>
</main>

<?php
include("includes/footer.php");
?>

</body>
</html>
