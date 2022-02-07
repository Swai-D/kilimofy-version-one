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

Route::post('/kilimofy/user/register_form', [App\Http\Controllers\AuthController::class, 'create']);
Route::post('/kilimofy/user/verify_form', [App\Http\Controllers\AuthController::class, 'verify'])->name('verify_user_phone_number');
Route::any('/kilimofy/user/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/kilimofy/user/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');


//**************************end*************************************************


//**************************MkulimaController*********************************
Route::get('/kilimofy/Mkulima/home-page', [App\Http\Controllers\MkulimaController::class, 'mkulima_index_page'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo', [App\Http\Controllers\MkulimaController::class, 'mashine_za_kilimo'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mashine-za-kilimo/shopping-cart', [App\Http\Controllers\MkulimaController::class, 'mashine_za_kilimo_shopping_cart'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Bwana-Shamba', [App\Http\Controllers\MkulimaController::class, 'mabwana_shamba'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Fundi-Wa-Mashine-Shamba', [App\Http\Controllers\MkulimaController::class, 'fundi_wa_mashine'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mtaalam-Wa-Kilimo', [App\Http\Controllers\MkulimaController::class, 'mtaalam_wa_kilimo'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Vibarua', [App\Http\Controllers\MkulimaController::class, 'vibarua'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Mtaalam-Wa-Kilimo/blog-page', [App\Http\Controllers\MkulimaController::class, 'mtaalam_wa_kilimo_blog_page'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/shopping-cart/{bidhaa_info_id}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_shopping_cart'])->middleware('auth');
Route::get('/kilimofy/Mkulima/mashime_za_kilimo_cart/shopping-cart/{bidhaa_info_id}', [App\Http\Controllers\MkulimaController::class, 'mashine_za_kilimo_cart'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Buy-item/{item_id}-{slug}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_buy_item'])->middleware('auth');
Route::get('/kilimofy/Mkulima/Pembejeo-Na-Viwatilifu/Checkout-item/{item_id}-{slug}', [App\Http\Controllers\MkulimaController::class, 'pembejeo_na_viwatilifu_check_out_item'])->middleware('auth');
Route::get('/kilimofy/Usafirisaji/Usafiri', [App\Http\Controllers\MkulimaController::class, 'usafiri'])->middleware('auth');
Route::post('/kilimofy/Usafirisaji/Tafuta-Usafiri', [App\Http\Controllers\MkulimaController::class, 'tafuta_usafiri'])->middleware('auth');
Route::get('/kilimofy/Blog/Blog-Post/{blog}', [App\Http\Controllers\MkulimaController::class, 'blog_post_show'])->middleware('auth');

//**************************end*************************************************

//**************************AdminController*********************************
Route::get('/kilimofy/Admin/admin_index_page', [App\Http\Controllers\AdminController::class, 'admin_index_page'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/register-new-staff', [App\Http\Controllers\AdminController::class, 'admin_register_new_staff'])->middleware(['auth','supper_admin']);
Route::post('/kilimofy/Admin/register-new-staff-store', [App\Http\Controllers\AdminController::class, 'admin_register_new_staff_store'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/view-user/{user}', [App\Http\Controllers\AdminController::class, 'view_user'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/edit-user-info/{user}', [App\Http\Controllers\AdminController::class, 'edit_user_info'])->middleware(['auth','supper_admin']);
Route::post('/kilimofy/Admin/edit-user-info/{user}', [App\Http\Controllers\AdminController::class, 'edit_user_info_store'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/comfirm-delete-user/{user}', [App\Http\Controllers\AdminController::class, 'comfirm_delete_user'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/delete-user/{user}', [App\Http\Controllers\AdminController::class, 'delete_user'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/users-action-list', [App\Http\Controllers\AdminController::class, 'users_action_list'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/Headline-action-list', [App\Http\Controllers\AdminController::class, 'headline_action_list'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/New-Forum-Category-Form', [App\Http\Controllers\AdminController::class, 'forum_category_form'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/Crops-Price-Update-Form', [App\Http\Controllers\AdminController::class, 'crops_price_form'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/Headlines-Updates-Form', [App\Http\Controllers\AdminController::class, 'headline_updates'])->middleware(['auth','supper_admin']);
Route::get('/kilimofy/Admin/Market-Product-List-Form', [App\Http\Controllers\AdminController::class, 'market_products'])->middleware(['auth','supper_admin']);
Route::post('/kilimofy/Admin/Headlines-Updates-Form-store', [App\Http\Controllers\AdminController::class, 'headline_updates_store'])->middleware(['auth','supper_admin']);
Route::post('/kilimofy/Admin/New-Forum-Category-Form-Store', [App\Http\Controllers\AdminController::class, 'create_forum_category'])->middleware(['auth','supper_admin']);


Route::get('/kilimofy/Admin/items-waiting-list', [App\Http\Controllers\AdminController::class, 'items_waiting_list']);
Route::get('/kilimofy/Admin/items-details/{item_id}', [App\Http\Controllers\AdminController::class, 'items_details']);
Route::get('/kilimofy/Admin/admin-all-forms', [App\Http\Controllers\AdminController::class, 'admin_all_forms']);
Route::get('/kilimofy/Admin/items-feedback/{item_id}', [App\Http\Controllers\AdminController::class, 'items_feedback_form']);
Route::post('/kilimofy/Admin/items-feedback-update', [App\Http\Controllers\AdminController::class, 'items_feedback_update']);
Route::get('/kilimofy/Admin/accept_item_to_market/{item_id}', [App\Http\Controllers\AdminController::class, 'accept_item_to_market']);

//**************************end*************************************************


//**************************MuuzaWaPembejeoController*********************************
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/home-page', [App\Http\Controllers\PembejeoNaViwatilifuController::class, 'muuzaji_Wa_pembejeo_na_viwatilifu_index_page'])->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page',[App\Http\Controllers\PembejeoNaViwatilifuController::class, 'muuzaji_Wa_pembejeo_na_viwatilifu_account_page'])->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Edit-Item/{item}',[App\Http\Controllers\PembejeoNaViwatilifuController::class, 'muuzaji_Wa_pembejeo_na_viwatilifu_account_page_edit_item'])->middleware('auth');
Route::post('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Edit-Item-store/{item}',[App\Http\Controllers\PembejeoNaViwatilifuController::class, 'edit_item_store'])->middleware('auth');
Route::get('/kilimofy/Muuzaji-Wa-Pembejeo-Na-Viwatilifu/account-store-page/Delete-Item/{item}',[App\Http\Controllers\PembejeoNaViwatilifuController::class, 'delete_item'])->middleware('auth');
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
Route::post('/kilimofy/User/status-post', [App\Http\Controllers\PostController::class, 'create_status'])->middleware('auth');
Route::post('/kilimofy/Post/likePost/{id}', [App\Http\Controllers\PostController::class, 'likePost'])->middleware('auth')->name('like.post');
Route::post('/kilimofy/Post/dislikePost/{id}', [App\Http\Controllers\PostController::class, 'unlikePost'])->middleware('auth');
Route::post('/kilimofy/Blog/poll_option', [App\Http\Controllers\PostController::class, 'poll_option'])->middleware('auth');
Route::post('/kilimofy/Blog/user_quick_post', [App\Http\Controllers\PostController::class, 'user_quick_post'])->middleware('auth');
Route::get('/kilimofy/Post/read_comments/{post_id}-{slug}', [App\Http\Controllers\PostController::class, 'read_comments'])->middleware('auth');
Route::post('/kilimofy/Blog/send_comments', [App\Http\Controllers\PostController::class, 'send_comments'])->middleware('auth');
Route::get('/kilimofy/Blog/reply_comment/{comment_id}', [App\Http\Controllers\PostController::class, 'reply_comment'])->middleware('auth');
Route::post('/kilimofy/Blog/reply_comment_form', [App\Http\Controllers\PostController::class, 'reply_comment_create'])->middleware('auth');
Route::post('/kilimofy/Admin/admin-all-forms-post', [App\Http\Controllers\PostController::class, 'create'])->middleware('auth');

//**************************end*************************************************

//**************************ChatController*************************************************
Route::get('/kilimofy/test-send-message', [App\Http\Controllers\MessageController::class, 'getMessage']);

//**************************end*************************************************

//******************************Bwana Shamba************************************************
Route::get('/kilimofy/Afisa-Ugavi/home-page', [App\Http\Controllers\BwanaShambaController::class, 'Bwana_Shamba_Home_Page']);
Route::post('/kilimofy/Afisa-Ugavi/create-event', [App\Http\Controllers\BwanaShambaController::class, 'createEvent']);
//**************************end*************************************************


//**************************GroupController*************************************************
Route::get('/kilimofy/Group/Group-Lists', [App\Http\Controllers\GroupController::class, 'group_list_page']);
Route::post('/kilimofy/Group/Create-Group', [App\Http\Controllers\GroupController::class, 'create_group']);
Route::get('/kilimofy/Group/Edit-Group/{group}', [App\Http\Controllers\GroupController::class, 'edit_group']);
Route::post('/kilimofy/Group/Edit-Group-Store/{group}', [App\Http\Controllers\GroupController::class, 'edit_group_store']);
Route::get('/kilimofy/Group/Delete-Group/{group}', [App\Http\Controllers\GroupController::class, 'delete_group']);
Route::get('/kilimofy/Group/Group-Timeline/{group}', [App\Http\Controllers\GroupController::class, 'group_timeline']);

//**************************end*************************************************


//**************************BlogController*************************************************
Route::post('/kilimofy/Blog/User-Create-Blog-Post', [App\Http\Controllers\BlogController::class, 'createBlog']);
Route::get('/kilimofy/Blog/Edit-Blog-Post/{blog}', [App\Http\Controllers\BlogController::class, 'editBlog']);
Route::get('/kilimofy/Blog/Delete-Blog-Post/{blog}', [App\Http\Controllers\BlogController::class, 'deleteBlog']);

//**************************end*************************************************


//**************************DriverController*************************************************
Route::get('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/home-page', [App\Http\Controllers\DriverController::class, 'Driver_Index_Page']);
Route::post('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Make-Trip', [App\Http\Controllers\DriverController::class, 'MakeTrip']);
Route::get('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Edit-Trip/{trip_id}', [App\Http\Controllers\DriverController::class, 'EditTrip']);
Route::post('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Edit-Trip/{trip_id}', [App\Http\Controllers\DriverController::class, 'UpdateTrip']);
Route::get('/kilimofy/Msafirishaji-Wa-Bidhaa-Za-Shambani/Delete-Trip/{trip_id}', [App\Http\Controllers\DriverController::class, 'DeleteTrip']);

//**************************end*************************************************


//**************************MashineController*************************************************
Route::get('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/home-page', [App\Http\Controllers\MashineController::class, 'MashineHomePage']);
Route::get('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/Edit-Mashine-page/{mashine}', [App\Http\Controllers\MashineController::class, 'EditMashine']);
Route::post('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/Edit-Mashine-Store/{mashine}', [App\Http\Controllers\MashineController::class, 'EditMashineStore']);
Route::get('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/Delete-Mashine/{mashine}', [App\Http\Controllers\MashineController::class, 'DeleteMashine']);
Route::post('/kilimofy/Muuzaji-Wa-Mashine-Za-Kilimo/uza-mashine-za-kilimo', [App\Http\Controllers\MashineController::class, 'SellMashine']);

//**************************end*************************************************



//**************************RepairController*************************************************
Route::get('/kilimofy/Fundi-Wa-Mashine-Za-Kilimo/home-page', [App\Http\Controllers\RepairController::class, 'RepairMashineHomePage']);

//**************************end*************************************************


//**************************MtaalamWaKilimoController*************************************************
Route::get('/kilimofy/Mtaalam-Wa-Kilimo/home-page', [App\Http\Controllers\MtaalamController::class, 'Mtaalam_Index_Page']);

//**************************end*************************************************

//**************************SettingsController*************************************************
Route::get('/kilimofy/UserAccount-General-Settings/{user_id}', [App\Http\Controllers\SettingsController::class, 'General_Settings']);
Route::get('/kilimofy/UserAccount-Profile-Settings/{user_id}', [App\Http\Controllers\SettingsController::class, 'My_Profile']);
Route::get('/kilimofy/UserAccount-Social-Account-Settings/{user_id}', [App\Http\Controllers\SettingsController::class, 'Social_Account']);
Route::post('/kilimofy/UserAccount-Social-Account-Settings/Update-Social-Link/{user_id}', [App\Http\Controllers\SettingsController::class, 'Social_Account_Update']);

//**************************end*************************************************


//**************************MarketPlaceController*************************************************
Route::get('/kilimofy/Market-place-index-page', [App\Http\Controllers\MarketPlaceController::class, 'index']);
Route::get('/kilimofy/Market-place-buy-item/{bidhaa_info_id}', [App\Http\Controllers\MarketPlaceController::class, 'item_shopping_cart']);
Route::get('/kilimofy/UserAccount-Social-Account-Settings/{user_id}', [App\Http\Controllers\SettingsController::class, 'Social_Account']);

//**************************end*************************************************
