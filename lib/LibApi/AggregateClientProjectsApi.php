<?php
/**
 * AggregateClientProjectsApi
 * PHP version 7.2
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * The version of the OpenAPI document: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace ChronoSheetsClient\ChronoSheetsClientLibApi;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChronoSheetsClient\ApiException;
use ChronoSheetsClient\Configuration;
use ChronoSheetsClient\HeaderSelector;
use ChronoSheetsClient\ObjectSerializer;

/**
 * AggregateClientProjectsApi Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AggregateClientProjectsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation aggregateClientProjectsGetAggregateClientProjects
     *
     * Get client and project information, aggregated.    Requires the 'SubmitTimesheets' or 'ManageClientsAndProjects' permissions.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient
     */
    public function aggregateClientProjectsGetAggregateClientProjects($xChronosheetsAuth)
    {
        list($response) = $this->aggregateClientProjectsGetAggregateClientProjectsWithHttpInfo($xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation aggregateClientProjectsGetAggregateClientProjectsWithHttpInfo
     *
     * Get client and project information, aggregated.    Requires the 'SubmitTimesheets' or 'ManageClientsAndProjects' permissions.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient, HTTP status code, HTTP response headers (array of strings)
     */
    public function aggregateClientProjectsGetAggregateClientProjectsWithHttpInfo($xChronosheetsAuth)
    {
        $request = $this->aggregateClientProjectsGetAggregateClientProjectsRequest($xChronosheetsAuth);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation aggregateClientProjectsGetAggregateClientProjectsAsync
     *
     * Get client and project information, aggregated.    Requires the 'SubmitTimesheets' or 'ManageClientsAndProjects' permissions.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregateClientProjectsGetAggregateClientProjectsAsync($xChronosheetsAuth)
    {
        return $this->aggregateClientProjectsGetAggregateClientProjectsAsyncWithHttpInfo($xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation aggregateClientProjectsGetAggregateClientProjectsAsyncWithHttpInfo
     *
     * Get client and project information, aggregated.    Requires the 'SubmitTimesheets' or 'ManageClientsAndProjects' permissions.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function aggregateClientProjectsGetAggregateClientProjectsAsyncWithHttpInfo($xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseListAggregateClient';
        $request = $this->aggregateClientProjectsGetAggregateClientProjectsRequest($xChronosheetsAuth);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'aggregateClientProjectsGetAggregateClientProjects'
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function aggregateClientProjectsGetAggregateClientProjectsRequest($xChronosheetsAuth)
    {
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling aggregateClientProjectsGetAggregateClientProjects'
            );
        }

        $resourcePath = '/AggregateClientProjects/GetAggregateClientProjects';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($xChronosheetsAuth !== null) {
            $headerParams['x-chronosheets-auth'] = ObjectSerializer::toHeaderValue($xChronosheetsAuth);
        }



        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }


        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
