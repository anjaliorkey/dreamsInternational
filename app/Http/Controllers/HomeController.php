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
        'Repeatcaptcha' => 'required',

    ]);
    $NameDemo = $request->input('firstName');
    $EmailDemo = $request->input('emailAddress');
    $MobileDemo = $request->input('mobileNumber');
    $AddressDemo = $request->input('address');
    $CityDemo = $request->input('city');
    $GenderDemo = $request->input('gender');
    $dataCaptcha = $request->input('Repeatcaptcha');


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
        'captcha' => $dataCaptcha,
    );

    DB::table('registrations')->insert($data);

    return redirect('/table');
} 
public function formtable(Request $request)
{

    $blogs = DB::table('registrations')->select('id', 'name','email','mobile', 'address', 'city', 'gender','photo','captcha')->get();
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
    $dataCaptcha = $request->input('Repeatcaptcha');


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
        'captcha' => $dataCaptcha,

    );

    DB::table('registrations')->where('id', $idData)->update($data);

    return redirect('/table');
} 

public function formdelete(Request $request, $ids)
{
    DB::table('registrations')->where('id', $ids)->delete();
    return redirect('/table');
}

public function formOnline(Request $request)
{
   return view('onlineForm');
}
public function rentForm(Request $request)
{

     $request->validate([
        'ufname' => 'required',
        'ulname' => 'required',
        'phone' => 'required',
        'email' => 'required',
        'oldAgreementRef' => 'required',
        'agreementTenure' => 'required',
        'rentAmount' => 'required',
        'maintenancePaidBy' => 'required',
        'furnitureAppliances' => 'required',
        'miscellaneous' => 'required',
        'startDate' => 'required',
        'depositAmount' => 'required',
        'costBearer' => 'required',
        'tenantType' => 'required',
        'totalTenant' => 'required',

    ]);

    $FirstDemo = $request->input('ufname');
    $LastDemo = $request->input('ulname');
    $PhoneDemo = $request->input('phone');
    $EmailDemo = $request->input('email');

    $agreeRef = $request->input('oldAgreementRef');


    
    $TenureDemo = $request->input('agreementTenure');
    $RentDemo = $request->input('rentAmount');
    $maintainance = $request->input('maintenancePaidBy');
    $furnitureDemo = $request->input('furnitureAppliances');
    $miscellaneousDemo = $request->input('miscellaneous');
    $startDateDemo = $request->input('startDate');
    $depositAmountDemo = $request->input('depositAmount');
    $costBearerDemo = $request->input('costBearer');
    $tenantTypeDemo = $request->input('tenantType');
    $totalTenantDemo = $request->input('totalTenant');

 


 $data = array(
        'firstname'=> $FirstDemo,
        'lastname'=> $LastDemo,
        'phone'=> $PhoneDemo,
        'email'=> $EmailDemo,
        'oldagrement'=> $agreeRef,
        'tenorMonth' => $TenureDemo,
        'rentamt' => $RentDemo,
        'socityMaintenance' => $maintainance,
        'FurnitureandAppliances' => $furnitureDemo,
        'Miscellaneous' => $miscellaneousDemo,
        'AgreementStartDate' => $startDateDemo,
        'DepositAmount' => $depositAmountDemo,
        'Agreementcost' => $costBearerDemo,
        'tenantType' => $tenantTypeDemo,
        'totalTenant' => $totalTenantDemo,
       
    );

  DB::table('onlineform')->insert($data);
   
    return redirect('/agreTable');

}


public function AggrimentUsertable(Request $request)
{
    $blogsDemoTo = DB::table('onlineform')->select('id', 'firstname','lastname','phone', 'email', 'oldagrement', 'tenorMonth','rentamt','socityMaintenance','FurnitureandAppliances','Miscellaneous','AgreementStartDate','DepositAmount','Agreementcost','tenantType','totalTenant')->get();
    
   

    return view('AggriUsertable', compact('blogsDemoTo'));
}

public function Agreeformedit(Request $request, $idsDemo, $id)
{
    $blogType = DB::table('onlineform')->where('id', $id)->first();
    return view('editagri', compact('blogType'));
}



public function formupdateDemo(Request $request)
{
    $idData = $request->input('hiddID');
    $FirstDemo = $request->input('ufname');
    $LastDemo = $request->input('ulname');
    $PhoneDemo = $request->input('phone');
    $EmailDemo = $request->input('email');

    $agreeRef = $request->input('oldAgreementRef');


    
    $TenureDemo = $request->input('agreementTenure');
    $RentDemo = $request->input('rentAmount');
    $maintainance = $request->input('maintenancePaidBy');
    $furnitureDemo = $request->input('furnitureAppliances');
    $miscellaneousDemo = $request->input('miscellaneous');
    $startDateDemo = $request->input('startDate');
    $depositAmountDemo = $request->input('depositAmount');
    $costBearerDemo = $request->input('costBearer');
    $tenantTypeDemo = $request->input('tenantType');
    $totalTenantDemo = $request->input('totalTenant');

 


 $data = array(
        'firstname'=> $FirstDemo,
        'lastname'=> $LastDemo,
        'phone'=> $PhoneDemo,
        'email'=> $EmailDemo,
        'oldagrement'=> $agreeRef,
        'tenorMonth' => $TenureDemo,
        'rentamt' => $RentDemo,
        'socityMaintenance' => $maintainance,
        'FurnitureandAppliances' => $furnitureDemo,
        'Miscellaneous' => $miscellaneousDemo,
        'AgreementStartDate' => $startDateDemo,
        'DepositAmount' => $depositAmountDemo,
        'Agreementcost' => $costBearerDemo,
        'tenantType' => $tenantTypeDemo,
        'totalTenant' => $totalTenantDemo,
       
    );

   DB::table('onlineform')->where('id', $idData)->update($data);

    
    return redirect('/agreTable');

}



public function Agreeformdelete(Request $request, $idsText, $id)
{
    $blogType = DB::table('onlineform')->where('id', $id)->delete();
    return redirect('/agreTable');
}


}
