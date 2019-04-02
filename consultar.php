<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Amazon</title>
</head>
<body>
    <div class="container">
        <h3>Consultar Clientes</h3>
        <form class="form-group"> <!-- action="consultar.php" method="get" -->
            <label for="nome">Nome:<input type="text" name="nome" id="nome" class="form-control"></label><br>

            <input type="submit" value="Buscar" class="btn btn-info">
        </form><hr>
        <div class="row">
            <div class="col">
                <?php
                        
                    if(isset($_GET["nome"]))
                    {
                        $nome = $_GET["nome"];
                        include_once 'conexao.php';
                        $sql = "SELECT * FROM clientes where nome like '$nome%' order by nome";

                        $result = mysqli_query($con, $sql);
                        $total = mysqli_num_rows($result);

                        if($total > 0){
                            echo "<table class='table'>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Estado Civil</th>
                                    <th>Sexo</th>
                                </tr>";
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>$row[1]</td>";
                                echo "<td>{$row['email']}</td>";
                                echo "<td>".$row["estadoCivil"]."</td>";
                                echo "<td>".$row["sexo"]."</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            echo "Total de registros: ".$total;
                        }else{
                            echo "Não há pessoas com esse nome";
                        }

                        mysqli_close($con);
                    }
                ?> 
            </div>
        </div>
    </div>
    
</body>
</html>