<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria'=> 'Tenis']);
        $cat->save();                                                                   
        $prod = new \App\Models\Produto(['nome' => 'Tenis Adidas preto', 'valor' => 199.59, 'foto' =>'images/produto1.png', 'descricao'=>'', 'categoria_id'=> $cat->id]);
        $prod->save();
        $prod2 = new \App\Models\Produto(['nome' => 'Tenis Asics preto', 'valor' => 259.59, 'foto' =>'images/produto2.png', 'descricao'=>'', 'categoria_id'=> $cat->id]);
        $prod2->save();
        $prod3 = new \App\Models\Produto(['nome' => 'Tenis Asics rosa', 'valor' => 159.99, 'foto' =>'images/produto3.png', 'descricao'=>'', 'categoria_id'=> $cat->id]);
        $prod3->save();
        $cat2 = new \App\Models\Categoria(['categoria'=> 'Chinelos']);
        $cat2->save();                                                                   
        $prod4 = new \App\Models\Produto(['nome' => 'Chinelo Catargo', 'valor' => 39.59, 'foto' =>'images/produto4.png', 'descricao'=>'', 'categoria_id'=> $cat2->id]);
        $prod4->save();
        $prod5 = new \App\Models\Produto(['nome' => 'Chinelo Catargo', 'valor' => 59.59, 'foto' =>'images/produto5.png', 'descricao'=>'', 'categoria_id'=> $cat2->id]);
        $prod5->save();
        $cat3 = new \App\Models\Categoria(['categoria'=> 'Botas']);
        $cat3->save();                                                                   
        $prod6 = new \App\Models\Produto(['nome' => 'Bota Adventure', 'valor' => 99.99, 'foto' =>'images/produto6.png', 'descricao'=>'', 'categoria_id'=> $cat3->id]);
        $prod6->save();
        $prod7 = new \App\Models\Produto(['nome' => 'Bota Cat', 'valor' => 243.98, 'foto' =>'images/produto7.png', 'descricao'=>'', 'categoria_id'=> $cat3->id]);
        $prod7->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
