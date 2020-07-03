<?php
/**
 * Copyright (c) 2014, Tinypass, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 * notice, this list of conditions and the following disclaimer in the
 * documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS
 * OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED
 * AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE
 * USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */
/**
 * The TPPublisherVoucher model.
 * model
 */
class TPPublisherVoucher {

    public static $dataTypes = array(
    
        "pubId" => "string",
    
        "code" => "string",
    
        "state" => "string",
    
        "stateLabel" => "string",
    
        "recipientName" => "string",
    
        "recipientEmail" => "string",
    
        "recipientMessage" => "string",
    
        "sendDate" => "string",
    
        "createDate" => "string",
    
        "expires" => "string",
    
        "redeemed" => "string",
    
        "revokeDate" => "string",
    
        "period" => "string",
    
        "appName" => "string",
    
        "termName" => "string",
    
        "termType" => "string",
    
        "resourceName" => "string",
    
        "price" => "string",
    
        "transactionId" => "string",
    
        "isRevocable" => "bool",
    
        "isRefundable" => "bool",
    
        "isResendable" => "bool",
    
    );
    
    /**
     * @var string $pubId  id for a voucher
     */
    public $pubId;
    
    /**
     * @var string $code  Code of voucher
     */
    public $code;
    
    /**
     * @var string $state  State of a voucher
     */
    public $state;
    
    /**
     * @var string $stateLabel  State label of a voucher
     */
    public $stateLabel;
    
    /**
     * @var string $recipientName  Recipient name of voucher
     */
    public $recipientName;
    
    /**
     * @var string $recipientEmail  Recipient email of voucher
     */
    public $recipientEmail;
    
    /**
     * @var string $recipientMessage  Recipient's message
     */
    public $recipientMessage;
    
    /**
     * @var string $sendDate  Send date of voucher
     */
    public $sendDate;
    
    /**
     * @var string $createDate  Create date of voucher
     */
    public $createDate;
    
    /**
     * @var string $expires  Voucher will be expired at
     */
    public $expires;
    
    /**
     * @var string $redeemed  Voucher was redeemed at
     */
    public $redeemed;
    
    /**
     * @var string $revokeDate  Revoke date of voucher
     */
    public $revokeDate;
    
    /**
     * @var string $period  Voucher period
     */
    public $period;
    
    /**
     * @var string $appName  Name of app
     */
    public $appName;
    
    /**
     * @var string $termName  Name of term
     */
    public $termName;
    
    /**
     * @var string $termType  Type of term
     */
    public $termType;
    
    /**
     * @var string $resourceName  Name of resource
     */
    public $resourceName;
    
    /**
     * @var string $price  Price of voucher
     */
    public $price;
    
    /**
     * @var string $transactionId  Id of transaction
     */
    public $transactionId;
    
    /**
     * @var bool $isRevocable  Is voucher revocable?
     */
    public $isRevocable;
    
    /**
     * @var bool $isRefundable  Is voucher payment refundable?
     */
    public $isRefundable;
    
    /**
     * @var bool $isResendable  Is voucher resendable?
     */
    public $isResendable;
    

}
