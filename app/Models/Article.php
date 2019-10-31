<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','contenu'];

    public function user(){
        // utilise la fonction," belongsTo,
        //     1er argument : chemin vers le model souhaitez lié.
        //     2nd argument : ce que l'ont souhaite lié dans notre model actuel
        //     3rd argument : ce que l'ont souhaite lié dans le model ciblé, non necessaire selon les situations "
        return $this->belongsTo('App\user','author_id');
    }
}
