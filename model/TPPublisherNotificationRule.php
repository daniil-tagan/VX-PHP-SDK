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
 * The TPPublisherNotificationRule model.
 * model
 */
class TPPublisherNotificationRule {

    public static $dataTypes = array(
    
        "notificationRuleId" => "string",
    
        "licenseeId" => "string",
    
        "contractIdList" => "array[]",
    
        "notificationRuleParameter" => "string",
    
        "notificationRuleCondition" => "string",
    
        "notificationRuleConditionValue" => "int",
    
        "notificationRuleIsForAllContracts" => "bool",
    
    );
    
    /**
     * @var string $notificationRuleId  Notification rule id
     */
    public $notificationRuleId;
    
    /**
     * @var string $licenseeId  Public id of licensee
     */
    public $licenseeId;
    
    /**
     * @var array[] $contractIdList  
     */
    public $contractIdList;
    
    /**
     * @var string $notificationRuleParameter  Notification rule parameter
     */
    public $notificationRuleParameter;
    
    /**
     * @var string $notificationRuleCondition  Notification rule condition
     */
    public $notificationRuleCondition;
    
    /**
     * @var int $notificationRuleConditionValue  Notification rule condition value
     */
    public $notificationRuleConditionValue;
    
    /**
     * @var bool $notificationRuleIsForAllContracts  Notification rule works for all contracts or only for chosen
     */
    public $notificationRuleIsForAllContracts;
    

}
