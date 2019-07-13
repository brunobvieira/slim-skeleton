<?php


namespace App\Core;


use Slim\Http\StatusCode as SlimStatusCode;

/**
 * Provide the most common HTTP status code messages
 *
 * Class StatusCode
 * @package App\Core
 */
class StatusCode extends SlimStatusCode
{
    /**
     * Messages
     *
     * @var array
     */
    private static $messages = [
        // Successful 2xx
        self::HTTP_OK => '200 OK',
        self::HTTP_CREATED => '201 Created',
        self::HTTP_ACCEPTED => '202 Accepted',
        self::HTTP_NO_CONTENT => '204 No Content',
        // Redirect 3cc
        self::HTTP_MOVED_PERMANENTLY => '301 Moved Permanently',
        self::HTTP_FOUND => '302 Found',
        // Client Error 4xx
        self::HTTP_BAD_REQUEST => '400 Bad Request',
        self::HTTP_UNAUTHORIZED => '401 Unauthorized',
        self::HTTP_FORBIDDEN => '403 Forbidden',
        self::HTTP_NOT_FOUND => '404 Not Found',
        self::HTTP_METHOD_NOT_ALLOWED => '405 Method Not Allowed',
        // Server Error 5xx
        self::HTTP_INTERNAL_SERVER_ERROR => '500 Internal Server Error',
        self::HTTP_NOT_IMPLEMENTED => '501 Not Implemented',
    ];

    /**
     * Get the message for status code
     *
     * @param $statusCode
     * @return mixed|string
     */
    public static function getMessage($statusCode)
    {
        if (!isset(self::$messages[$statusCode])) {
            return $statusCode;
        }

        return self::$messages[$statusCode];
    }
}