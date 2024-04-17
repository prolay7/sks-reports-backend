<?php

namespace App\Http\Controllers\Api\v1;

<<<<<<< HEAD
=======
use App\Http\Requests\CallRegisterRequest;
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8
use Exception;
use Validator;
use LogActivity;
use App\CPU\Helpers;
use App\Models\User;
use Illuminate\Http ;
use App\Models\CallRegister;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\LoginRequest;
use App\Http\Controllers\Api\BaseController;
use Symfony\Component\HttpFoundation\Response;


class CallRegistersController extends BaseController
{
    /**
    * Call Register List api
    *
    * @return \Illuminate\Http\Response
    */

    public function onLoadCallRegisters(Request $request)
    {
        $data   =   [];

        try{
<<<<<<< HEAD
            if(empty($request->header('authorization'))){

                $response = [
                    'success'   => false,
                    'code'      => Response::HTTP_UNAUTHORIZED,
                    'data'      => $data,
                    'message'   => 'Token is Required to access List of call register information',
                ];

                return $this->sendResponse($response);

            }
=======
            
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8

            //authorized For access using Token
            $authorization = Helpers::get_user_by_token($request);

            if ($authorization['success'] == 1) {

                $data = CallRegister::where('agent_id','=',$authorization['data']['id'])->orderBy('id','desc')->get();

<<<<<<< HEAD

                $response = [
                    'success' => true,
                    'code'    => Response::HTTP_OK,
                    'data'    => $data,
                    'message' => 'You have successfully fetch Call Register Information',
                ];
=======
                if(count($data)>0){

                    $response = [
                        'success' => true,
                        'code'    => Response::HTTP_OK,
                        'data'    => $data,
                        'message' => 'You have successfully fetch Call Register Information',
                    ];
                }else{

                    $response = [
                        'success' => true,
                        'code'    => Response::HTTP_OK,
                        'data'    => $data,
                        'message' => 'No information is available',
                    ];

                }
                
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8


            
            }else{


                $response = [
                    'success'   => false,
                    'code'      => Response::HTTP_UNAUTHORIZED,
                    'data'      => $data,
                    'message'   => 'Your existing session token does not authorize you any more',
                ];


            }            

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

<<<<<<< HEAD
    public function storeCallRegister(Request $request)
=======
    public function storeCallRegister(CallRegisterRequest $request)
>>>>>>> 431b53ce6694c7d1867556dbf2a3201143eb35a8
    {
        $data   =   [];

        try{

            if(empty($request->header('authorization'))){

                $response = [
                    'success'   => false,
                    'code'      => Response::HTTP_UNAUTHORIZED,
                    'data'      => $data,
                    'message'   => 'Token is Required to access List of call register information',
                ];

                return $this->sendResponse($response);

            }

            //authorized For access using Token
            $authorization = Helpers::get_user_by_token($request);

            if ($authorization['success'] == 1) {

                        $request->validate([
                            'organization_name' => 'required|min:5',
                            'contact_person_name' => 'required|regex:/^[\pL\s]+$/u|min:3',
                            'contact_person_mobile' => 'required|numeric|digits:10',
                            'organization_address' => 'required',
                        ]);
                    
                        
                
                        
                
                            $call_register = CallRegister::firstOrNew(array('organization_name' => $request->organization_name,'contact_person_name'=>$request->contact_person_name,'contact_person_mobile'=>$request->contact_person_mobile,'organization_address'=>$request->organization_address));
                            
                
                            $call_register->organization_name =$request->organization_name;
                            $call_register->contact_person_name =$request->contact_person_name;
                            $call_register->contact_person_mobile =$request->contact_person_mobile;
                            $call_register->contact_person_mobile2 =$request->contact_person_mobile2;
                            $call_register->organization_address =$request->organization_address;
                            $call_register->agent_id = $data['data']['id'];

                            $call_register->save();




                        $response = [
                            'success' => true,
                            'code'    => Response::HTTP_OK,
                            'data'    => $call_register,
                            'message' => 'You have successfully created Call Register Information',
                        ];


            
            }else{


                $response = [
                    'success'   => false,
                    'code'      => Response::HTTP_UNAUTHORIZED,
                    'data'      => $data,
                    'message'   => 'Your existing session token does not authorize you any more',
                ];


            }            

            //authorized For access using Token
            $authorization = Helpers::get_user_by_token($request);

            if ($authorization['success'] == 1) {

                            //check data exist or not 

                            $Call_register_exist = CallRegister::where(['organization_name' => $request->organization_name,'organization_address'=>$request->organization_address])->first();
                            if(empty($Call_register_exist)){
                            
                            
                                $call_register = CallRegister::firstOrNew(array('organization_name' => $request->organization_name,'contact_person_name'=>$request->contact_person_name,'contact_person_mobile'=>$request->contact_person_mobile,'organization_address'=>$request->organization_address));
                        

                                $call_register->organization_name =$request->organization_name;
                                $call_register->contact_person_name =$request->contact_person_name;
                                $call_register->contact_person_mobile =$request->contact_person_mobile;
                                $call_register->contact_person_mobile2 =$request->contact_person_mobile2;
                                $call_register->organization_address =$request->organization_address;
                                $call_register->agent_id = $authorization['data']-['id'];
                            
                                $call_register->save();

                                $response = [
                                    'success' => true,
                                    'code'    => Response::HTTP_OK,
                                    'data'    => $call_register,
                                    'message' => 'You have successfully created Call Register Information',
                                ];

                        }else{

                            $response = [
                                'success' => false,
                                'code'    => Response::HTTP_OK,
                                'data'    => [],
                                'message' => 'Organization name and Organization address is already exist',
                            ];

                        }

                        
                           

            
            }else{


                $response = [
                    'success'   => false,
                    'code'      => Response::HTTP_UNAUTHORIZED,
                    'data'      => $data,
                    'message'   => 'Your existing session token does not authorize you any more',
                ];


            }            

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
