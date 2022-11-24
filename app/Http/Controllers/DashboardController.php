<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller{
    public function index(){
        $data['page_title'] = 'Admin | Dashboard';
        return view('dashboard/index',$data);
    }
    public function all_role(){
        $data['page_title'] = 'Role | All Role';
        $data['users'] = true;
        $data['all_role'] = true;
        $data['roles'] = Role::all();
        //Mail::to('aiub.tanvir@gmail.com')->send(new SendMailable("Tanvir"));
 
        //dd("Email is Sent, please check your inbox.");
        return view('dashboard/role/all',$data);
    }
    //user list 
    public function all_user(){
        $data['page_title'] = 'User | All User';
        $data['users'] = true;
        $data['all_user'] = true;
        return view('dashboard/users/allUser',$data);
    }
    //admin user list 
    public function all_admin_user(){
        $data['page_title'] = 'User | All Admin User';
        $data['users'] = true;
        $data['all_admin_user'] = true;
        return view('dashboard/users/allAdminUser',$data);
    }
    //activate
    public function activate($id=NULL){
        if(empty($id)){
            Session::flash('warning','Role id not found!');
            return redirect('all-role');
        }
        $role = Role::find($id);
        if(empty($role)){
            Session::flash('error','Server Error! Role Data not found!');
            return redirect('all-role');
        }
        $update = Role::where('id',$role->id)->update(['status'=>0]);
        Session::flash('success','Role Data Activate Successfully!');
        Session::flash('role_id',$role->id);
        return redirect('all-role');
    }
    //deactivate
    public function deactivate($id=NULL){
        if(empty($id)){
            Session::flash('warning','Role id not found!');
            return redirect('all-role');
        }
        $role = Role::find($id);
        if(empty($role)){
            Session::flash('error','Server Error! Role Data not found!');
            return redirect('all-role');
        }
        $update = Role::where('id',$role->id)->update(['status'=>1]);
        Session::flash('success','Role Data Deactivate Successfully!');
        Session::flash('role_id',$role->id);
        return redirect('all-role');
    }
    //get role data for ajax tets 
    public function getRoleData(){
        $role = Role::all();
        $data['result'] = array(
            'key'=>200,
            'val'=>$role
        );
        return response()->json($data, 200);
    }
}
