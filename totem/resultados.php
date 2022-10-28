<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
    body {
        background-color: #719dc7;

    }


    .container {
        margin-top: 20px;
        margin-block-end: 20px;
    }

    .senai {
        width: 450px;
        margin-left: 690px;
        margin-top: 30px;


    }

    table {

    }

    thead {
        background-color: #3d3d3d;
        color: white;
    }

    tbody {
        background-color: #999999;
        color: white;
    }
    </style>




</head>

<body>
        <?php
        require 'conexao.php';
        ?>
        <table width="1000" borde="1px">0
            <tr>
                <th> Cod</th>
                <th> Pergunta1</th>
                <th> Pergunta2</th>
                <th> Pergunta3</th>
                <th> Pergunta4</th>
                <th> Pergunta5</th>
                <th> Pergunta6</th>
                <th> Pergunta7</th>
                <th> Pergunta8</th>
            </tr>
        </thead>
        <tbody>
            <?php
            #Select da tabela de listagem
            $Mihaquery1 = 'SELECT * FROM tb_';
            try {
                $Minhavariaveldeleitura = $pdo->prepare($Mihaquery1);
                $Minhavariaveldeleitura->execute();
            }
            catch (PDOException $e) {
                echo $e->getTMessage();
            }

            while ($rs = $Minhavariaveldeleitura->fetch(PDO::FETCH_OBJ)) {
                ?>
                <tr>
                    <td><?php echo $rs->id; ?></td>
                    <td><?php echo $rs->Pergunta1; ?></td>
                    <td><?php echo $rs->Pergunta2; ?></td>
                    <td><?php echo $rs->Pergunta3; ?></td>
                    <td><?php echo $rs->Pergunta4; ?></td>
                    <td><?php echo $rs->Pergunta5; ?></td>
                    <td><?php echo $rs->Pergunta6; ?></td>
                    <td><?php echo $rs->Pergunta7; ?></td>
                    <td><?php echo $rs->Pergunta8; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
        <br><!-- comment -->
<a href='index.php'><button>Voltar ao Início</button></a>

<!-- JavaScript Bundle with Popper Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</html>