<?php

namespace QuetzalStudio\Flip\Factories;

use QuetzalStudio\Flip\Models\AcceptPaymentCreateBill;
use QuetzalStudio\Flip\Models\MoneyTransfer;

class AcceptPaymentCreateBillFactory
{
    public static function make(array $attributes)
    {
        return new AcceptPaymentCreateBill(
            data_get($attributes, 'title'),
            data_get($attributes, 'amount'),
            data_get($attributes, 'type', 'SINGLE'),
            data_get($attributes, 'expired_date', ''),
            data_get($attributes,"redirect_url", ''),
            data_get($attributes,"is_address_required", 0),
            data_get($attributes,"is_phone_number_required", 0),
            data_get($attributes,"step", 0),
            data_get($attributes,"sender_name" , ''),
            data_get($attributes,"sender_email", ''),
            data_get($attributes,"sender_phone_number", ''),
            data_get($attributes,"sender_address", ''),
            data_get($attributes,"sender_bank", ''),
            data_get($attributes,"sender_bank_type", ''),
        );
    }
}
