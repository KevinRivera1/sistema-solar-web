<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/exploracion.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <main>
        <?php require "../components/header.php"; ?>

        <section class="gallery__title">
            <h1 class="title">Exploración</h1>
            <p class="subtitle">Explora el mundo a través de nuestras imágenes</p>
        </section>

        <section class="galery">
            <?php
            $images = [
                "../../assets/img/Image.png",
                "../../assets/img/Image2.png",
                "../../assets/img/Image3.png",
                "../../assets/img/Image4.webp",
                "../../assets/img/Image5.png",
                "../../assets/img/Image6.png",
                "../../assets/img/Image7.png",
                "../../assets/img/Image8.png",
                "../../assets/img/Image9.png",
                "../../assets/img/Image10.png",
                "../../assets/img/Image11.png",
                "../../assets/img/Image12.png",
                "../../assets/img/Image13.png",
                "../../assets/img/Image14.png",
                "../../assets/img/Image15.png",
                "../../assets/img/Image16.png",
                "../../assets/img/Image17.png",
                "../../assets/img/Image18.png",
                "../../assets/img/Image19.png",
                "../../assets/img/Image20.png"
            ];
            shuffle($images);
            foreach ($images as $image) {
                echo '<img data-aos="flip-right" src="' . $image . '" alt="imagen galery" loading="lazy">';
            }
            ?>
        </section>
        <?php require "../components/footer.php"; ?>
    </main>
</body>


<script src="../../js/index.js"></script>
<script src="../../js/footer.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>

</html>