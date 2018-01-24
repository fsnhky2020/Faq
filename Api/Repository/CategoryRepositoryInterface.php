<?php

namespace Nans\Faq\Api\Repository;

use Nans\Faq\Api\Data\CategoryInterface;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;

interface CategoryRepositoryInterface
{
    /**
     * @param CategoryInterface $category
     *
     * @return void
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     */
    public function delete(CategoryInterface $category);

    /**
     * @param int $id
     *
     * @return void
     * @throws NoSuchEntityException
     * @throws CouldNotDeleteException
     */
    public function deleteById(int $id);

    /**
     * @param int $id
     *
     * @return CategoryInterface
     * @throws NoSuchEntityException
     */
    public function getById(int $id): CategoryInterface;

    /**
     * @param CategoryInterface $category
     *
     * @return CategoryInterface
     * @throws CouldNotSaveException
     */
    public function save(CategoryInterface $category): CategoryInterface;
}