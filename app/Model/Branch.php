<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table ='finance_assets_branches';
    protected $guarded=[];

    public function company_details(){
        return $this->belongsTo('App\Company','comp_id');
    }
}
