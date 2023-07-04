<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Updates the default bank account for a recipient
 */
class UpdateRecipientBankAccountRequest implements JsonSerializable
{
    /**
     * Bank account
     * @required
     * @maps bank_account
     * @var \PlugHacker\PlugAPILib\Models\CreateBankAccountRequest $bankAccount public property
     */
    public $bankAccount;

    /**
     * Constructor to set initial or default values of member properties
     * @param CreateBankAccountRequest $bankAccount Initialization value for $this->bankAccount
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->bankAccount = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['bank_account'] = $this->bankAccount;

        return $json;
    }
}
