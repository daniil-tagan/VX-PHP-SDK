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
 * The TPPublisherGdprApi class.
 */
class TPPublisherGdprApi  extends TPAPIBase {

    /**
     * @return checkRequestTPPublisherGdprApi
     */
    public function checkRequest(){

        return new checkRequestTPPublisherGdprApi($this->apiClient);
    }
    /**
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function eraseUsersRequest(){

        return new eraseUsersRequestTPPublisherGdprApi($this->apiClient);
    }
    /**
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function exportUserRequest(){

        return new exportUserRequestTPPublisherGdprApi($this->apiClient);
    }

}

/**
 * Accepts GDPR request
 */
class checkRequestTPPublisherGdprApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return checkRequestTPPublisherGdprApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * A JSON Web token
     * @param string $dataSubjectRequest
     * @return checkRequestTPPublisherGdprApi
     */
    public function dataSubjectRequest($dataSubjectRequest){
        $this->request['dataSubjectRequest'] = $dataSubjectRequest;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return checkRequestTPPublisherGdprApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * The Tinypass browser cookie (tbc)
     * @param string $tbc
     * @return checkRequestTPPublisherGdprApi
     */
    public function tbc($tbc){
        $this->request['tbc'] = $tbc;
        return $this;
    }
    
    /**
     * Execute request
     * @return string
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['tbc'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'tbc' ) ] = $this->apiClient->toQueryValue($this->request['tbc']);
        }
        
        if (isset($this->request['dataSubjectRequest'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'dataSubjectRequest' ) ] = $this->apiClient->toQueryValue($this->request['dataSubjectRequest']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/gdpr/oath', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'string');
        
    }
}
/**
 * Delete personal data
 */
class eraseUsersRequestTPPublisherGdprApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Erase user data scope (PII, ALL)
     * @param string $scope
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function scope($scope){
        $this->request['scope'] = $scope;
        return $this;
    }
    
    /**
     * Need to deactivate user
     * @param bool $deactivateUser
     * @return eraseUsersRequestTPPublisherGdprApi
     */
    public function deactivateUser($deactivateUser){
        $this->request['deactivateUser'] = $deactivateUser;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['scope'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scope' ) ] = $this->apiClient->toQueryValue($this->request['scope']);
        }
        
        if (isset($this->request['deactivateUser'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'deactivateUser' ) ] = $this->apiClient->toQueryValue($this->request['deactivateUser']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/gdpr/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Export personal data
 */
class exportUserRequestTPPublisherGdprApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Erase user data scope (PII, ALL)
     * @param string $scope
     * @return exportUserRequestTPPublisherGdprApi
     */
    public function scope($scope){
        $this->request['scope'] = $scope;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherEraseUserResponse
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['scope'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scope' ) ] = $this->apiClient->toQueryValue($this->request['scope']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/gdpr/export', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherEraseUserResponse');
        
    }
}
