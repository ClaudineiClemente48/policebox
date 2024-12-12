<?php
class Produto {
    public function ListarProdutos($limite = '') {
        $conn = new PDO('mysql:host=localhost;dbname=db_policebox','root','');  /*biblioteca de criar banco*/

        if ($limite != ''){
            $aux = ' ORDER BY RAND() LIMIT ' . $limite;
        } else {
            $aux = '';
        }

        $query = 'SELECT * FROM tb_produto' . $aux;

        $resultado = $conn->query($query)->fetchALL();

        return $resultado;
    }

    public function ConsultarProduto($idConsulta){

        $conn = new PDO('mysql:host=localhost;dbname=db_policebox','root','');/*nome do banco de dados*/ 

        $query ='SELECT * FROM tb_produto WHERE id = ' . $idConsulta;

        $resultado = $conn->query($query)->fetch();

        return $resultado;

    }

}

?>