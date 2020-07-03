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
 * The TPPublisherAlgorithmContentApi class.
 */
class TPPublisherAlgorithmContentApi  extends TPAPIBase {

    /**
     * @return lockRequestTPPublisherAlgorithmContentApi
     */
    public function lockRequest(){

        return new lockRequestTPPublisherAlgorithmContentApi($this->apiClient);
    }
    /**
     * @return unlockRequestTPPublisherAlgorithmContentApi
     */
    public function unlockRequest(){

        return new unlockRequestTPPublisherAlgorithmContentApi($this->apiClient);
    }
    /**
     * @return unwatchRequestTPPublisherAlgorithmContentApi
     */
    public function unwatchRequest(){

        return new unwatchRequestTPPublisherAlgorithmContentApi($this->apiClient);
    }
    /**
     * @return watchRequestTPPublisherAlgorithmContentApi
     */
    public function watchRequest(){

        return new watchRequestTPPublisherAlgorithmContentApi($this->apiClient);
    }

}

/**
 * Notifies tinypass to key
 */
class lockRequestTPPublisherAlgorithmContentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return lockRequestTPPublisherAlgorithmContentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Id of content
     * @param string $contentId
     * @return lockRequestTPPublisherAlgorithmContentApi
     */
    public function contentId($contentId){
        $this->request['contentId'] = $contentId;
        return $this;
    }
    
    /**
     * URL of content
     * @param string $contentUrl
     * @return lockRequestTPPublisherAlgorithmContentApi
     */
    public function contentUrl($contentUrl){
        $this->request['contentUrl'] = $contentUrl;
        return $this;
    }
    
    /**
     * Metadata
     * @param string $metadata
     * @return lockRequestTPPublisherAlgorithmContentApi
     */
    public function metadata($metadata){
        $this->request['metadata'] = $metadata;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherReportResponse
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentId' ) ] = $this->apiClient->toQueryValue($this->request['contentId']);
        }
        
        if (isset($this->request['contentUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentUrl' ) ] = $this->apiClient->toQueryValue($this->request['contentUrl']);
        }
        
        if (isset($this->request['metadata'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'metadata' ) ] = $this->apiClient->toQueryValue($this->request['metadata']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/algorithm/content/lock', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherReportResponse');
        
    }
}
/**
 * Notifies tinypass to unkey
 */
class unlockRequestTPPublisherAlgorithmContentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return unlockRequestTPPublisherAlgorithmContentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Id of content
     * @param string $contentId
     * @return unlockRequestTPPublisherAlgorithmContentApi
     */
    public function contentId($contentId){
        $this->request['contentId'] = $contentId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherReportResponse
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentId' ) ] = $this->apiClient->toQueryValue($this->request['contentId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/algorithm/content/unlock', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherReportResponse');
        
    }
}
/**
 * Notifies tinypass to unwatch
 */
class unwatchRequestTPPublisherAlgorithmContentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return unwatchRequestTPPublisherAlgorithmContentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Id of content
     * @param string $contentId
     * @return unwatchRequestTPPublisherAlgorithmContentApi
     */
    public function contentId($contentId){
        $this->request['contentId'] = $contentId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherReportResponse
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentId' ) ] = $this->apiClient->toQueryValue($this->request['contentId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/algorithm/content/unwatch', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherReportResponse');
        
    }
}
/**
 * Notifies tinypass to watch
 */
class watchRequestTPPublisherAlgorithmContentApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return watchRequestTPPublisherAlgorithmContentApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Id of content
     * @param string $contentId
     * @return watchRequestTPPublisherAlgorithmContentApi
     */
    public function contentId($contentId){
        $this->request['contentId'] = $contentId;
        return $this;
    }
    
    /**
     * URL of content
     * @param string $contentUrl
     * @return watchRequestTPPublisherAlgorithmContentApi
     */
    public function contentUrl($contentUrl){
        $this->request['contentUrl'] = $contentUrl;
        return $this;
    }
    
    /**
     * Metadata
     * @param string $metadata
     * @return watchRequestTPPublisherAlgorithmContentApi
     */
    public function metadata($metadata){
        $this->request['metadata'] = $metadata;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherReportResponse
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['contentId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentId' ) ] = $this->apiClient->toQueryValue($this->request['contentId']);
        }
        
        if (isset($this->request['contentUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentUrl' ) ] = $this->apiClient->toQueryValue($this->request['contentUrl']);
        }
        
        if (isset($this->request['metadata'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'metadata' ) ] = $this->apiClient->toQueryValue($this->request['metadata']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/algorithm/content/watch', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherReportResponse');
        
    }
}
