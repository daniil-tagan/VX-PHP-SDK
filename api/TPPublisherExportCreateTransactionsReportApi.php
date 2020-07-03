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
 * The TPPublisherExportCreateTransactionsReportApi class.
 */
class TPPublisherExportCreateTransactionsReportApi  extends TPAPIBase {

    /**
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function createTransactionsReportTZRequest(){

        return new createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi($this->apiClient);
    }

}

/**
 * Create downloadable transactions report with refunds and run it. Dates with time offset.
 */
class createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi  extends TPAPIBase {
    protected $request = array();
    
    /**
     * Application aid
     * @param string $aid
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function aid($aid){
        $this->request['aid'] = $aid;
        return $this;
    }
    
    /**
     * Downloadable report name
     * @param string $exportName
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function exportName($exportName){
        $this->request['exportName'] = $exportName;
        return $this;
    }
    
    /**
     * Transactions type (&#39;all&#39;, &#39;purchases&#39; ,&#39;refunds&#39;). Default value is &#39;purchases&#39;
     * @param string $transactionsType
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function transactionsType($transactionsType){
        $this->request['transactionsType'] = $transactionsType;
        return $this;
    }
    
    /**
     * Field to order by. Possible values: payment_date
     * @param string $orderBy
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function orderBy($orderBy){
        $this->request['orderBy'] = $orderBy;
        return $this;
    }
    
    /**
     * Order direction. Possible values: asc, desc
     * @param string $orderDirection
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function orderDirection($orderDirection){
        $this->request['orderDirection'] = $orderDirection;
        return $this;
    }
    
    /**
     * Search value
     * @param string $q
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function q($q){
        $this->request['q'] = $q;
        return $this;
    }
    
    /**
     * Date from
     * @param string $dateFrom
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function dateFrom($dateFrom){
        $this->request['dateFrom'] = $dateFrom;
        return $this;
    }
    
    /**
     * Date to
     * @param string $dateTo
     * @return createTransactionsReportTZRequestTPPublisherExportCreateTransactionsReportApi
     */
    public function dateTo($dateTo){
        $this->request['dateTo'] = $dateTo;
        return $this;
    }
    
    /**
     * Execute request
     * @return TPPublisherExport
     */
    public function execute(){
        $queryParams = array();
        
        $formParams = array();
        
        if (isset($this->request['aid'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'aid' ) ] = $this->apiClient->toQueryValue($this->request['aid']);
        }
        
        if (isset($this->request['exportName'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'exportName' ) ] = $this->apiClient->toQueryValue($this->request['exportName']);
        }
        
        if (isset($this->request['transactionsType'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'transactionsType' ) ] = $this->apiClient->toQueryValue($this->request['transactionsType']);
        }
        
        if (isset($this->request['orderBy'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderBy' ) ] = $this->apiClient->toQueryValue($this->request['orderBy']);
        }
        
        if (isset($this->request['orderDirection'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'orderDirection' ) ] = $this->apiClient->toQueryValue($this->request['orderDirection']);
        }
        
        if (isset($this->request['q'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'q' ) ] = $this->apiClient->toQueryValue($this->request['q']);
        }
        
        if (isset($this->request['dateFrom'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateFrom' ) ] = $this->apiClient->toQueryValue($this->request['dateFrom']);
        }
        
        if (isset($this->request['dateTo'])) {
            $formParams[ $this->apiClient->toQueryParameter( 'dateTo' ) ] = $this->apiClient->toQueryValue($this->request['dateTo']);
        }
        
        $headerParams = array();
        $headerParams['Accept'] = 'application/json';
        $headerParams['Content-Type'] = '';
        
        
        // make the API Call
        $response = $this->apiClient->callAPI('/publisher/export/create/transactionsReport/v2', 'POST', $queryParams, $headerParams, $formParams);

        if ($response->code != 0) {
            return $response;
        }

        
        return $this->apiClient->deserialize($response, 'TPPublisherExport');
        
    }
}
