<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\TaxImportExport\Controller\Adminhtml\Rate;

use Magento\Framework\Controller\ResultFactory;

class ImportExport extends \Magento\TaxImportExport\Controller\Adminhtml\Rate
{
    /**
     * {@inheritdoc}
     */
    const ADMIN_RESOURCE = 'Magento_TaxImportExport::import_export';

    /**
     * Import and export Page
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $resultPage->setActiveMenu('Magento_TaxImportExport::system_convert_tax');
        $resultPage->addContent(
            $resultPage->getLayout()->createBlock('Magento\TaxImportExport\Block\Adminhtml\Rate\ImportExportHeader')
        );
        $resultPage->addContent(
            $resultPage->getLayout()->createBlock('Magento\TaxImportExport\Block\Adminhtml\Rate\ImportExport')
        );
        $resultPage->getConfig()->getTitle()->prepend(__('Tax Zones and Rates'));
        $resultPage->getConfig()->getTitle()->prepend(__('Import and Export Tax Rates'));
        return $resultPage;
    }
}
