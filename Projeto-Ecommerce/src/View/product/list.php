<div class="container">
    <table class="table table-hover mt-5">
    <h4 class="alert alert-dark text-center mt-5">Lista de Produtos disponíveis.</h4>
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Produto</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th colspan="2">Criação</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($product = $data->fetch(\PDO::FETCH_ASSOC)){

                    extract($product);

                    echo "<tr>
                            <td>{$id}</td>
                            <td>{$name}</td>
                            <td>{$description}</td>
                            <td>{$price}</td>
                            <td>{$quantity}un.</td>
                            <td>{$created_at}</td>
                            <td>
                            <button type='button' class='btn btn-outline-light' data-bs-toggle='modal' data-bs-target='#JanelaModal{$id}'/>
                            <img src='{$photo}' width='120' title='{$name}'/></button></td>
                        </tr>
                        <div id='JanelaModal{$id}' class='modal' tabindex='-1' role='dialog'>
                                    <div class='modal-dialog modal-lg' role='document'>
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                                <h5 class='modal-title'><strong>{$name}</strong></h5>
                                                <button type='button' class='close btn btn-dark' data-bs-dismiss='modal' aria-label='Close'>
                                                <span aria-hidden='true'>&times;</span>
                                                </button>
                                            </div>
                                            <div class='modal-body'>
                                                <img src='{$photo}'/>
                                            </div>
                                        </div>
                                    </div>
                            </div>";

                }
            ?>
        </tbody>
    </table>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>