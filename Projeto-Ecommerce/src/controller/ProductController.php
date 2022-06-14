<?php

    declare (strict_types = 1);

    namespace App\controller;

    use App\Connection\Database;

    class ProductController extends AbstractController
    {

        public function listAction(): void
        {
            $conn = Database::getDBConnection();

            $result = $conn->prepare("SELECT * FROM tb_product;");
            $result->execute();

            parent::render("product/list", $result);
        }

        public function addAction(): void
        {
            parent::render("product/add");
        }

        public function editAction(): void
        {
            parent::render("product/edit");
        }

        public function delAction(): void
        {
            parent::render("product/del");
        }

    }