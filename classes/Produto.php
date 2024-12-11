<?php
class Produto {
    public function ListarProdutos() {
        $conn = new PDO('mysql:host=localhost;dbname=db_policebox','root','');  /*biblioteca de criar banco*/

        $query = 'SELECT * FROM tb_produto ORDER BY RAND()LIMIT 8';

        $resultado = $conn->query($query)->fetchALL();

        return $resultado;
    }

}

?>