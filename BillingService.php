<?php

class BillingService {
    public function calculateDiscount(Order $order): float {
        return $order->amount > 1000 ? 0.1 : 0.0;
    }
}

?>