<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Requests\User\LoginRequest;
use Validator;
use LogActivity;
use App\Models\User;
use Illuminate\Http ;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\api\BaseController;
use Exception;


class CallRegistersController extends BaseController
{
    /**
    * Call Register List api
    *
    * @return \Illuminate\Http\Response
    */

    public function onLoadCallRegisters(Request $request): JsonResponse
    {
        $data   =   [];

        try{

            

        } catch (\Exception $e) {
            $response = [
                'success'   => false,
                'code'      => Response::HTTP_INTERNAL_SERVER_ERROR,
                'data'      => $data,
                'message'   => $e->getMessage(),
            ];
        }

        return $this->sendResponse($response);

    }
}
