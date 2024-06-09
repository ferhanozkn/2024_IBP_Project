<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function AllUser(){
            $all=DB::table('users')->get();
            return view('backend.user.all-user',compact('all'));
        }

        //AddUser,InsertUser

        public function AddUserIndex(){
            return view('backend.user.add_user');
        }

        public function InsertUser(Request $request){
            $data=array();
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['role']=$request->role;
            $data['password']=Hash::make($request->password);
            $data['created_at']=date('Y-m-d H:i:s');
            $data['created_at']=date('Y-m-d H:i:s');

            $insert=DB::table('users')->insert($data);
            if($insert){
                echo "Successful";
            }
            else{
                echo "Something is wrong.";
            }
        }

        public function EditUser($id){
            $edit = DB::table('users')->where('id',$id)->first();
            return view('backend.user.edit_user',compact('edit'));
        }

        public function UpdateUser(Request $request, $id){
            $data=array();
            $data['name']=$request->name;
            $data['email']=$request->email;
            $data['role']=$request->role;
            $data['password']=Hash::make($request->password);
            $data['created_at']=date('Y-m-d H:i:s');
            $data['created_at']=date('Y-m-d H:i:s');

            $update=DB::table('users')->where('id',$id)->update($data);
            if($update){
                echo "User Updated Successfully";
            }
            else{
                echo "Something is wrong.";
            }
        }


        public function DeleteUser($id){
            $delete = DB::table('users')->where('id',$id)->delete();
            if($delete){
                echo "User Successfully Deleted";
            }
            else{
                echo "Something is Wrong";
            }
        }

        
        public function UpdatePasswordUser($id){
            $edit = DB::table('users')->where('id',$id)->first();
            return view('backend.user.updatePassword_user',compact('edit'));
        }

        
        public function UpdateYourPasswordUser(Request $request, $id){
            $data=array();

            $data['password']=Hash::make($request->password);
            $data['created_at']=date('Y-m-d H:i:s');


            $update=DB::table('users')->where('id',$id)->update($data);
            if($update){
                echo "User Updated Successfully";
            }
            else{
                echo "Something is wrong.";
            }
        }

}