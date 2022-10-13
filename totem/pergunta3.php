<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <style>
    .senai {
        width: 450px;
        margin-left: 700px;
        margin-top: 10px;
    }

    .boneco {
        width: 500px;
        margin-top: -150px;
        margin-left: 70px;
    }

    .container {
        background-color: #719dc7;
        margin-top: 50px;

    }

    .pergunta {
        border-radius: 1080px;
        margin-left: 320px;
        margin-top: 20px;
        width: 600px;
    }


    .button {
        font-size: 18px;
        padding: 8px;
        width: 120px;
        margin: 10px;
        margin-left: 590px;
        border: none;
        

    }
    .form-range{
        width: 400px;
        margin-left: 450px;
        margin-top: -300px;
    }





    </style>

</head>

<body>


    <img class="senai" src="img/senai.jpg" alt="senai">


    <form action="/action_page.php" method="post">

        <div class="container">
            <img src="img/p3.jpeg" alt="Avatar" class="pergunta">
        

    </form>

    <img class="boneco" src="img/telapergunta.png" alt="Avatar">

    <br>

    <input type="range" class="form-range" min="0" max="10" id="customRange3" oninput="this.nextElementSibling.value = this.value">
    <output>5</output>
    <br>
    <a href="pergunta4.php" class="btn btn-primary button"> Próxima</a>

    </div>


</body>

</html>