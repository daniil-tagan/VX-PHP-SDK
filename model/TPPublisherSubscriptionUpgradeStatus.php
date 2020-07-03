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
 * The TPPublisherSubscriptionUpgradeStatus model.
 * model
 */
class TPPublisherSubscriptionUpgradeStatus {

    public static $dataTypes = array(
    
        "fromTermName" => "string",
    
        "toTermName" => "string",
    
        "fromTermId" => "string",
    
        "toTermId" => "string",
    
        "changeDate" => "string",
    
        "createDateFrom" => "string",
    
        "createDateTo" => "string",
    
        "billingPlanTo" => "string",
    
        "billingPlanFrom" => "string",
    
        "status" => "int",
    
        "errorMessage" => "string",
    
        "prorateAmount" => "string",
    
        "prorateRefundAmount" => "string",
    
    );
    
    /**
     * @var string $fromTermName  From name
     */
    public $fromTermName;
    
    /**
     * @var string $toTermName  Term name
     */
    public $toTermName;
    
    /**
     * @var string $fromTermId  From term id
     */
    public $fromTermId;
    
    /**
     * @var string $toTermId  To term id
     */
    public $toTermId;
    
    /**
     * @var string $changeDate  User payment creation date (ISO 8601 format)
     */
    public $changeDate;
    
    /**
     * @var string $createDateFrom  Create date from
     */
    public $createDateFrom;
    
    /**
     * @var string $createDateTo  Create date to
     */
    public $createDateTo;
    
    /**
     * @var string $billingPlanTo  User subscription billing plan to
     */
    public $billingPlanTo;
    
    /**
     * @var string $billingPlanFrom  User subscription billing plan from
     */
    public $billingPlanFrom;
    
    /**
     * @var int $status  Term change subscription status
     */
    public $status;
    
    /**
     * @var string $errorMessage  Term change subscription error message
     */
    public $errorMessage;
    
    /**
     * @var string $prorateAmount  Term change prorate amount
     */
    public $prorateAmount;
    
    /**
     * @var string $prorateRefundAmount  Term change prorate refund amount
     */
    public $prorateRefundAmount;
    

}
