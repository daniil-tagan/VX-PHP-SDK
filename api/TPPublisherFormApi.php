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
 * The TPPublisherFormApi class.
 */
class TPPublisherFormApi  extends TPAPIBase {

    /**
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function customFormSubmitInternalRequest(){

        return new customFormSubmitInternalRequestTPPublisherFormApi($this->apiClient);
    }

}

/**
 * 
 */
class customFormSubmitInternalRequestTPPublisherFormApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * 
     * @param string $aid
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * 
     * @param string $uid
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * 
     * @param string $customFields
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function customFields($customFields){
        $this->request['customFields'] = $customFields;
        return $this;
    }
    
    /**
     * 
     * @param string $formId
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function formId($formId){
        $this->request['formId'] = $formId;
        return $this;
    }
    
    /**
     * 
     * @param string $authorization
     * @return customFormSubmitInternalRequestTPPublisherFormApi
     */
    public function authorization($authorization){
        $this->request['authorization'] = $authorization;
        return $this;
    }
    
    /**
     * Execute request

     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['uid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'uid' ) ] = $this->apiClient->toQueryValue($this->request['uid']);
        }
        
        if (isset($this->request['customFields'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'customFields' ) ] = $this->apiClient->toQueryValue($this->request['customFields']);
        }
        
        if (isset($this->request['formId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'formId' ) ] = $this->apiClient->toQueryValue($this->request['formId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        if ($request['authorization']} != null) {
          $headerParams[ $this->apiClient->toQueryParameter( 'authorization' ) ] = $this->apiClient->toHeaderValue($request['authorization']);
        }
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/form/internal', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
