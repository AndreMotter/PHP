<?php 
    include '../conecta/conecta.php';        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
</head>

<table class="table table-striped">
<thead class="table-dark">
    <tr>
        <td>Codigo Despesa</td>
        <td>Descrição Despesa</td>
        <td>Nome do grupo despesa</td>
        <td></td>
    </tr>
 </thead>
<tbody>

<?php $consulta = $con->query("select * from despesas d inner join grupo_despesa g on (d.codigo_grupo_despesa = g.codigo_grupo_despesa)");
         while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
         echo
         '<tr>
            <td>' . $registro->codigo_despesa.'</td>
            <td>' . $registro->descricao_despesa.'</td>
            <td>' . $registro->nome_grupo_despesa.'</td>' 
        
         ?>

         <td> 
             <a href="despesas_excluir.php?id= <?php echo  $registro->codigo_despesa; ?>"><i class="bi bi-trash-fill" style="color: red"></i>
             <a class="ps-2" href=""><i class="bi bi-pencil-square" style="color: blue"></i>
         </td>
     <?php
         echo '</tr>';   
     } ?>

</tbody>

</table>
<br>

<a href="../fornecedores/fornecedores.php" class="btn btn-primary"> Voltar </a>