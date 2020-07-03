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
 * The TPPublisherLicensingNotificationRuleApi class.
 */
class TPPublisherLicensingNotificationRuleApi  extends TPAPIBase {

    /**
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function archiveLicenseeNotificationRuleRequest(){

        return new archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function createLicenseeNotificationRuleRequest(){

        return new createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function getNotificationRulesListRequest(){

        return new getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }
    /**
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function updateLicenseeNotificationRuleRequest(){

        return new updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi($this->apiClient);
    }

}

/**
 * Archive notification rule
 */
class archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Notification rule id
     * @param string $notificationRuleId
     * @return archiveLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleId($notificationRuleId){
        $this->request['notificationRuleId'] = $notificationRuleId;
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
        
        if (isset($this->request['licenseeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->apiClient->toQueryValue($this->request['licenseeId']);
        }
        
        if (isset($this->request['notificationRuleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleId' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/archive', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Create notification rule for licensee
 */
class createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Notification rule works for all contracts or only for chosen
     * @param bool $notificationRuleIsForAllContracts
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleIsForAllContracts($notificationRuleIsForAllContracts){
        $this->request['notificationRuleIsForAllContracts'] = $notificationRuleIsForAllContracts;
        return $this;
    }
    
    /**
     * Notification rule parameter
     * @param string $notificationRuleParameter
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleParameter($notificationRuleParameter){
        $this->request['notificationRuleParameter'] = $notificationRuleParameter;
        return $this;
    }
    
    /**
     * notification_rule_condition
     * @param string $notificationRuleCondition
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleCondition($notificationRuleCondition){
        $this->request['notificationRuleCondition'] = $notificationRuleCondition;
        return $this;
    }
    
    /**
     * JSON with list of contracts public ids
     * @param string $contractIdList
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function contractIdList($contractIdList){
        $this->request['contractIdList'] = $contractIdList;
        return $this;
    }
    
    /**
     * Notification rule condition value
     * @param int $notificationRuleConditionValue
     * @return createLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleConditionValue($notificationRuleConditionValue){
        $this->request['notificationRuleConditionValue'] = $notificationRuleConditionValue;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherNotificationRule
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
        
        if (isset($this->request['contractIdList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractIdList' ) ] = $this->apiClient->toQueryValue($this->request['contractIdList']);
        }
        
        if (isset($this->request['notificationRuleIsForAllContracts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleIsForAllContracts' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleIsForAllContracts']);
        }
        
        if (isset($this->request['notificationRuleParameter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleParameter' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleParameter']);
        }
        
        if (isset($this->request['notificationRuleCondition'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleCondition' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleCondition']);
        }
        
        if (isset($this->request['notificationRuleConditionValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleConditionValue' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleConditionValue']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherNotificationRule');
        
    }
}
/**
 * Get notification rules by licensee id
 */
class getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return getNotificationRulesListRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherNotificationRule[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['licenseeId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'licenseeId' ) ] = $this->apiClient->toQueryValue($this->request['licenseeId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherNotificationRule', 'array');
        
    }
}
/**
 * Create notification rule for licensee
 */
class updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Public id of licensee
     * @param string $licenseeId
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function licenseeId($licenseeId){
        $this->request['licenseeId'] = $licenseeId;
        return $this;
    }
    
    /**
     * Notification rule id
     * @param string $notificationRuleId
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleId($notificationRuleId){
        $this->request['notificationRuleId'] = $notificationRuleId;
        return $this;
    }
    
    /**
     * Notification rule works for all contracts or only for chosen
     * @param bool $notificationRuleIsForAllContracts
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleIsForAllContracts($notificationRuleIsForAllContracts){
        $this->request['notificationRuleIsForAllContracts'] = $notificationRuleIsForAllContracts;
        return $this;
    }
    
    /**
     * Notification rule parameter
     * @param string $notificationRuleParameter
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleParameter($notificationRuleParameter){
        $this->request['notificationRuleParameter'] = $notificationRuleParameter;
        return $this;
    }
    
    /**
     * notification_rule_condition
     * @param string $notificationRuleCondition
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleCondition($notificationRuleCondition){
        $this->request['notificationRuleCondition'] = $notificationRuleCondition;
        return $this;
    }
    
    /**
     * JSON with list of contracts public ids
     * @param string $contractIdList
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function contractIdList($contractIdList){
        $this->request['contractIdList'] = $contractIdList;
        return $this;
    }
    
    /**
     * Notification rule condition value
     * @param int $notificationRuleConditionValue
     * @return updateLicenseeNotificationRuleRequestTPPublisherLicensingNotificationRuleApi
     */
    public function notificationRuleConditionValue($notificationRuleConditionValue){
        $this->request['notificationRuleConditionValue'] = $notificationRuleConditionValue;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherNotificationRule
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
        
        if (isset($this->request['contractIdList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contractIdList' ) ] = $this->apiClient->toQueryValue($this->request['contractIdList']);
        }
        
        if (isset($this->request['notificationRuleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleId' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleId']);
        }
        
        if (isset($this->request['notificationRuleIsForAllContracts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleIsForAllContracts' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleIsForAllContracts']);
        }
        
        if (isset($this->request['notificationRuleParameter'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleParameter' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleParameter']);
        }
        
        if (isset($this->request['notificationRuleCondition'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleCondition' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleCondition']);
        }
        
        if (isset($this->request['notificationRuleConditionValue'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'notificationRuleConditionValue' ) ] = $this->apiClient->toQueryValue($this->request['notificationRuleConditionValue']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/licensing/notificationRule/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherNotificationRule');
        
    }
}
