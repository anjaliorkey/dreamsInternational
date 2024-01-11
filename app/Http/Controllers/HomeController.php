<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
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
public function formSave(Request $request)
{
    $request->validate([
        'firstName' => 'required',
        'emailAddress' => 'required',
        'mobileNumber' => 'required',
        'address' => 'required',
        'city' => 'required',
        'gender' => 'required|in:male,female',
        'img' => 'image|mimes:jpeg,png,jpg,gif|max:2048',

    ]);
    $NameDemo = $request->input('firstName');
    $EmailDemo = $request->input('emailAddress');
    $MobileDemo = $request->input('mobileNumber');
    $AddressDemo = $request->input('address');
    $CityDemo = $request->input('city');
    $GenderDemo = $request->input('gender');

    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('public/img/', $filename);
    }

    $data = array(
        'name'=> $NameDemo,
        'email'=> $EmailDemo,
        'mobile'=> $MobileDemo,
        'address'=> $AddressDemo,
        'city'=> $CityDemo,
        'gender'=> $GenderDemo,
        'photo' => $filename,
    );

    DB::table('registrations')->insert($data);

    return redirect('/table');
} 
public function formtable(Request $request)
{

    $blogs = DB::table('registrations')->select('id', 'name','email','mobile', 'address', 'city', 'gender','photo')->get();
    return view('table', compact('blogs'));
} 


public function formedit(Request $request, $ids)
{

    $blog = DB::table('registrations')->where('id', $ids)->first();

    return view('edit', compact('blog'));
}

public function formupdate(Request $request)
{
    $idData = $request->input('hiddID');
    $NameDemo = $request->input('firstName');
    $EmailDemo = $request->input('emailAddress');
    $MobileDemo = $request->input('mobileNumber');
    $AddressDemo = $request->input('address');
    $CityDemo = $request->input('city');
    $GenderDemo = $request->input('gender');

    if ($request->hasFile('img')) {
        $file = $request->file('img');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('public/img/', $filename);
    }

    $data = array(
        'name'=> $NameDemo,
        'email'=> $EmailDemo,
        'mobile'=> $MobileDemo,
        'address'=> $AddressDemo,
        'city'=> $CityDemo,
        'gender'=> $GenderDemo,
        'photo' => $filename,
    );

    DB::table('registrations')->where('id', $idData)->update($data);

    return redirect('/table');
} 

public function formdelete(Request $request, $ids)
{
    DB::table('registrations')->where('id', $ids)->delete();
    return redirect('/table');
}


}
