<?php

namespace webflix\Order;

interface OrderStatementFormatter
{
    /**
     * @param Order $order
     * @return mixed
     */
    public function execute(Order $order);
}