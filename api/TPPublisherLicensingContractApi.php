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
 * The TPPublisherLicensingContractApi class.
 */
class TPPublisherLicensingContractApi  extends TPAPIBase {

    /**
     * @return activateContractRequestTPPublisherLicensingContractApi
     */
    public function activateContractRequest(){

        return new activateContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return archiveContractRequestTPPublisherLicensingContractApi
     */
    public function archiveContractRequest(){

        return new archiveContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function createContractRequest(){

        return new createContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return deactivateContractRequestTPPublisherLicensingContractApi
     */
    public function deactivateContractRequest(){

        return new deactivateContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function getContractListRequest(){

        return new getContractListRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return getContractRequestTPPublisherLicensingContractApi
     */
    public function getContractRequest(){

        return new getContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return redeemContractRequestTPPublisherLicensingContractApi
     */
    public function redeemContractRequest(){

        return new redeemContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }
    /**
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function updateContractRequest(){

        return new updateContractRequestTPPublisherLicensingContractApi($this->apiClient);
    }

}

/**
 * Activate contract
 */
class activateContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return activateContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return activateContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/activate', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract');
        
    }
}
/**
 * Archive contract
 */
class archiveContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return archiveContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return archiveContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/archive', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Create contract
 */
class createContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Contract Type
     * @param string $contractType
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function contractType($contractType){
        $this->request['contractType'] = $contractType;
        return $this;
    }
    
    /**
     * Name of Contract
     * @param string $contractName
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function contractName($contractName){
        $this->request['contractName'] = $contractName;
        return $this;
    }
    
    /**
     * The number of users who can access this contract
     * @param int $seatsNumber
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function seatsNumber($seatsNumber){
        $this->request['seatsNumber'] = $seatsNumber;
        return $this;
    }
    
    /**
     * The seats limit type (false - notification is sent if beyond number of seats, true - no users can access if beyond number of seats)
     * @param bool $isHardSeatsLimitType
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function isHardSeatsLimitType($isHardSeatsLimitType){
        $this->request['isHardSeatsLimitType'] = $isHardSeatsLimitType;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Relative URL for specified contract. It will be appended to licensing base URL to get complete landing page URL
     * @param string $landingPageUrl
     * @return createContractRequestTPPublisherLicensingContractApi
     */
    public function landingPageUrl($landingPageUrl){
        $this->request['landingPageUrl'] = $landingPageUrl;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->apiClient->toQueryValue($this->request['licenseeId']);
        }
        
        if (isset($this->request['contractType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractType' ) ] = $this->apiClient->toQueryValue($this->request['contractType']);
        }
        
        if (isset($this->request['contractName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractName' ) ] = $this->apiClient->toQueryValue($this->request['contractName']);
        }
        
        if (isset($this->request['seatsNumber'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'seatsNumber' ) ] = $this->apiClient->toQueryValue($this->request['seatsNumber']);
        }
        
        if (isset($this->request['isHardSeatsLimitType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isHardSeatsLimitType' ) ] = $this->apiClient->toQueryValue($this->request['isHardSeatsLimitType']);
        }
        
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['landingPageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'landingPageUrl' ) ] = $this->apiClient->toQueryValue($this->request['landingPageUrl']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract');
        
    }
}
/**
 * Deactivate contract
 */
class deactivateContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return deactivateContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return deactivateContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract
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
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/deactivate', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract');
        
    }
}
/**
 * List of contracts
 */
class getContractListRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return getContractListRequestTPPublisherLicensingContractApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['licenseeId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->apiClient->toQueryValue($this->request['licenseeId']);
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
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract', 'array');
        
    }
}
/**
 * Get contract by id
 */
class getContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return getContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contractId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract');
        
    }
}
/**
 * Redeem contract
 */
class redeemContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return redeemContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return redeemContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return redeemContractRequestTPPublisherLicensingContractApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Execute request
     * @return string
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
        
        if (isset($this->request['uid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/redeem', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'string');
        
    }
}
/**
 * Update contract
 */
class updateContractRequestTPPublisherLicensingContractApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Contract Type
     * @param string $contractType
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function contractType($contractType){
        $this->request['contractType'] = $contractType;
        return $this;
    }
    
    /**
     * Public id of contract
     * @param string $contractId
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function contractId($contractId){
        $this->request['contractId'] = $contractId;
        return $this;
    }
    
    /**
     * Name of Contract
     * @param string $contractName
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function contractName($contractName){
        $this->request['contractName'] = $contractName;
        return $this;
    }
    
    /**
     * The number of users who can access this contract
     * @param int $seatsNumber
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function seatsNumber($seatsNumber){
        $this->request['seatsNumber'] = $seatsNumber;
        return $this;
    }
    
    /**
     * The seats limit type (false - notification is sent if beyond number of seats, true - no users can access if beyond number of seats)
     * @param bool $isHardSeatsLimitType
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function isHardSeatsLimitType($isHardSeatsLimitType){
        $this->request['isHardSeatsLimitType'] = $isHardSeatsLimitType;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Relative URL for specified contract. It will be appended to licensing base URL to get complete landing page URL
     * @param string $landingPageUrl
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function landingPageUrl($landingPageUrl){
        $this->request['landingPageUrl'] = $landingPageUrl;
        return $this;
    }
    
    /**
     * Contract schedule id
     * @param string $scheduleId
     * @return updateContractRequestTPPublisherLicensingContractApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherContract
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->apiClient->toQueryValue($this->request['licenseeId']);
        }
        
        if (isset($this->request['contractType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractType' ) ] = $this->apiClient->toQueryValue($this->request['contractType']);
        }
        
        if (isset($this->request['contractId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractId' ) ] = $this->apiClient->toQueryValue($this->request['contractId']);
        }
        
        if (isset($this->request['contractName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractName' ) ] = $this->apiClient->toQueryValue($this->request['contractName']);
        }
        
        if (isset($this->request['seatsNumber'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'seatsNumber' ) ] = $this->apiClient->toQueryValue($this->request['seatsNumber']);
        }
        
        if (isset($this->request['isHardSeatsLimitType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isHardSeatsLimitType' ) ] = $this->apiClient->toQueryValue($this->request['isHardSeatsLimitType']);
        }
        
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['landingPageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'landingPageUrl' ) ] = $this->apiClient->toQueryValue($this->request['landingPageUrl']);
        }
        
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->apiClient->toQueryValue($this->request['scheduleId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/contract/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherContract');
        
    }
}
