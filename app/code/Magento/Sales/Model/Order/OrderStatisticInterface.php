<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Sales\Model\Order;

use Magento\Sales\Api\Data\OrderInterface;
use Magento\Sales\Api\Data\InvoiceInterface;

/**
 * Interface OrderStatisticInterface
 *
 * @api
 */
interface OrderStatisticInterface
{
    /**
     * @param OrderInterface $order
     * @param InvoiceInterface $invoice
     * @return OrderInterface
     */
    public function calculateInvoice(OrderInterface $order, InvoiceInterface $invoice);
}
