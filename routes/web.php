<?php
\TalvBansal\MediaManager\Routes\MediaRoutes::get();

Route::group(['domain' => '{account}.liberty.dev'], function () {
        Route::get('/', function ($account) {
            $server = explode('.', Request::server('HTTP_HOST'));
            $profile = App\Profile::where('company_login', '=', $account)->first();
            //var_dump($profile);
            
            if($profile == Null){ 
                return redirect('http://'.$server[1].'.'.$server[2]); 
            }else{
                return view('welcome');
            }
        });
});

Route::get('/', function () {  return view('welcome'); })->name('home');

Route::get('blocked', 'UserController@getBlocked');
Route::get('login', 'UserController@getLogin');
Route::post('login', 'UserController@postLogin')->name('signup');
Route::get('forget_password', 'UserController@forgetPassword');

Route::post('receive', 'MoneyController@yandexReceive');

Route::get('logout', 'Auth\AuthController@getLogout');
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');
Route::get('register-confirm', 'Auth\AuthController@getRegisterConfirm');
Route::post('register-confirm', 'Auth\AuthController@postRegisterConfirm');

Route::post('checkmail', 'Auth\AuthController@postCheckMail');
Route::get('rules', function () {  return view('front.milo-rules'); });
Route::get('privacy_policy', function () {  return view('front.milo-privacy_policy'); });

Route::group(['prefix'=>'administrator','middleware'=>'auth'], function()
{
    Route::get('/', function (){ return redirect('administrator/index'); });
    Route::get('index', 'AdminController@getIndex');
    Route::get('mediamanager', 'AdminController@getMediamanager');
    Route::get('contentmanager', 'AdminController@getContentmanager');
    Route::get('company_about', 'AdminController@getCompany_about');
    Route::get('comments', 'AdminController@getComments');
    Route::get('lids', 'AdminController@getLids');
    Route::get('article/{id?}', 'AdminController@getArticle');
    Route::get('email', 'AdminController@getEmail');
    Route::get('structure', 'AdminController@getStructure');
    
    Route::any('block', 'AdminController@getBlock');
    
    Route::post('update_company_about', 'AdminController@updatePage');
    Route::post('updateLids', 'AdminController@updateLids');
    Route::post('updateLidPrice', 'AdminController@updateLidPrice');
    Route::post('comment-delete', 'CommentController@deleteComment');
    Route::post('article-update', 'AdminController@postArticle');
    Route::post('article-delete', 'AdminController@deleteArticle');
    Route::post('sendmail', 'AdminController@sendMail');
});

