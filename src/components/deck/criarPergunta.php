<form method="post" action="criarPergunta?id=<?php echo $id; ?>">
    <label class="text-white"> Pergunta:
    <input type="text" name="pergunta" required>
    </label>
    <label class="text-white"> Resposta:
    <input type="text" name="resposta" required>
    </label>
    <input type="submit" value="Criar">
</form>
