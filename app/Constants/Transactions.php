<?php

namespace App\Constants;

class Transactions
{
    const APROVED       = "Aprovado";
    const CANCELLED     = "Cancelado";
    const PENDING       = "Pendente";
    const ERROR         = "Erro";
    const REIMBURSEMENT = "Reembolso";


    public static function getStatus($status) {
        switch ($status) {
            case 1:
                return self::APROVED;
            case 2:
                return self::CANCELLED;
            case 3:
                return self::PENDING;
            case 4:
                return self::ERROR;
            case 5:
                return self::REIMBURSEMENT;
            default:
                return "Status not found";
        }
    }
}