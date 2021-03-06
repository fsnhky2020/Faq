<?php

namespace Nans\Faq\Ui\Component\Listing\Column\Question;

use Magento\Framework\Data\OptionSourceInterface;
use Nans\Faq\Api\Data\CategoryInterface;
use Nans\Faq\Model\ResourceModel\Category\Collection;

class QuestionFilterList implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $_options;

    /**
     * @var Collection
     */
    protected $_collection;

    /**
     * @param Collection $collection
     */
    public function __construct(
        Collection $collection
    ) {
        $this->_collection = $collection;
    }

    /**
     * Get options
     *
     * @return array
     */
    public function toOptionArray()
    {
        if ($this->_options === null) {
            $this->_options = [];

            /** @var CategoryInterface $category */
            $categories = $this->_collection->getItems();
            foreach ($categories as $category) {
                $this->_options[] = [
                    'value' => $category->getId(),
                    'label' => $category->getTitle()
                ];
            }
        }

        return $this->_options;
    }
}