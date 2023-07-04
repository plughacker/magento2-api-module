<?php
/*
 * PlugAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace PlugHacker\PlugAPILib\Models;

use JsonSerializable;

/**
 *Object used for returning lists of objects with pagination
 */
class PagingResponse implements JsonSerializable
{
    /**
     * Total number of pages
     * @required
     * @var integer $total public property
     */
    public $total;

    /**
     * Previous page
     * @required
     * @var string $previous public property
     */
    public $previous;

    /**
     * Next page
     * @required
     * @var string $next public property
     */
    public $next;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $total    Initialization value for $this->total
     * @param string  $previous Initialization value for $this->previous
     * @param string  $next     Initialization value for $this->next
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->total    = func_get_arg(0);
            $this->previous = func_get_arg(1);
            $this->next     = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize(): mixed
    {
        $json = array();
        $json['total']    = $this->total;
        $json['previous'] = $this->previous;
        $json['next']     = $this->next;

        return $json;
    }
}
