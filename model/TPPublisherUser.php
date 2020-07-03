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
 * The TPPublisherUser model.
 * model
 */
class TPPublisherUser {

    public static $dataTypes = array(
    
        "firstName" => "string",
    
        "lastName" => "string",
    
        "email" => "string",
    
        "personalName" => "string",
    
        "uid" => "string",
    
        "image1" => "string",
    
        "createDate" => "string",
    
        "resetPasswordEmailSent" => "bool",
    
        "customFields" => "map[]",
    
    );
    
    /**
     * @var string $firstName  User's first name
     */
    public $firstName;
    
    /**
     * @var string $lastName  User's last name
     */
    public $lastName;
    
    /**
     * @var string $email  User's email address
     */
    public $email;
    
    /**
     * @var string $personalName  User's personal name
     */
    public $personalName;
    
    /**
     * @var string $uid  User's UID
     */
    public $uid;
    
    /**
     * @var string $image1  User's profile image
     */
    public $image1;
    
    /**
     * @var string $createDate  User creation date
     */
    public $createDate;
    
    /**
     * @var bool $resetPasswordEmailSent  Is reset password email sent
     */
    public $resetPasswordEmailSent;
    
    /**
     * @var map[] $customFields  
     */
    public $customFields;
    

}
