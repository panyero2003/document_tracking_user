<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    public function department()
    {
    	return $this->belongsTo('App\Department','dep_id');
    }

    public function voucher_department()
    {
        return $this->belongsTo('App\Department','voucher_id');
    }


    public function contractor()
    {
    	return $this->belongsTo('App\SupplierContractor','const_id');
    }

    public function claimant()
    {
    	return $this->belongsTo('App\Claimant','claimant_id');
    }

    public function pbo_status()
    {
        return $this->belongsTo('App\Status','pbostatus_id');
    }

    public function accounting_status()
    {
        return $this->belongsTo('App\Status','pacctostatus_id');
    }

    public function treas_status()
    {
        return $this->belongsTo('App\Status','ptostatus_id');
    }

    public function pgo_status()
    {
        return $this->belongsTo('App\Status','pgostatus_id');
    }
}
