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
 * The TPPublisherConsent model.
 * model
 */
class TPPublisherConsent {

    public static $dataTypes = array(
    
        "consentId" => "string",
    
        "fieldName" => "string",
    
        "fieldId" => "string",
    
        "displayText" => "string",
    
        "errorMessage" => "string",
    
        "type" => "string",
    
        "preChecked" => "bool",
    
        "required" => "bool",
    
        "enabled" => "bool",
    
        "fieldIdEnabled" => "bool",
    
    );
    
    /**
     * @var string $consentId  Consent ID
     */
    public $consentId;
    
    /**
     * @var string $fieldName  Consent box field name
     */
    public $fieldName;
    
    /**
     * @var string $fieldId  Consent box field ID
     */
    public $fieldId;
    
    /**
     * @var string $displayText  Consent box display text
     */
    public $displayText;
    
    /**
     * @var string $errorMessage  Consent box error message
     */
    public $errorMessage;
    
    /**
     * @var string $type  Consent box type
     */
    public $type;
    
    /**
     * @var bool $preChecked  Consent box pre-checked state
     */
    public $preChecked;
    
    /**
     * @var bool $required  Is consent box required
     */
    public $required;
    
    /**
     * @var bool $enabled  Is consent box enabled
     */
    public $enabled;
    
    /**
     * @var bool $fieldIdEnabled  Is field ID editing enabled
     */
    public $fieldIdEnabled;
    

}
