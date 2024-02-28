<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tblCustomerController;
use App\Http\Controllers\CUDproduct;
use App\Http\Controllers\salesflowController;
use App\Http\Controllers\userAccountController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\StockUpdateController;
use App\Http\Controllers\displayFriendsController;
use App\Http\Controllers\loyaltyManagmentController;
use App\Http\Controllers\UploadfileController;
use Illuminate\Http\Request;
use App\Http\Controllers\orderViewController;
use App\Http\Controllers\AddMenucontroller;
use App\Http\Controllers\OrderFlowController;
use App\Http\Controllers\accountsController;
use App\Http\Controllers\serviceSalesFlow;
use App\Http\Controllers\UpdateStocksController;
use App\Http\Controllers\globalVarriablesController;
use App\Http\Controllers\saleInvoiceEditController;
use App\Http\Controllers\shiftDataController;
use App\Http\Controllers\deleteFilesController;
use App\Http\Controllers\thermalprintingController;
use App\Http\Controllers\companySetupController;
use App\Http\Controllers\stripeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::post('/replaceImage',[deleteFilesController::class, 'rIndex'] );
Route::post('/replaceImage',[deleteFilesController::class, 'replaceImage']);
Route::post('/addCompanyInfo',[companySetupController::class, 'addCompanyInfo']);
Route::get('/getCompanyInfo',[companySetupController::class, 'getCompanyInfo']);

Route::post('/checkout',[stripeController::class,'handlePayment']);
Route::post('/stripe/webhook',[stripeController::class,'handleWebHook']);
Route::get('/success',[stripeController::class,'success']);
Route::get('/cancelled',[stripeController::class,'cancelled']);


Route::get('/getMenu/{PCID}',[CUDproduct::class, 'getMenu']);
Route::get('/getAllInvoices',[saleInvoiceEditController::class, 'getAllInvoices']);
Route::get('/getProductImage/{id}',[CUDproduct::class, 'getImage']);
Route::get('/getCategories',[CUDproduct::class, 'getCategories']);
Route::get('/updateInvoice/{data}/{id}',[saleInvoiceEditController::class, 'UpdateSaleInvoice']);
Route::get('/getInvoiceCustomer/{data}',[serviceSalesFlow::class, 'printSaleRequestOnInvoiceNumber']);
Route::post('/addSalesForSS',[serviceSalesFlow::class, 'SalesFlow']);
Route::get('/getCustomersInfo/{CID}',[tblCustomerController::class, 'getCustomerDetail']);
Route::get('/getAllProducts',[CUDproduct::class, 'getAllProducts']);
Route::get('/getAllCustomers',[tblCustomerController::class, 'getAllCustomers']);
Route::get('/getAccountHeads',[accountsController::class, 'getAccountHeads']);
Route::get('/getInvoiceID',[salesflowController::class, 'getInvoiceNewID']);
Route::post('/userLogout',[userAccountController::class, 'userLogout'] );

Route::post('/logout',[userAccountController::class, 'logout'] );
Route::get('/CashierLogin/{data}',[userAccountController::class, 'CashierLogin'] );
Route::get('/regCashier/{data}',[userAccountController::class, 'regCashier'] );

// Route::po('/logout/{adminID}',[userAccountController::class, 'logout'] );
Route::post('/adminLogin',[userAccountController::class, 'adminLogin'] );
Route::get('/regAdmin/{data}',[userAccountController::class, 'regAdmin'] );

Route::post('/loginUser',[userAccountController::class, 'loginUser'] );
Route::post('/signUp',[userAccountController::class, 'signUp'] );
Route::post('/cancelOrder',[orderViewController::class, 'cancelOrder']);

Route::get('/getUsers',[userAccountController::class, 'getUsers'] );
Route::post('/editUsers',[userAccountController::class, 'editUsers'] );

Route::post('/uploadfile',[UploadfileController::class, 'index'] );
Route::post('/uploadfile',[UploadfileController::class, 'upload'] );

