<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseRequest extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Source','pbosource_id');
    }

    public function bac_status()
    {
        return $this->belongsTo('App\Status','bacstatus_id');
    }

    public function budget_status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function acstatus()
    {
        return $this->belongsTo('App\Status','pacctostatus_id');
    }

    public function pto_status()
    {
        return $this->belongsTo('App\Status','ptostatus_id');
    }

    public function pgo_status()
    {
        return $this->belongsTo('App\Status','pgostatus_id');
    }


    
}
