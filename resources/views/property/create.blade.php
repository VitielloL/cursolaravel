@extends('property.master')

@section('content')
<div class="container my-4">
<h1>Formulario de Cadastro :: Imóveis</h1>

<form action="<?= url('/imoveis/store');?>" method="post">

<?= csrf_field(); ?>

    <div class="mb-3">
        <label for="">Título do Imóvel</label>
        <input type="text" name="title" id="title" class="form-control">
    </div>


    <div class="mb-3">
        <label for="title"> Descrição </label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label for="">Valor de Locação</label>
        <input type="text" name="rental_price" id="rental_price" class="form-control">
    </div>

    <div class="mb-3">
        <label for="">Valor de Compra</label>
        <input type="text" name="sale_price" id="sale_price" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary text-white"> Cadastrar Imóvel</button>

</form>
</div>
@endsection