Route::get('/updateDes/{data}',[StockUpdateController::class, 'UpdateInStock']);
Route::get('/instock/{data}',[StockUpdateController::class, 'UpdateInStock'] );
Route::get('/updateDes/{data}',[CUDproduct::class, 'updateDescription'] );
Route::get('/DelId/{ID}',[CUDproduct::class, 'DeletionofProductID'] );
// Route::get('/customerinfo/{data}',[tblCustomerController::class, 'customerorder'] );
Route::get('/checkOutOrder/{data}',[shiftDataController::class, 'transferOrderToReview'] );
Route::get('/fetchAllmenu',[menuController::class, 'fetchAllMenu'] );
//-----------------
Route::post('/adp',[CUDproduct::class, 'insertProduct']);
//-----------------
//---------------------
Route::get('/orderreview/{data}',[CUDproduct::class, 'insertProduct'] );
Route::post('/addCustomer',[tblCustomerController::class, 'addCustomer'] );
//--------------------------------------------------
//---------------------------------------------
Route::get('/loadProductCategory',[AddMenuController::class, 'loadProductCategory']);
Route::get('/insertProducts/{data}',[AddMenucontroller::class, 'insertProducts']);
Route::get('/customer/{data}',[tblCustomerController::class, 'customerinfo'] );
Route::get('/logedInCustomerData/{data}',[tblCustomerController::class, 'logedInCustomerData'] );
//------------------------------------------
Route::get('/AddInSales/{data}',[salesflowController::class, 'salesflowCheckout'] );
//-----------------------------------------

Route::get('/getCategoryview',[menuController::class, 'getCategoryview'] );
Route::get('/fetchMenu/{CID}',[menuController::class, 'fetchMenu'] );
Route::get('/fetchCategories',[menuController::class, 'getCategories'] );
Route::get('/fetchCategoriesInOptions',[menuController::class, 'getCategoriesForSelectMenu'] );
Route::get('/friendsData',[displayFriendsController::class, 'friendsData'] );
Route::get('/friendsData2/{FID}',[displayFriendsController::class, 'friendsData2'] );
Route::get('/friendsData3/{FID}',[displayFriendsController::class, 'friendsData3'] );
Route::get('/getFriends/{refID}',[displayFriendsController::class, 'getFriends'] );
Route::get('/mTree/{CID}',[tblCustomerController::class, 'customerTree'] );
Route::get('/getAllOrders/{data}',[orderViewController::class, 'getAllOrders'] );
Route::get('/getOrders',[orderViewController::class, 'getOrders'] );
Route::get('/getOrdersOnly',[orderViewController::class, 'getOrdersRaw'] );
Route::post('/PlaceOrder',[orderViewController::class, 'PlaceOrder'] );
Route::get('/getPreparingOrders',[orderViewController::class, 'getPreparingOrders'] );
Route::get('/setPrepared/{id}',[orderViewController::class, 'setPreparedOrders'] );
Route::get('/getDeliveryPendingOrders',[orderViewController::class, 'getDeliveryPendingOrders'] );
Route::post('/setDelivered',[orderViewController::class, 'setDelivered'] );
Route::get('/deliveredOrders',[orderViewController::class, 'deliveredOrders'] );
Route::post('/receivedOrders',[orderViewController::class, 'receivedOrders'] );
Route::get('/received',[orderViewController::class, 'received'] );
Route::get('/getstatus/{orderID}',[orderViewController::class, 'getstatus'] );
Route::get('/viewAllStock',[OrderFlowController::class, 'viewAllStock']);
Route::post('/SetStockIdeal',[OrderFlowController::class, 'UpdateStock']);
Route::post('/AddCategory',[menuController::class, 'AddCategory']);
Route::get('/getCategory',[menuController::class, 'getCategories']);
Route::post('/editCategory',[menuController::class, 'editCategoryName']);
Route::get('/getOrderStatus',[orderViewController::class, 'getOrderStatus']);
Route::get('/getCustomers',[tblCustomerController::class, 'getCustomers']);
Route::post('/editCustomer',[tblCustomerController::class, 'editCustomer']);
Route::post('/updateCustomerDetails',[tblCustomerController::class, 'updateCustomerDetails']);

Route::get('/modifyOrder/{PID}',[shiftDataController::class, 'modifyOrder']);
Route::get('/thermalPrinting',[thermalprintingController::class, 'thermalPrinting']);
// Route::get('/testpdf/as',[printServiceSaleInvoice::class, 'afterSalesServicePrint'])->middleware('api.access');



