<?php


namespace Dandomain\Xml\Variant;


use Dandomain\Xml\Element;

class Variant extends Element
{
    /**
     * @var null
     */
    protected $variantText;

    /**
     * @var int
     */
    protected $variantSort;

    public function __construct($variantText = null, $variantSort = 0)
    {
        $this->variantText = $variantText;
        $this->variantSort = $variantSort;
    }

    /**
     * @return string
     */
    public function getXml()
    {
        $xml = '<VARIANT>';
        if ($this->variantText) {
            $xml .= '<VAR_TEXT>' . $this->variantText . '</VAR_TEXT>';
        }
        $xml .= '<VAR_SORT>' . $this->variantSort . '</VAR_SORT>';
        $xml .= '</VARIANT>';
        return $xml;
    }
}