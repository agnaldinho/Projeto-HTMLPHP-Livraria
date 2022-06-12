<?php
include 'connect.php';
    $nomeLivro=$_POST['nomeLivro'];
    $nomeAutor=$_POST['nomeAutor'];
    $editor=$_POST['editor'];
    $preco=$_POST['preco'];
    $quantidade=$_POST['quantidade'];
    $dataLancamento=$_POST['dataLancamento'];
if(empty($nomeLivro))
    echo "<script>alert('Falta preencher o nome do livro')</script>";
else if(empty($nomeAutor))
    echo "<script>alert('Falta preencher o nome do autor')</script>";
else if(empty($editor))
    echo "<script>alert('Falta preencher o nome da editora')</script>";
else if(empty($preco))
    echo "<script>alert('Falta preencher o preço')</script>";
else if(empty($quantidade))
    echo "<script>alert('Falta preencher a quantidade')</script>"; 
else if(empty($dataLancamento))
    echo "<script>alert('Falta preencher a data de lançamento')</script>";
else
{
    $sql= "insert into cadastrolivro (nomeLivro, nomeAutor, editor, preco, quantidade, dataLancamento) values ('$nomeLivro','$nomeAutor','$editor',$preco, $quantidade, '$dataLancamento');";
    $res= $con->query($sql);  
    echo "<script>alert('Foi realizado o cadastro');</script>";
    echo "<script>window.location.href('index.php');</script>";

}




/* if(mysqli_query($con, $sql))
{
    
    echo "<script>window.location('index.php')</script>";
}
else
{
    echo "<script>alert('Não foi realizado o cadastro')</script>";
    header('location: cadastrolivro.php');
} */
?>