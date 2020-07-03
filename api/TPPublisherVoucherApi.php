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
 * The TPPublisherVoucherApi class.
 */
class TPPublisherVoucherApi  extends TPAPIBase {

    /**
     * @return listRequestTPPublisherVoucherApi
     */
    public function listRequest(){

        return new listRequestTPPublisherVoucherApi($this->apiClient);
    }
    /**
     * @return resendRequestTPPublisherVoucherApi
     */
    public function resendRequest(){

        return new resendRequestTPPublisherVoucherApi($this->apiClient);
    }

}

/**
 * List vouchers
 */
class listRequestTPPublisherVoucherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherVoucherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return listRequestTPPublisherVoucherApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherVoucherApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherVoucherApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherVoucherApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherVoucherApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherVoucherApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherVoucher[]
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
        $response = $this->apiClient->callAPI('/publisher/voucher/list', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherVoucher', 'array');
        
    }
}
/**
 * Resend voucher with new redemption code
 */
class resendRequestTPPublisherVoucherApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return resendRequestTPPublisherVoucherApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * id for a voucher
     * @param string $pubId
     * @return resendRequestTPPublisherVoucherApi
     */
    public function pubId($pubId){
        $this->request['pubId'] = $pubId;
        return $this;
    }
    
    /**
     * 
     * @param string $sendDate
     * @return resendRequestTPPublisherVoucherApi
     */
    public function sendDate($sendDate){
        $this->request['sendDate'] = $sendDate;
        return $this;
    }
    
    /**
     * 
     * @param string $recipientMail
     * @return resendRequestTPPublisherVoucherApi
     */
    public function recipientMail($recipientMail){
        $this->request['recipientMail'] = $recipientMail;
        return $this;
    }
    
    /**
     * 
     * @param string $recipientName
     * @return resendRequestTPPublisherVoucherApi
     */
    public function recipientName($recipientName){
        $this->request['recipientName'] = $recipientName;
        return $this;
    }
    
    /**
     * 
     * @param string $message
     * @return resendRequestTPPublisherVoucherApi
     */
    public function message($message){
        $this->request['message'] = $message;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherVoucher
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['pubId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'pubId' ) ] = $this->apiClient->toQueryValue($this->request['pubId']);
        }
        
        if (isset($this->request['sendDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'sendDate' ) ] = $this->apiClient->toQueryValue($this->request['sendDate']);
        }
        
        if (isset($this->request['recipientName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'recipientName' ) ] = $this->apiClient->toQueryValue($this->request['recipientName']);
        }
        
        if (isset($this->request['recipientMail'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'recipientMail' ) ] = $this->apiClient->toQueryValue($this->request['recipientMail']);
        }
        
        if (isset($this->request['message'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'message' ) ] = $this->apiClient->toQueryValue($this->request['message']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/voucher/resend', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherVoucher');
        
    }
}
