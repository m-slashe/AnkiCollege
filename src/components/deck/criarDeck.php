<form method="post" action="criarDeck">
    <label class="text-white" for="nome"> Nome: </label>
    <input type="text" name="nome" id="nome" required>
    <label class="text-white" for="categoria"> Categoria: </label>
    <select name="categoria" id="categoria">
        <?php
            foreach ($categorias as $categoria) {
                $id = $categoria['categoriaId'];
                $nome = $categoria['nome'];
                echo "<option value = $id>$nome</option>";
            }
        ?>
    </select>
    <input type="submit" value="Criar">
</form>
