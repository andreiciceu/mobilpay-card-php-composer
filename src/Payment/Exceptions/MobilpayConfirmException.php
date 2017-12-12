<?php
namespace Mobilpay\Payment\Exceptions;

use Throwable;

class MobilpayConfirmException extends \Exception {
    private $_type;

    public function __construct($message = "", $code = 0, $type = null, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
        $this->_type = $type;
    }

    public function getType() {
        return $this->_type;
    }
}