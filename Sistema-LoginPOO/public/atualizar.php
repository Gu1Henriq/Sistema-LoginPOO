<?php
session_start();
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: verificar-atu.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Informações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Atualizar Informações</h3>
        <form method="post" action="process-atualizar.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Novo nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Novo email:</label>
                <input type="text" id="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="nova_senha" class="form-label">Nova senha (deixe vazio para manter a mesma):</label>
                <input type="password" id="nova_senha" name="nova_senha" class="form-control">
            </div>

            <button type="submit" class="btn btn-warning w-100">Atualizar</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
