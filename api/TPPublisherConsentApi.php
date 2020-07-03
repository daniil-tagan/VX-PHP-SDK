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
 * The TPPublisherConsentApi class.
 */
class TPPublisherConsentApi  extends TPAPIBase {

    /**
     * @return getRequestTPPublisherConsentApi
     */
    public function getRequest(){

        return new getRequestTPPublisherConsentApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherConsentApi
     */
    public function listRequest(){

        return new listRequestTPPublisherConsentApi($this->apiClient);
    }

}

/**
 * Find consent box config
 */
class getRequestTPPublisherConsentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherConsentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Consent ID
     * @param string $consentId
     * @return getRequestTPPublisherConsentApi
     */
    public function consentId($consentId){
        $this->request['consentId'] = $consentId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherConsent
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['consentId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'consentId' ) ] = $this->apiClient->toQueryValue($this->request['consentId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/consent/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherConsent');
        
    }
}
/**
 * Find consent box configs
 */
class listRequestTPPublisherConsentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherConsentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherConsentApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherConsentApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Consent box type
     * @param string $type
     * @return listRequestTPPublisherConsentApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * Is consent checked by user
     * @param bool $enabled
     * @return listRequestTPPublisherConsentApi
     */
    public function enabled($enabled){
        $this->request['enabled'] = $enabled;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherConsentApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherConsentApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherConsentApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherConsent[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['enabled'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'enabled' ) ] = $this->apiClient->toQueryValue($this->request['enabled']);
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
        $response = $this->apiClient->callAPI('/publisher/consent/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherConsent', 'array');
        
    }
}
