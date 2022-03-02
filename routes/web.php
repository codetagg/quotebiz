<?php

use App\Http\Controllers\AccessoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TechController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;


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
//////////////////////////// ADMIN //////////////////////////////////////////

Route::name('admin.')->namespace('Admin')->prefix('admin')->group(function () {

    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
       // Route::match(['get', 'post'], '/login', [AdminController::class, 'adminLogin'])->name('login');

           Route::get('/', function () {
            return view('admin.index');
        });

          Route::get('/login', function () {
            return view('admin.login');
        }); 

           Route::get('/quotes', function () {
            return view('admin.quotes');
        });

           Route::get('/customers', function () {
            return view('admin.customers');
        });

           Route::get('/servicecategories', function () {
            return view('admin.servicecategories');
        });

           Route::get('/serviceprovider', function () {
            return view('admin.serviceprovider');
        });

           Route::get('/settings', function () {
            return view('admin.setting');
        });

           Route::get('/support', function () {
            return view('admin.support');
        });

           Route::get('/supportchat', function () {
            return view('admin.supportchat');
        });

           Route::get('/emailtemplate', function () {
            return view('admin.emailtemplate');
        });

    });

    Route::namespace('Auth')->middleware('auth:admin')->group(function () {

     


        Route::post('/logout', function () {
            Auth::guard('admin')->logout();
            return redirect()->action([
                AdminController::class,
                'adminLogin'
            ]);
        })->name('logout');

 }); 
     }); 
///////////////////////////////// TECHNICIANS  //////////////////////////////////////

Route::name('service-provider.')->namespace('Service-provider')->prefix('service-provider')->group(function () {

    Route::namespace('Auth')->middleware('guest:tech')->group(function () {

        //Route::match(['get', 'post'], '/login', [TechController::class, 'techLogin']);

        Route::get('/', function () {
            return view('service_provider.index');
        });

        Route::get('/login', function () {
            return view('service_provider.login');
        });

        Route::get('/register', function () {
            return view('service_provider.register');
        });
        
         Route::get('/quotes', function () {
            return view('service_provider.quotes');
        });

         Route::get('/settings', function () {
            return view('service_provider.settings');
        });

         Route::get('/support', function () {
            return view('service_provider.support');
        });

         Route::get('/supportchat', function () {
            return view('service_provider.supportchat');
        });

         Route::get('/createticket', function () {
            return view('service_provider.createticket');
        });

    });

    Route::namespace('Auth')->middleware('auth:tech')->group(function () {

        

        Route::get('/logout', function () {
            Auth::guard('tech')->logout();
            return redirect()->action([
                TechController::class,
                'techLogin'
            ]);
        })->name('logout');
    });

     });

/////////////////////////////////// CUSTOMER ////////////////////////////////
Route::name('customer.')->namespace('Customer')->prefix('customer')->group(function () {
Route::namespace('Auth')->middleware('guest:web')->group(function () {

    Route::get('/', function () {
        return view('customer.index');
    })->name('home');

    Route::get('/login', function () {
            return view('customer.login');
        }); 

    Route::get('/quotes', function () {
        return view('customer.quotes');
    });

    Route::get('/profile', function () {
        return view('customer.profile');
    });

    Route::get('/support', function () {
        return view('customer.support');
    });

    Route::get('/supportchat', function () {
        return view('customer.supportchat');
    });
    
    Route::get('/createticket', function () {
        return view('customer.createticket');
    });

    Route::match(['get', 'post'], '/signin', [UserController::class, 'accountLogin'])->name('signin');
    Route::match(['get', 'post'], '/signup', [UserController::class, 'store']);
    Route::get('forget-password', function () {
        return view('frontend.forget-password');
    }); 
});



Route::namespace('Auth')->middleware('auth:web')->group(function () {

    // Route::get('/profile', function () {
    //     return view('frontend.profile');
    // });


   
    Route::get('/logout', function () {
        Auth::guard('web')->logout();
        return redirect()->action([
            UserController::class,
            'accountLogin'
        ]);
    })->name('logout');

    // //paypal
    // Route::get('paypal-success',[UserController::class,"success"])->name('paypal.success');
    //  Route::get('paypal-cancel',[UserController::class,'cancel'])->name('paypal.cancel');

});
});