Route::group(['prefix'=>'cabinet','middleware'=>['auth','cabinet']], function()
{
     Route::get('/', function (){ return redirect('cabinet/home'); });
     Route::get('home', 'CabinetController@getCabinet');
     Route::get('sponsors', 'CabinetController@getSponsors');
     Route::get('time', 'CabinetController@getTime');
     Route::get('profile', 'CabinetController@getProfile');
     Route::get('news', 'CabinetController@getNews');
     Route::get('calculator', 'CabinetController@getCalculator');
     Route::get('user', 'CabinetController@getUser');
     Route::get('science', 'CabinetController@getScience');
     Route::get('science1', 'CabinetController@getScience');
     Route::get('science2', 'CabinetController@getScience');
     Route::get('science3', 'CabinetController@getScience');
     Route::get('science4', 'CabinetController@getScience');
     Route::get('science5', 'CabinetController@getScience');
     Route::get('science6', 'CabinetController@getScience');
     Route::get('science7', 'CabinetController@getScience');
     Route::get('science8', 'CabinetController@getScience');
     Route::get('science9', 'CabinetController@getScience');
     Route::get('science10', 'CabinetController@getScience');
     Route::get('science11', 'CabinetController@getScience');
     Route::get('science12', 'CabinetController@getScience');
     Route::get('science13', 'CabinetController@getScience');
     Route::get('science14', 'CabinetController@getScience');
     Route::get('science15', 'CabinetController@getScience');
     Route::get('science16', 'CabinetController@getScience');
     Route::get('science17', 'CabinetController@getScience');
     Route::get('science18', 'CabinetController@getScience');
     Route::get('science19', 'CabinetController@getScience');
     Route::get('science20', 'CabinetController@getScience');
     Route::get('dialogs', 'CabinetController@getDialogs');
     Route::get('dialog', 'CabinetController@getDialog');
     Route::get('company_about', 'CabinetController@getCompanyAbout');
     Route::get('company_products', 'CabinetController@getCompanyProducts');
     Route::get('company_rating_dsa', 'CabinetController@getCompanyRatingDSA');
     Route::get('company_store', 'CabinetController@getCompanyStore');
     Route::get('company_backoffice', 'CabinetController@getCompanyBackoffice');
     Route::get('company_help', 'CabinetController@getCompanyHelp');
     Route::any('moderation', 'CabinetController@getModeration');
     
     Route::any('guests', 'CabinetController@getGuests');
     Route::any('structure', 'CabinetController@getStructure');
     Route::get('club', 'CabinetController@getClub');
     Route::get('balance', 'CabinetController@getBalance');
     Route::get('invite', 'CabinetController@getInvite');
     
     Route::get('video-0', 'CabinetController@video');
     Route::get('video-1', 'CabinetController@video');
     Route::get('video-2', 'CabinetController@video');
     Route::get('video-3', 'CabinetController@video');
     Route::get('video-4', 'CabinetController@video');
     Route::get('video-5', 'CabinetController@video');
     Route::get('after', 'CabinetController@after');
     
     Route::post('save_video_progress', 'CabinetController@saveVideoProgress');
     Route::post('save_avatar', 'CabinetController@saveAvatar');
     
     Route::get('product_LUMINESCE', 'CabinetController@product');
     Route::get('product_RESERVE', 'CabinetController@product');
     Route::get('product_FINITI', 'CabinetController@product');
     Route::get('product_AMPM', 'CabinetController@product');
     Route::get('product_ZEN', 'CabinetController@product');
     Route::get('product_AGELESS', 'CabinetController@product');
     Route::get('product_NEVO', 'CabinetController@product');
     Route::get('product_8', 'CabinetController@product');
     Route::get('product_9', 'CabinetController@product');
     Route::get('product_10', 'CabinetController@product');
     Route::get('nobelprices', 'CabinetController@getNobelprices');
     
     Route::post('clubcart_activation', 'CabinetController@clubcart_activation');
     Route::post('updateRecommendation', 'CabinetController@updateRecommendation');
     Route::post('buyLids', 'CabinetController@buyLids');
     
     Route::post('comment', 'CommentController@postComment');
     Route::post('delete_comment', 'CommentController@deleteComment');
     Route::post('edit_comment', 'CommentController@editComment');
     
     Route::get('personal_messages', 'MessageController@personalMessages');
     
     Route::post('user_unload', 'MessageController@userUnload');
     Route::post('load_dialog_autor', 'MessageController@loadDialogAutor');
     Route::post('get_messages', 'MessageController@getMessages');
     Route::post('add_message', 'MessageController@addMessage');
     Route::post('load_sides', 'MessageController@loadSides');
     Route::post('add_side', 'MessageController@addSide');
     Route::post('check_side', 'MessageController@checkSide');
     Route::post('remove_side', 'MessageController@removeSide');
     Route::post('find_user_by_name', 'UserController@findUserByName');
     Route::post('rename_dialog', 'MessageController@renameDialog');
     Route::post('new_dialog', 'MessageController@postDialog');
     Route::post('delete_dialog', 'MessageController@deleteDialog');
     Route::post('get_dialogs', 'MessageController@getDialogs');
     Route::post('checkNewMessages', 'MessageController@checkNewMessages');
     
     Route::post('getCountryCities', 'CabinetController@getCountryCities');
     Route::post('check_updates', 'CabinetController@updateSubMenu');
     Route::post('close_notify', 'CabinetController@closeNotify');
     Route::post('postNote', 'CabinetController@postNote');
     Route::post('recommendation', 'CabinetController@postRecommendation');
     Route::post('updateProfile', 'CabinetController@updateProfile');
     Route::post('updateContacts', 'CabinetController@updateContacts');
     Route::post('updateCompanyData', 'CabinetController@updateCompanyData');
     Route::get('exit', function (){
         Auth::logout();
         return redirect('/');
     });
     Route::post('getFullAddress', 'CabinetController@getFullAddress');
     Route::post('upload_photo', 'CabinetController@upload_photo');
     Route::post('deleteTempImage', 'CabinetController@deleteTempImage');
});

Route::get('captcha-form-validation',
        array('as'=>'google.get-recaptcha-validation-form',
            'uses'=>'FileController@getCaptchaForm')
        ) ;
Route::post('cabinet',
        array('as'=>'google.post-recaptcha-validation',
            'uses'=>'UserController@postRegister')
        ) ;
Route::post('forget_password',
        array('as'=>'google.post-recaptcha-validation.forget_password',
            'uses'=>'UserController@postForgetPassword')
        ) ;
