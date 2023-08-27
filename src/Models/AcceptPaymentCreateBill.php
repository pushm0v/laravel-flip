<?php

namespace QuetzalStudio\Flip\Models;

use Illuminate\Contracts\Support\Arrayable;

class AcceptPaymentCreateBill implements Arrayable
{
    protected string $title;

    protected string $type;

    protected int $amount;

    protected string $expiredDate;

    protected string $redirectUrl;

    protected int $isAddressRequired;
    protected int $isPhoneNumberRequired;
    protected int $step;
    protected string $senderName;
    protected string $senderEmail;
    protected string $senderPhoneNumber;
    protected string $senderAddress;
    protected string $senderBank;
    protected string $senderBankType;

    public function __construct(
        $title,
        $amount,
        $type='SINGLE',
        $expiredDate = '',
        $redirectUrl = '',
        $isAddressRequired = 0,
        $isPhoneNumberRequired = 0,
        $step = 0,
        $senderName = '',
        $senderEmail = '',
        $senderPhoneNumber = '',
        $senderAddress = '',
        $senderBank = '',
        $senderBankType = ''
    ) {
        $this->title = $title;
        $this->type = $type;
        $this->amount = $amount;
        $this->expiredDate = $expiredDate;
        $this->redirectUrl = $redirectUrl;
        $this->isAddressRequired = $isAddressRequired;
        $this->isPhoneNumberRequired = $isPhoneNumberRequired;
        $this->step = $step;
        $this->senderName = $senderName;
        $this->senderEmail = $senderEmail;
        $this->senderPhoneNumber = $senderPhoneNumber;
        $this->senderAddress = $senderAddress;
        $this->senderBank = $senderBank;
        $this->senderBankType = $senderBankType;
    }

    public function toArray()
    {
        return [
            "title" => $this->title,
            "amount" => $this->amount,
            "type" => $this->type,
            "expired_date" => $this->expiredDate,
            "redirect_url" => $this->redirectUrl,
            "is_address_required" => $this->isAddressRequired,
            "is_phone_number_required" => $this->isPhoneNumberRequired,
            "step" => $this->step,
            "sender_name" => $this->senderName,
            "sender_email" => $this->senderEmail,
            "sender_phone_number" => $this->senderPhoneNumber,
            "sender_address" => $this->senderAddress,
            "sender_bank" => $this->senderBank,
            "sender_bank_type" => $this->senderBankType,
        ];
    }
}
