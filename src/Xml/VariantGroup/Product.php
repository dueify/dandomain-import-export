<?php


namespace Dandomain\Xml\VariantGroup;


use Dandomain\Xml\Element;

class Product extends Element
{
    /**
     * @var null
     */
    protected $advancedVariantText;

    /**
     * @var int
     */
    protected $relatedProductNumber;

    public function __construct($advancedVariantText = null, $relatedProductNumber = null)
    {
        $this->advancedVariantText = $advancedVariantText;
        $this->relatedProductNumber = $relatedProductNumber;
    }

    /**
     * @return string
     */
    public function getXml()
    {
        $xml = '<PRODUCT>';
        if ($this->advancedVariantText) {
            $xml .= '<ADV_VAR_TEXT>' . $this->advancedVariantText . '</ADV_VAR_TEXT>';
        }
        $xml .= '<REL_PROD_NUM>' . $this->relatedProductNumber . '</REL_PROD_NUM>';
        $xml .= '</PRODUCT>';
        return $xml;
    }
}