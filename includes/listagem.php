<?php

    $resultado = '';

    foreach($colaboradores as $colab){

        $resultado .= '<tr class="table-light">
                        <td>'. $colab->id .'</td>
                        <td>'. $colab->nome .'</td>
                        <td>'. $colab->funcao .'</td>
                        <td>'. $colab->setor .'</td>
                        <td>'. $colab->email .'</td>
                        <td>'. $colab->ativo .'</td>
                        <td>'. date('Y-m-d', strtotime($colab->data)).'</td>
                        <td class="text-center">
                            <a href="">
                                <button class="btn btn-warning">Alterar</button>
                            </a>
                            <a href="">
                                <button class="btn btn-danger">Excluir</button>
                            </a>
                        </td>
                    </tr>';

    }

?>

<main>
    <section>
        <a href="cadastrar.php" class="">
            <button class="btn btn-success">Novo Colaborador</button>
        </a>
    </section>

    <hr>

    <section>
        
        <table class='table'>
            <tr class='table-secondary'>
                <th scope='col'>ID</th>
                <th scope='col'>NOME</th>
                <th scope='col'>FUNÇÃO</th>
                <th scope='col'>SETOR</th>
                <th scope='col'>EMAIL</th>
                <th scope='col'>STATUS</th>
                <th scope='col'>DATA</th>
                <th scope='col' class="text-center">OPÇÃO</th>
            </tr>
            <?=$resultado?>
        </table>

    </section>

</main>