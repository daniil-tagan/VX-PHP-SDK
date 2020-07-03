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
 * The TPAmpApi class.
 */
class TPAmpApi  extends TPAPIBase {

    /**
     * @return loginRequestTPAmpApi
     */
    public function loginRequest(){

        return new loginRequestTPAmpApi($this->apiClient);
    }
    /**
     * @return logoutRequestTPAmpApi
     */
    public function logoutRequest(){

        return new logoutRequestTPAmpApi($this->apiClient);
    }

}

/**
 * Login AMP user to publisher site
 */
class loginRequestTPAmpApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * AMP reader id
     * @param string $readerId
     * @return loginRequestTPAmpApi
     */
    public function readerId($readerId){
        $this->request['readerId'] = $readerId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return loginRequestTPAmpApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User token
     * @param string $userToken
     * @return loginRequestTPAmpApi
     */
    public function userToken($userToken){
        $this->request['userToken'] = $userToken;
        return $this;
    }
    
    /**
     * User token provider
     * @param string $userProvider
     * @return loginRequestTPAmpApi
     */
    public function userProvider($userProvider){
        $this->request['userProvider'] = $userProvider;
        return $this;
    }
    
    /**
     * Encrypted user reference
     * @param string $userRef
     * @return loginRequestTPAmpApi
     */
    public function userRef($userRef){
        $this->request['userRef'] = $userRef;
        return $this;
    }
    
    /**
     * User is transient and does not require validation
     * @param bool $userTransient
     * @return loginRequestTPAmpApi
     */
    public function userTransient($userTransient){
        $this->request['userTransient'] = $userTransient;
        return $this;
    }
    
    /**
     * AMP user state
     * @param string $userState
     * @return loginRequestTPAmpApi
     */
    public function userState($userState){
        $this->request['userState'] = $userState;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['readerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'readerId' ) ] = $this->apiClient->toQueryValue($this->request['readerId']);
        }
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['userToken'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userToken' ) ] = $this->apiClient->toQueryValue($this->request['userToken']);
        }
        
        if (isset($this->request['userProvider'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userProvider' ) ] = $this->apiClient->toQueryValue($this->request['userProvider']);
        }
        
        if (isset($this->request['userRef'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userRef' ) ] = $this->apiClient->toQueryValue($this->request['userRef']);
        }
        
        if (isset($this->request['userTransient'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userTransient' ) ] = $this->apiClient->toQueryValue($this->request['userTransient']);
        }
        
        if (isset($this->request['userState'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userState' ) ] = $this->apiClient->toQueryValue($this->request['userState']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/amp/login', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Logout AMP user from publisher site
 */
class logoutRequestTPAmpApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * AMP reader id
     * @param string $readerId
     * @return logoutRequestTPAmpApi
     */
    public function readerId($readerId){
        $this->request['readerId'] = $readerId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return logoutRequestTPAmpApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['readerId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'readerId' ) ] = $this->apiClient->toQueryValue($this->request['readerId']);
        }
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/amp/logout', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
