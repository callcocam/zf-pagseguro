<?php
/**
 * Created by PhpStorm.
 * User: Claudio
 * Date: 18/11/2016
 * Time: 21:26
 */

namespace PagSeguro\View\Helper;


use PagSeguro\Services\PagSeguroData;
use Zend\View\Helper\AbstractHelper;

class PagSeguroHelper extends AbstractHelper{
    /**
     * @var
     */
    private $pagSeguroData;

    /**
     * @param PagSeguroData $pagSeguroData
     */
    function __construct(PagSeguroData $pagSeguroData)
    {
         $this->pagSeguroData = $pagSeguroData;
    }

    /**
     * @return mixed
     */
    public function getPagSeguroData()
    {
        return $this->pagSeguroData;
    }



}