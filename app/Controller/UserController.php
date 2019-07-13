<?php


namespace App\Controller;


use App\Core\Controller;
use App\Core\StatusCode;
use App\Model\User;
use Slim\Http\Request;
use Slim\Http\Response;

class UserController extends Controller
{
    /**
     * List all users
     *
     * @param Request $req
     * @param Response $res
     * @return Response
     */
    public function listAction(Request $req, Response $res)
    {
        $data = User::all()->toArray();
        return $res->withJson($data);
    }

    /**
     * Get one user
     *
     * @param Request $req
     * @param Response $res
     * @param array $args
     * @return Response
     */
    public function getAction(Request $req, Response $res, array $args)
    {
        $id = $args['id'];
        $user = User::find($id);

        if (empty($user)) {
            return $res->withStatus(StatusCode::HTTP_NOT_FOUND);
        }

        return $res->withJson($user->toArray());
    }

    /**
     * Insert user on database
     * @todo
     *
     * @param Request $req
     * @param Response $res
     */
    public function saveAction(Request $req, Response $res)
    {

    }

    /**
     * Edit a user
     * @todo
     *
     * @param Request $req
     * @param Response $res
     * @param array $args
     */
    public function editAction(Request $req, Response $res, array $args)
    {

    }

    /**
     * Delete a user
     * @todo
     *
     * @param Request $req
     * @param Response $res
     * @param array $args
     */
    public function deleteAction(Request $req, Response $res, array $args)
    {

    }
}