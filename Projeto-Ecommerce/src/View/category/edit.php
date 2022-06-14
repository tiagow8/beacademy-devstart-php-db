    <h4 class="alert alert-dark text-center mt-5">Editar Categorias.</h4>
    <form action="" method="post">
        <div class="mb-4">
            <label for="cat" class="mb-2">Categoria:</label>
            <input type="text" value="<?php echo $data['name']; ?>" name="category" id="cat" class="form-control" placeholder="digite uma categoria" require/>
        </div>
        <div class="mb-4">
            <label for="desc" class="mb-2">Descrição:</label>
            <textarea name="description" id="desc" class="form-control" placeholder="descreva a categoria" require><?php echo $data['description']; ?></textarea>
        </div>
        <div>
            <button class="btn btn-outline-dark btn-sm">Editar Descrição</button>
        </div>
    </form>