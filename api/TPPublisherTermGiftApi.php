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
 * The TPPublisherTermGiftApi class.
 */
class TPPublisherTermGiftApi  extends TPAPIBase {

    /**
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function createGiftTermRequest(){

        return new createGiftTermRequestTPPublisherTermGiftApi($this->apiClient);
    }
    /**
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function updateGiftTermRequest(){

        return new updateGiftTermRequestTPPublisherTermGiftApi($this->apiClient);
    }

}

/**
 * Creates a gift term
 */
class createGiftTermRequestTPPublisherTermGiftApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Type of billing term
     * @param string $termType
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Period of billing plan
     * @param string $billingPlanPeriod
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPeriod($billingPlanPeriod){
        $this->request['billingPlanPeriod'] = $billingPlanPeriod;
        return $this;
    }
    
    /**
     * Price of billing plan
     * @param Number $billingPlanPrice
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPrice($billingPlanPrice){
        $this->request['billingPlanPrice'] = $billingPlanPrice;
        return $this;
    }
    
    /**
     * Currency of billing plan
     * @param string $billingPlanCurrency
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanCurrency($billingPlanCurrency){
        $this->request['billingPlanCurrency'] = $billingPlanCurrency;
        return $this;
    }
    
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    
    /**
     * Redemption URL of vouchering policy
     * @param string $voucheringPolicyRedemptionUrl
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function voucheringPolicyRedemptionUrl($voucheringPolicyRedemptionUrl){
        $this->request['voucheringPolicyRedemptionUrl'] = $voucheringPolicyRedemptionUrl;
        return $this;
    }
    
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    
    /**
     * The count of allowed shared subscription accounts
     * @param int $sharedAccountCount
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    
    /**
     * The shared subscription redemption url
     * @param string $sharedRedemptionUrl
     * @return createGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['billingPlanPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPeriod' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanPeriod']);
        }
        
        if (isset($this->request['billingPlanPrice'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPrice' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanPrice']);
        }
        
        if (isset($this->request['billingPlanCurrency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanCurrency' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanCurrency']);
        }
        
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->apiClient->toQueryValue($this->request['paymentAllowPromoCodes']);
        }
        
        if (isset($this->request['voucheringPolicyRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'voucheringPolicyRedemptionUrl' ) ] = $this->apiClient->toQueryValue($this->request['voucheringPolicyRedemptionUrl']);
        }
        
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->apiClient->toQueryValue($this->request['scheduleId']);
        }
        
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->apiClient->toQueryValue($this->request['scheduleBillingModel']);
        }
        
        if (isset($this->request['termType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->apiClient->toQueryValue($this->request['termType']);
        }
        
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->apiClient->toQueryValue($this->request['sharedAccountCount']);
        }
        
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->apiClient->toQueryValue($this->request['sharedRedemptionUrl']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/gift/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}
/**
 * Updates a gift term
 */
class updateGiftTermRequestTPPublisherTermGiftApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Term ID
     * @param string $termId
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function termId($termId){
        $this->request['termId'] = $termId;
        return $this;
    }
    
    /**
     * Term name
     * @param string $name
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * Unique id for resource
     * @param string $rid
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function rid($rid){
        $this->request['rid'] = $rid;
        return $this;
    }
    
    /**
     * Type of billing term
     * @param string $termType
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function termType($termType){
        $this->request['termType'] = $termType;
        return $this;
    }
    
    /**
     * Term description
     * @param string $description
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Period of billing plan
     * @param string $billingPlanPeriod
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPeriod($billingPlanPeriod){
        $this->request['billingPlanPeriod'] = $billingPlanPeriod;
        return $this;
    }
    
    /**
     * Price of billing plan
     * @param Number $billingPlanPrice
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanPrice($billingPlanPrice){
        $this->request['billingPlanPrice'] = $billingPlanPrice;
        return $this;
    }
    
    /**
     * Currency of billing plan
     * @param string $billingPlanCurrency
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function billingPlanCurrency($billingPlanCurrency){
        $this->request['billingPlanCurrency'] = $billingPlanCurrency;
        return $this;
    }
    
    /**
     * Whether to allow promo codes to be applied
     * @param bool $paymentAllowPromoCodes
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function paymentAllowPromoCodes($paymentAllowPromoCodes){
        $this->request['paymentAllowPromoCodes'] = $paymentAllowPromoCodes;
        return $this;
    }
    
    /**
     * Redemption URL of vouchering policy
     * @param string $voucheringPolicyRedemptionUrl
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function voucheringPolicyRedemptionUrl($voucheringPolicyRedemptionUrl){
        $this->request['voucheringPolicyRedemptionUrl'] = $voucheringPolicyRedemptionUrl;
        return $this;
    }
    
    /**
     * The schedule ID
     * @param string $scheduleId
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleId($scheduleId){
        $this->request['scheduleId'] = $scheduleId;
        return $this;
    }
    
    /**
     * The schedule billing model
     * @param string $scheduleBillingModel
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function scheduleBillingModel($scheduleBillingModel){
        $this->request['scheduleBillingModel'] = $scheduleBillingModel;
        return $this;
    }
    
    /**
     * The count of allowed shared subscription accounts
     * @param int $sharedAccountCount
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedAccountCount($sharedAccountCount){
        $this->request['sharedAccountCount'] = $sharedAccountCount;
        return $this;
    }
    
    /**
     * The shared subscription redemption url
     * @param string $sharedRedemptionUrl
     * @return updateGiftTermRequestTPPublisherTermGiftApi
     */
    public function sharedRedemptionUrl($sharedRedemptionUrl){
        $this->request['sharedRedemptionUrl'] = $sharedRedemptionUrl;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTerm
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['termId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termId' ) ] = $this->apiClient->toQueryValue($this->request['termId']);
        }
        
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['rid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'rid' ) ] = $this->apiClient->toQueryValue($this->request['rid']);
        }
        
        if (isset($this->request['billingPlanPeriod'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPeriod' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanPeriod']);
        }
        
        if (isset($this->request['billingPlanPrice'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanPrice' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanPrice']);
        }
        
        if (isset($this->request['billingPlanCurrency'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'billingPlanCurrency' ) ] = $this->apiClient->toQueryValue($this->request['billingPlanCurrency']);
        }
        
        if (isset($this->request['paymentAllowPromoCodes'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentAllowPromoCodes' ) ] = $this->apiClient->toQueryValue($this->request['paymentAllowPromoCodes']);
        }
        
        if (isset($this->request['voucheringPolicyRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'voucheringPolicyRedemptionUrl' ) ] = $this->apiClient->toQueryValue($this->request['voucheringPolicyRedemptionUrl']);
        }
        
        if (isset($this->request['scheduleId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleId' ) ] = $this->apiClient->toQueryValue($this->request['scheduleId']);
        }
        
        if (isset($this->request['scheduleBillingModel'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'scheduleBillingModel' ) ] = $this->apiClient->toQueryValue($this->request['scheduleBillingModel']);
        }
        
        if (isset($this->request['termType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'termType' ) ] = $this->apiClient->toQueryValue($this->request['termType']);
        }
        
        if (isset($this->request['sharedAccountCount'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedAccountCount' ) ] = $this->apiClient->toQueryValue($this->request['sharedAccountCount']);
        }
        
        if (isset($this->request['sharedRedemptionUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sharedRedemptionUrl' ) ] = $this->apiClient->toQueryValue($this->request['sharedRedemptionUrl']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/term/gift/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTerm');
        
    }
}
