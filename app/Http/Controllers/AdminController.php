<?php

namespace App\Http\Controllers;
use Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use Route;
use DB;
use App\User;
use App\Profile;
use App\Good;
use App\Notification;
use App\Status;
use App\Comment;
use App\Page;
use App\Lid;
use App\Protocol;
use App\Article;
use App\Category;
use App\Option;
use Session;
use Response; //Обязательно!
use App\Http\Controllers\NotificationController as NotificationController;

class AdminController Extends Controller{
    
    protected $user;
    protected $profile;
    protected $user_statuses;
    protected $categories;
    protected $articles;
    protected $options;
    
    function __construct() {
        $this->middleware('auth');
    }
    
    public function commonData() {
        $this->user = Auth::user();
        
        $this->profile = Profile::where('user_id', '=', $this->user->id)->first();
        /*
        $this->city = City::select('city_name_ru', 'region_id', 'country_id')
                ->where('id','=',$this->profile->city)->first();
         * 
         */
        $this->goods = Good::all();
        $today = date("Y-m-d H:i:s");
        /*
        $this->abonement = Abonement::where([['srok', '>=', $today], 
                                            ['created_at', '<=', $today],
                                            ['user_id', '=', $this->user->id]])->first();
         * 
         */
        $this->user_statuses = Status::all();
        $this->categories = Category::all();
        $this->options = Option::first();
    }
    

