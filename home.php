<?php

include'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Bem vindo a Livraria</h3>
<H2>O que deseja fazer?</H2>
<?php
    include 'connect.php';
?>
            <table>
                <tr>
                    <td>
                        Deseja cadastrar um livro?: 
                        <button a href="teste.php" class="text-center"  type="submit" class="btn btn-primary btn-block" name="Cadastar livro"> Cadastrar livro</button>

                    </td>
                </tr>

                <tr>
                    <td>
                        Deseja alugar um livro?: 
                        <button type="submit" class="btn btn-primary btn-block" name="Alugar livro"> Alugar Livro</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        Deseja alterar informações do livro?: 
                            <button type="submit" class="btn btn-primary btn-block" name="Alterar informações"> Alterar informações</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        Deseja excluir um livro?: 
                        <button type="submit" class="btn btn-primary btn-block" name="Excluir livro"> Excluir livro</button>
                    </td>
                </tr>

                <tr>
                    <td>
                        Deseja excluir um livro?: 
                        <input type="text" name="Excluir livro">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                    </td>
                </tr>


            
            </table>
        </form>   
</body>
</html>