<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>
            Login sucedido!
        </h1>
    </header>
    <main>
        <?php
        $username = $_POST["username"] ?? 'null';
        $password = $_POST["password"] ?? 'null';

        echo "<script defer>
            if ('$username' === '' || '$password' === '') {
                history.go(-1);
            } else if ('$username' !== 'admin' || '$password' !== 'admin321') {
                history.go(-1);
            } else {
                document.addEventListener('DOMContentLoaded', () => {
                    const result = document.querySelector('#result');
                    result.innerHTML = 'Bem-vindo';
                });
            }
        </script>";
        ?>
        <p id="result" style="display: flex; justify-content: center"></p>
        <p><a href="javascript:history.go(-1)">Logout</a></p>
    </main>
</body>

</html>