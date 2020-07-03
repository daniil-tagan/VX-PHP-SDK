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
 * The TPPublisherTermChangeApi class.
 */
class TPPublisherTermChangeApi  extends TPAPIBase {

    /**
     * @return canChangeTermRequestTPPublisherTermChangeApi
     */
    public function canChangeTermRequest(){

        return new canChangeTermRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function cancelRequest(){

        return new cancelRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function changeRequest(){

        return new changeRequestTPPublisherTermChangeApi($this->apiClient);
    }
    /**
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function getSubscriptionUpgradeStatusRequest(){

        return new getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi($this->apiClient);
    }

}

/**
 * Checks if change from one term to another is available
 */
class canChangeTermRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return canChangeTermRequestTPPublisherTermChangeApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/can', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Cancel pending upgrade from a subscription
 */
class cancelRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * A public ID of subscription from
     * @param string $subscriptionFrom
     * @return cancelRequestTPPublisherTermChangeApi
     */
    public function subscriptionFrom($subscriptionFrom){
        $this->request['subscriptionFrom'] = $subscriptionFrom;
        return $this;
    }
    
    /**
     * Execute request
     * @return bool
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['subscriptionFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionFrom']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/cancel', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Changes a subscription from one term to another term
 */
class changeRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * A public ID of subscription from
     * @param string $subscriptionFrom
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function subscriptionFrom($subscriptionFrom){
        $this->request['subscriptionFrom'] = $subscriptionFrom;
        return $this;
    }
    
    /**
     * A public ID of term to change subscription to
     * @param string $termTo
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function termTo($termTo){
        $this->request['termTo'] = $termTo;
        return $this;
    }
    
    /**
     * Allowed values are 0, 1, 2 or 3. 0 means that term change should be down immediately, 1 means that it should be down in the end of current billing cycle, 2 means that term change should be down in the next sale date of the destination scheduled term, 3 means that it should be down in the end of current billing period of the source scheduled term
     * @param string $billingTiming
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function billingTiming($billingTiming){
        $this->request['billingTiming'] = $billingTiming;
        return $this;
    }
    
    /**
     * Allowed values are \&quot;true\&quot; and \&quot;false\&quot;. \&quot;true\&quot; means that access should be given immediately, \&quot;false\&quot; - otherwise. This argument has no effect if \&quot;billing_timing\&quot; is 0.
     * @param bool $immediateAccess
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function immediateAccess($immediateAccess){
        $this->request['immediateAccess'] = $immediateAccess;
        return $this;
    }
    
    /**
     * Should the access begin prorate
     * @param bool $prorateAccess
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function prorateAccess($prorateAccess){
        $this->request['prorateAccess'] = $prorateAccess;
        return $this;
    }
    
    /**
     * Shared accounts
     * @param string $sharedAccounts
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function sharedAccounts($sharedAccounts){
        $this->request['sharedAccounts'] = $sharedAccounts;
        return $this;
    }
    
    /**
     * User address
     * @param string $userAddress
     * @return changeRequestTPPublisherTermChangeApi
     */
    public function userAddress($userAddress){
        $this->request['userAddress'] = $userAddress;
        return $this;
    }
    
    /**
     * Execute request
     * @return bool
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
        
        if (isset($this->request['subscriptionFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionFrom']);
        }
        
        if (isset($this->request['termTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termTo' ) ] = $this->apiClient->toQueryValue($this->request['termTo']);
        }
        
        if (isset($this->request['billingTiming'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingTiming' ) ] = $this->apiClient->toQueryValue($this->request['billingTiming']);
        }
        
        if (isset($this->request['immediateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'immediateAccess' ) ] = $this->apiClient->toQueryValue($this->request['immediateAccess']);
        }
        
        if (isset($this->request['prorateAccess'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'prorateAccess' ) ] = $this->apiClient->toQueryValue($this->request['prorateAccess']);
        }
        
        if (isset($this->request['sharedAccounts'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccounts' ) ] = $this->apiClient->toQueryValue($this->request['sharedAccounts']);
        }
        
        if (isset($this->request['userAddress'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userAddress' ) ] = $this->apiClient->toQueryValue($this->request['userAddress']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/do', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Checks upgrade status of the subscription
 */
class getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return getSubscriptionUpgradeStatusRequestTPPublisherTermChangeApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherSubscriptionUpgradeStatus
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
        
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/change/getSubscriptionUpgradeStatus', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherSubscriptionUpgradeStatus');
        
    }
}
