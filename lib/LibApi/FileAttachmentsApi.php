<?php
/**
 * FileAttachmentsApi
 * PHP version 5
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChronoSheets API
 *
 * <div style='font-size: 14px!important;font-family: Open Sans,sans-serif!important;color: #3b4151!important;'><p>      ChronoSheets is a flexible timesheet solution for small to medium businesses, it is free for small teams of up to 3 and there are iOS and Android apps available.  Use the ChronoSheets API to create your own custom integrations.  Before starting, sign up for a ChronoSheets account at <a target='_BLANK' href='http://tsheets.xyz/signup'>http://tsheets.xyz/signup</a>.  </p></div><div id='cs-extra-info'></div>
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
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
 * FileAttachmentsApi Class Doc Comment
 *
 * @category Class
 * @package  ChronoSheetsClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileAttachmentsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation fileAttachmentsDeleteTimesheetFileAttachment
     *
     * Delete a particular timesheet file attachment  Requires the 'SubmitTimesheets' permission.
     *
     * @param  int $fileAttachmentId The Id of the file attachment to delete (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean
     */
    public function fileAttachmentsDeleteTimesheetFileAttachment($fileAttachmentId, $xChronosheetsAuth)
    {
        list($response) = $this->fileAttachmentsDeleteTimesheetFileAttachmentWithHttpInfo($fileAttachmentId, $xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation fileAttachmentsDeleteTimesheetFileAttachmentWithHttpInfo
     *
     * Delete a particular timesheet file attachment  Requires the 'SubmitTimesheets' permission.
     *
     * @param  int $fileAttachmentId The Id of the file attachment to delete (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean, HTTP status code, HTTP response headers (array of strings)
     */
    public function fileAttachmentsDeleteTimesheetFileAttachmentWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean';
        $request = $this->fileAttachmentsDeleteTimesheetFileAttachmentRequest($fileAttachmentId, $xChronosheetsAuth);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fileAttachmentsDeleteTimesheetFileAttachmentAsync
     *
     * Delete a particular timesheet file attachment  Requires the 'SubmitTimesheets' permission.
     *
     * @param  int $fileAttachmentId The Id of the file attachment to delete (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsDeleteTimesheetFileAttachmentAsync($fileAttachmentId, $xChronosheetsAuth)
    {
        return $this->fileAttachmentsDeleteTimesheetFileAttachmentAsyncWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fileAttachmentsDeleteTimesheetFileAttachmentAsyncWithHttpInfo
     *
     * Delete a particular timesheet file attachment  Requires the 'SubmitTimesheets' permission.
     *
     * @param  int $fileAttachmentId The Id of the file attachment to delete (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsDeleteTimesheetFileAttachmentAsyncWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseBoolean';
        $request = $this->fileAttachmentsDeleteTimesheetFileAttachmentRequest($fileAttachmentId, $xChronosheetsAuth);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'fileAttachmentsDeleteTimesheetFileAttachment'
     *
     * @param  int $fileAttachmentId The Id of the file attachment to delete (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fileAttachmentsDeleteTimesheetFileAttachmentRequest($fileAttachmentId, $xChronosheetsAuth)
    {
        // verify the required parameter 'fileAttachmentId' is set
        if ($fileAttachmentId === null || (is_array($fileAttachmentId) && count($fileAttachmentId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fileAttachmentId when calling fileAttachmentsDeleteTimesheetFileAttachment'
            );
        }
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling fileAttachmentsDeleteTimesheetFileAttachment'
            );
        }

        $resourcePath = '/api/FileAttachments/DeleteTimesheetFileAttachment';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fileAttachmentId !== null) {
            $queryParams['FileAttachmentId'] = ObjectSerializer::toQueryValue($fileAttachmentId);
        }
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation fileAttachmentsGetFileAttachmentById
     *
     * Get a particular file attachment by ID.  User must own the file attachment for access.
     *
     * @param  int $fileAttachmentId The ID of the file attachment (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetFileAttachment
     */
    public function fileAttachmentsGetFileAttachmentById($fileAttachmentId, $xChronosheetsAuth)
    {
        list($response) = $this->fileAttachmentsGetFileAttachmentByIdWithHttpInfo($fileAttachmentId, $xChronosheetsAuth);
        return $response;
    }

    /**
     * Operation fileAttachmentsGetFileAttachmentByIdWithHttpInfo
     *
     * Get a particular file attachment by ID.  User must own the file attachment for access.
     *
     * @param  int $fileAttachmentId The ID of the file attachment (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetFileAttachment, HTTP status code, HTTP response headers (array of strings)
     */
    public function fileAttachmentsGetFileAttachmentByIdWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetFileAttachment';
        $request = $this->fileAttachmentsGetFileAttachmentByIdRequest($fileAttachmentId, $xChronosheetsAuth);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetFileAttachment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fileAttachmentsGetFileAttachmentByIdAsync
     *
     * Get a particular file attachment by ID.  User must own the file attachment for access.
     *
     * @param  int $fileAttachmentId The ID of the file attachment (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsGetFileAttachmentByIdAsync($fileAttachmentId, $xChronosheetsAuth)
    {
        return $this->fileAttachmentsGetFileAttachmentByIdAsyncWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fileAttachmentsGetFileAttachmentByIdAsyncWithHttpInfo
     *
     * Get a particular file attachment by ID.  User must own the file attachment for access.
     *
     * @param  int $fileAttachmentId The ID of the file attachment (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsGetFileAttachmentByIdAsyncWithHttpInfo($fileAttachmentId, $xChronosheetsAuth)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseTimesheetFileAttachment';
        $request = $this->fileAttachmentsGetFileAttachmentByIdRequest($fileAttachmentId, $xChronosheetsAuth);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'fileAttachmentsGetFileAttachmentById'
     *
     * @param  int $fileAttachmentId The ID of the file attachment (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fileAttachmentsGetFileAttachmentByIdRequest($fileAttachmentId, $xChronosheetsAuth)
    {
        // verify the required parameter 'fileAttachmentId' is set
        if ($fileAttachmentId === null || (is_array($fileAttachmentId) && count($fileAttachmentId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $fileAttachmentId when calling fileAttachmentsGetFileAttachmentById'
            );
        }
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling fileAttachmentsGetFileAttachmentById'
            );
        }

        $resourcePath = '/api/FileAttachments/GetFileAttachmentById';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($fileAttachmentId !== null) {
            $queryParams['FileAttachmentId'] = ObjectSerializer::toQueryValue($fileAttachmentId);
        }
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
     * Operation fileAttachmentsGetMyFileAttachments
     *
     * Get my file attachments.  Get files you've attached to timesheets.
     *
     * @param  \DateTime $startDate The Start date of the date range.  File attachments after this date will be obtained. (required)
     * @param  \DateTime $endDate The End date of the date range.  File attachments before this date will be obtained. (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  int $skip Skip this many File attachments (optional)
     * @param  int $take Take this many File attachments (optional)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment
     */
    public function fileAttachmentsGetMyFileAttachments($startDate, $endDate, $xChronosheetsAuth, $skip = null, $take = null)
    {
        list($response) = $this->fileAttachmentsGetMyFileAttachmentsWithHttpInfo($startDate, $endDate, $xChronosheetsAuth, $skip, $take);
        return $response;
    }

    /**
     * Operation fileAttachmentsGetMyFileAttachmentsWithHttpInfo
     *
     * Get my file attachments.  Get files you've attached to timesheets.
     *
     * @param  \DateTime $startDate The Start date of the date range.  File attachments after this date will be obtained. (required)
     * @param  \DateTime $endDate The End date of the date range.  File attachments before this date will be obtained. (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  int $skip Skip this many File attachments (optional)
     * @param  int $take Take this many File attachments (optional)
     *
     * @throws \ChronoSheetsClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment, HTTP status code, HTTP response headers (array of strings)
     */
    public function fileAttachmentsGetMyFileAttachmentsWithHttpInfo($startDate, $endDate, $xChronosheetsAuth, $skip = null, $take = null)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment';
        $request = $this->fileAttachmentsGetMyFileAttachmentsRequest($startDate, $endDate, $xChronosheetsAuth, $skip, $take);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
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
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
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
                        '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation fileAttachmentsGetMyFileAttachmentsAsync
     *
     * Get my file attachments.  Get files you've attached to timesheets.
     *
     * @param  \DateTime $startDate The Start date of the date range.  File attachments after this date will be obtained. (required)
     * @param  \DateTime $endDate The End date of the date range.  File attachments before this date will be obtained. (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  int $skip Skip this many File attachments (optional)
     * @param  int $take Take this many File attachments (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsGetMyFileAttachmentsAsync($startDate, $endDate, $xChronosheetsAuth, $skip = null, $take = null)
    {
        return $this->fileAttachmentsGetMyFileAttachmentsAsyncWithHttpInfo($startDate, $endDate, $xChronosheetsAuth, $skip, $take)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation fileAttachmentsGetMyFileAttachmentsAsyncWithHttpInfo
     *
     * Get my file attachments.  Get files you've attached to timesheets.
     *
     * @param  \DateTime $startDate The Start date of the date range.  File attachments after this date will be obtained. (required)
     * @param  \DateTime $endDate The End date of the date range.  File attachments before this date will be obtained. (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  int $skip Skip this many File attachments (optional)
     * @param  int $take Take this many File attachments (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function fileAttachmentsGetMyFileAttachmentsAsyncWithHttpInfo($startDate, $endDate, $xChronosheetsAuth, $skip = null, $take = null)
    {
        $returnType = '\ChronoSheetsClient\ChronoSheetsClientLibModel\CSApiResponseForPaginatedListTimesheetFileAttachment';
        $request = $this->fileAttachmentsGetMyFileAttachmentsRequest($startDate, $endDate, $xChronosheetsAuth, $skip, $take);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
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
     * Create request for operation 'fileAttachmentsGetMyFileAttachments'
     *
     * @param  \DateTime $startDate The Start date of the date range.  File attachments after this date will be obtained. (required)
     * @param  \DateTime $endDate The End date of the date range.  File attachments before this date will be obtained. (required)
     * @param  string $xChronosheetsAuth The ChronoSheets Auth Token (required)
     * @param  int $skip Skip this many File attachments (optional)
     * @param  int $take Take this many File attachments (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function fileAttachmentsGetMyFileAttachmentsRequest($startDate, $endDate, $xChronosheetsAuth, $skip = null, $take = null)
    {
        // verify the required parameter 'startDate' is set
        if ($startDate === null || (is_array($startDate) && count($startDate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $startDate when calling fileAttachmentsGetMyFileAttachments'
            );
        }
        // verify the required parameter 'endDate' is set
        if ($endDate === null || (is_array($endDate) && count($endDate) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $endDate when calling fileAttachmentsGetMyFileAttachments'
            );
        }
        // verify the required parameter 'xChronosheetsAuth' is set
        if ($xChronosheetsAuth === null || (is_array($xChronosheetsAuth) && count($xChronosheetsAuth) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xChronosheetsAuth when calling fileAttachmentsGetMyFileAttachments'
            );
        }

        $resourcePath = '/api/FileAttachments/GetMyFileAttachments';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($startDate !== null) {
            $queryParams['StartDate'] = ObjectSerializer::toQueryValue($startDate);
        }
        // query params
        if ($endDate !== null) {
            $queryParams['EndDate'] = ObjectSerializer::toQueryValue($endDate);
        }
        // query params
        if ($skip !== null) {
            $queryParams['Skip'] = ObjectSerializer::toQueryValue($skip);
        }
        // query params
        if ($take !== null) {
            $queryParams['Take'] = ObjectSerializer::toQueryValue($take);
        }
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
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
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
