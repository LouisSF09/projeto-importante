<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locadora IFPR - Resultado do Formulário</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Cabeçalho -->
    <header>
        <h2>Locadora IFPR</h2>
        <nav>
            <a href="index.html">Início</a>
            <a href="jogos.html">Jogos</a>
            <a href="carrinho.html">Carrinho</a>
        </nav>
    </header>

    <!-- Conteúdo principal -->
    <main>
        <h1>Dados Recebidos</h1>
        <div class="carrinho-form">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<p><strong>Nome:</strong> " . htmlspecialchars($_POST["nome"]) . "</p>";
                echo "<p><strong>Email:</strong> " . htmlspecialchars($_POST["email"]) . "</p>";

                // Exibe os outros campos que o aluno adicionar
                foreach ($_POST as $campo => $valor) {
                    if (!in_array($campo, ["nome", "email", "pagamento"])) {
                        echo "<p><strong>" . ucfirst($campo) . ":</strong> " . htmlspecialchars($valor) . "</p>";
                    }
                }
            } else {
                echo "<p>Nenhum dado foi enviado.</p>";
            }
            ?>
        </div>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2025 LGames - Todos os direitos reservados</p>
    </footer>

</body>

</html>