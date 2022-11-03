<main>

    <h2 class="text-center">Cadastro de novo colaborador</h2>

    <form method="post">

        <div class="form-floating mt-3">
            <input name="nome" class="form-control" type="text" id="floatingInput">
            <label for="floatingInput">Nome</label>
        </div>

        <div class="form-floating mt-3">
            <input name="funcao" class="form-control" type="text" id="floatingInput">
            <label for="floatingInput">Função</label>
        </div>

        <div class="form-floating mt-3">
            <input name="setor" class="form-control" type="text" id="floatingInput">
            <label for="floatingInput">Setor</label>
        </div>

        <div class="form-floating mt-3">
            <input name="email" class="form-control" type="email" id="floatingInput">
            <label for="floatingInput">Email</label>
        </div>

        <div class="form-group mt-3">
            
            <label for="status">Status:</label>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="s" checked> Ativo
                </label>
            </div>

            <div class="form-check form-check-inline">
                <label class="form-control">
                    <input type="radio" name="ativo" value="n"> Inativo
                </label>
            </div>
        </div>
        
        <hr>

        <div class="form-group mt-4">

            <button class="btn btn-success me-2" type="submit">Cadastrar</button>
            
            <a href="index.php">
                <button class="btn btn-danger" type="submit">Voltar</button>
            </a>
        </div>
    </form>
</main>