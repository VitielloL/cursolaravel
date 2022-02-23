@extends('property.master')

@section('content')

<h1>Formulario de Edição :: Imóveis</h1>

<?php
    $property = $property[0];
?>
<form action="<?= url('/imoveis/update',['id' => $property -> id]);?>" method="post">

<?= csrf_field(); ?>
<?= method_field('PUT');?>

    <label for="">Título do Imóvel</label>
    <input type="text" name="title" id="title" value="<?= $property->title;?>">
    <br/>

    <label for="title"> Descrição </label>
    <textarea name="descricao" id="descricao" cols="30" rows="10" ><?= $property->descricao;?></textarea>

    <br/>

    <label for="">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price;?>">

    <br/>

    <label for="">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price;?>">

    <br/>

    <button type="submit"> Editar Imóvel</button>

</form>

@endsection
