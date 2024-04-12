<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\GeneralSettings;
use Illuminate\Http\Request;
use App\Models\Modules;

use DB;
use Illuminate\View\View;

use Spatie\Permission\Models\Role;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Permission;

class GeneralSettingsController extends Controller
{
    
    function __construct()
    {
         $this->middleware('permission:general-setting-list|general-setting-create|general-setting-edit|general-setting-delete', ['only' => ['index']]);
         $this->middleware('permission:general-setting-create', ['only' => ['create','store']]);
         $this->middleware('permission:general-setting-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:general-setting-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request){

        abort_if(!auth()->user()->can('general-settings-manage'),403);
        
        //exit;
        $superadmin_array = array("Superadmin","Super-Admin","superadmin","SUPERADMIN","super admin","super-admin","SUPER-ADMIN","SUPER ADMIN");
        if(in_array(strtoupper(auth()->user()->roles->first()->name),$superadmin_array)){

            $general_settings = GeneralSettings::where('id',1)->first();

            $permission = Permission::select('module_name')->groupBy('module_name')->orderBy('id','ASC')->get();
            
            $roles = Role::Where('id','!=','0')->orderBy('id','DESC')->get();

            return view('backend.superadmin.master-settings.master-settings',compact('general_settings','roles','permission'));

        }

        abort_if(!auth()->user()->can('general-settings-manage'),403);
    }


    public function roles(Request $request){

        abort_if(!auth()->user()->can('role-list'),403);
        
        //exit;
        $superadmin_array = array("Superadmin","Super-Admin","superadmin","SUPERADMIN","super admin","super-admin","SUPER-ADMIN","SUPER ADMIN");
        if(in_array(strtoupper(auth()->user()->roles->first()->name),$superadmin_array)){

            $general_settings = GeneralSettings::where('id',1)->first();
            $permission = Permission::select('module_name')->groupBy('module_name')->orderBy('id','ASC')->get();
            $roles = Role::Where('id','!=','0')->orderBy('id','DESC')->get();
            return view('backend.superadmin.master-settings.master-settings',compact('general_settings','roles','permission'));

        }


        abort_if(!auth()->user()->can('role-list'),403);

    }

    public function smtp(Request $request){

        
        abort_if(!auth()->user()->can('role-list'),403);
        
        //exit;
        $superadmin_array = array("Superadmin","Super-Admin","superadmin","SUPERADMIN","super admin","super-admin","SUPER-ADMIN","SUPER ADMIN");
        if(in_array(strtoupper(auth()->user()->roles->first()->name),$superadmin_array)){

            $general_settings = GeneralSettings::where('id',1)->first();
            $permission = Permission::select('module_name')->groupBy('module_name')->orderBy('id','ASC')->get();
            $roles = Role::Where('id','!=','0')->orderBy('id','DESC')->get();
            return view('backend.superadmin.master-settings.master-settings',compact('general_settings','roles','permission'));

        }


        abort_if(!auth()->user()->can('role-list'),403);
    }
}
