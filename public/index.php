<?php
include_once '../engine/scan.php';
include_once '../engine/lists.php';

$dirArr = arrScanDir($baseDir);

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Images</title>
</head>
<body>
<header>
    <nav>
        <ul class="topmenu">
            <li><a href="#" class="active">Главная</a></li>
            <li><a href="#">Картинки <span class="fa fa-angle-down"></span></a>
                <ul class="submenu">
                    <? menuList($dirArr) ?>
                </ul>
            </li>
        </ul>
    </nav>
</header>
<main class="p-5">
    <div id="images" class="h-100 row d-flex justify-content-between align-items-center p-5 m-5">
        <? renderImg($dirArr) ?>
    </div>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption" class="caption"></div>
    </div>
</main>
<footer>

</footer>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script>

    let modal = document.getElementById('myModal');
    let modalImg = document.getElementById("img01");
    let captionText = document.getElementById("caption");
    let span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modal.style.display = "none";
    }
    let imgs = document.querySelectorAll('.imgs');
    imgs.forEach((item) => {
        item.addEventListener("click", (e) => {
            modal.style.display = "block";
            modalImg.src = item.src;
            captionText.innerHTML = item.alt;
        })
    })

</script>
</body>
</html>
