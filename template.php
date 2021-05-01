<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Usuários</title>
    <link rel="stylesheet" href="bootstrap-5/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
</head>
<body>
    <div class="pagina">

    <div class="container text-center">
        <img src="./img/usuario.png" alt="Usuário">
        <h1>CADASTRO DE USUÁRIO</h1>
        <form action="usuario.php" method="GET">
            <div class="row">
                <div>
                    <label for="usuario">Usuário</label><br>
                    <input type="text" name="usuario" id="usuario" maxlenght="20" required>
                </div>
                <div>
                    <label for="senha">Senha</label><br>
                    <input type="password" name="senha" id="senha" maxlenght="8" required>
                </div>
                <div>
                    <input type="checkbox" name="administrador" id="administrador" value="sim">
                    <label for="administrador">Usuário administrador</label>
                </div>
            </div>

            <button type="submit">Salvar</button>
        </form>
    </div>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>USUÁRIO</th>
                    <th>ADMINISTRADOR</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $sqlBusca = "SELECT * FROM tb_usuario"; 
                    $resultado = mysqli_query($conexao , $sqlBusca);

                    $listaUsuarios = [];

                   while($usuario = mysqli_fetch_assoc($resultado)) {
                       $listaUsuarios[] = $usuario;
                   } 

                   foreach($listaUsuarios as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario['usuario']; ?></td>
                        <td><?php echo $usuario['administrador']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table> 
    </div>
                   </div>

    <script src="bootstrap-5/bootstrap.bundle.min.js"></script>
</body>
</html>