@extends('property.master')

@section('content')
<div class="container my-4">
<h1>Formulario de Edição :: Imóveis</h1>

<?php
    $property = $property[0];
?>
<form action="<?= url('/imoveis/update',['id' => $property -> id]);?>" method="post">

<?= csrf_field(); ?>
<?= method_field('PUT');?>

<div class="mb-3">
    <label for="">Título do Imóvel</label>
    <input type="text" name="title" id="title" value="<?= $property->title;?>" class="form-control">
</div>

<div class="mb-3">
    <label for="title"> Descrição </label>
    <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control" ><?= $property->descricao;?></textarea>
</div>

<div class="mb-3">
    <label for="">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price;?>" class="form-control">
</div>

<div class="mb-3">
    <label for="">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price;?>" class="form-control">
</div>

    <button type="submit" class="btn btn-primary text-white"> Editar Imóvel</button>

</form>
</div>
@endsection
