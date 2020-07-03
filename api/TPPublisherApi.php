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
 * The TPPublisherApi class.
 */
class TPPublisherApi  extends TPAPIBase {

    /**
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function customFormSubmitRequest(){

        return new customFormSubmitRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return loginRequestTPPublisherApi
     */
    public function loginRequest(){

        return new loginRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return logoutRequestTPPublisherApi
     */
    public function logoutRequest(){

        return new logoutRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return registerRequestTPPublisherApi
     */
    public function registerRequest(){

        return new registerRequestTPPublisherApi($this->apiClient);
    }
    /**
     * @return tokenRequestTPPublisherApi
     */
    public function tokenRequest(){

        return new tokenRequestTPPublisherApi($this->apiClient);
    }

}

/**
 * Submits the custom form values.
 */
class customFormSubmitRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $uid
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * 
     * @param string $customFields
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    
    /**
     * 
     * @param string $formId
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function formId($formId){
        $this->request['formId'] = $formId;
        return $this;
    }
    
    /**
     * 
     * @param string $apiToken
     * @return customFormSubmitRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['customFields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->apiClient->toQueryValue($this->request['customFields']);
        }
        
        if (isset($this->request['formId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'formId' ) ] = $this->apiClient->toQueryValue($this->request['formId']);
        }
        
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->apiClient->toQueryValue($this->request['apiToken']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/form', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Logs in the user. The response should contain the user token.
 */
class loginRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return loginRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $email
     * @return loginRequestTPPublisherApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * 
     * @param string $password
     * @return loginRequestTPPublisherApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    
    /**
     * 
     * @param string $apiToken
     * @return loginRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['password'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->apiClient->toQueryValue($this->request['password']);
        }
        
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->apiClient->toQueryValue($this->request['apiToken']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/login', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Invalidates the user token.
 */
class logoutRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return logoutRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $token
     * @return logoutRequestTPPublisherApi
     */
    public function token($token){
        $this->request['token'] = $token;
        return $this;
    }
    
    /**
     * 
     * @param string $apiToken
     * @return logoutRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['token'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'token' ) ] = $this->apiClient->toQueryValue($this->request['token']);
        }
        
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->apiClient->toQueryValue($this->request['apiToken']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/logout', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Registers the user. The response should contain the user token.
 */
class registerRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return registerRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $email
     * @return registerRequestTPPublisherApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * 
     * @param string $firstName
     * @return registerRequestTPPublisherApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * 
     * @param string $lastName
     * @return registerRequestTPPublisherApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * 
     * @param string $password
     * @return registerRequestTPPublisherApi
     */
    public function password($password){
        $this->request['password'] = $password;
        return $this;
    }
    
    /**
     * 
     * @param string $consents
     * @return registerRequestTPPublisherApi
     */
    public function consents($consents){
        $this->request['consents'] = $consents;
        return $this;
    }
    
    /**
     * 
     * @param string $customFields
     * @return registerRequestTPPublisherApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    
    /**
     * 
     * @param string $formId
     * @return registerRequestTPPublisherApi
     */
    public function formId($formId){
        $this->request['formId'] = $formId;
        return $this;
    }
    
    /**
     * 
     * @param string $apiToken
     * @return registerRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['email'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        if (isset($this->request['password'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'password' ) ] = $this->apiClient->toQueryValue($this->request['password']);
        }
        
        if (isset($this->request['consents'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'consents' ) ] = $this->apiClient->toQueryValue($this->request['consents']);
        }
        
        if (isset($this->request['customFields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->apiClient->toQueryValue($this->request['customFields']);
        }
        
        if (isset($this->request['formId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'formId' ) ] = $this->apiClient->toQueryValue($this->request['formId']);
        }
        
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->apiClient->toQueryValue($this->request['apiToken']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/register', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Generates piano ID user token that can be used as a cookie value. Use of this method is only allowed if allowGenerateToken is enabled.
 */
class tokenRequestTPPublisherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return tokenRequestTPPublisherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $uid
     * @return tokenRequestTPPublisherApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * 
     * @param string $apiToken
     * @return tokenRequestTPPublisherApi
     */
    public function apiToken($apiToken){
        $this->request['apiToken'] = $apiToken;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['apiToken'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'apiToken' ) ] = $this->apiClient->toQueryValue($this->request['apiToken']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/token', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
