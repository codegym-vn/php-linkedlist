<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/26/2018
 * Time: 2:24 AM
 */

class Node
{
    /* Node data */
    public $data;

    /* Link to next node */
    public $next;

    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }

    function readNode()
    {
        return $this->data;
    }
}