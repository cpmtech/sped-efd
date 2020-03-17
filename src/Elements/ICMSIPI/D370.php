<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D370 extends Element implements ElementInterface
{
    const REG = 'D370';
    const LEVEL = 5;
    const PARENT = '';

    protected $parameters = [
        'COD_MUN_ORIG' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município de origem do serviço, conforme a tabela IBGE',
            'format'   => ''
        ],
        'VL_SERV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total da prestação de serviço',
            'format'   => '15v2'
        ],
        'QTD_BILH' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade de bilhetes emitidos',
            'format'   => ''
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS',
            'format'   => '15v2'
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
