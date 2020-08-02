<?php

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
//
Route::get('/', function () {
    return view('welcome');
});
//
//Route::get('/admin/post',function (){
//    return "STart sucsess";
//});
////Route::redirect('/admin','/admin/post',301);
////Route::get('/posts','PostController@index');
////Route::resource('/posts','PostsController');
//
//Route::get('/shows/{id}/{name}/{password}','PostsController@showWelccome');
//
//Route::get('/contact','PostsController@contact');
//
////Route::get('/insert','PostsController@insert');
////Route::get('/select','PostsController@select');
////Route::get('/update','PostsController@updatee');
////Route::get('delete','PostsController@deletePost');
//
//Route::get('/select-post','PostsController@getAllPost');
//Route::get('/save-post','PostsController@savePosts');
//Route::get('/update-post','PostsController@updatePost');
//Route::get('/delete-post','PostsController@deletetPost');//trash record
//Route::get('/deta-trash','PostsController@workWithTrash');//show trash record
//Route::get('/restore-post','PostsController@restorPost');//restore trash record
//Route::get('/force-delete','PostsController@forceDelete');//force delete trash record
//
////eleqount ralation ship
////Route::get('user/{id}/post',function ($id){
////   $user_post=\App\User::find($id)->post->body;
////   return ($user_post);
////});
//
//Route::get('post/{id}/user',function ($id){
//    $post_user=\App\Post::find($id)->user->name;
//    return $post_user;
//});
//
//Route::get('user/{id}/posts',function ($id) {
//    $user_post = \App\User::find($id)->posts;
//    foreach ($user_post as $post) {
//        echo $post->title;
//        echo "<br>";
//    }
//});
//
//Route::get('user/{id}/roles',function ($id){
//    $user=\App\User::find($id);//id carbar ro peyda kon
////    foreach ($user->roles as $role) {
////        echo $role->name;
////        echo "<br>";
////
////    }
//
//
//});
//
//Route::get('user/pivot',function (){
//    $user=\App\User::find(1);
////    foreach ($user->roles as $role ){
////        echo $role->pivot->created_at;
////        echo "<br>";
////    }
//
//});
//
////has many
//Route::get('user/country',function (){
//    $country=\App\Country::find(1);
//    foreach ($country->posts as $post ){
//        echo $post->title;
//        echo " > ".$country->name;
//        echo "<br>";
//    }
//
//});
////CRUD
////Route::get('/create',function (){
////  $user= App\User::find(1);
////  $post = new App\Post();
////  $post->title="پست یک";
////  $post->body="متن پست اول";
////  $user->posts()->save($post);
////
////});
////
////Route::get('read',function (){
////   $user=App\User::find(1);
////  // $post = App\Post::onlyTrashed()->restore();
//////return $post;
////   foreach ($user->posts as $post){
////       echo $post->title;
////       echo "<br>";
////   }
////});
////
////Route::get('update',function (){
////   $user = App\User::find(2);
////   $user->posts()->whereId(11)->update([
////       'title'=>'بروزرسانی',
////       'body'=>'بروزراسنی مطلب'
////   ]);
////});
////
////Route::get('delete',function (){
////   $user = App\User::find(2);
////   if($user->posts()->whereId(6)->ForceDelete()){
////       echo "yes";
////   }else{
////       echo "No";
////   }
////
////
////});
//Route::get('/create',function (){
//    $user = App\User::find(1);
//    $role = new App\Role;
//    $role->name = "نویسنده";
//    $user->roles()->save($role);
//});
//
//Route::get('/read',function (){
//    $user = App\User::find(1);
//    //$role = $user->roles()->get();
//   //$role =App\Role;
//   foreach ( $user->roles  as $t)
//   {
//       echo $t->name."<br>";
//   }
//
//});
//
//Route::get('/update' , function (){
//    $user = App\User::find(1);
//    if($user->has('roles')){
//        foreach ($user->roles as $role){
//            if($role->name =='نویسنده'){
//                $role->name='auter';
//                $role->save();
//            }
//        }
//    }
//
//});
//
//Route::get('/delete',function (){
//   $user = App\User::find(1);
//   if($user->has('roles')){
//       foreach ($user->roles as $role){
//           if($role->name=='Aouter'){
//               $role->delete();
//
//           }
//       }
//   }
//});
//
//Route::get('/detach',function(){
//    $user = App\User::find(1);
//    $user->roles()->detach(6);
//});
//
//Route::get('attach',function (){
//   $user = App\User::find(1);
//   $user->roles()->attach(2);
//});
//
//Route::get('/sync',function (){
//   $user = App\User::find(1);
//   $user->roles()->sync([2,3]);
//});
//
//  CRUD POLYMORFI Relationship one to many
//Route::get('user/photos',function (){
//
//    $user = App\User::find(1);
//    foreach ($user->photos as $photo){
//        echo $photo->path;
//        echo "<br>";
//           }
//
//});
//Route::get('post/photos',function (){
//
//    $post = App\Post::find(1);
//    foreach ($post->photos as $photo){
//        echo $photo->path;
//    }
//
//});
//
//Route::get('photo/{id}/post',function (){
//    $photo = \App\Photo::find(3);
//    return $photo->imageable;
//
//});
//
//Route::get('post/tags',function (){
//   $post = App\Post::find(9);
//    foreach ($post->tags as $tag ){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('video/tags',function (){
//    $video = App\video::find(1);
//    foreach ($video->tags as $tag ){
//        echo $tag->name;
//        echo "<br>";
//    }
//});
//
//Route::get('tag/{id}/posts',function ($id){
//    $tag = App\tag::find($id);
//    foreach ($tag->posts as $post ){
//        echo $post->title;
//        echo "<br>";
//    }
//});
//
//Route::get('tag/{id}/vidoes',function ($id){
//    $tag = App\tag::find($id);
//    foreach ($tag->videos as $video ){
//        echo $video->name;
//        echo "<br>";
//    }
//});
//
//
//Route::get('/create',function (){
//   $video = App\Video::find(1);
//   $video->tags()->create(['name'=>'new tag']);
//
//});
//
//Route::get('/read',function(){
//   $video = App\Video::find(1);
//   foreach($video->tags as $tag){
//       echo $tag->name;
//       echo "<br>";
//    }
//});
//
//Route::get('/update',function(){
//    $video = App\Video::find(1);
//    $tag = $video->tags;
//    $new_tag = $tag->where('id',4)->first();
//    $new_tag->name = "تگ جدید";
//    $new_tag->save();
//});
//
//Route::get('/delete',function(){
//   $video = App\Video::find(1);
//   $tag = $video->tags;
//   $tag->where('id',3)->first()->delete();
//});
//
//Route::get('/detach',function(){
//    $video = App\Video::find(1);
//    $video->tags()->detach(3);
//    //$tag->where('id',3)->first()->delete();
//});
//
//Route::get('/atach',function(){
//    $video = App\Video::find(1);
//    $video->tags()->attach(9);
//});
//
//Route::get('/sync',function(){
//    $video = App\Video::find(1);
//    $video->tags()->sync([9]);
//});
//Route::get('/posts/{id?}','PostController@index');
//Route::get('/show-view/{id}/{name}/{password}','PostsController@showMyView');
//Route::get('/contact','PostsController@contact');


