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
 * The TPPublisherOfferTemplateUpdateApi class.
 */
class TPPublisherOfferTemplateUpdateApi  extends TPAPIBase {

    /**
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function updateContentFieldsRequest(){

        return new updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi($this->apiClient);
    }

}

/**
 * Updates offer template and variants content fields
 */
class updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Content field list in json format. For example [{\&quot;contentFieldId\&quot;:\&quot;id\&quot;,\&quot;name\&quot;:\&quot;name\&quot;,\&quot;description\&quot;:\&quot;description\&quot;,\&quot;value\&quot;:\&quot;value\&quot;,\&quot;deleted\&quot;:false}]
     * @param string $contentFieldList
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function contentFieldList($contentFieldList){
        $this->request['contentFieldList'] = $contentFieldList;
        return $this;
    }
    
    /**
     * Variants of the template in json format. For example [{ \&quot;pubId\&quot;: \&quot;id\&quot;, \&quot;name\&quot;: \&quot;name\&quot;, \&quot;description\&quot;: \&quot;description\&quot;, \&quot;variantContentFields\&quot;: [{ \&quot;contentFieldId\&quot;: \&quot;id\&quot;, \&quot;name\&quot;: \&quot;name\&quot;, \&quot;description\&quot;: \&quot;description\&quot;, \&quot;value\&quot;: \&quot;value\&quot;, \&quot;deleted\&quot;: false }] }]
     * @param string $variantList
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function variantList($variantList){
        $this->request['variantList'] = $variantList;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    
    /**
     * Perform a check before saving. Allowed values are \&quot;true\&quot; and \&quot;false\&quot;
     * @param bool $isValidate
     * @return updateContentFieldsRequestTPPublisherOfferTemplateUpdateApi
     */
    public function isValidate($isValidate){
        $this->request['isValidate'] = $isValidate;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['contentFieldList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentFieldList' ) ] = $this->apiClient->toQueryValue($this->request['contentFieldList']);
        }
        
        if (isset($this->request['variantList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'variantList' ) ] = $this->apiClient->toQueryValue($this->request['variantList']);
        }
        
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        if (isset($this->request['isValidate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'isValidate' ) ] = $this->apiClient->toQueryValue($this->request['isValidate']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/update/contentfields', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
