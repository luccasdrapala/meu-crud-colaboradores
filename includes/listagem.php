<?php

    $resultado = '';

    foreach($colaboradores as $colab){

        $resultado .= '<tr class="table-light">
                            <td>'. $colab->id .'</td>
                            <td>'. $colab->nome .'</td>
                            <td>'. $colab->funcao .'</td>
                            <td>'. $colab->setor .'</td>
                            <td>'. $colab->email .'</td>
                            <td>'. ($colab->ativo == 's' ? "Ativo" : "Inativo") .'</td>
                            <td>'. date('Y-m-d', strtotime($colab->data)).'</td>
                            <td class="text-center">
                                <a href="alterar.php?id='.$colab->id.'">
                                    <button class="btn btn-warning">Alterar</button>
                                </a>
                                <a href="excluir.php?id='.$colab->id.'">
                                    <button class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultado = strlen($resultado) ? $resultado : '<tr>
                                                        <td colspan="8" class="text-center">
                                                            Nenhum funcionário encontrado
                                                        </td>
                                                     </td>';

    $status = '';

    if(isset($_GET['status'])){

        switch($_GET['status']){

            case 'success' :
                $status = '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Operação Efetuada!</strong> Operação efetuada com sucesso.
                </div>';
                break;
            
            case 'error' :
                $status = '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Operação Inválida</strong> Operação não pode ser validada.
                </div>';
                break;
        }
    }
?>

<main>

    <?=$status?>

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