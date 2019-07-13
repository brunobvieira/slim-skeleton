<?php


namespace App\Controller;


use App\Core\Controller;
use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends Controller
{
    /**
     * Hello world
     *
     * @param Request $req
     * @param Response $res
     * @return Response
     */
    public function helloWorld(Request $req, Response $res)
    {
        $params = $req->getQueryParams();
        return $res->withJson(['hello' => 'Hello World', 'params' => $params]);
    }
}