<section>
    <form method="post">
        <div class="form-group">
            <p>Tem certeza que deseja excluir o colaborador <strong><?=$colaborador->nome?> ?</strong></p>
        </div>
        <div class="form-group">
            <button class="btn btn-success" name="excluir" type="submit">Excluir Registro</button>

            <a href="index.php">
                <button class="btn btn-warning">Cancelar</button>
            </a>
        </div>
    </form>
</section>