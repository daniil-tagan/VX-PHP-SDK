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
 * The TPPublisherLicensingContractUserApi class.
 */
class TPPublisherLicensingContractUserApi  extends TPAPIBase {

    /**
     * @return archiveContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function archiveContractUserRequest(){

        return new archiveContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function createContractUserRequest(){

        return new createContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function getContractUserListRequest(){

        return new getContractUserListRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return importContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function importContractUsersRequest(){

        return new importContractUsersRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function inviteContractUsersRequest(){

        return new inviteContractUsersRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }
    /**
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function updateContractUserRequest(){

        return new updateContractUserRequestTPPublisherLicensingContractUserApi($this->apiClient);
    }

}

/**
 * Archive contract user
 */
class archiveContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return archiveContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return archiveContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Public id of contract user
     * @param string $contractUserId
     * @return archiveContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
        return $this;
    }
    
    /**
     * Session id for contract user changes
     * @param string $contractUserSessionId
     * @return archiveContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
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
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserId']);
        }
        
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserSessionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/archive', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Create contract user for contract
 */
class createContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * Session id for contract user changes
     * @param string $contractUserSessionId
     * @return createContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContractUser
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserSessionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContractUser');
        
    }
}
/**
 * List of contract user for contract
 */
class getContractUserListRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return getContractUserListRequestTPPublisherLicensingContractUserApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContractUser[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contractId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['offset'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['orderBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContractUser', 'array');
        
    }
}
/**
 * Upload contract user lists for contract
 */
class importContractUsersRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return importContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return importContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * asset id
     * @param string $assetId
     * @return importContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function assetId($assetId){
        $this->request['assetId'] = $assetId;
        return $this;
    }
    
    /**
     * Session id for contract user changes
     * @param string $contractUserSessionId
     * @return importContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
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
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['assetId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'assetId' ) ] = $this->apiClient->toQueryValue($this->request['assetId']);
        }
        
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserSessionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/import', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Invite contract users by email
 */
class inviteContractUsersRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Session id for contract user changes
     * @param string $contractUserSessionId
     * @return inviteContractUsersRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
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
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserSessionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/invite', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Update contract user
 */
class updateContractUserRequestTPPublisherLicensingContractUserApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Public id of contract user
     * @param string $contractUserId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserId($contractUserId){
        $this->request['contractUserId'] = $contractUserId;
        return $this;
    }
    
    /**
     * User&#39;s email address
     * @param string $email
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function email($email){
        $this->request['email'] = $email;
        return $this;
    }
    
    /**
     * User&#39;s first name
     * @param string $firstName
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function firstName($firstName){
        $this->request['firstName'] = $firstName;
        return $this;
    }
    
    /**
     * User&#39;s last name
     * @param string $lastName
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function lastName($lastName){
        $this->request['lastName'] = $lastName;
        return $this;
    }
    
    /**
     * Session id for contract user changes
     * @param string $contractUserSessionId
     * @return updateContractUserRequestTPPublisherLicensingContractUserApi
     */
    public function contractUserSessionId($contractUserSessionId){
        $this->request['contractUserSessionId'] = $contractUserSessionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContractUser
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['contractUserId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserId']);
        }
        
        if (isset($this->request['email'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'email' ) ] = $this->apiClient->toQueryValue($this->request['email']);
        }
        
        if (isset($this->request['firstName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'firstName' ) ] = $this->apiClient->toQueryValue($this->request['firstName']);
        }
        
        if (isset($this->request['lastName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'lastName' ) ] = $this->apiClient->toQueryValue($this->request['lastName']);
        }
        
        if (isset($this->request['contractUserSessionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractUserSessionId' ) ] = $this->apiClient->toQueryValue($this->request['contractUserSessionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contractUser/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContractUser');
        
    }
}