Route::get('/rev', function () {

$value = Session::get('orderReview');

//Session::forget('orderReview');
return $value;
});

Route::get('/r', function () {

return view('referfriend');
});

Route::get('/as', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('addNewStock'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/os', function () {

return view('orderStatus');
});

Route::get('/eu', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editUser'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/invoice', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('invoice');
    }else{
    return view("adminLogin");
    }
});


Route::get('/es', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editStock'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/rec', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('received'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/sign', function () {
return view('signInSignUp');
});
Route::get('/myorder', function () {
return view('orderReview');
});

Route::get('/newmenuold', function () {
return view('newMenu');
});
Route::get('/orev', function () {
return view('orderReview');
});

Route::get('/add', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('AddProduct'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/newmenu', function () {
    return view('deliveryMenu', ['stripeKey' => config('services.stripe.key'),'sessionID'=>print_r(session()->all(),true)]);
    });

Route::get('/', function () {
    return view('deliveryMenu', ['stripeKey' => config('services.stripe.key'),'sessionID'=>print_r(session()->all(),true)]);

});

Route::get('/si', function () {
return view('signInSignUp');
});
Route::get('/ot', function () {
return view('OrderTracking');
});
Route::get('/or', function () {
return view('orderView');
});
Route::get('/prs', function () {
    return view('profilescreen');
    });

Route::get('/ks', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('NewUpdate'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ac', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('newCustomer'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ec', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editcustomer'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ff', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('friendsFlow'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ss', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('newSalesWindow'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/nss', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"||$UN=="User"){
    return view('sales');
    }else{
    return view("signInSignUp");
    }
});


Route::get('/admin', function () {
    return view('adminLogin');
    });
Route::get('/stripe', function () {
return view('StripeForm');
});

Route::get('/acg', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('AddCategory'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ecg', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('editCategory'); 
    }else{
    return view("adminLogin");
    }
});

Route::post ( '/abc', function (Request $request,$data) {

\Stripe\Stripe::setApiKey (env());
try {
\Stripe\Charge::create ( array (
"amount" => 300 * 100,
"currency" => "usd",
"source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
"description" => "Test payment."
) );
Session::flash ( 'success-message', 'Payment done successfully !' );
return "OK";
//return Redirect::back ();
} catch ( \Exception $e ) {
Session::flash ( 'fail-message', "Error! Please Try again." );
return "NO";
//return Redirect::back ();
}
} );
Route::get('/nc', function () {
return view('newCheckout');
});
Route::get('/p', function () {
return view('profile');
});

Route::get('/ov', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('orderView'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/adi', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('adminDineIn'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/kv', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('kitchenView'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/wa', function () {
return view('whatsappMessage');
});

Route::get('/dpo', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deliveryPendingOrders'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ui', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('uploadImage'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/do', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deliveredOrders'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ao', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('AllOrders'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/o', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('Orders'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ts', function () {
return view('touchscreen');
});

Route::get('/ts', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('touchscreen'); 
    }else{
    return view("adminLogin");
    }
});
Route::get('/cs', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('companySetup'); 
    }else{
    return view("adminLogin");
    }
});
Route::get('/adminbar', function () {
    return view('adminNavbar');});

Route::get('/set', function () {
return view('settings');
$UN = session()->get('Designation');
if($UN=="Admin"){
return view('touchscreen');
}else{
return view("signInSignUp");
}
});

Route::get('/userProfile', function () {
    $UN = session()->get('Designation');
    $customerID = session()->get('UserID');
    if($UN=="Admin" || $customerID!=""){
    return view("userProfileView");
    }else{
    return view("signupsignin");
    }
    });

Route::get('/wel', function () {
return view('welcomeagain');
});
Route::get('/up', function () {

$UN = session()->get('Designation');
if($UN=="User"){
return view('orderReview');
}else{
return view("signupsignin");
}
});
Route::get('/userSignin', function () {
    return view('signupsignin');
    });
Route::get('/aa', function () {
return view('Check');
});

Route::get('/pdo', function () {
    $UN = session()->get('Designation');
    if($UN=="Admin"){
    return view('deliveredOrders'); 
    }else{
    return view("adminLogin");
    }
});

Route::get('/ca', function () {
    return view('cashierLogin');
});

Route::get('/admin', function () {
    return view('adminLogin');
});
