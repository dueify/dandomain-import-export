<?php


namespace Dandomain\Xml\VariantGroup;

use Dandomain\Xml\Element;
use Doctrine\Common\Collections\ArrayCollection;

class Product extends Element
{
    protected $productNumber;
    protected $advancedVariants;

    public function __construct($productNumber = null, ArrayCollection $advancedVariants = null)
    {
        $this->productNumber = $productNumber;
        $this->setAdvancedVariants($advancedVariants);
    }

    public function getXml()
    {
        $xml = '<PRODUCT>';
        $xml .= '<PROD_NUM>' . $this->productNumber . '</PROD_NUM>';
        if ($this->advancedVariants && count($this->advancedVariants)) {
            $xml .= '<ADVANCED_VARIANTS>';
            foreach ($this->advancedVariants as $advancedVariant) {
                $xml .= $advancedVariant->getXml();
            }
            $xml .= '</ADVANCED_VARIANTS>';
        }
        $xml .= '</PRODUCT>';
        return $xml;
    }

    public function setAdvancedVariants($advancedVariants)
    {
        if (empty($advancedVariants)) {
            $this->advancedVariants = new ArrayCollection();
        } elseif (is_array($advancedVariants)) {
            $this->advancedVariants = new ArrayCollection($advancedVariants);
        } else {
            $this->advancedVariants = $advancedVariants;
        }
        return $this;
    }
}