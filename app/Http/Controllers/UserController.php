<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use DataTables;

class UserController extends Controller
{
    //
    public function __construct(){
        return $this->middleware('auth');
    }

    public function change_status($id,$status){
        $user=User::find($id);
        $user->orderstatus=$status;
        $user->update();
        return redirect()->back();
    }
    
    public function index(Request $request){
      
        $users = User::all();

        if ($request->ajax()) {
            return Datatables::of($users)
                    ->addIndexColumn()
                    ->editColumn('created_at', function($data){ $formatedDate = date('d-m-Y h:m A', strtotime($data->created_at)); return $formatedDate; })
                    ->addColumn('name', function ($data) {
                        return $data->name();
                    })
                    ->addColumn('role_name', function ($data) {
                        return $data->role_name->name;
                    })
                    ->addColumn('status', function ($data) {
                        $btn = '<button class="btn btn-sm '.$data->get_status_color().'">'.$data->get_status().' </button>';
                        return $btn;
                    })
                    ->addColumn('action', function($data){
                        $btn = '<div class="btn-group">';
                        $btn .= '<a href="'.route("users.view", $data->id).'" class="btn btn-info btnView"><i class="fas fa-eye"></i></a>';
                        $btn .= '<a href="'.route("users.edit", $data->id).'" class="btn btn-dark btnEdit"><i class="fas fa-edit"></i></a>';
                        $btn .= '<a href="'.route("users.status", $data->id).'" class="btn btnDelete '.$data->get_status_color().'" onclick="delete_msg()"><i class="fa-solid fa-user-lock"></i></i></a>';
                        $btn .= '</div>';

                        return $btn;
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
        }
        return view('backend.user.index', compact('users'));
    }

    public function add(){
        $roles = Role::latest()->get();
        return view('backend.user.add', compact('roles'));
    }

    public function store(Request $request){
        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'email' => 'required|unique:users,email|email|max:255',
            'password' => 'required',
            'role' => 'required|exists:roles,id',
            'dob' => 'required',
        ]);
        $user = User::create([
            'fname' => $request->fname,
            'sname' => $request->sname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'dob' => $request->dob,
            'created_by' => auth()->user()->id,
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        $this->message('success', 'User Created Successfullly');
        return redirect()->route('users.index');
    }

    public function status($id){
        $user = User::findOrFail($id);
        if($user->status == 1){
            $user->status = -1;
        }else{
            $user->status = 1;
        }
        $user->save();

        $this->message('success', 'Status Changed Successfully for '.$user->name());
        return redirect()->route('users.index');
    }

    public function view($id){
        $user = User::findOrFail($id);
        return view('backend.user.view', compact('user'));
    }

    public function edit($id){
        $roles = Role::latest()->get();
        $user = User::findOrFail($id);
        return view('backend.user.edit', compact('user', 'roles'));
    }

    public function edit_update(Request $request){
        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'sname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,'.$request->id,
            'password' => 'string',
            'role' => 'required|exists:roles,id',
            'dob' => 'required',
        ]);

        $user = User::findOrFail($request->id);

        $user->sname = $request->sname;
        $user->fname = $request->fname;
        $user->email = $request->email;
        if($request->password){
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;
        $user->dob = $request->dob;
        $user->updated_by = auth()->user()->id;
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->save();

        $this->message('success', 'User '.$user->name().'Updated Successfully');
        return redirect()->route('users.index');
    }

}
