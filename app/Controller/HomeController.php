<?php


namespace App\Controller;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController extends Controller
{
    public function index(RequestInterface $req, ResponseInterface $res, $args)
    {
        $res->getBody()->write('index of HomeController');
        return $res;
    }
}