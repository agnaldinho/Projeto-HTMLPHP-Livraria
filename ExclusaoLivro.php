<?php

    if(!empty($_GET['idLivro']))
    {
        include_once('connect.php');

        $idLivro = $_GET['idLivro'];

        $sqlSelect = "select * from cadastrolivro WHERE idLivro=$idLivro";

        $result = $con->query($sqlSelect);
        try
        {
            if($result->num_rows > 0)
            {
                throw new \exception("Precisa excluir os livros alugados primeiro",1);
                $sqlDelete = "delete from cadastroLivro where idLivro=$idLivro;";
                $resultDelete = $con->query($sqlDelete);
            }
        }catch(\exception $e)
        {
            echo "<pre>";
            print_r($e->getMessage());
            echo "</pre>"; 
            header('Location: excluirlivro.php');
            exit;
        }
        
    }
  
   
?>




