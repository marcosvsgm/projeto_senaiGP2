<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <style>
        body {}

        .container {
            border: 1px solid black;

        }

        .pesquisa {
            width: 70%;
            padding: 12px;

        }

        .button {
            width: 300px;
            padding: 14px;
        }
    </style>

</head>

<body>

    <div class="row">
        <div class="col-sm-12">
            <nav class="navbar bg-primary">
                <div class="container-fluid">
                    <img class="img-floid mx-auto d-block" src="https://www.mundosenai.com.br/media/filer_public/8e/b4/8eb4a5a5-3946-46ed-b2be-04b18a4b7c94/logo-senai.png" alt="logo">
                </div>
            </nav>
        </div>
    </div>

    <br><br><br><br><br>

    <div class="container border">
        <form action="/action_page.php">
            <div class="row">
                <div class="col-12 ">
                    <h2 class="text-center">Pesquisa de satisfação </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <img class="img-fluid " src="img/telainicial.png" alt="" />
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 text-center mt-5">
                    <a href="pergunta1.php"> <input class="btn btn-primary pesquisa" type="button" value="Pesquisa de satisfação"> </a>

                    <h1> Conheça Também :</h1>

                    <input class="btn btn-primary button m-2" type="button" value="EDUConnect">
                    <input class="btn btn-primary button" type="button" value="Mundo Senai">
                </div>

            </div>
    </div>

</body>

</html>