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
 * The TPPublisherSubscriptionApi class.
 */
class TPPublisherSubscriptionApi  extends TPAPIBase {

    /**
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function cancelSubscriptionRequest(){

        return new cancelSubscriptionRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return countRequestTPPublisherSubscriptionApi
     */
    public function countRequest(){

        return new countRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return isPartiallyRefundableRequestTPPublisherSubscriptionApi
     */
    public function isPartiallyRefundableRequest(){

        return new isPartiallyRefundableRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function listRequest(){

        return new listRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchRequest(){

        return new searchRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function statsRequest(){

        return new statsRequestTPPublisherSubscriptionApi($this->apiClient);
    }
    /**
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function updateRequest(){

        return new updateRequestTPPublisherSubscriptionApi($this->apiClient);
    }

}

/**
 * Cancels a user&#39;s subscription
 */
class cancelSubscriptionRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Refund last payment
     * @param bool $refundLastPayment
     * @return cancelSubscriptionRequestTPPublisherSubscriptionApi
     */
    public function refundLastPayment($refundLastPayment){
        $this->request['refundLastPayment'] = $refundLastPayment;
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
        
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        if (isset($this->request['refundLastPayment'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'refundLastPayment' ) ] = $this->apiClient->toQueryValue($this->request['refundLastPayment']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/cancel', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Count active subscriptions
 */
class countRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return countRequestTPPublisherSubscriptionApi
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
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/count', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'int');
        
    }
}
/**
 * Count active subscriptions
 */
class isPartiallyRefundableRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return isPartiallyRefundableRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User subscription id
     * @param string $subscriptionId
     * @return isPartiallyRefundableRequestTPPublisherSubscriptionApi
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
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/isPartiallyRefundable', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
/**
 * Lists subscriptions.
 */
class listRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * The type
     * @param string $type
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function type($type){
        $this->request['type'] = $type;
        return $this;
    }
    
    /**
     * The start date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter.
     * @param string $startDate
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function startDate($startDate){
        $this->request['startDate'] = $startDate;
        return $this;
    }
    
    /**
     * The end date. If you use a date-range filter without &#39;select_by&#39; parameter, method will return result filtered by &#39;update date&#39;.To specify filter field use &#39;select_by&#39; parameter.
     * @param string $endDate
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function endDate($endDate){
        $this->request['endDate'] = $endDate;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Filter subscription date field
     * @param string $selectBy
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function selectBy($selectBy){
        $this->request['selectBy'] = $selectBy;
        return $this;
    }
    
    /**
     * Subscription status
     * @param string $status
     * @return listRequestTPPublisherSubscriptionApi
     */
    public function status($status){
        $this->request['status'] = $status;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUserSubscription[]
     */
    public function execute(){
        $queryParams = array();
        
        if (isset($this->request['aid'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['type'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'type' ) ] = $this->apiClient->toQueryValue($this->request['type']);
        }
        
        if (isset($this->request['startDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'startDate' ) ] = $this->apiClient->toQueryValue($this->request['startDate']);
        }
        
        if (isset($this->request['endDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'endDate' ) ] = $this->apiClient->toQueryValue($this->request['endDate']);
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
        
        if (isset($this->request['selectBy'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'selectBy' ) ] = $this->apiClient->toQueryValue($this->request['selectBy']);
        }
        
        if (isset($this->request['status'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'status' ) ] = $this->apiClient->toQueryValue($this->request['status']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/list', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUserSubscription', 'array');
        
    }
}
/**
 * Searches for user subscriptions.
 */
class searchRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Search for new subscriptions
     * @param bool $searchNewSubscriptions
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchNewSubscriptions($searchNewSubscriptions){
        $this->request['searchNewSubscriptions'] = $searchNewSubscriptions;
        return $this;
    }
    
    /**
     * Date to be used in new subscriptions search, required parameter search_new_subscriptions
     * @param string $newSubscriptionsCreatedFrom
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function newSubscriptionsCreatedFrom($newSubscriptionsCreatedFrom){
        $this->request['newSubscriptionsCreatedFrom'] = $newSubscriptionsCreatedFrom;
        return $this;
    }
    
    /**
     * Date to be used in new subscriptions search, required parameter search_new_subscriptions
     * @param string $newSubscriptionsCreatedTo
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function newSubscriptionsCreatedTo($newSubscriptionsCreatedTo){
        $this->request['newSubscriptionsCreatedTo'] = $newSubscriptionsCreatedTo;
        return $this;
    }
    
    /**
     * Search for active subscriptions
     * @param bool $searchActiveNowSubscriptions
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchActiveNowSubscriptions($searchActiveNowSubscriptions){
        $this->request['searchActiveNowSubscriptions'] = $searchActiveNowSubscriptions;
        return $this;
    }
    
    /**
     * Statuses for new subscriptions search (active, failedAndRetry), required parameter search_active_now_subscriptions
     * @param string[] $activeNowSubscriptionsStatuses
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function activeNowSubscriptionsStatuses($activeNowSubscriptionsStatuses){
        $this->request['activeNowSubscriptionsStatuses'] = $activeNowSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * Search for inactive subscriptions
     * @param bool $searchInactiveSubscriptions
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchInactiveSubscriptions($searchInactiveSubscriptions){
        $this->request['searchInactiveSubscriptions'] = $searchInactiveSubscriptions;
        return $this;
    }
    
    /**
     * Statuses for inactive subscriptions search (cancelled, paymentFailure, expired, completed, upgraded), required parameter search_inactive_subscriptions
     * @param string[] $inactiveSubscriptionsStatuses
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function inactiveSubscriptionsStatuses($inactiveSubscriptionsStatuses){
        $this->request['inactiveSubscriptionsStatuses'] = $inactiveSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * Date to be used in inactive subscriptions search, required parameter search_inactive_subscriptions
     * @param string $subscriptionsInactiveFrom
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsInactiveFrom($subscriptionsInactiveFrom){
        $this->request['subscriptionsInactiveFrom'] = $subscriptionsInactiveFrom;
        return $this;
    }
    
    /**
     * Date to be used in inactive subscriptions search, required parameter search_inactive_subscriptions
     * @param string $subscriptionsInactiveTo
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsInactiveTo($subscriptionsInactiveTo){
        $this->request['subscriptionsInactiveTo'] = $subscriptionsInactiveTo;
        return $this;
    }
    
    /**
     * Search for updated subscriptions
     * @param bool $searchUpdatedSubscriptions
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchUpdatedSubscriptions($searchUpdatedSubscriptions){
        $this->request['searchUpdatedSubscriptions'] = $searchUpdatedSubscriptions;
        return $this;
    }
    
    /**
     * Status for updated subscriptions search (renewed), required parameter search_updated_subscriptions
     * @param string[] $updatedSubscriptionsStatuses
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function updatedSubscriptionsStatuses($updatedSubscriptionsStatuses){
        $this->request['updatedSubscriptionsStatuses'] = $updatedSubscriptionsStatuses;
        return $this;
    }
    
    /**
     * Date to be used in updated subscriptions search, required parameter search_updated_subscriptions
     * @param string $subscriptionsUpdatedFrom
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsUpdatedFrom($subscriptionsUpdatedFrom){
        $this->request['subscriptionsUpdatedFrom'] = $subscriptionsUpdatedFrom;
        return $this;
    }
    
    /**
     * Date to be used in updated subscriptions search, required parameter search_updated_subscriptions
     * @param string $subscriptionsUpdatedTo
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsUpdatedTo($subscriptionsUpdatedTo){
        $this->request['subscriptionsUpdatedTo'] = $subscriptionsUpdatedTo;
        return $this;
    }
    
    /**
     * Is filter by auto renewing subscriptions enabled
     * @param bool $searchAutoRenewingSubscriptions
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchAutoRenewingSubscriptions($searchAutoRenewingSubscriptions){
        $this->request['searchAutoRenewingSubscriptions'] = $searchAutoRenewingSubscriptions;
        return $this;
    }
    
    /**
     * Search for auto-renewing subscriptions, required parameter search_auto_renewing_subscriptions
     * @param bool $subscriptionsAutoRenewing
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsAutoRenewing($subscriptionsAutoRenewing){
        $this->request['subscriptionsAutoRenewing'] = $subscriptionsAutoRenewing;
        return $this;
    }
    
    /**
     * Is filter by next billing date enabled
     * @param bool $searchSubscriptionsByNextBillingDate
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchSubscriptionsByNextBillingDate($searchSubscriptionsByNextBillingDate){
        $this->request['searchSubscriptionsByNextBillingDate'] = $searchSubscriptionsByNextBillingDate;
        return $this;
    }
    
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateFrom
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsNextBillingDateFrom($subscriptionsNextBillingDateFrom){
        $this->request['subscriptionsNextBillingDateFrom'] = $subscriptionsNextBillingDateFrom;
        return $this;
    }
    
    /**
     * Date to be used in search for subscriptions by next billing date, required parameter search_subscriptions_by_next_billing_date
     * @param string $subscriptionsNextBillingDateTo
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsNextBillingDateTo($subscriptionsNextBillingDateTo){
        $this->request['subscriptionsNextBillingDateTo'] = $subscriptionsNextBillingDateTo;
        return $this;
    }
    
    /**
     * Is filter by terms enabled
     * @param bool $searchSubscriptionsByTerms
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function searchSubscriptionsByTerms($searchSubscriptionsByTerms){
        $this->request['searchSubscriptionsByTerms'] = $searchSubscriptionsByTerms;
        return $this;
    }
    
    /**
     * Subscription term pubId list, required parameter search_subscriptions_by_terms
     * @param string[] $subscriptionsTerms
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsTerms($subscriptionsTerms){
        $this->request['subscriptionsTerms'] = $subscriptionsTerms;
        return $this;
    }
    
    /**
     * Subscription term type list (payment, external, gift), required parameter search_subscriptions_by_terms
     * @param string[] $subscriptionsTermTypes
     * @return searchRequestTPPublisherSubscriptionApi
     */
    public function subscriptionsTermTypes($subscriptionsTermTypes){
        $this->request['subscriptionsTermTypes'] = $subscriptionsTermTypes;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherSubscriptionLogItem[]
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
        
        if (isset($this->request['searchNewSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchNewSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchNewSubscriptions']);
        }
        
        if (isset($this->request['newSubscriptionsCreatedFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedFrom' ) ] = $this->apiClient->toQueryValue($this->request['newSubscriptionsCreatedFrom']);
        }
        
        if (isset($this->request['newSubscriptionsCreatedTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'newSubscriptionsCreatedTo' ) ] = $this->apiClient->toQueryValue($this->request['newSubscriptionsCreatedTo']);
        }
        
        if (isset($this->request['searchActiveNowSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchActiveNowSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchActiveNowSubscriptions']);
        }
        
        if (isset($this->request['activeNowSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'activeNowSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['activeNowSubscriptionsStatuses']);
        }
        
        if (isset($this->request['searchInactiveSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchInactiveSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchInactiveSubscriptions']);
        }
        
        if (isset($this->request['inactiveSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'inactiveSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['inactiveSubscriptionsStatuses']);
        }
        
        if (isset($this->request['subscriptionsInactiveFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsInactiveFrom']);
        }
        
        if (isset($this->request['subscriptionsInactiveTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsInactiveTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsInactiveTo']);
        }
        
        if (isset($this->request['searchUpdatedSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchUpdatedSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchUpdatedSubscriptions']);
        }
        
        if (isset($this->request['updatedSubscriptionsStatuses'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'updatedSubscriptionsStatuses' ) ] = $this->apiClient->toQueryValue($this->request['updatedSubscriptionsStatuses']);
        }
        
        if (isset($this->request['subscriptionsUpdatedFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsUpdatedFrom']);
        }
        
        if (isset($this->request['subscriptionsUpdatedTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsUpdatedTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsUpdatedTo']);
        }
        
        if (isset($this->request['searchAutoRenewingSubscriptions'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchAutoRenewingSubscriptions' ) ] = $this->apiClient->toQueryValue($this->request['searchAutoRenewingSubscriptions']);
        }
        
        if (isset($this->request['subscriptionsAutoRenewing'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsAutoRenewing' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsAutoRenewing']);
        }
        
        if (isset($this->request['searchSubscriptionsByNextBillingDate'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByNextBillingDate' ) ] = $this->apiClient->toQueryValue($this->request['searchSubscriptionsByNextBillingDate']);
        }
        
        if (isset($this->request['subscriptionsNextBillingDateFrom'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateFrom' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsNextBillingDateFrom']);
        }
        
        if (isset($this->request['subscriptionsNextBillingDateTo'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsNextBillingDateTo' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsNextBillingDateTo']);
        }
        
        if (isset($this->request['searchSubscriptionsByTerms'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'searchSubscriptionsByTerms' ) ] = $this->apiClient->toQueryValue($this->request['searchSubscriptionsByTerms']);
        }
        
        if (isset($this->request['subscriptionsTerms'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsTerms' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsTerms']);
        }
        
        if (isset($this->request['subscriptionsTermTypes'])) {
            $queryParams[ $this->apiClient->toQueryParameter( 'subscriptionsTermTypes' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionsTermTypes']);
        }
        
        $formParams = array();
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/search', 'GET', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherSubscriptionLogItem', 'array');
        
    }
}
/**
 * Lists subscriptions summary stats
 */
class statsRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * User&#39;s uid
     * @param string $uid
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function uid($uid){
        $this->request['uid'] = $uid;
        return $this;
    }
    
    /**
     * Offset from which to start returning results
     * @param int $offset
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function offset($offset){
        $this->request['offset'] = $offset;
        return $this;
    }
    
    /**
     * Maximum index of returned results
     * @param int $limit
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function limit($limit){
        $this->request['limit'] = $limit;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Field to order by
     * @param string $orderBy
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction (asc/desc)
     * @param string $orderDirection
     * @return statsRequestTPPublisherSubscriptionApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherUserSubscriptionDto[]
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
        $response = $this->apiClient->callAPI('/publisher/subscription/stats', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherUserSubscriptionDto', 'array');
        
    }
}
/**
 * Updates a user&#39;s subscription
 */
class updateRequestTPPublisherSubscriptionApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Subscription id
     * @param string $subscriptionId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function subscriptionId($subscriptionId){
        $this->request['subscriptionId'] = $subscriptionId;
        return $this;
    }
    
    /**
     * Date of next bill
     * @param string $nextBillDate
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function nextBillDate($nextBillDate){
        $this->request['nextBillDate'] = $nextBillDate;
        return $this;
    }
    
    /**
     * Subscription auto renew
     * @param bool $autoRenew
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function autoRenew($autoRenew){
        $this->request['autoRenew'] = $autoRenew;
        return $this;
    }
    
    /**
     * Payment method id
     * @param string $paymentMethodId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function paymentMethodId($paymentMethodId){
        $this->request['paymentMethodId'] = $paymentMethodId;
        return $this;
    }
    
    /**
     * Public id of specific user address
     * @param string $userAddressId
     * @return updateRequestTPPublisherSubscriptionApi
     */
    public function userAddressId($userAddressId){
        $this->request['userAddressId'] = $userAddressId;
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
        
        if (isset($this->request['subscriptionId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'subscriptionId' ) ] = $this->apiClient->toQueryValue($this->request['subscriptionId']);
        }
        
        if (isset($this->request['nextBillDate'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'nextBillDate' ) ] = $this->apiClient->toQueryValue($this->request['nextBillDate']);
        }
        
        if (isset($this->request['autoRenew'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'autoRenew' ) ] = $this->apiClient->toQueryValue($this->request['autoRenew']);
        }
        
        if (isset($this->request['paymentMethodId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'paymentMethodId' ) ] = $this->apiClient->toQueryValue($this->request['paymentMethodId']);
        }
        
        if (isset($this->request['userAddressId'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'userAddressId' ) ] = $this->apiClient->toQueryValue($this->request['userAddressId']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/subscription/update', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'bool');
        
    }
}
