@extends('property.master')

@section('content')

<h1>Pagina Single</h1>

<?php

    if(!empty($property)){
        foreach($property as $prop){
            ?>

            <h2>Título do Imovel: <?= $prop -> title; ?></h2>

            <p>Descrição: <?= $prop -> descricao; ?></p>

            <p>Valor de Locação: <?= number_format($prop->rental_price,2,',','.') ?></p>

            <p>Valor de Venda <?= number_format($prop->sale_price,2,',','.') ?></p>

            <?php

        }
    }

    ?>

@endsection

