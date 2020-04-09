<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class emp_mast extends Model
{
    protected $table = 'emp_mast';
    protected $guarded = [];

    public function department(){
    	return $this->belongsTo('App\Model\Department', 'dept_id');
    }

    public function designation(){
    	return $this->belongsTo('App\Model\Designation', 'desg_id');
    }

    public function grade(){
    	return $this->belongsTo('App\Model\Grade','grade_id','id');
    }

    public function company(){
    	return $this->belongsTo('App\Model\company', 'comp_id','id');
    }

    // public function user(){
    //     return $this->belongsTo('App\TourRequest','user_id','id');
    // }
    public function branch_details(){
        return $this->belongsTo('App\Model\Branch','branch_id','id');
    }


}
