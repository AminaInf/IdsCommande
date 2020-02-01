<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = array('user_id','articles_id','date','team','num_com','entete','specialite','nom',
                                 'contact','adress','im_crea','image','date_livraison','etat');
    public static $rules =array(
        'user_id'=>'required|bigInteger',
        'articles_id'=>'required|integer',
        'contact'=>'required|min:9'
    );
    public function users()
    {
        return $this->belongsTo('App\User');
    }
    public function articles()
    {
        return $this->belongsTo('App\Article');
    }
}
