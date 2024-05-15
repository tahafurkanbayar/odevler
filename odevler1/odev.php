<?php
$filmler = array(
    "Paper Lives" => array(
        "isim" => "Paper Lives",
        "aciklama" => "Kağıt toplayarak geçiNen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
        "url" => "paper-lives"
    ),
    "Walking Dead" => array(
        "isim" => "Walking Dead",
        "aciklama" => "Zombi kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
        "url" => "walking-dead"
    )
);

// 1. sorunun çözümü *****
$filmaciklama1 = ucfirst(strtolower($filmler['Paper Lives']['aciklama']));
$filmaciklama2 = ucfirst(strtolower($filmler['Walking Dead']['aciklama']));
// 2. sorunun çözümü *****
$film1elli = substr($filmaciklama1, 0, 50) . "...";
$film2elli = substr($filmaciklama2, 0, 50) . "...";
// 3. sorunun çözümü *****
$film1_url = strtolower(str_replace(' ', '-', $filmler["Paper Lives"]["isim"]));
$film2_url = strtolower(str_replace(' ', '-', $filmler["Walking Dead"]["isim"]));
// 4. sorunun çözümü *****
define("baslik", "Film Listesi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Macera</li>
                    <li class="list-group-item">Dram</li>
                    <li class="list-group-item">Komedi</li>
                    <li class="list-group-item">Korku</li>
                </ul>
            </div>
            <div class="col-9">
                <?="<h1>". baslik ."</h1>"?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/1.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?="<a href='$film1_url'>" . $filmler["Paper Lives"]["isim"] . "</a>"?></h5>
                                <p class="card-text">
                                    <?=$film1elli?>    
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Vizyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid" src="img/2.jpeg" alt="">
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?="<a href='$film2_url'>" . $filmler["Walking Dead"]["isim"] . "</a>"?></h5>
                                <p class="card-text">
                                <?=$film2elli?>          
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success">Yorum: 55</span>
                                    <span class="badge bg-success">Beğeni: 85</span>
                                    <span class="badge bg-success">Viyonda: Evet</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>