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
 * The TPPublisherContract model.
 * model
 */
class TPPublisherContract {

    public static $dataTypes = array(
    
        "contractId" => "string",
    
        "aid" => "string",
    
        "name" => "string",
    
        "createDate" => "string",
    
        "landingPageUrl" => "string",
    
        "licenseeId" => "string",
    
        "seatsNumber" => "int",
    
        "isHardSeatsLimitType" => "bool",
    
        "rid" => "string",
    
        "scheduleId" => "string",
    
        "contractIsActive" => "bool",
    
        "contractType" => "string",
    
        "contractConversionsCount" => "int",
    
        "contractPeriods" => "TPPublisherSchedulePeriod[]",
    
    );
    
    /**
     * @var string $contractId  Public id of contract
     */
    public $contractId;
    
    /**
     * @var string $aid  Application aid
     */
    public $aid;
    
    /**
     * @var string $name  The name
     */
    public $name;
    
    /**
     * @var string $createDate  The creation date
     */
    public $createDate;
    
    /**
     * @var string $landingPageUrl  Relative URL for specified contract. It will be appended to licensing base URL to get complete landing page URL
     */
    public $landingPageUrl;
    
    /**
     * @var string $licenseeId  Public id of licensee
     */
    public $licenseeId;
    
    /**
     * @var int $seatsNumber  The number of users who can access this contract
     */
    public $seatsNumber;
    
    /**
     * @var bool $isHardSeatsLimitType  The seats limit type (false - notification is sent if beyond number of seats, true - no users can access if beyond number of seats)
     */
    public $isHardSeatsLimitType;
    
    /**
     * @var string $rid  Unique id for resource
     */
    public $rid;
    
    /**
     * @var string $scheduleId  The schedule ID
     */
    public $scheduleId;
    
    /**
     * @var bool $contractIsActive  Is the Contract active
     */
    public $contractIsActive;
    
    /**
     * @var string $contractType  Contract Type
     */
    public $contractType;
    
    /**
     * @var int $contractConversionsCount  Conversions count by contract
     */
    public $contractConversionsCount;
    
    /**
     * @var TPPublisherSchedulePeriod[] $contractPeriods  
     */
    public $contractPeriods;
    

}
