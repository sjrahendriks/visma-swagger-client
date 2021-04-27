<?php
/**
 * AccountBalanceV2Api
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Visma eAccounting API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * AccountBalanceV2Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountBalanceV2Api
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
     * Operation accountBalanceV2Get
     *
     * Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.
     *
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PaginatedResponseAccountBalanceAPI
     */
    public function accountBalanceV2Get($date)
    {
        list($response) = $this->accountBalanceV2GetWithHttpInfo($date);
        return $response;
    }

    /**
     * Operation accountBalanceV2GetWithHttpInfo
     *
     * Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.
     *
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PaginatedResponseAccountBalanceAPI, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountBalanceV2GetWithHttpInfo($date)
    {
        $returnType = '\Swagger\Client\Model\PaginatedResponseAccountBalanceAPI';
        $request = $this->accountBalanceV2GetRequest($date);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\PaginatedResponseAccountBalanceAPI',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountBalanceV2GetAsync
     *
     * Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.
     *
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountBalanceV2GetAsync($date)
    {
        return $this->accountBalanceV2GetAsyncWithHttpInfo($date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountBalanceV2GetAsyncWithHttpInfo
     *
     * Get Account balance on a specific date (yyyy-MM-dd). Filter to include accounts where balance is 0.
     *
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountBalanceV2GetAsyncWithHttpInfo($date)
    {
        $returnType = '\Swagger\Client\Model\PaginatedResponseAccountBalanceAPI';
        $request = $this->accountBalanceV2GetRequest($date);

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
     * Create request for operation 'accountBalanceV2Get'
     *
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountBalanceV2GetRequest($date)
    {
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling accountBalanceV2Get'
            );
        }

        $resourcePath = '/v2/accountbalances/{date}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($date !== null) {
            $resourcePath = str_replace(
                '{' . 'date' . '}',
                ObjectSerializer::toPathValue($date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
     * Operation accountBalanceV2Get_0
     *
     * Get Account Balance on a specific account and date.
     *
     * @param  int $account_number account_number (required)
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AccountBalanceAPI
     */
    public function accountBalanceV2Get_0($account_number, $date)
    {
        list($response) = $this->accountBalanceV2Get_0WithHttpInfo($account_number, $date);
        return $response;
    }

    /**
     * Operation accountBalanceV2Get_0WithHttpInfo
     *
     * Get Account Balance on a specific account and date.
     *
     * @param  int $account_number (required)
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AccountBalanceAPI, HTTP status code, HTTP response headers (array of strings)
     */
    public function accountBalanceV2Get_0WithHttpInfo($account_number, $date)
    {
        $returnType = '\Swagger\Client\Model\AccountBalanceAPI';
        $request = $this->accountBalanceV2Get_0Request($account_number, $date);

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
                if (!in_array($returnType, ['string','integer','bool'])) {
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
                        '\Swagger\Client\Model\AccountBalanceAPI',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation accountBalanceV2Get_0Async
     *
     * Get Account Balance on a specific account and date.
     *
     * @param  int $account_number (required)
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountBalanceV2Get_0Async($account_number, $date)
    {
        return $this->accountBalanceV2Get_0AsyncWithHttpInfo($account_number, $date)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation accountBalanceV2Get_0AsyncWithHttpInfo
     *
     * Get Account Balance on a specific account and date.
     *
     * @param  int $account_number (required)
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function accountBalanceV2Get_0AsyncWithHttpInfo($account_number, $date)
    {
        $returnType = '\Swagger\Client\Model\AccountBalanceAPI';
        $request = $this->accountBalanceV2Get_0Request($account_number, $date);

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
     * Create request for operation 'accountBalanceV2Get_0'
     *
     * @param  int $account_number (required)
     * @param  \DateTime $date Format: yyyy-MM-dd (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function accountBalanceV2Get_0Request($account_number, $date)
    {
        // verify the required parameter 'account_number' is set
        if ($account_number === null || (is_array($account_number) && count($account_number) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $account_number when calling accountBalanceV2Get_0'
            );
        }
        // verify the required parameter 'date' is set
        if ($date === null || (is_array($date) && count($date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $date when calling accountBalanceV2Get_0'
            );
        }

        $resourcePath = '/v2/accountbalances/{accountNumber}/{date}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($account_number !== null) {
            $resourcePath = str_replace(
                '{' . 'accountNumber' . '}',
                ObjectSerializer::toPathValue($account_number),
                $resourcePath
            );
        }
        // path params
        if ($date !== null) {
            $resourcePath = str_replace(
                '{' . 'date' . '}',
                ObjectSerializer::toPathValue($date),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
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