    public function getIndex(NotificationController $Notifications){
        $this->commonData();
        $notify_text = $this->user->name.' '.$this->user->family.' opened dashboard';
        //$Notifications->SendNotify($notify_text, $this->user);
        
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        
        return view('administrator.index',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'path'=> 'Администрирование -> Главная'
                                    ]);
    }

    public function getMediamanager(){
        $this->commonData();        
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        return view('administrator.mediamanager',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'path'=> 'Администрирование -> Media-менеджер'
                                    ]);
    }
    
    public function getContentmanager(){
        $this->commonData();        
        
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $this->articles = Article::select('id', 'title', 'published','category_id', 'updated_at')
                            ->with('category')->orderBy('updated_at', 'desc')
                            ->get();
        
        
        return view('administrator.contentmanager',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'categories'=> $this->categories,
                                    'articles'=> $this->articles,
                                    'path'=> 'Администрирование -> Контент-менеджер'
                                    ]);
        
    }
    
    public function getComments(){
        $this->commonData();        
        
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $comments = Comment::with('user', 'article')->orderBy('updated_at', 'desc')
                            ->paginate(10);;
              
        return view('administrator.comments',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'comments'=> $comments,
                                    'path'=> 'Администрирование -> Комментарии'
                                    ]);
        
    }
    
    public function getArticle(Request $request){
        $this->commonData();  
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $article_id = $request->input('id');
        $article = null;
        if($article_id != NULL){
            $article = Article::find($article_id);            
        }
        $statuses = Status::all();
        return view('administrator.article',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'categories'=> $this->categories,                           
                                    'article_id'=> $article_id,                           
                                    'article'=> $article,                           
                                    'statuses'=> $statuses, 
                                    'path'=> 'Администрирование -> Контент-менеджер'
                                    ]);
    }
    
    public function getCompany_about(Request $request){
        $this->commonData();  
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        
        $page = Page::where('title','=', 'company_about')->first();
            
        return view('administrator.company_about',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'page'=> $page,                           
                                    'path'=> 'Администрирование -> Контент-менеджер -> О компании'
                                    ]);
    }
    
    public function updatePage(Request $request){
        $title = $request->input('title');
        
        if($title != Null){
            $content = $request->input('content');
            
            $page = Page::where('title','=', $title)->first();
            if($page == Null){
                $page = new Page;
                $page->title = $title;
            }
            $page->content = $content;
            $page->save();
        }
        return redirect()->back();
    }

    

    public function postArticle(Request $request){
        $article_id = $request->input('article_id');
        $flag_new_article = false;
        if($article_id == ''){
            $article = new Article;
            $flag_new_article = true;
        } else {
            $article = Article::find($article_id);
            $flag_new_article = false;
        }
        $article->title = $request->input('title');
        $article->category_id = $request->input('category');
        $article->published = $request->input('published');
        $article->thumbnail = $request->input('thumbnail_src');
        $article->content = $request->input('content');
        $article->tags = $request->input('tags');
        $article->status_id = $request->input('status');
        $article->save();
        
        if($flag_new_article == true){
            if($request->input('category') == 1){
                if($request->input('published') == 1){
                    $status = $request->input('status');
                    $notify_text = 'Новости: <a href="http://libertyclub.pro/cabinet/news?id='.$article->id.'" target="_blank">'
                            .$request->input('title').'</a>';
                    for ($i = $status; $i <= 9; $i++) {
                        $users_profiles = Profile::where('status_id','=',$i)->get();
                        foreach ($users_profiles as $users_profile){
                            
                            $user = User::findOrFail($users_profile->user->id);
                            $notify = new Notification;
                            $notify->text = $notify_text;
                            $notify->user_id = $user->id;
                            $notify->readed = 0;
                            $notify->save();
                            
                            //$attachment = public_path().'/milo/images/backgrounds/logo.png';
                            Mail::queue('emails.notify', ['user' => $user, 'notify' => $notify], 
                                function ($m) use ($user) {                
                                    $m->from('liberty.team.club@gmail.com', 'Lberty club');
                                    $m->to($user->email, $user->name)->subject('Новое уведомление!');
                                    //$m->attach($attachment);
                            });
                        
                        }
                    }
                }
                
            }
        }
        return redirect('administrator/contentmanager');
    }
        
    public function deleteArticle(Request $request){
        Article::destroy($request->input('id'));
        return Response::json(['msg'=>'success']);
    }
        
    public function updateLids(Request $request){       
        $status = Status::find($request->input('id'));
        $status->title = $request->input('title');
        $status->lids = $request->input('lids');
        $status->save();
        return Response::json(['msg'=>'success']);
    }
    
    public function updateLidPrice(Request $request, NotificationController $Notifications){ 
        $options = Option::first();
        $options->lid_price = $request->input('lidprice');
        $options->save();
        
        $users = User::where('blocked','=',0)
                ->whereHas('profile', function ($query) {  
                    $query->where('status_id', '>=', 5);
                    })
                ->get();
        $notify_text = 'Установлена новая цена покупки Лидов - <b>'.$notify_text.'</b> рублей.';
        foreach ($users as $user){
            $Notifications->SendNotify($notify_text, $user);
        }
        
        
        return Response::json(['msg'=>'success']);
    }
    
        
    public function getLids(){
        $this->commonData();
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $statuses = Status::all();
        
        $lids_debit = Lid::sum('count');
        $lids_credit = Protocol::where('type','=','lids')->count();
        $lids_credit_yestoday = Protocol::where('type','=','lids')
                ->whereRaw('DATE(`created_at`) = DATE(DATE_SUB(NOW(), INTERVAL 1 DAY))')->count();
        //dd($lids_credit_yestoday);
        $lidsSaldo = $lids_debit - $lids_credit;
        
        $guests = User::where('blocked','=',0)
                ->whereHas('profile', function ($query) {  
                    $query->where('status_id', '=', 1);
                    $query->where('sponsor', '=', 0);
                    })
                ->whereHas('recommendation', function ($query) {  
                    $query->where('status', '=', 0);
                    $query->where('sponsor', '=', 0);
                    })
                ->count();
                    
        return view('administrator.lids',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'options'=> $this->options,
                                    'statuses'=> $statuses,
                                    'lidsSaldo'=> $lidsSaldo,
                                    'lids_credit_yestoday'=> $lids_credit_yestoday,
                                    'guests'=> $guests,
                                    'path'=> 'Администрирование -> Лиды'
                                    ]);
    }
    
    public function getEmail(){
        $this->commonData();
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $statuses = Status::all();
        
        return view('administrator.email',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'statuses'=> $statuses,
                                    'path'=> 'Администрирование -> Email-рассылки'
                                    ]);
    }
    
    public function getStructure(){
        $this->commonData();
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $statuses = Status::all();
        
        return view('administrator.structure',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'statuses'=> $statuses,
                                    'path'=> 'Администрирование -> Структура'
                                    ]);
    }
    
    public function getBlock(Request $request){
        $this->commonData();
        if($this->user['role'] != 'admin'){
            return redirect('../');
        }
        $statuses = Status::all();
        
        $task = $request->input('task');
        if($task == 'showUnblocked'){
            $users = User::where('blocked','=', 0)->orderBy('created_at', 'desc')->paginate(10);
        }elseif($task == 'showBlocked'){
            $users = User::where('blocked','=', 1)->orderBy('created_at', 'desc')->paginate(10);
        }elseif($task == 'search'){
            $search = $request->input('search');
            $users = User::where('email','like', '%'.$search.'%')->orderBy('created_at', 'desc')->paginate(10);
        }elseif($task == 'block'){
            $user_id = $request->input('user_id');
            $user = User::findOrFail($user_id);
            $user->blocked = 1;
            $user->save();
            $users = User::orderBy('created_at', 'desc')->paginate(10);
        }elseif($task == 'unblock'){
            $user_id = $request->input('user_id');
            $user = User::findOrFail($user_id);
            $user->blocked = 0;
            $user->save();
            $users = User::orderBy('created_at', 'desc')->paginate(10);
        }else{
            $users = User::orderBy('created_at', 'desc')->paginate(10);
        }
        return view('administrator.block',['user'=> $this->user, 
                                    'profile'=> $this->profile,
                                    'statuses'=> $statuses,
                                    'users'=> $users,
                                    'path'=> 'Администрирование -> Блокировка пользователей'
                                    ]);
    }
    
    public function sendMail(Request $request){
        $title = $request->input('title');
        $targets_str = $request->input('targets');
        $content = $request->input('content');
        
        $targets_arr = explode(",", $targets_str);
        $isAll = array_search("Все", $targets_arr);
        $emailsToSend = [];
        
        if($isAll == FALSE){
            //Только выбранные категории
            foreach ($targets_arr as $target){
                $status = Status::where('title','=',$target)->first();
                $profiles = Profile::where('status_id','=',$status->id)->get();
                foreach ($profiles as $profile){
                    $emailsToSend[$profile->user->email] = $profile->user->name.' '.$profile->user->family;
                }
                //$users = User::where('id', '=', $profiles['user_id'])->get();
            }
        }else{
            //все пользователи
            $users = User::all();
            foreach ($users as $user){
                $emailsToSend[$user->semail] = $user->name.' '.$user->family;
            }
        }
        
        foreach ($emailsToSend as $email => $name){
            
            Mail::queue('emails.custom', ['content'=>$content], 
                    function ($message) use ($email, $name, $title) {
                    $message->to($email, $name);
                    $message->subject($title);
                    $message->from('liberty.team.club@gmail.com', 'Liberty club');
            });
        }
        Session::flash('message', "Письма поставлены в очередь на отправку...");
        return redirect()->back();
    }
}