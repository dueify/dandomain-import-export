<?php
namespace Dandomain\Import;

class Product extends Import {
    protected $xmlStart = '<?xml version="1.0" encoding="utf-8"?><PRODUCT_EXPORT type="PRODUCTS"><ELEMENTS>';
    protected $xmlEnd = '</ELEMENTS></PRODUCT_EXPORT>';
}