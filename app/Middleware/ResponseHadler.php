<?php


namespace App\Middleware;


use App\Core\StatusCode;
use Slim\Http\Request;
use Slim\Http\Response;

class ResponseHadler
{
    /**
     * Response handler
     *
     * @param Request $request PSR7 request
     * @param Response $response PSR7 response
     * @param callable $next Next middleware
     *
     * @return Response
     */
    public function __invoke(Request $request, Response $response, callable $next)
    {
        /** @var Response $response */
        $response = $next($request, $response);

        $body = $response->getBody();
        $statusCode = $response->getStatusCode();

        if ($statusCode >= StatusCode::HTTP_BAD_REQUEST) {

            return $response->withJson([
                'message' => StatusCode::getMessage($statusCode),
                'errors' => json_decode($body)
            ]);
        }

        return $response->withJson(json_decode($body), $statusCode);
    }
}