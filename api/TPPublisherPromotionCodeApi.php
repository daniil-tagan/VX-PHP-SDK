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
 * The TPPublisherPromotionCodeApi class.
 */
class TPPublisherPromotionCodeApi  extends TPAPIBase {

    /**
     * @return countRequestTPPublisherPromotionCodeApi
     */
    public function countRequest(){

        return new countRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherPromotionCodeApi
     */
    public function createRequest(){

        return new createRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherPromotionCodeApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function exportRequest(){

        return new exportRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherPromotionCodeApi
     */
    public function getRequest(){

        return new getRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function listRequest(){

        return new listRequestTPPublisherPromotionCodeApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherPromotionCodeApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherPromotionCodeApi($this->apiClient);
    }

}

/**
 * Get total number of promo codes
 */
class countRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return countRequestTPPublisherPromotionCodeApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return countRequestTPPublisherPromotionCodeApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Promo code state
     * @param string $state
     * @return countRequestTPPublisherPromotionCodeApi
     */
    public function state($state){
        $this->request['state'] = $state;
        return $this;
    }
    
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['q'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['state'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'state' ) ] = $this->apiClient->toQueryValue($this->request['state']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Create promo code
 */
class createRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return createRequestTPPublisherPromotionCodeApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Promo code
     * @param string $code
     * @return createRequestTPPublisherPromotionCodeApi
     */
    public function code($code){
        $this->request['code'] = $code;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromoCode
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['code'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'code' ) ] = $this->apiClient->toQueryValue($this->request['code']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/create', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromoCode');
        
    }
}
/**
 * Delete a promo code 
 */
class deleteRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promo code id
     * @param string[] $promoCodeId
     * @return deleteRequestTPPublisherPromotionCodeApi
     */
    public function promoCodeId($promoCodeId){
        $this->request['promoCodeId'] = $promoCodeId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return deleteRequestTPPublisherPromotionCodeApi
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
        
        if (isset($this->request['promoCodeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promoCodeId' ) ] = $this->apiClient->toQueryValue($this->request['promoCodeId']);
        }
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Create new downloadable promo codes report
 */
class exportRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Promo code state
     * @param string[] $state
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function state($state){
        $this->request['state'] = $state;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return exportRequestTPPublisherPromotionCodeApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['exportName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->apiClient->toQueryValue($this->request['exportName']);
        }
        
        if (isset($this->request['state'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'state' ) ] = $this->apiClient->toQueryValue($this->request['state']);
        }
        
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['offset'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offset' ) ] = $this->apiClient->toQueryValue($this->request['offset']);
        }
        
        if (isset($this->request['limit'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'limit' ) ] = $this->apiClient->toQueryValue($this->request['limit']);
        }
        
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/export', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
/**
 * Get a promo code
 */
class getRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promo code id
     * @param string $promoCodeId
     * @return getRequestTPPublisherPromotionCodeApi
     */
    public function promoCodeId($promoCodeId){
        $this->request['promoCodeId'] = $promoCodeId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromoCode
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promoCodeId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promoCodeId' ) ] = $this->apiClient->toQueryValue($this->request['promoCodeId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromoCode');
        
    }
}
/**
 * List promo codes
 */
class listRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Promo code state
     * @param string[] $state
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function state($state){
        $this->request['state'] = $state;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherPromotionCodeApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromoCode[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['promotionId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['state'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'state' ) ] = $this->apiClient->toQueryValue($this->request['state']);
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
        $response = $this->apiClient->callAPI('/publisher/promotion/code/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromoCode', 'array');
        
    }
}
/**
 * Update a promo code
 */
class updateRequestTPPublisherPromotionCodeApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Promo code id
     * @param string $promoCodeId
     * @return updateRequestTPPublisherPromotionCodeApi
     */
    public function promoCodeId($promoCodeId){
        $this->request['promoCodeId'] = $promoCodeId;
        return $this;
    }
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherPromotionCodeApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Promotion id
     * @param string $promotionId
     * @return updateRequestTPPublisherPromotionCodeApi
     */
    public function promotionId($promotionId){
        $this->request['promotionId'] = $promotionId;
        return $this;
    }
    
    /**
     * Promo code
     * @param string $code
     * @return updateRequestTPPublisherPromotionCodeApi
     */
    public function code($code){
        $this->request['code'] = $code;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherPromoCode
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['promoCodeId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promoCodeId' ) ] = $this->apiClient->toQueryValue($this->request['promoCodeId']);
        }
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['promotionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'promotionId' ) ] = $this->apiClient->toQueryValue($this->request['promotionId']);
        }
        
        if (isset($this->request['code'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'code' ) ] = $this->apiClient->toQueryValue($this->request['code']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/promotion/code/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherPromoCode');
        
    }
}
