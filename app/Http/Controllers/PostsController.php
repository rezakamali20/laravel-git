<?php

namespace App\Http\Controllers;

use App\Event\PostViewEvent;
use App\Http\Requests\CreatePostRequest;
use App\Post;
use Faker\Test\Provider\ProviderOverrideTest;
//use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
//use App\Policies\PostPlicy;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   //     echo asset('storage/a.png');
        $posts = Post::all();
        $posts[0];
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        if($file = $request->file('file')){
            $name = $file->getClientOriginalName();
          //  $file->store('public/tat');
            $file->move('images',$name);
        }

        //echo $file->getClientOriginalName();//گرفتن نام اصلی فایل
        //echo $file->getClientMimeType();//گرفتن فرمت فایل
        //echo $file->getClientSize();//گرفتن حجم فایل به بایت
        //echo $file->getMaxFileSize();//گرفتن حجم حداکثر فایل آپلودی

        $post = new Post();
        $post->path = $name;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->user_id = Auth::user()->id;
        $post->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        event(new PostViewEvent($post));
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact(['post']));
        $user = Auth::user();//یوزری که هم اکنون لاگین است
        $response = Gate::inspect('update', $post);

        if ($response->allowed()) {
            // The action is authorized...
        } else {
            echo $response->message();
        }
//        if($user->can('update',$post)){//اگر کاربر بتونه ابدیت کنه این پست ارسالی را
//            return view('posts.edit', compact(['post']));
//        } else{
//            return 'دسترسی به این صفحه ندارید';
//        }
//
//
//        if(Gate::allows('edit-post',$post)){
//            return view('posts.edit', compact(['post']));
//        }else{
//            return 'دسترسی به این صفحه ندارید';
//        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('posts');
    }
    public function showWelccome($id,$name,$password){
        //return view('pages.shWelocome')->with('id',$id);
        return view('pages.shWelocome',compact('id','name','password'));
    }
//    public function contact(){
//        $people=['علی','رضا','پژمان','ثنا','نازنین'];
//        return view('pages.contact',compact('people'));
//    }

    public function insert()
    {
        DB::insert('INSERT INTO posts(title, body) VALUES (?,?)',['testtitle5','testbody5']);
    }

    public function select()
    {
        $allpost = DB::select('select * from posts');
        return $allpost;
    }

    public function updatee()
    {
        $updateposts=DB::update('update posts set title="testtitile20" where id="1"');
        return $updateposts;
    }

    public function deletePost()
    {
        $deletepost=DB::delete('delete from posts where id=?',[2]);
        return $deletepost;
    }

    public function getAllPost()
    {
        $posts = Post::all();
        return $posts;
    }

    public function savePosts()
    {
//        $post=new Post();//create one record in post
//        $post->title="عنوان پست دوم";
//        $post->body="محتوا پست دوم";
//        if($post->save())
//            echo "yes.WE CAN";
        $posts=Post::create([
            'title'=>'پست 6 ',
            'body'=>'محتوای پست 6'
        ]);

    }

    public function updatePost()
    {
//        $post=Post::where('id',8)->update
//        ([
//            'title'=>'updatedPost'
//        ]);
        $post=Post::findOrFail(2);
        $post->title='newsss2';
        $post->body='newsss2 content2';
        $post->save();
        return $post;
    }

    public function deletetPost()
    {
        $post=Post::where('id',2)->delete();//delete trash record
        //$post = Post::destroy([4,5]);
    }

    public function workWithTrash()
    {
        $post=Post::onlyTrashed()->where('id',2)->get();//show trash date
        return $post;
    }

    public function restorPost()
    {
        $post=Post::onlyTrashed()->where('id','>',1)->restore();//restore trash date
    }

    public function forceDelete()
    {
        $post=Post::onlyTrashed()->where('id',2)->forceDelete();//force trash record
    }

    public function showMyView($id,$name,$password)
    {
        //return view('pages.myView')->with('idss',$id);
        return view('pages.myView',compact(['id','name','password']));
    }

    public function contact()
    {
        //$people = ['رضا', 'هستی', 'میثم', 'حسین', 'شادی'];
        $people = [ ];

        return view('pages.contact',compact('people'));
    }
}

