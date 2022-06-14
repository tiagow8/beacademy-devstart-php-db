    <table class="table table-hover table-stripped">
        <h4 class="alert alert-dark text-center mt-5">Listar todas as categorias existentes.</h4>
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Categoria</th>
                <th colspan="2">Descrição</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($category = $data->fetch(\PDO::FETCH_ASSOC)){

                    extract($category);

                    echo "<tr>
                            <td>{$id}</td>
                            <td>{$name}</td>
                            <td>{$description}</td>
                            <td>
                                <a href='/categorias/editar?id={$id}' class='btn btn-outline-success btn-sm'>Editar</a>
                                <a href='/categorias/remover?id={$id}' class='btn btn-outline-danger btn-sm'>Excluir</a>
                            </td>
                        </tr>";

                }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">&nbsp;</td>
                <td>
                    <a href="/categorias/novo" class="btn btn-outline-dark btn-sm">Adicionar</a>
                </td>
            </tr>
        </tfoot>
    </table>