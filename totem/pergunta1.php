<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


    <style>
        body{
           
        }

        .pergunta {
            border-radius: 1080px;
            width: 600px;
        }

        .container {
            background-color: #719dc7;
        }

        .boneco {
        width: 500px;
        margin-top: -100px;
     
    }

        /*  .senai {
        width: 450px;
        margin-left: 700px;
        margin-top: 10px;
    }

    .boneco {
        width: 500px;
        margin-top: -150px;
        margin-left: 70px;
    }

    .button {
        font-size: 18px;
        padding: 8px;
        width: 80px;
        margin: 10px;
        margin-top: -230px;
        border: none;
    }

    .button1 {
        margin-left: 470px;
    }

    .button1:hover {
      background-color: #15ff00;
    }

    .button2:hover {
      background-color: #ffd900;
    }

    .button3:hover {
      background-color: #ff0000;
    }
 */
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

    <div class="container">
        <form action="/action_page.php" method="post">
            <div class="row">
                <div class="col-12 text-center mt-2">
                    <img src="img/p1.jpeg" alt="Avatar" class="pergunta">
                </div>
            </div>

            <div class="row">
                <div class="col-12 text-center mt-2">
                    <a href="pergunta2.php" class="btn btn-primary button button1">Ótimo</a>
                    <a href="pergunta2.php" class="btn btn-primary button button2">Bom</a>
                    <a href="pergunta2.php" class="btn btn-primary button button3">Regular</a>
                </div>
            </div>
            
            <img class="boneco" src="img/telapergunta.png" alt="Avatar">
    </div>


  
</body>

</html>