<?php

namespace Tests\Sample;

use ByJG\Serialize\BaseModel;

/**
 * @Xmlnuke:NodeName ModelPropertyPatternConstruct
 */
class ModelPropertyPatternConstruct extends BaseModel
{

    protected $_birth_date = "";

    function __construct($object = null)
    {
        $this->setPropertyPattern(null, null);
        parent::__construct($object);
    }


    public function getBirth_date()
    {
        return $this->_birth_date;
    }

    public function setBirth_date($birth_date)
    {
        $this->_birth_date = $birth_date;
    }


}