Route::get('file',function (){
    Storage::move('img/hero.jpeg','public/img/hero.jpeg');
  //  Storage::move('img/dfsdfsdfsdf.png','photo/rrrrrrr.png');
//    $file = Storage::disk('public')->get('img/aoYx2ZwVOgD3L5jUjBgzu70Tb0ePNJyCWTyJTeAv.jpeg');
    //$file = Storage::url('img/aoYx2ZwVOgD3L5jUjBgzu70Tb0ePNJyCWTyJTeAv.jpeg');
    // return Storage::disk('files')->download('hero.jpeg');
    //echo storage_path('img/aoYx2ZwVOgD3L5jUjBgzu70Tb0ePNJyCWTyJTeAv.jpeg');
//echo $file;
});
Auth::routes(['verify'=>true]);



Route::middleware(['auth','verified'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/posts','PostsController');
});

Route::get('/admin',function (){
    echo 'Hello to Admin Page';
})->middleware('isAdmin:مدیر');


Route::get('/find-user',function (){
    Auth::loginUsingId(3);
    //return 'sd';
    //dd($auth);
});
use Illuminate\Http\Request;
    Route::get('session',function (Request $request){
    //    $request->session()->put([
    //        'user'=>'Alireza'
    //    ]);
    //    session(['time'=>'12:20']);
    //    $_SESSION ["favcolor"] = "green";
      //  echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    //$request->session()->forget('time');
    //$request->session()->flush();
        //$request->session()->flash('massage','hi rezo');
        $request->session()->reflash();
              //$request->session()->keep('massage');
        return $request->session()->all();//get('username');

});