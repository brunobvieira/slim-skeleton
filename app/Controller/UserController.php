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
     *
     * @param Request $req
     * @param Response $res
     * @return Response
     */
    public function saveAction(Request $req, Response $res)
    {
        $params = $req->getParams([
            'name',
            'email',
            'password',
            'born_at',
            'description'
        ]);

        $validation = User::validate($params);
        if (!$validation['isValid']) {

            return $res->withStatus(
                StatusCode::HTTP_BAD_REQUEST)
                ->withJson($validation['messages']);
        }

        $params['password'] = password_hash($params['password'], PASSWORD_DEFAULT);
        $user = User::create($params);

        return $res->withStatus(StatusCode::HTTP_CREATED)->withJson($user->toArray());
    }

    /**
     * Edit a user
     *
     * @param Request $req
     * @param Response $res
     * @param array $args
     * @return Response
     */
    public function editAction(Request $req, Response $res, array $args)
    {
        $id = $args['id'];
        $params = $req->getParams([
            'name',
            'email',
            'password',
            'born_at',
            'description'
        ]);

        $user = User::find($id);
        if (empty($user)) {
            return $res->withStatus(StatusCode::HTTP_NOT_FOUND);
        }

        $arUser = $user->toArray();
        $fullData = array_merge($arUser, $params);
        $validation = User::validate($fullData, true);

        if (!$validation['isValid']) {

            return $res->withStatus(
                StatusCode::HTTP_BAD_REQUEST)
                ->withJson($validation['messages']);
        }

        $params['born_at'] = $params['born_at'] ?: null;
        $user->fill($params);
        $user->save();

        return $res->withStatus(StatusCode::HTTP_OK)->withJson($user->toArray());
    }

    /**
     * Delete a user
     *
     * @param Request $req
     * @param Response $res
     * @param array $args
     * @return Response
     */
    public function deleteAction(Request $req, Response $res, array $args)
    {
        $id = $args['id'];

        $user = User::find($id);
        if (empty($user)) {
            return $res->withStatus(StatusCode::HTTP_NOT_FOUND);
        }

        $user->delete();
        return $res->withStatus(StatusCode::HTTP_NO_CONTENT);
    }
}