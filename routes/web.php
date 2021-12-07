<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

//**************************HomeBladeController*********************************
Route::get('/', [App\Http\Controllers\HomeBladeController::class, 'welcome']);
Route::get('/home', [App\Http\Controllers\HomeBladeController::class, 'welcome'])->name('home');
Route::get('/kilimofy/home/verify', [App\Http\Controllers\HomeBladeController::class, 'verify'])->name('verify');
Route::post('kilimofy/Change-Account/{user_id}', [App\Http\Controllers\HomeBladeController::class, 'switch_account']);
Route::post('kilimofy/Change-Profile/{user_id}', [App\Http\Controllers\HomeBladeController::class, 'update_profile']);
Route::get('/kilimofy/home/redirect-after-verify-code', [App\Http\Controllers\HomeBladeController::class, 'redirect_after_verification_code'])->name('home');


//**************************end*************************************************


//**************************AuthController*********************************

Route::post('/kilimofy/user/register_form', [App\Http\Controllers\AuthController::class, 'create'])->name('register');
Route::post('/kilimofy/user/verify_form', [App\Http\Controllers\AuthController::class, 'verify'])->name('verify_user_phone_number');
Route::any('/kilimofy/user/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/kilimofy/user/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


//**************************end*************************************************


//**************************MkulimaController*********************************
Route::get('/kilimofy/Mkulima/home-page', [App\Http\Controllers\MkulimaController::class, 'mkulima_index_page'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo', [App\Http\Controllers\MkulimaController::class, 'mashine_za_kilimo'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo/shopping-cart', [App\Http\Controllers\MkulimaController::class, 'mashine_za_kilimo_shopping_cart'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Bwana-Shamba', [App\Http\Controllers\MkulimaController::class, 'mabwana_shamba'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{bidhaa_info_id}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_shopping_cart'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Buy-item/{item_id}-{slug}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_buy_item'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Checkout-item/{item_id}-{slug}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_check_out_item'])->middleware('auth');
Route::get('/kilimofy/Usafirisaji/Usafiri', [App\Http\Controllers\MkulimaController::class, 'usafiri'])->middleware('auth');

//**************************end*************************************************

//**************************AdminController*********************************
Route::get('/kilimofy/Admin', [App\Http\Controllers\AdminController::class, 'admin_login_redirect']);
Route::get('/kilimofy/Admin/login', [App\Http\Controllers\AdminController::class, 'admin_login_redirect']);
Route::get('/kilimofy/Admin/register-new-staff', [App\Http\Controllers\AdminController::class, 'admin_register_new_staff']);
Route::post('/kilimofy/Admin/register-new-staff-store', [App\Http\Controllers\AdminController::class, 'admin_register_new_staff_store']);
Route::get('/kilimofy/Admin/admin_index_page', [App\Http\Controllers\AdminController::class, 'admin_index_page']);
Route::get('/kilimofy/Admin/users-list', [App\Http\Controllers\AdminController::class, 'users_list']);
Route::get('/kilimofy/Admin/users-action-list', [App\Http\Controllers\AdminController::class, 'users_action_list']);
Route::get('/kilimofy/Admin/Headline-action-list', [App\Http\Controllers\AdminController::class, 'headline_action_list']);
Route::get('/kilimofy/Admin/New-Forum-Category-Form', [App\Http\Controllers\AdminController::class, 'forum_category_form']);
Route::get('/kilimofy/Admin/Crops-Price-Update-Form', [App\Http\Controllers\AdminController::class, 'crops_price_form']);
Route::get('/kilimofy/Admin/Headlines-Updates-Form', [App\Http\Controllers\AdminController::class, 'headline_updates']);
Route::post('/kilimofy/Admin/Headlines-Updates-Form-store', [App\Http\Controllers\AdminController::class, 'headline_updates_store']);
Route::post('/kilimofy/Admin/New-Forum-Category-Form-Store', [App\Http\Controllers\AdminController::class, 'create_forum_category']);


Route::get('/kilimofy/Admin/items-waiting-list', [App\Http\Controllers\AdminController::class, 'items_waiting_list']);
Route::get('/kilimofy/Admin/items-details/{item_id}', [App\Http\Controllers\AdminController::class, 'items_details']);
Route::get('/kilimofy/Admin/admin-all-forms', [App\Http\Controllers\AdminController::class, 'admin_all_forms']);
Route::get('/kilimofy/Admin/items-feedback/{item_id}', [App\Http\Controllers\AdminController::class, 'items_feedback_form']);
Route::post('/kilimofy/Admin/items-feedback-update', [App\Http\Controllers\AdminController::class, 'items_feedback_update']);
Route::get('/kilimofy/Admin/accept_item_to_market/{item_id}', [App\Http\Controllers\AdminController::class, 'accept_item_to_market']);

//**************************end*************************************************


//**************************MuuzaWaPembejeoController*********************************
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page', [App\Http\Controllers\PembejeoNaViwatilifuController::class, 'muuzaji_Wa_pembejeo_na_viwatilifu_index_page'])->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/{user_id}',[App\Http\Controllers\PembejeoNaViwatilifuController::class, 'muuzaji_Wa_pembejeo_na_viwatilifu_account_page'])->middleware('auth');
Route::post('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/post-item-page/{user_id}', [App\Http\Controllers\PembejeoNaViwatilifuController::class, 'post_item_store_method'])->middleware('auth');
//**************************end*************************************************


//**************************ForumController*************************************************
Route::get('/kilimofy/Forum/Forum-Category-List', [App\Http\Controllers\ForumController::class, 'forum_categories_page']);
Route::get('/kilimofy/Forum/Forum-Category-Topics/{forum_id}', [App\Http\Controllers\ForumController::class, 'forum_category_topics_page']);
Route::get('/kilimofy/Forum/Forum-Discussion/{discussion_id}', [App\Http\Controllers\ForumController::class, 'forum_topics_discussion']);
Route::post('/kilimofy/Forum/Forum-Discussion/Join_Discussion', [App\Http\Controllers\ForumController::class, 'join_discussion']);
Route::post('/kilimofy/Forum/Create-Discussion', [App\Http\Controllers\ForumController::class, 'create_discussion']);
//**************************end*************************************************



//**************************UserAccountController*********************************
Route::get('/kilimofy/UserAccount/about_user_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'about_user_page']);
Route::get('/kilimofy/UserAccount/user_timeline_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_timeline_page']);
Route::get('/kilimofy/UserAccount/user_friends_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_friends_page']);
Route::get('/kilimofy/UserAccount/user_groups_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_groups_page']);
Route::get('/kilimofy/UserAccount/user_photos_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_photos_page']);
Route::get('/kilimofy/UserAccount/user_videos_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_videos_page']);
Route::get('/kilimofy/UserAccount/user_blog_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_blog_page']);
Route::get('/kilimofy/UserAccount/user_blog_post_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_blog_post_page']);
Route::get('/kilimofy/UserAccount/user_forum_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_forum_page']);
Route::get('/kilimofy/UserAccount/user_store_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_store_page']);
Route::get('/kilimofy/UserAccount/user_setting_page/{user_id}-{slug}', [App\Http\Controllers\UserAccountController::class, 'user_setting_page']);

