<?php
/**
 * PaymentVoucherV2Api
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
 * PaymentVoucherV2Api Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentVoucherV2Api
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
     * Operation paymentVoucherV2PostPayment
     *
     * Creates a payment voucher.
     *
     * @param  \Swagger\Client\Model\PaymentVoucherApi $body body (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\VoucherApi
     */
    public function paymentVoucherV2PostPayment($body, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        list($response) = $this->paymentVoucherV2PostPaymentWithHttpInfo($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);
        return $response;
    }

    /**
     * Operation paymentVoucherV2PostPaymentWithHttpInfo
     *
     * Creates a payment voucher.
     *
     * @param  \Swagger\Client\Model\PaymentVoucherApi $body (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\VoucherApi, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentVoucherV2PostPaymentWithHttpInfo($body, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        $returnType = '\Swagger\Client\Model\VoucherApi';
        $request = $this->paymentVoucherV2PostPaymentRequest($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\VoucherApi',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation paymentVoucherV2PostPaymentAsync
     *
     * Creates a payment voucher.
     *
     * @param  \Swagger\Client\Model\PaymentVoucherApi $body (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentVoucherV2PostPaymentAsync($body, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        return $this->paymentVoucherV2PostPaymentAsyncWithHttpInfo($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation paymentVoucherV2PostPaymentAsyncWithHttpInfo
     *
     * Creates a payment voucher.
     *
     * @param  \Swagger\Client\Model\PaymentVoucherApi $body (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentVoucherV2PostPaymentAsyncWithHttpInfo($body, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        $returnType = '\Swagger\Client\Model\VoucherApi';
        $request = $this->paymentVoucherV2PostPaymentRequest($body, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);

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
     * Create request for operation 'paymentVoucherV2PostPayment'
     *
     * @param  \Swagger\Client\Model\PaymentVoucherApi $body (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function paymentVoucherV2PostPaymentRequest($body, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling paymentVoucherV2PostPayment'
            );
        }

        $resourcePath = '/v2/paymentvoucher';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($use_automatic_vat_calculation !== null) {
            $queryParams['useAutomaticVatCalculation'] = ObjectSerializer::toQueryValue($use_automatic_vat_calculation, null);
        }
        // query params
        if ($use_default_vat_codes !== null) {
            $queryParams['useDefaultVatCodes'] = ObjectSerializer::toQueryValue($use_default_vat_codes, null);
        }
        // query params
        if ($use_default_voucher_series !== null) {
            $queryParams['useDefaultVoucherSeries'] = ObjectSerializer::toQueryValue($use_default_voucher_series, null);
        }
        // query params
        if ($check_existing_bank_transaction !== null) {
            $queryParams['checkExistingBankTransaction'] = ObjectSerializer::toQueryValue($check_existing_bank_transaction, null);
        }


        // form params
        if ($voucher_date !== null) {
            $formParams['VoucherDate'] = ObjectSerializer::toFormValue($voucher_date);
        }
        // form params
        if ($voucher_text !== null) {
            $formParams['VoucherText'] = ObjectSerializer::toFormValue($voucher_text);
        }
        // form params
        if ($number_series !== null) {
            $formParams['NumberSeries'] = ObjectSerializer::toFormValue($number_series);
        }
        // form params
        if ($rows !== null) {
            $formParams['Rows'] = ObjectSerializer::toFormValue($rows);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation paymentVoucherV2PostPayment
     *
     * Creates a payment voucher.
     *
     * @param  \DateTime $voucher_date voucher_date (required)
     * @param  string $voucher_text voucher_text (required)
     * @param  string $number_series number_series (required)
     * @param  \Swagger\Client\Model\PaymentVoucherRowApi[] $rows rows (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\VoucherApi
     */
    public function paymentVoucherV2PostPayment($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        list($response) = $this->paymentVoucherV2PostPaymentWithHttpInfo($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);
        return $response;
    }

    /**
     * Operation paymentVoucherV2PostPaymentWithHttpInfo
     *
     * Creates a payment voucher.
     *
     * @param  \DateTime $voucher_date (required)
     * @param  string $voucher_text (required)
     * @param  string $number_series (required)
     * @param  \Swagger\Client\Model\PaymentVoucherRowApi[] $rows (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\VoucherApi, HTTP status code, HTTP response headers (array of strings)
     */
    public function paymentVoucherV2PostPaymentWithHttpInfo($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        $returnType = '\Swagger\Client\Model\VoucherApi';
        $request = $this->paymentVoucherV2PostPaymentRequest($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);

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
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\VoucherApi',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation paymentVoucherV2PostPaymentAsync
     *
     * Creates a payment voucher.
     *
     * @param  \DateTime $voucher_date (required)
     * @param  string $voucher_text (required)
     * @param  string $number_series (required)
     * @param  \Swagger\Client\Model\PaymentVoucherRowApi[] $rows (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentVoucherV2PostPaymentAsync($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        return $this->paymentVoucherV2PostPaymentAsyncWithHttpInfo($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation paymentVoucherV2PostPaymentAsyncWithHttpInfo
     *
     * Creates a payment voucher.
     *
     * @param  \DateTime $voucher_date (required)
     * @param  string $voucher_text (required)
     * @param  string $number_series (required)
     * @param  \Swagger\Client\Model\PaymentVoucherRowApi[] $rows (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function paymentVoucherV2PostPaymentAsyncWithHttpInfo($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        $returnType = '\Swagger\Client\Model\VoucherApi';
        $request = $this->paymentVoucherV2PostPaymentRequest($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation, $use_default_vat_codes, $use_default_voucher_series, $check_existing_bank_transaction);

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
     * Create request for operation 'paymentVoucherV2PostPayment'
     *
     * @param  \DateTime $voucher_date (required)
     * @param  string $voucher_text (required)
     * @param  string $number_series (required)
     * @param  \Swagger\Client\Model\PaymentVoucherRowApi[] $rows (required)
     * @param  bool $use_automatic_vat_calculation Default value: false. Set to true and specify the sales or purchase gross amount and vat rows will be added automatically. (optional)
     * @param  bool $use_default_vat_codes Default value: True. Set to false and override default vatcodes on all rows in the request. (optional)
     * @param  bool $use_default_voucher_series Default value: True. Set to false and override default voucher series (alphabetic character before number). (optional)
     * @param  bool $check_existing_bank_transaction Default value: False. Set to false and override existing bank transaction validation. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function paymentVoucherV2PostPaymentRequest($voucher_date, $voucher_text, $number_series, $rows, $use_automatic_vat_calculation = null, $use_default_vat_codes = null, $use_default_voucher_series = null, $check_existing_bank_transaction = null)
    {
        // verify the required parameter 'voucher_date' is set
        if ($voucher_date === null || (is_array($voucher_date) && count($voucher_date) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_date when calling paymentVoucherV2PostPayment'
            );
        }
        // verify the required parameter 'voucher_text' is set
        if ($voucher_text === null || (is_array($voucher_text) && count($voucher_text) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $voucher_text when calling paymentVoucherV2PostPayment'
            );
        }
        // verify the required parameter 'number_series' is set
        if ($number_series === null || (is_array($number_series) && count($number_series) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $number_series when calling paymentVoucherV2PostPayment'
            );
        }
        // verify the required parameter 'rows' is set
        if ($rows === null || (is_array($rows) && count($rows) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rows when calling paymentVoucherV2PostPayment'
            );
        }

        $resourcePath = '/v2/paymentvoucher';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($use_automatic_vat_calculation !== null) {
            $queryParams['useAutomaticVatCalculation'] = ObjectSerializer::toQueryValue($use_automatic_vat_calculation, null);
        }
        // query params
        if ($use_default_vat_codes !== null) {
            $queryParams['useDefaultVatCodes'] = ObjectSerializer::toQueryValue($use_default_vat_codes, null);
        }
        // query params
        if ($use_default_voucher_series !== null) {
            $queryParams['useDefaultVoucherSeries'] = ObjectSerializer::toQueryValue($use_default_voucher_series, null);
        }
        // query params
        if ($check_existing_bank_transaction !== null) {
            $queryParams['checkExistingBankTransaction'] = ObjectSerializer::toQueryValue($check_existing_bank_transaction, null);
        }


        // form params
        if ($voucher_date !== null) {
            $formParams['VoucherDate'] = ObjectSerializer::toFormValue($voucher_date);
        }
        // form params
        if ($voucher_text !== null) {
            $formParams['VoucherText'] = ObjectSerializer::toFormValue($voucher_text);
        }
        // form params
        if ($number_series !== null) {
            $formParams['NumberSeries'] = ObjectSerializer::toFormValue($number_series);
        }
        // form params
        if ($rows !== null) {
            $formParams['Rows'] = ObjectSerializer::toFormValue($rows);
        }
        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json', 'text/json', 'application/xml', 'text/xml']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json', 'text/json', 'application/xml', 'text/xml'],
                ['application/json', 'text/json', 'application/xml', 'text/xml', 'application/x-www-form-urlencoded']
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
            'POST',
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
