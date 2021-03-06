<?php

declare(strict_types=1);


namespace App\Types;


class OrderStatus extends BaseType
{
    // 订单关闭
    const CLOSED = 0;
    // 待支付
    const WAIT_PAY = 1;
    // 已支付
    const PAID = 2;
    //　已退款
    const REFUND = 3;

    public static function names(): array
    {
        return [
            self::CLOSED => 'closed',
            self::WAIT_PAY => 'wait_pay',
            self::PAID => 'paid',
            self::REFUND => 'refund'
        ];
    }


}
