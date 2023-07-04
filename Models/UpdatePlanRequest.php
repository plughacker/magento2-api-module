<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Request for updating a plan
 */
class UpdatePlanRequest implements JsonSerializable
{
    /**
     * Plan's name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Number os installments
     * @required
     * @var array $installments public property
     */
    public $installments;

    /**
     * Text that will be shown on the credit card's statement
     * @required
     * @maps statement_descriptor
     * @var string $statementDescriptor public property
     */
    public $statementDescriptor;

    /**
     * Currency
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Interval
     * @required
     * @var string $interval public property
     */
    public $interval;

    /**
     * Interval count
     * @required
     * @maps interval_count
     * @var integer $intervalCount public property
     */
    public $intervalCount;

    /**
     * Payment methods accepted by the plan
     * @required
     * @maps payment_methods
     * @var array $paymentMethods public property
     */
    public $paymentMethods;

    /**
     * Billing type
     * @required
     * @maps billing_type
     * @var string $billingType public property
     */
    public $billingType;

    /**
     * Plan status
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * Indicates if the plan is shippable
     * @required
     * @var bool $shippable public property
     */
    public $shippable;

    /**
     * Billing days accepted by the plan
     * @required
     * @maps billing_days
     * @var array $billingDays public property
     */
    public $billingDays;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Minimum price
     * @maps minimum_price
     * @var integer|null $minimumPrice public property
     */
    public $minimumPrice;

    /**
     * Number of trial period in days, where the customer will not be charged
     * @maps trial_period_days
     * @var integer|null $trialPeriodDays public property
     */
    public $trialPeriodDays;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $name                Initialization value for $this->name
     * @param string  $description         Initialization value for $this->description
     * @param array   $installments        Initialization value for $this->installments
     * @param string  $statementDescriptor Initialization value for $this->statementDescriptor
     * @param string  $currency            Initialization value for $this->currency
     * @param string  $interval            Initialization value for $this->interval
     * @param integer $intervalCount       Initialization value for $this->intervalCount
     * @param array   $paymentMethods      Initialization value for $this->paymentMethods
     * @param string  $billingType         Initialization value for $this->billingType
     * @param string  $status              Initialization value for $this->status
     * @param bool    $shippable           Initialization value for $this->shippable
     * @param array   $billingDays         Initialization value for $this->billingDays
     * @param array   $metadata            Initialization value for $this->metadata
     * @param integer $minimumPrice        Initialization value for $this->minimumPrice
     * @param integer $trialPeriodDays     Initialization value for $this->trialPeriodDays
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->name                = func_get_arg(0);
            $this->description         = func_get_arg(1);
            $this->installments        = func_get_arg(2);
            $this->statementDescriptor = func_get_arg(3);
            $this->currency            = func_get_arg(4);
            $this->interval            = func_get_arg(5);
            $this->intervalCount       = func_get_arg(6);
            $this->paymentMethods      = func_get_arg(7);
            $this->billingType         = func_get_arg(8);
            $this->status              = func_get_arg(9);
            $this->shippable           = func_get_arg(10);
            $this->billingDays         = func_get_arg(11);
            $this->metadata            = func_get_arg(12);
            $this->minimumPrice        = func_get_arg(13);
            $this->trialPeriodDays     = func_get_arg(14);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['name']                 = $this->name;
        $json['description']          = $this->description;
        $json['installments']         = $this->installments;
        $json['statement_descriptor'] = $this->statementDescriptor;
        $json['currency']             = $this->currency;
        $json['interval']             = $this->interval;
        $json['interval_count']       = $this->intervalCount;
        $json['payment_methods']      = $this->paymentMethods;
        $json['billing_type']         = $this->billingType;
        $json['status']               = $this->status;
        $json['shippable']            = $this->shippable;
        $json['billing_days']         = $this->billingDays;
        $json['metadata']             = $this->metadata;
        $json['minimum_price']        = $this->minimumPrice;
        $json['trial_period_days']    = $this->trialPeriodDays;

        return $json;
    }
}
