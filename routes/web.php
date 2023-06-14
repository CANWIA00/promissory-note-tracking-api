<?php


use App\Senetler;
use App\Http\Controllers\SenetController;
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



/*TODO Senet endpoints*/

Route::get("/senet","SenetController@getAllcostumer")->name('base');
Route::get("/senet/getById/{id}","SenetController@getCostumerById")->name('getById');
Route::get("/senet/deleteById/{id}","SenetController@deleteCustomerById",function(){
    return redirect()->route('base');
})->name('deleteById');
Route::post("senet/create","SenetController@CreateCustomer",function(){
    return redirect()->route('base');
})->name('create');
Route::get("/senet/updateById/{id}","SenetController@updateCustomerById")->name('update');




/*TODO Senet endpoints*/
/*
Route::get("/iletisim","Iletisim@index");
Route::post("/iletisim-sonuc","Iletisim@add")->name("iletisim-sonuc");   



Route::get("/senet/ekle","CrudController@add");
Route::get("/senet/guncelle","CrudController@update");
Route::get("/senet/sil","CrudController@delete");
Route::get("/senet/listele","CrudController@info");
Route::get("/senet/getir","CrudController@findById");


Route::get("/senet/modelById", "ModelController@findById");
Route::get("/senet/modelAdd","ModelController@add");
Route::get("/senet/modelUpdate","ModelController@update");
Route::get("/senet/modelDelete","ModelController@delete");
*/



/**************************************************************************** */
/*
Route::get("/senet",'SenetController@show');
// senet path i ve param ile git senetcontroller classina gir show methoduna id parametresini vur

Route::get("/form",'FormController@show');

Route::get('/',function(){
    return view('welcome');
});

Route::post("/form-sonuc",'FormController@sonuc')->name('form-sonuc');

Route::get("/sonuc", function(){
    return view('formSonuc');
});

*/

/*
// FindAll()
Route::get('/senet/all',function(){
    return view('senetlerView',[
        'baslik' => 'Senetler',
        'senet'=> Senetler::All()
    ]);
});

// FindById()
Route::get('/senet/{id}',function($id){
    return view('senetView',[
        'senetler' => Senetler::find($id)
    ]);
});
*/







