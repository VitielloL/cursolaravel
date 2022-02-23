<h1>Formulario de Cadastro :: Imóveis</h1>

<form action="<?= url('/imoveis/store');?>" method="post">

<?= csrf_field(); ?>

    <label for="">Título do Imóvel</label>
    <input type="text" name="title" id="title">
    <br/>

    <label for="title"> Descrição </label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

    <br/>

    <label for="">Valor de Locação</label>
    <input type="text" name="rental_price" id="rental_price">

    <br/>

    <label for="">Valor de Compra</label>
    <input type="text" name="sale_price" id="sale_price">

    <br/>

    <button type="submit"> Cadastrar Imóvel</button>

</form>
