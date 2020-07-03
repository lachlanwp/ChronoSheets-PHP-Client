<?php
/**
 * OrganisationApi
 * PHP version 5
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
 * OpenAPI Generator version: 4.3.1
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
 * OrganisationApi Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OrganisationApi
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
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
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
     * Operation organisationGetOrganisation
     *
     * Get your organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation
     */
    public function organisationGetOrganisation($xChronosheetsAuth)
    {
        list($response) = $this->organisationGetOrganisationWithHttpInfo($xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation organisationGetOrganisationWithHttpInfo
     *
     * Get your organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation, HTTP status code, HTTP response headers (array of strings)
     */
    public function organisationGetOrganisationWithHttpInfo($xChronosheetsAuth)
    {
        $request = $this->organisationGetOrganisationRequest($xChronosheetsAuth);

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
                    if ('\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation';
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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organisationGetOrganisationAsync
     *
     * Get your organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGetOrganisationAsync($xChronosheetsAuth)
    {
        return $this->organisationGetOrganisationAsyncWithHttpInfo($xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organisationGetOrganisationAsyncWithHttpInfo
     *
     * Get your organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationGetOrganisationAsyncWithHttpInfo($xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseOrganisation';
        $request = $this->organisationGetOrganisationRequest($xChronosheetsAuth);

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
     * Create request for operation 'organisationGetOrganisation'
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organisationGetOrganisationRequest($xChronosheetsAuth)
    {
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling organisationGetOrganisation'
            );
        }

        $resourcePath = '/Organisation/GetOrganisation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($xChronosheetsAuth !== null) {
            $headerParams['x-chronosheets-auth'] = ObjectSerializer::toHeaderValue($xChronosheetsAuth);
        }


        // body params
        $_tempBody = null;

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
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
     * Operation organisationUpdateOrganisation
     *
     * Update an organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateOrganisationRequest $request An Update Organsation Request object containing updated fields.  Make sure to specify the Organsation Id in the request object so that ChronoSheets knows which Organsation to update (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse
     */
    public function organisationUpdateOrganisation($xChronosheetsAuth, $request)
    {
        list($response) = $this->organisationUpdateOrganisationWithHttpInfo($xChronosheetsAuth, $request);
        return $response;
    }

    /**
     * Operation organisationUpdateOrganisationWithHttpInfo
     *
     * Update an organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateOrganisationRequest $request An Update Organsation Request object containing updated fields.  Make sure to specify the Organsation Id in the request object so that ChronoSheets knows which Organsation to update (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function organisationUpdateOrganisationWithHttpInfo($xChronosheetsAuth, $request)
    {
        $request = $this->organisationUpdateOrganisationRequest($xChronosheetsAuth, $request);

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
                    if ('\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse';
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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation organisationUpdateOrganisationAsync
     *
     * Update an organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateOrganisationRequest $request An Update Organsation Request object containing updated fields.  Make sure to specify the Organsation Id in the request object so that ChronoSheets knows which Organsation to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationUpdateOrganisationAsync($xChronosheetsAuth, $request)
    {
        return $this->organisationUpdateOrganisationAsyncWithHttpInfo($xChronosheetsAuth, $request)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation organisationUpdateOrganisationAsyncWithHttpInfo
     *
     * Update an organisation.    Requires 'OrganisationAdmin' permission.
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateOrganisationRequest $request An Update Organsation Request object containing updated fields.  Make sure to specify the Organsation Id in the request object so that ChronoSheets knows which Organsation to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function organisationUpdateOrganisationAsyncWithHttpInfo($xChronosheetsAuth, $request)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\ApiResponseUpdateOrganisationResponse';
        $request = $this->organisationUpdateOrganisationRequest($xChronosheetsAuth, $request);

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
     * Create request for operation 'organisationUpdateOrganisation'
     *
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  \ChronoSheetsClient\ChronoSheetsClientLibModel\UpdateOrganisationRequest $request An Update Organsation Request object containing updated fields.  Make sure to specify the Organsation Id in the request object so that ChronoSheets knows which Organsation to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function organisationUpdateOrganisationRequest($xChronosheetsAuth, $request)
    {
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling organisationUpdateOrganisation'
            );
        }
        // verify the required parameter 'request' is set
        if ($request === null || (is_array($request) && count($request) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $request when calling organisationUpdateOrganisation'
            );
        }

        $resourcePath = '/Organisation/UpdateOrganisation';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // header params
        if ($xChronosheetsAuth !== null) {
            $headerParams['x-chronosheets-auth'] = ObjectSerializer::toHeaderValue($xChronosheetsAuth);
        }


        // body params
        $_tempBody = null;
        if (isset($request)) {
            $_tempBody = $request;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'multipart/form-data'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded', 'multipart/form-data']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
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
            'PUT',
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