//**************************end*************************************************


//**************************PostController*********************************
Route::post('/kilimofy/User/status-post', [App\Http\Controllers\PostController::class, 'create_status']);
Route::post('/kilimofy/Blog/poll_option', [App\Http\Controllers\PostController::class, 'poll_option'])->middleware('auth');
Route::post('/kilimofy/Blog/user_quick_post', [App\Http\Controllers\PostController::class, 'user_quick_post']);
Route::get('/kilimofy/Post/read_comments/{post_id}-{slug}', [App\Http\Controllers\PostController::class, 'read_comments']);
Route::post('/kilimofy/Blog/send_comments', [App\Http\Controllers\PostController::class, 'send_comments']);
Route::get('/kilimofy/Blog/reply_comment/{comment_id}', [App\Http\Controllers\PostController::class, 'reply_comment']);
Route::post('/kilimofy/Blog/reply_comment_form', [App\Http\Controllers\PostController::class, 'reply_comment_create']);
Route::post('/kilimofy/Admin/admin-all-forms-post', [App\Http\Controllers\PostController::class, 'create']);


//**************************end*************************************************

//**************************ChatController*************************************************
Route::get('/kilimofy/test-send-message', [App\Http\Controllers\MessageController::class, 'getMessage']);

//**************************end*************************************************

//******************************Bwana Shamba************************************************
Route::get('/kilimofy/Bwana-Shamba/home-page', [App\Http\Controllers\BwanaShambaController::class, 'Bwana_Shamba_Index_Page']);
//**************************end*************************************************


//**************************GroupController*************************************************
Route::get('/kilimofy/Group/Group-Lists', [App\Http\Controllers\GroupController::class, 'group_list_page']);
Route::post('/kilimofy/Group/Create-Group', [App\Http\Controllers\GroupController::class, 'create_group']);
Route::get('/kilimofy/Group/Group-Timeline', [App\Http\Controllers\GroupController::class, 'group_timeline']);




//**************************end*************************************************


//**************************BlogController*************************************************
Route::post('/kilimofy/Blog/User-Create-Blog-Post', [App\Http\Controllers\BlogController::class, 'createBlog']);
Route::post('/kilimofy/Group/Create-Group', [App\Http\Controllers\GroupController::class, 'create_group']);




//**************************end*************************************************


//**************************DriverController*************************************************
Route::get('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page', [App\Http\Controllers\DriverController::class, 'Driver_Index_Page']);
Route::post('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Make-Trip', [App\Http\Controllers\DriverController::class, 'MakeTrip']);
Route::post('/kilimofy/Group/Create-Group', [App\Http\Controllers\GroupController::class, 'create_group']);




//**************************end*************************************************
