<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class CsvValidation
{
    private array $productAttributes = [
        'color',
        'size',
        'type'
    ];

    public function validateProduct(array $product): void
    {
        foreach ($this->productAttributes as $attribute) {
            if (!isset($product[$attribute])) {
                throw new \RuntimeException(sprintf('Import fail: the product attribute %s is missing', $attribute));
            }
        }
    }
}