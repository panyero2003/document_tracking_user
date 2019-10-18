<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function source()
    {
        return $this->belongsTo('App\Source','pbosource_id');
    }

    public function status()
    {
        return $this->belongsTo('App\Status','bacstatus_id');
    }

    public function claimant()
    {
        return $this->belongsTo('App\Claimant','claimant_id');
    }

    public function statuss()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function acc_status()
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
