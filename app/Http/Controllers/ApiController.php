<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Response;
use \Illuminate\Http\Response as Res;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Dingo\Api\Routing\Helpers;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class ApiController extends Controller
{
    use Helpers;

    /**
     * Take response code
     * @var int
     */
    protected $statusCode = Res::HTTP_OK;

    /**
     * class constructor
     *
     * @return void
     */
    public function __construct()
    {
        date_default_timezone_set("Asia/Jakarta");
    }

    /**
     * Get status code
     *
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set status code
     *
     * @param $message
     * @return json response
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
        return $this;
    }

    /**
     * Respond created
     *
     * @param string $message
     * @param $data
     * @return mixed
     */
    public function respondCreated($message, $data = null)
    {
        return $this->setStatusCode(Res::HTTP_CREATED)
                    ->respond([
                        'status_code' => Res::HTTP_CREATED,
                        'message' => $message,
                        'data' => $data
                    ]);
    }

    /**
     * Respond not found
     *
     * @param $message
     * @return mixed
     */
    public function respondNotFound($message = 'Not Found!'){
        return $this->setStatusCode(Res::HTTP_NOT_FOUND)
                    ->respond([
                        'status_code' => Res::HTTP_NOT_FOUND,
                        'message' => $message,
                    ]);
    }

    /**
     * Respond internal error
     *
     * @param $message
     * @return mixed
     */
    public function respondInternalError($message){
        return $this->setStatusCode(Res::HTTP_INTERNAL_SERVER_ERROR)
                    ->respond([
                        'status_code' => Res::HTTP_INTERNAL_SERVER_ERROR,
                        'message' => $message,
                    ]);
    }

    /**
     * Respond Validation error
     *
     * @param $message
     * @param $errors
     * @return mixed
     */
    public function respondValidationError($message, $errors = [])
    {
        return $this->setStatusCode(Res::HTTP_UNPROCESSABLE_ENTITY)
                    ->respond([
                        'status_code' => Res::HTTP_UNPROCESSABLE_ENTITY,
                        'message' => $message,
                        'errors' => $errors
                    ]);
    }

    /**
     * Respond success
     *
     * @param $data
     * @param $headers
     * @return mixed
     */
    public function respondSuccess($message, $data = null)
    {
        return $this->respond([
            'status_code' => Res::HTTP_OK,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Respond with error
     *
     * @param $message
     * @return mixed
     */
    public function respondWithError($message)
    {
        return $this->setStatusCode(Res::HTTP_UNAUTHORIZED)
                    ->respond([
                        'status' => 'error',
                        'status_code' => Res::HTTP_UNAUTHORIZED,
                        'message' => $message,
                    ]);
    }

    /**
     * Respond
     *
     * @param $data
     * @param $headers
     * @return mixed
     */
    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    /**
     * Check access permission
     *
     * @param string $permission
     * @return mixed
     */
    protected function _checkPermission($permission)
    {
        $user = $this->auth->user();
        if (! $user) {
            throw new AccessDeniedHttpException("You don't have authorized to access this page.");
        }
        if (! $user->can($permission)) {
            throw new AccessDeniedHttpException("You don't have authorized to access this page.");
        }

        return $user;
    }

    /**
     * Check access permission
     *
     * @param string|array $permission
     * @return mixed
     */
    public function userCan($permission)
    {
        $user = $this->auth->user();
        if ($user) {
            return $user->can($permission);
        }
        return false;
    }
}
