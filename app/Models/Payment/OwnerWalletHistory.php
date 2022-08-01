<?php

namespace App\Models\Payment;

use App\Base\Uuid\UuidModel;
use Illuminate\Database\Eloquent\Model;

class OwnerWalletHistory extends Model
{
    use UuidModel;

    protected $fillable = ['user_id', 'card_id', 'transaction_id', 'amount','conversion','merchant','admin_id','request_id','remarks','is_credit'];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'id');
    }
}
