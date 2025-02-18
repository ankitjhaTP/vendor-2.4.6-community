<?php
/**
 * Hyvä Themes - https://hyva.io
 * Copyright © Hyvä Themes. All rights reserved.
 * See LICENSE.md for license details
 */

declare(strict_types=1);

namespace Hyva\SmileElasticsuite\Block\SmileElasticsuiteSwatches\Navigation\Renderer\Swatches;

use Magento\Catalog\Model\Layer\Filter\Item as FilterItem;
use Magento\Eav\Model\Entity\Attribute\Option;
use \Smile\ElasticsuiteSwatches\Block\Navigation\Renderer\Swatches\RenderLayered as BaseRenderLayered;

class RenderLayered extends BaseRenderLayered
{
    /**
     * Path to template file.
     *
     * @var string
     */
    protected $_template = 'Hyva_SmileElasticsuite::swatch/product/layered/renderer.phtml';

    /**
     * {@inheritDoc}
     */
    protected function getOptionViewData(FilterItem $filterItem, Option $swatchOption)
    {
        $dataView = parent::getOptionViewData($filterItem, $swatchOption);

        if ($filterItem->getIsSelected()) {
            $dataView['custom_style'] .= ' border-container-lighter ring ring-primary ring-opacity-50';
        }

        return $dataView;
    }
}
