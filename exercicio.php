<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat&family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&family=Raleway&family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets\css\estilo.css">
        <link rel="stylesheet" href="assets\css\exercicio.css">
    <title>Exercicio</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Visualização dos Exercícios</h2>
    </header>
    <nav class="navegacao">
        <a href=<?= "/{$_GET['dir']}/{$_GET['file']}.php" ?> class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">voltar</a>
    </nav>
    <main class="principal">
       <div class="conteudo">
            <?php 
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
       </div>>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS © <?= date('Y'); ?> 
    </footer>
</body>
</html>