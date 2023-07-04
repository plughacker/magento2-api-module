<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Payment Authentication response
 */
class GetPaymentAuthenticationResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $type public property
     */
    public $type;

    /**
     * 3D-S payment authentication response
     * @required
     * @maps threed_secure
     * @var \PlugHacker\PlugAPILib\Models\GetThreeDSecureResponse $threedSecure public property
     */
    public $threedSecure;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $type         Initialization value for $this->type
     * @param GetThreeDSecureResponse $threedSecure Initialization value for $this->threedSecure
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->type         = func_get_arg(0);
            $this->threedSecure = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['type']          = $this->type;
        $json['threed_secure'] = $this->threedSecure;

        return $json;
    }
}
