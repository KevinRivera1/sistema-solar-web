<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contácto</title>
    <link rel="stylesheet" href="../../styles/reset.css">
    <link rel="stylesheet" href="../../styles/contacto.css">
    <link rel="stylesheet" href="../../styles/header.css">
    <link rel="stylesheet" href="../../styles/footer.css">
</head>

<body>
    <?php include '../components/header.php'; ?>
    <main class="main">
        <section>
            <h1 class="main__title">¡Hablemos!</h1>
            <p class="main__description">¡Hola! Si tienes alguna pregunta, idea divertida o simplemente quieres contarnos algo genial, ¡estamos aquí para escucharte!</p>
            <form class="form" id="commentForm">
                <label class="form__label" for="nombre">¿Cómo te llamas?</label>
                <input class="form__input" type="text" name="nombre" id="nombre" placeholder="Escribe tu nombre aquí..." required>
                <label class="form__label" for="email">¿Cuál es tu correo electrónico?</label>
                <input class="form__input" type="email" name="email" id="email" placeholder="ejemplo@gmail.com..." required>
                <label class="form__label" for="mensaje">Cuéntanos algo:</label>
                <textarea class="form__textarea" name="mensaje" id="mensaje" placeholder="Escribe tu mensaje aquí..." required style="resize: none;"></textarea>
                <button class="form__button" type="submit">¡Publicar!</button>
            </form>
        </section>

        <section class="comments">
            <div class="comments__list">
                <h2 class="comments__title">¡Lo que dicen nuestros amigos!</h2>
                <div class="comments__items" id="commentsList"></div>
            </div>
        </section>
    </main>
    <?php include '../components/footer.php'; ?>
</body>

<script src="../../js/comentarios.js"></script>
<script src="../../js/index.js"></script>
<script src="../../js/footer.js"></script>


</html>