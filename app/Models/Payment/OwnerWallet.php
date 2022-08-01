<?php

namespace App\Models\Payment;

use App\Base\Uuid\UuidModel;
use Illuminate\Database\Eloquent\Model;

class OwnerWallet extends Model
{
    use UuidModel;

    protected $fillable = [ 'user_id', 'amount_added', 'amount_balance', 'amount_spent'];

    public function owner()
    {
        return $this->belongsTo(Owner::class, 'user_id', 'id');
    }
}
