// n esta sendo utilizado esse arquivo.
<?php if(isset($texto)) : ?>
<h2>Confirmar exclusão</h2>
<p>Você tem certeza que deseja excluir o texto?</p>
<a href="../controller/TextosController.php?acao=excluir&id=<?= $texto["id"] ?>">Sim, excluir</a>
&nbsp;|&nbsp;
<a href="../controller/TextosController.php">Voltar</a>
<?php else : ?>
    <p>Texto não encontrado.</p>
<?php endif; ?>
