<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = array('categories_id','libelle','prix');
    public static $rules =array(
        'libelle'=>'required|min:3',
        'prix'=>'required|numeric'
    );
    public function categories()
    {
        return $this->belongsTo('App\Categorie');
    }
    public function commandes()
    {
        return $this->hasmany('App\Commande');
    }
}
