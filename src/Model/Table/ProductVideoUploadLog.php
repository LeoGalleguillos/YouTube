<?php
namespace LeoGalleguillos\YouTube\Model\Table;

use Zend\Db\Adapter\Adapter;

class ProductVideoUploadLog
{
    /**
     * @var Adapter
     */
    protected $adapter;

    public function __construct(
        Adapter $adapter
    ) {
        $this->adapter   = $adapter;
    }
}
