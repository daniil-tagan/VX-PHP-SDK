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
 * The TPPublisherTermChangeOption model.
 * model
 */
class TPPublisherTermChangeOption {

    public static $dataTypes = array(
    
        "termChangeOptionId" => "string",
    
        "fromTermId" => "string",
    
        "fromTermName" => "string",
    
        "fromResourceId" => "string",
    
        "fromResourceName" => "string",
    
        "fromBillingPlan" => "string",
    
        "toTermId" => "string",
    
        "toTermName" => "string",
    
        "toResourceId" => "string",
    
        "toResourceName" => "string",
    
        "toBillingPlan" => "string",
    
        "billingTiming" => "string",
    
        "immediateAccess" => "bool",
    
        "prorateAccess" => "bool",
    
        "description" => "string",
    
        "includeTrial" => "bool",
    
        "toScheduled" => "bool",
    
        "fromScheduled" => "bool",
    
        "changable" => "bool",
    
        "tooltip" => "string",
    
        "sharedAccountCount" => "int",
    
        "collectAddress" => "bool",
    
    );
    
    /**
     * @var string $termChangeOptionId  Term change option id
     */
    public $termChangeOptionId;
    
    /**
     * @var string $fromTermId  From term id
     */
    public $fromTermId;
    
    /**
     * @var string $fromTermName  From name
     */
    public $fromTermName;
    
    /**
     * @var string $fromResourceId  Resource Id
     */
    public $fromResourceId;
    
    /**
     * @var string $fromResourceName  Resource name
     */
    public $fromResourceName;
    
    /**
     * @var string $fromBillingPlan  Billing plan
     */
    public $fromBillingPlan;
    
    /**
     * @var string $toTermId  To term id
     */
    public $toTermId;
    
    /**
     * @var string $toTermName  Term name
     */
    public $toTermName;
    
    /**
     * @var string $toResourceId  Resource Id
     */
    public $toResourceId;
    
    /**
     * @var string $toResourceName  Resource name
     */
    public $toResourceName;
    
    /**
     * @var string $toBillingPlan  Billing plan
     */
    public $toBillingPlan;
    
    /**
     * @var string $billingTiming  Billing timing
     */
    public $billingTiming;
    
    /**
     * @var bool $immediateAccess  Should the access begin immediately
     */
    public $immediateAccess;
    
    /**
     * @var bool $prorateAccess  Should the access begin prorate
     */
    public $prorateAccess;
    
    /**
     * @var string $description  Description
     */
    public $description;
    
    /**
     * @var bool $includeTrial  Include trial
     */
    public $includeTrial;
    
    /**
     * @var bool $toScheduled  To scheduled term upgrade
     */
    public $toScheduled;
    
    /**
     * @var bool $fromScheduled  From scheduled term upgrade
     */
    public $fromScheduled;
    
    /**
     * @var bool $changable  changable
     */
    public $changable;
    
    /**
     * @var string $tooltip  Tooltip for unchangeable term
     */
    public $tooltip;
    
    /**
     * @var int $sharedAccountCount  The count of allowed shared subscription accounts
     */
    public $sharedAccountCount;
    
    /**
     * @var bool $collectAddress  Collect address for this term
     */
    public $collectAddress;
    

}
