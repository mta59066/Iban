<?php

namespace IBAN\Rule\DE;

class Rule001100 extends \IBAN\Rule\DE\Rule000000
{    
    protected $bankAccountSubstitutions = array(
        "1000" =>    "8010001"
        , "47800" => "47803"
    );
}
