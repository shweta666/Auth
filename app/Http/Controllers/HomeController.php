<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function show()
    {
        $data = User::all();
        return view('alluser', ['data' =>$data]);
    }

    public function delete($id)
    {
        $data= User::find($id);
        $data->delete();

        // return redirect('alluser')->with('success', 'Data Deleted');
        return Redirect::to(route("alluser"));
    }

    public function showData($id)
    {
        $data= User::find($id);
        return view('edit', ['data'=>$data]);
    }

    public function update(Request $req)
    {
        // $this->validate($req,[
        //     'name' => 'required',
        //     'email' =>'required',
        //     'role' => 'required',
        //     'phone' => 'required',
        // ]);

        $data= User::find($req->id);

        $data->name=$req->name;
        $data->email=$req->email;
        $data->role=$req->role;
        $data->phone=$req->phone;

        // $this->validate($req, [
        //     'password' => 'sometimes|nullable|min:8',
        // ]);

        // if ($req->has('password')){
        //     $this->validate($req, [
        //         'password' => 'required|confirmed|min:8',
        //     ]);
            $data->password=Hash::make($req->password);
        // }

         //$req->request->set('password',bcrypt($req->password));
        //  $req = $req->all();
        // }
        // else{
        //     $req = $req->except(['password']);
        // }
        // $data->update($req);
        

        $data->save();
        
        return redirect('/alluser')->with('success', 'Data Updated');
    }
    
    public function addData(Request $req)
    {
        $data = new User;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        //$data->password=Crypt::encrypt($req->name);
        $data->role=$req->role;
        $data->phone=$req->phone;
        // $data->image=$req->image;

        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/data/', $filename);
            $data->image = $filename;
        }   else {
                return $req;
                $data->image = '';
            }

        $data->save();

        return redirect('/alluser')->with('success', 'User Added Successfully');
    }

    public function fetch($id)
    {
        $data = User::findOrFail($id);
        return view('info', ['data' => $data]);
    }
    
    public function info(Request $req)
    {
        $data = User::find($req->id);
        return view('info', compact('data'));
    }
    
    public function showUser(Request $req)
    {
        $data= User::find($req->id);
        
        return response()->json([
            'success' => true,
            'data'  => $data,
        ]);
    }

    public function exportData()
    {
        return Excel::download(new DataExport, 'users.xlsx');
    }
}

class DataExport implements FromView
{
    // public function collection()
    // {
    //     return User::all();
    // }

    public function view() : View
    {
        return view('export', ['data' => User::all() ]);
    }
}