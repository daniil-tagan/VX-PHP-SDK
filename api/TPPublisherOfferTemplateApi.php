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
 * The TPPublisherOfferTemplateApi class.
 */
class TPPublisherOfferTemplateApi  extends TPAPIBase {

    /**
     * @return archiveRequestTPPublisherOfferTemplateApi
     */
    public function archiveRequest(){

        return new archiveRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function convertBoilerplateToOfferTemplateRequest(){

        return new convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherOfferTemplateApi
     */
    public function countRequest(){

        return new countRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function createRequest(){

        return new createRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function deleteRequest(){

        return new deleteRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return getDefaultCodeRequestTPPublisherOfferTemplateApi
     */
    public function getDefaultCodeRequest(){

        return new getDefaultCodeRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return getDuplicateRequestTPPublisherOfferTemplateApi
     */
    public function getDuplicateRequest(){

        return new getDuplicateRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return getHistoryRequestTPPublisherOfferTemplateApi
     */
    public function getHistoryRequest(){

        return new getHistoryRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function getRequest(){

        return new getRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function listBoilerplatesRequest(){

        return new listBoilerplatesRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function listByCategoryRequest(){

        return new listByCategoryRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function listRequest(){

        return new listRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return makeGlobalRequestTPPublisherOfferTemplateApi
     */
    public function makeGlobalRequest(){

        return new makeGlobalRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return restoreRequestTPPublisherOfferTemplateApi
     */
    public function restoreRequest(){

        return new restoreRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function updateFullRequest(){

        return new updateFullRequestTPPublisherOfferTemplateApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherOfferTemplateApi($this->apiClient);
    }

}

/**
 * Change status offer template to ARCHIVED
 */
class archiveRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return archiveRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return archiveRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return archiveRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
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
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/archive', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Converts boilerplate to offer template
 */
class convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The id of Category
     * @param string $categoryId
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function categoryId($categoryId){
        $this->request['categoryId'] = $categoryId;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return convertBoilerplateToOfferTemplateRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['name'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['categoryId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'categoryId' ) ] = $this->apiClient->toQueryValue($this->request['categoryId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/convertBoilerplateToTemplate', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Counts offer template
 */
class countRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Execute request
     * @return int
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/count', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Creates an offer template
 */
class createRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * The id of Category
     * @param string $categoryId
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function categoryId($categoryId){
        $this->request['categoryId'] = $categoryId;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return createRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
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
        
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['categoryId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'categoryId' ) ] = $this->apiClient->toQueryValue($this->request['categoryId']);
        }
        
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/create', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Delete offer template
 */
class deleteRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return deleteRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
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
        
        if (isset($this->request['offerTemplateId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/delete', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Gets a default code for the offer template 
 */
class getDefaultCodeRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getDefaultCodeRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return getDefaultCodeRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherTemplateConfig
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/defaultCode', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherTemplateConfig');
        
    }
}
/**
 * Gets a duplicate offer template
 */
class getDuplicateRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getDuplicateRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return getDuplicateRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return getDuplicateRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/duplicate', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Gets a full history of the offer template
 */
class getHistoryRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getHistoryRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return getHistoryRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateHistories
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/getHistory', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateHistories');
        
    }
}
/**
 * Gets an offer template
 */
class getRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return getRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/get', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Lists boilerplates by categories
 */
class listBoilerplatesRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Template categories
     * @param string[] $categories
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function categories($categories){
        $this->request['categories'] = $categories;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Template status (active/archived)
     * @param string $status
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Template type (default_offer/zuora_offer/newscycle_offer/template)
     * @param string $templateType
     * @return listBoilerplatesRequestTPPublisherOfferTemplateApi
     */
    public function templateType($templateType){
        $this->request['templateType'] = $templateType;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateCategories[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
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
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        if (isset($this->request['templateType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'templateType' ) ] = $this->apiClient->toQueryValue($this->request['templateType']);
        }
        
        if (isset($this->request['categories'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'categories' ) ] = $this->apiClient->toQueryValue($this->request['categories']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/listBoilerplates', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateCategories', 'array');
        
    }
}
/**
 * Lists offer templates by categories
 */
class listByCategoryRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Template categories
     * @param string[] $categories
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function categories($categories){
        $this->request['categories'] = $categories;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Template status (active/archived)
     * @param string $status
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Template type (default_offer/zuora_offer/newscycle_offer/template)
     * @param string $templateType
     * @return listByCategoryRequestTPPublisherOfferTemplateApi
     */
    public function templateType($templateType){
        $this->request['templateType'] = $templateType;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateCategories[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
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
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        if (isset($this->request['templateType'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'templateType' ) ] = $this->apiClient->toQueryValue($this->request['templateType']);
        }
        
        if (isset($this->request['categories'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'categories' ) ] = $this->apiClient->toQueryValue($this->request['categories']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/listByCategory', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateCategories', 'array');
        
    }
}
/**
 * Lists offer templates
 */
class listRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Template status. Allowed values are \&quot;active\&quot;, \&quot;archived\&quot;
     * @param string $status
     * @return listRequestTPPublisherOfferTemplateApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplate[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
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
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplate', 'array');
        
    }
}
/**
 * Make an offer template global
 */
class makeGlobalRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return makeGlobalRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return makeGlobalRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherOfferTemplateVersion
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/makeGlobal', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Change status offer template to ACTIVE
 */
class restoreRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return restoreRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return restoreRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return restoreRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
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
        
        if (isset($this->request['offerTemplateId'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'offerTemplateId' ) ] = $this->apiClient->toQueryValue($this->request['offerTemplateId']);
        }
        
        if (isset($this->request['historyComment'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/restore', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
    }
}
/**
 * Updates an offer template, version, external css list
 */
class updateFullRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The id of Category
     * @param string $categoryId
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function categoryId($categoryId){
        $this->request['categoryId'] = $categoryId;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * Thumbnail image URL
     * @param string $thumbnailImageUrl
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function thumbnailImageUrl($thumbnailImageUrl){
        $this->request['thumbnailImageUrl'] = $thumbnailImageUrl;
        return $this;
    }
    
    /**
     * Template save action. Allowed values are \&quot;save\&quot;, \&quot;new_version_only\&quot;, \&quot;new_version_and_publish\&quot;
     * @param string $action
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function action($action){
        $this->request['action'] = $action;
        return $this;
    }
    
    /**
     * The version name
     * @param string $versionName
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function versionName($versionName){
        $this->request['versionName'] = $versionName;
        return $this;
    }
    
    /**
     * Template version
     * @param int $version
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function version($version){
        $this->request['version'] = $version;
        return $this;
    }
    
    /**
     * The content1 type
     * @param string $content1Type
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function content1Type($content1Type){
        $this->request['content1Type'] = $content1Type;
        return $this;
    }
    
    /**
     * The content1 value
     * @param string $content1Value
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function content1Value($content1Value){
        $this->request['content1Value'] = $content1Value;
        return $this;
    }
    
    /**
     * The content2 type
     * @param string $content2Type
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function content2Type($content2Type){
        $this->request['content2Type'] = $content2Type;
        return $this;
    }
    
    /**
     * The content2 value
     * @param string $content2Value
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function content2Value($content2Value){
        $this->request['content2Value'] = $content2Value;
        return $this;
    }
    
    /**
     * External css list in json format. For example [{\&quot;pubId\&quot;:\&quot;id\&quot;,\&quot;position\&quot;:0,\&quot;title\&quot;:\&quot;title\&quot;,\&quot;url\&quot;:\&quot;url\&quot;,\&quot;status\&quot;:\&quot;active\&quot;}]
     * @param string $externalCssList
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function externalCssList($externalCssList){
        $this->request['externalCssList'] = $externalCssList;
        return $this;
    }
    
    /**
     * Content field list in json format. For example [{\&quot;contentFieldId\&quot;:\&quot;id\&quot;,\&quot;name\&quot;:\&quot;name\&quot;,\&quot;description\&quot;:\&quot;description\&quot;,\&quot;value\&quot;:\&quot;value\&quot;,\&quot;deleted\&quot;:false}]
     * @param string $contentFieldList
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function contentFieldList($contentFieldList){
        $this->request['contentFieldList'] = $contentFieldList;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return updateFullRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
        return $this;
    }
    
    /**
     * Perform a check before saving. Allowed values are \&quot;true\&quot; and \&quot;false\&quot;
     * @param bool $isValidate
     * @return updateFullRequestTPPublisherOfferTemplateApi
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
        
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['categoryId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'categoryId' ) ] = $this->apiClient->toQueryValue($this->request['categoryId']);
        }
        
        if (isset($this->request['thumbnailImageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'thumbnailImageUrl' ) ] = $this->apiClient->toQueryValue($this->request['thumbnailImageUrl']);
        }
        
        if (isset($this->request['action'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'action' ) ] = $this->apiClient->toQueryValue($this->request['action']);
        }
        
        if (isset($this->request['versionName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'versionName' ) ] = $this->apiClient->toQueryValue($this->request['versionName']);
        }
        
        if (isset($this->request['version'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'version' ) ] = $this->apiClient->toQueryValue($this->request['version']);
        }
        
        if (isset($this->request['content1Type'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content1Type' ) ] = $this->apiClient->toQueryValue($this->request['content1Type']);
        }
        
        if (isset($this->request['content1Value'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content1Value' ) ] = $this->apiClient->toQueryValue($this->request['content1Value']);
        }
        
        if (isset($this->request['content2Type'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content2Type' ) ] = $this->apiClient->toQueryValue($this->request['content2Type']);
        }
        
        if (isset($this->request['content2Value'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'content2Value' ) ] = $this->apiClient->toQueryValue($this->request['content2Value']);
        }
        
        if (isset($this->request['externalCssList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'externalCssList' ) ] = $this->apiClient->toQueryValue($this->request['externalCssList']);
        }
        
        if (isset($this->request['contentFieldList'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'contentFieldList' ) ] = $this->apiClient->toQueryValue($this->request['contentFieldList']);
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
        $response = $this->apiClient->callAPI('/publisher/offer/template/updatefull', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
/**
 * Updates an offer template
 */
class updateRequestTPPublisherOfferTemplateApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offer Template ID
     * @param string $offerTemplateId
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function offerTemplateId($offerTemplateId){
        $this->request['offerTemplateId'] = $offerTemplateId;
        return $this;
    }
    
    /**
     * The name
     * @param string $name
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function name($name){
        $this->request['name'] = $name;
        return $this;
    }
    
    /**
     * The description
     * @param string $description
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function description($description){
        $this->request['description'] = $description;
        return $this;
    }
    
    /**
     * The id of Category
     * @param string $categoryId
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function categoryId($categoryId){
        $this->request['categoryId'] = $categoryId;
        return $this;
    }
    
    /**
     * Thumbnail image URL
     * @param string $thumbnailImageUrl
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function thumbnailImageUrl($thumbnailImageUrl){
        $this->request['thumbnailImageUrl'] = $thumbnailImageUrl;
        return $this;
    }
    
    /**
     * Offer Template History Comment
     * @param string $historyComment
     * @return updateRequestTPPublisherOfferTemplateApi
     */
    public function historyComment($historyComment){
        $this->request['historyComment'] = $historyComment;
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
        
        if (isset($this->request['name'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'name' ) ] = $this->apiClient->toQueryValue($this->request['name']);
        }
        
        if (isset($this->request['description'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'description' ) ] = $this->apiClient->toQueryValue($this->request['description']);
        }
        
        if (isset($this->request['categoryId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'categoryId' ) ] = $this->apiClient->toQueryValue($this->request['categoryId']);
        }
        
        if (isset($this->request['thumbnailImageUrl'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'thumbnailImageUrl' ) ] = $this->apiClient->toQueryValue($this->request['thumbnailImageUrl']);
        }
        
        if (isset($this->request['historyComment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'historyComment' ) ] = $this->apiClient->toQueryValue($this->request['historyComment']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/offer/template/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherOfferTemplateVersion');
        
    }
}
