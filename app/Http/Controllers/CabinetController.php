<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Session;
use Response;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Profile;
use App\Phone;
use App\Country;
use App\Region;
use App\Recommendation;
use App\Article;
use App\DSARating;
use App\City;
use App\Pack;
use App\Status;
use App\Dialog;
use App\Side;
use App\Message;
use App\Note;
use App\Video;
use App\Notification;
use App\Qualification;
use App\Lid;
use App\Protocol;
use Mail;
use DB;
use App\Http\Controllers\NotificationController as Notify;
//use App\Repositories\UserRepository as UserRepository;

class CabinetController extends Controller
{
    protected $luser;
    protected $packs;
    
    public function __construct() {
        $this->middleware('auth');
    }
        
    public function getCabinet(Request $request){        
        return view('cabinet.start',['pass'=>$request['pass']]);
    }
    
    public function getNobelprices(){
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.nobelprices',[]);
    }
    
    public function getScience(Request $request){   
        $path = $request->path();
        //cabinet/science15
        
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $outView = str_replace('/', '.', $path);
        
        return view($outView,[]);
        
    }
    
    public function getTime(){   
        return view('cabinet.time',[]);        
    }
    
    public function getCalculator(){   
        $user = Auth::user();
        if($user->profile['status_id'] <= 4){ return redirect()->back();  }
        
        return view('cabinet.calculator',[]);
        
    }
    
    public function video(Request $request){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $uri = $request->path();
        $uri_parts = explode('/', $uri);
        $uri_tail = end($uri_parts);
        if($uri_tail == 'video-0'){
            $videos = Video::where('user_id','=', $user->id)->first();
        
            return view('cabinet.'.$uri_tail,['videos'=> $videos]);
        }else{
            
            return view('cabinet.'.$uri_tail,[]);
        }
        
    }
    
    public function saveVideoProgress(Request $request){
        $user_id = $request->input('user_id');
        //echo 'user_id '.$user_id.'<br>';
        $video = $request->input('video');
        $progress = $request->input('progress');
        $videos = Video::where('user_id','=',$user_id)->first();
        //var_dump($videos);
        if($videos == Null){
            $userVideo = new Video;
            if($video == 1){
                $userVideo->video1 = $progress;
            }elseif($video == 2){
                $userVideo->video2 = $progress;
            }
            $userVideo->user_id = $user_id;
            $userVideo->save();
        }else{
            if($video == 1){
                $videos->video1 = $progress;
            }elseif($video == 2){
                $videos->video2 = $progress;
            }
            $videos->save();
        }
        //echo 'flag '.$flag.'<br>';
       return Response::json($progress);
    }

    public function product(Request $request){
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $uri = $request->path();
        $uri_parts = explode('/', $uri);
        $uri_tail = end($uri_parts);
        
        return view('cabinet.company_'.$uri_tail,[]);
        
    }
    
    public function getCompanyAbout(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.company_about',[]);
        
    }
    
    public function getSponsors(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $sponsors_ids = explode(',', $user->profile->sponsors); 
        $sponsors = User::whereIn('id', $sponsors_ids)->get();
        
        return view('cabinet.sponsors', ['sponsors' => $sponsors]);
        
    }
        
    public function getCompanyProducts(Request $request){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.company_products',[]);
        
    }
    
    public function getCompanyRatingDSA(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $DSARating = DSARating::where('brand','=','Jeunesse Global')->orderBy('year')->limit(5)->get();
        $last5years = DSARating::select('year')->distinct()->orderBy('year', 'desc')->limit(5)->get();
        
        foreach ($last5years as $key => $value){
            $dataTable[] = DSARating::where('year', '=', $last5years[$key]->year)->orderBy('position')->get();
        }
        
        $period = 0;
        $deltaLabels = [];
        $deltaData = [];
        
        foreach ($DSARating as $index => $rate){
            if($period != 0){
                if($index-1 < 0){
                    $startIndex = 0;
                }else{
                    $startIndex = $index-1;
                }
                
                //$deltaData[] = round((($rate->sales - $DSARating[$startIndex]->sales)/$rate->sales)*100)+prev($deltaData);
                $deltaData[] = ($rate->sales - $DSARating[$startIndex]->sales);
                
                $deltaLabels[] = $DSARating[$startIndex]->year.'-'.$rate->year;
            }
            $period++;
        }
        
        return view('cabinet.company_rating_dsa',['DSARating'=> $DSARating,
                                    'deltaData'=> $deltaData,
                                    'deltaLabels'=> $deltaLabels,
                                    'dataTable'=> $dataTable                
                                    ]);
         
    }
    
    public function getCompanyStore(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.company_store',[]);
        
    }
    
    public function getCompanyBackoffice(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.company_backoffice',[]);
        
    }
    
    public function getCompanyHelp(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.company_help',[]);
        
    }
    
    public function after(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        return view('cabinet.after',[]);
        
    }
    
    public function getDialogs(){   
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $dialogs = $user->dialogs;
        
        return view('cabinet.dialogs',['dialogs'=> $dialogs]);
        
    }
    
    public function getDialog(Request $request){   
         $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $id = $request->input('id');
        $dialog = Dialog::find($id);
        $autor = User::find($dialog->user_id);
        $target = User::find($dialog->target_id);
        
        return view('cabinet.dialog',['dialog'=> $dialog,
                                    'autor'=> $autor,
                                    'target'=> $target
                                   ]);
        
    }
    
    public function updateSubMenu(Request $request){
        $user_id = $request->input('user_id');
        
        $dialogs0 = Side::select('dialog_id')->where('user_id', '=',$user_id)->get();
        
        $dialogs1 = [];
        
        foreach ($dialogs0 as $dialog){
            $dialogs1[] = $dialog->dialog_id;
        }
        
        $dialogs = Dialog::whereIn('id', $dialogs1)
                ->orderBy('id', 'desc')
                ->get();
        
        $newMessages = 0;
        
        foreach ($dialogs as $dialog){
            $side = Side::where('dialog_id', '=', $dialog->id)
                    ->where('user_id', '=', $user_id) 
                    ->first(); 
            $newMessages = $newMessages + Message::where('updated_at', '>', $side->updated_at)
                    ->where('dialog_id', '=', $dialog->id)
                    ->count();
            
        }
        
        $data['newMessages']=$newMessages;
        
        return Response::json($data);
    }
    
    public function closeNotify(Request $request){
        $notify = Notification::find($request->input('notify_id'));
        $notify->readed = 1;
        $notify->save();
        $data = 'ok';
        
        return Response::json($data);
    }
    
    public function getUser(Request $request){        
        $user = Auth::user();
        if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $libertyUser = User::findOrFail($request->input('id'));
        
        $task = $request->input('task');
        $notes = Null;
        
        if($task == 'notes'){
            $notes = Note::where('user_id', '=', $user->id)
                ->where('target_id', '=', $libertyUser->id)
                ->orderBy('id', 'desc')
                ->limit(20)
                ->get();
        }elseif($task == 'stats'){
        }elseif($task == 'net'){
        }elseif($task == 'messages'){
            
        }
            return view('cabinet.user',['libertyUser'=> $libertyUser,
                                        'task'=> $task,
                                        'notes'=> $notes
                                        ]);
         
    }
    
    public function postNote(Request $request){
        $note = new Note;
        $note->title = $request->input('title');
        $note->note = $request->input('note');
        $note->user_id = $request->input('user_id');
        $note->target_id = $request->input('target_id');
        $note->save();
        return redirect()->back();
    }

    public function getProfile(Request $request){
        $user = Auth::user();
        //if($user->profile['status_id'] == 1){ return redirect()->back();  }
        $packs = Pack::all(['id', 'name']);
        $tab = $request->input('tab');
        $city = City::select('city_name_ru', 'region_id', 'country_id')
                ->where('id','=',$user->profile->city)->first();
        $this->checkStatus($user->profile['id']);
        
        if($city){
            $fullAddress = $city['city_name_ru']; 
            $region = Region::select('region_name_ru')
                ->where('id','=',$city['region_id'])->first();
            $fullAddress .= ' - '.$region['region_name_ru'];        
            $country = Country::select('country_name_ru')
                ->where('id','=',$city['country_id'])->first();
            $fullAddress .= ' - '.$country['country_name_ru'];
        }else{
            $fullAddress = '';
        }
        return view('cabinet.profile',['city'=>$fullAddress,
                                        'tab'=>$tab,
                                        'packs'=>$packs
                                        ]);
    }
    
    public function postRecommendation(Request $request){
        
        $recommendation = Recommendation::where('user_id', '=', $request->input('user_id'))->first();
        $user = User::findOrFail($request->input('user_id'));
        //var_dump($user);
        if($recommendation == Null){
            
            $recommendation = new Recommendation;
            $recommendation->user_id = $request->input('user_id');
            $recommendation->status = $request->input('status');
            $recommendation->save();
            
            if($user->source == 'invite'){
                
                $recommendation->sponsor = $user->profile->mysponsor->id;
                $recommendation->save();
                //var_dump($user);
                
                $email = $user->profile->mysponsor->semail;
                $name = $user->profile->mysponsor->name.' '.$user->profile->mysponsor->family;
                $inviter = $user;
                //echo $email;
                
                Mail::send('emails.newInviter', ['email'=>$email, 'name'=>$name, 'inviter'=>$inviter], 
                        function ($message) use ($email, $name) {
                        $message->to($email, $name);
                        $message->subject("Liberty club: У Вас новый приглашенный");
                        $message->from('liberty.team.club@gmail.com', 'Liberty club');
                    });
                
            }
        }
        return redirect()->back();
    }
    
    public function getNews(Request $request){
        $user = Auth::user();
        //if($user->profile['status_id'] == 1){ return redirect()->back();  }
        
        $id = $request->input('id');
        $tag = $request->input('tag');
        $tags_source = DB::table('articles')->select('tags')->get();
        $tags = [];
        foreach ($tags_source as $tag_source){
            $tag_source_items = explode(",", $tag_source->tags);
            foreach ($tag_source_items as $item){
                //var_dump($item);
                if(strlen($item) > 1){
                    $check = array_search($item, $tags);
                    if($check === FALSE){
                        $tags[] = $item;
                    }
                }
            }
            
        }
            
        $this->checkStatus($user->profile['id']);
        
        if($id == Null){ //show news list
        if($tag == Null){    
            $articles = Article::select('id', 'title', 'published', 'thumbnail','tags', 'status_id', 'category_id', 'updated_at')
                            ->where('published', '=', '1')
                            ->with('category', 'comments', 'status')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(7);
        } else {
            $articles = Article::select('id', 'title', 'published', 'thumbnail','tags','status_id', 'category_id', 'updated_at')
                            ->where('published', '=', '1')
                            ->where('tags', 'Like', '%'.$tag.'%')
                            ->with('category', 'comments', 'status')
                            ->orderBy('updated_at', 'desc')
                            ->paginate(7);            
        }
        return view('cabinet.news',['articles'=>$articles,
                                        'id'=>$id,
                                        'tags'=>$tags
                                    ]);
        } else { //show news item by id
            $article = Article::find($id);
            if($article->status_id <= $user->profile->status_id){
                return view('cabinet.news',['article'=>$article,
                                        'id'=>$id,
                                        'tags'=>$tags
                                        ]);           
            }else{
                $no_access = 'Данный материал не доступен для Вас';
                return view('cabinet.news',['tags'=>$tags,
                                            'no_access'=>$no_access
                                            ]);
            }
        }
        
    }
    
    public function saveAvatar(Request $request){
        //var_dump($request->all());    
        $scr_image_width = $request->input('image_width');
        $scr_image_height = $request->input('image_height');
        $file = $request->file("image");
        $imagesize = getimagesize($file);
        $imagewidth = $imagesize[0];
        $imageheight = $imagesize[1];
        $user_id = $request->input('user_id');
        $x1 = $request->input('x1');
        if($x1 != 0){ $x1 = (int)$imagewidth*$x1/$scr_image_width; }
        $y1 = $request->input('y1');
        if($y1 != 0){ $y1 = (int)$imageheight*$y1/$scr_image_height; }
        $x2 = $request->input('x2');
        if($x2 != 0){ $x2 = (int)$imagewidth*$x2/$scr_image_width; }
        $y2 = $request->input('y2');
        if($y2 != 0){ $y2 = (int)$imageheight*$y2/$scr_image_height; }
        $side_width = $x2 - $x1;
        $new_file = "images/users/avatars/avatar".$user_id.".jpg"; 
        $temp_image = $request->input('temp_image');
        File::delete($temp_image);
        
        $profile = Profile::where('user_id', '=', $user_id)->first();
            if($profile){
                $profile = Profile::where('user_id', '=', $user_id)
                    ->update(['photo' => "avatar".$user_id.".jpg"]);
            }else{
                $profile = new Profile;
                $profile->user_id = $user_id;
                $profile->photo = "avatar".$user_id.".jpg";
                $profile->save();
            }
            
        // создаем холст с размером равным, 
        // вырезаемому фрагменту
        $img = imagecreatetruecolor($side_width, $side_width);
        // загружаем исходную картику
        $pic = imagecreatefromjpeg($file);
        // копируем на холст нужную часть картинки
        //imagecopy($img, $pic, 0, 0, $x2, $y2, $side_width, $side_width);
        imagecopyresampled($img, $pic, 0, 0, $x1, $y1, $side_width, $side_width, $side_width, $side_width);
        // сохраняем результат
        imagejpeg($img, $new_file); 
        // очищаем память после выполнения скрипта
        imagedestroy($img);
        imagedestroy($pic);
        
        return redirect('cabinet/profile?tab=1');
        //var_dump($file);
    }
    
    public function upload_photo(Request $request){
        if ($request->hasFile('image')){
            $destinationPath = 'images/users/temp';
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileName = rand(11111,99999).'.'.$extension;
            $request->file('image')->move($destinationPath, $fileName);            
            
            $data = $destinationPath.'/'.$fileName;
        }else{
            $data = Null;
        }
 
        return Response::json($data);
        
    }
    
    public function deleteTempImage(Request $request){
        $avatarSrc = $request->input('avatarSrc');
        $file_arr = explode("/", $avatarSrc);
        $file_name = end($file_arr);
        
        if(File::exists('images/users/temp/'.$file_name)){
            File::delete('images/users/temp/'.$file_name);
            $result = "temp file deleted";
            
        }else{
            $result = "file not found";

        }
        
        
        return Response::json($result);
    }

    public function getFullAddress(Request $request){
        $user_input = $request->input('user_input');
        
        $cities = City::where('city_name_ru', 'LIKE', trim($user_input).'%')->get();
        
        $data = '';
        
        foreach ($cities as $city){
            //$data[$city->id] = $city->city_name_ru;
            $region = Region::where('id', '=',$city->region_id)->first();
            $country = Country::where('id', '=',$city->country_id)->first();
            $data .= '<a class="btn btn-black" onclick="setAddress('.$city->id.')" id="'.$city->id.'">'
                    .$city->city_name_ru.' - '
                    .$region->region_name_ru.' - '
                    .$country->country_name_ru.'</a> ';
        }
        
        return Response::json(['msg'=>$data]);
    }
    
    public function testMe($var = null){
        return $var+1;
    }

        public function updateProfile(Request $request){
        $this->validate($request, [
            'name'=>'required',
            'family'=>'required'
	]);
        
        $user_id = $request->input('user_id'); 
        $dateofburn = $request->input('dateofburn');
        if($dateofburn == Null){
            $dateofburn = Date('Y-m-d');
        }
        $user = User::where('id', '=', $user_id)
                    ->update([
                            'name' => $request->input('name'),
                            'family' => $request->input('family'),
                            'semail' => $request->input('semail')                            
                            ]);
        $profile_id = Profile::select('id')->where('user_id', '=', $user_id)->first();
        $profile = Profile::where('user_id', '=', $user_id)
                    ->update([
                            'city' => $request->input('city_id'),
                            'dateofburn' => $dateofburn,
                            'notes' => $request->input('notes'),
                            'sex' => $request->input('sex')                            
                            ]);
        
        $this->checkStatus($profile_id->id);
        
        return redirect('cabinet/profile?tab=2'); 
    }
    
    public function updateContacts(Request $request){
        $profile_id = $request->input('profile_id'); 
        $phones = $request->input('phone'); 
        $vibers = $request->input('viber'); 
        $whatsapps = $request->input('whatsapp'); 
        $skype = $request->input('skype'); 
        $fb = $request->input('fb'); 
        $vk = $request->input('vk'); 
        $ok = $request->input('ok'); 
        
        foreach ($phones as $index => $phone){
            if(empty($phone)){
                unset($phones[$index]);
            }
        }
        
        if(count($phones)>0){ 
        $profile_phones = Profile::find($profile_id)->phones;
        if(count($profile_phones)>0){
            //profile_id exists. Do update
            Phone::where('profile_id', '=', $profile_id)->delete();            
        }
            //profile_id not exists. Do insert new record
            foreach ($phones as $index => $phone){
                $newPhone = new Phone;
                $newPhone->number = $phone;
                $newPhone->viber = $vibers[$index];
                $newPhone->whatsapp = $whatsapps[$index];
                $newPhone->profile_id = $profile_id;
                $newPhone->save();                
            }        
        }
        
        $profile = Profile::where('id', '=', $profile_id)
                    ->update([
                            'skype' => $skype,
                            'fb_id' => $fb,
                            'vk_id' => $vk,
                            'ok_id' => $ok                            
                            ]);
        
        $this->checkStatus($profile_id);
        
        return redirect('cabinet/profile?tab=3'); 
    }
    
    public function updateCompanyData(Request $request, Notify $notify){
        $user = Auth::user();
        
        $profile_id = $request->input('profile_id'); 
        $company_login = $request->input('company_login'); 
        $company_status = $request->input('company_status'); 
        $company_pack = $request->input('company_pack'); 
        
        $notify_text = '';
        
        if($user->profile->company_login != trim($company_login)){
            $user->profile->company_login_confirmed = 0;
            $user->profile->save();
            $notify_text = 'Ваш партнер '.$user->name.' '.$user->family.' указал логин в Компании. Требуется Ваша подтверждение!';
        }
        if($user->profile->company_status != $company_status){
            $user->profile->company_status_confirmed = 0;
            $user->profile->save();
            $notify_text = 'Ваш партнер '.$user->name.' '.$user->family.' указал квалификацию в Компании. Требуется Ваша подтверждение!';
        }
        if($user->profile->company_pack != $company_pack){
            $user->profile->company_pack_confirmed = 0;
            $user->profile->save();
            $notify_text = 'Ваш партнер '.$user->name.' '.$user->family.' указал пакет в Компании. Требуется Ваша подтверждение!';
        }
        $profile = Profile::where('id', '=', $profile_id)
                    ->update([
                            'company_login' => $company_login,
                            'company_status' => $company_status,
                            'company_pack' => $company_pack                  
                            ]);
        //notifing
        $sponsor = User::findOrFail($user->profile->sponsor);
        $sponsors = explode(',', $user->profile->sponsors);
        $big_brother = User::findOrFail(end($sponsors));
        $notify->SendNotify($notify_text, $sponsor);
        $notify->SendNotify($notify_text, $big_brother);
        
        return redirect('cabinet/profile?tab=4'); 
    }

    public function checkStatus($profile_id){
        
        $profile = Profile::with('phones')->find($profile_id);
        
        $user = User::find($profile->user_id);
        $statuses = Status::all();
        switch ($profile->status_id){
            case '1': //
                if(count($user->name) >= 1){
                    if(count($user->family) >= 1){                        
                        if(count($profile->phones) >= 1){
                            $recommendation = Recommendation::where('user_id', '=', $profile->user_id)->first();
                            if($recommendation == Null){
                                Session::flash('recommendation', '0'); //рек-я еще не подана. Получить рек-ю
                            } else {
                                Session::flash('recommendation', '1'); //заявка на получение уже подана. Ожидание
                            }
                            Session::flash('alert-class', 'alert-success'); 
                        }
                    }
                }
                break;
            case 1: //Новичок
                break;
            case 2: //Партнер
                break;
            case 3: //Член Клуюа
                break;
        }
        
    }
 
    public function getClub(){        
        $user = Auth::user();
        if($user->profile['status_id'] <= 1){ return redirect()->back();  }
        
        return view('cabinet.club',[]);
    }
    
    public function getInvite(){        
        $user = Auth::user();
        if($user->profile['status_id'] <= 1){ return redirect()->back();  }
        
        return view('cabinet.invite',[]);
    }
    
       
    public function getGuests(Request $request){        
        $url = $request->url();
        $this->luser = Auth::user();
        if($this->luser->profile['status_id'] <= 2){ return redirect()->back();  }
        
        if($request->input('task')){
            if($request->input('task') == 'inviteGuest'){
                $firstRecommendation = Recommendation::where('sponsor', '=', 0)
                        ->where('status', '=', 0)
                        ->first();
                $firstRecommendation->sponsor = $this->luser->id;
                $firstRecommendation->save();
                header('Refresh: 0; url='.$url);
            }
            if($request->input('task') == 'approveGuest'){
                $this->updateRecommendation($request->input('recommendation_id'), 'approve');
                return redirect('cabinet/guests')->with('status', 'Гость успешно принят в вашу Сеть!');
            }
            if($request->input('task') == 'refuseGuest'){
                $this->updateRecommendation($request->input('recommendation_id'), 'refuse');
                return redirect('cabinet/guests')->with('status', 'Вы отказали гостю в рекомендации. Гость заблокирован!');
            }
        }
        
        //История расхода Лидов из Protocols
        $TotalLidsProtocols = $this->luser->protocols()
                ->where('type','=','lids')
                ->get();
        
        $TodayLidsProtocols = $this->luser->protocols()
                ->where('type','=','lids')
                ->whereRaw('updated_at >= CURDATE()')
                ->get();
        
        //Лиды купленные и оплаченные
        if($this->luser->lids){
            $TotalBuyLids = $this->luser->lids->sum('count');
        }else{
            $TotalBuyLids = 0;
        }
        
        if($TotalBuyLids > 0){
            $lidsSaldo = $TotalBuyLids - count($TotalLidsProtocols);            
        }else{
            $lidsSaldo = 0;
        }
        
        if($lidsSaldo > 0){
            $lidsLimit = $this->luser->profile->status->lids - count($TodayLidsProtocols);         
        }else{
            $lidsLimit = 0;
        }
        
        //приглашенные
        $inviters = User::where('source', '=', 'invite')
                ->whereHas('recommendation', function ($query) {  
                    $query->where('sponsor', '=', $this->luser->id);
                    $query->where('status', '=', 0);
                            //->whereRaw('updated_at >= CURDATE()');
                    })
                ->whereHas('profile', function ($query) {  
                    $query->where('sponsor', '=', $this->luser->id);
                    })
                ->get();
                    
        //1. проверяем есть ли у данного спонсора закрепленные за ним гости сегодня
        $guests = User::where('source', '=', 'public')
                ->where('blocked', '=', 0)
                ->whereHas('recommendation', function ($query) {  
                    $query->where('status', '=', 0);
                    $query->where('sponsor', '=', $this->luser->id);
                    })
                ->whereHas('profile', function ($query) {  
                    $query->where('sponsor', '=', 0);
                    })
                ->limit(1)  
                ->with('recommendation')
                ->orderBy('created_at', 'DESC')
                ->get();
        
        return view('cabinet.guests',['guests'=> $guests,
                                    //'freeGuests'=> $freeGuests,
                                    'inviters'=> $inviters,
                                    'lidsSaldo'=> $lidsSaldo,
                                    'TotalLidsProtocols'=> $TotalLidsProtocols,
                                    'TodayLidsProtocols'=> $TodayLidsProtocols
                                    ]);
                
    }    
    
    public function getBalance(){
        $user = Auth::user();
        if($user->profile['status_id'] <= 1){ return redirect()->back();  }
        
        return view('cabinet.balance',[]);
    }
    
     
    public function buyLids(Request $request){
        $count = $request->input('count');
        $user_id = $request->input('user_id');
        $lid = new Lid;
        $lid->user_id = $user_id;
        $lid->count = $count;
        $lid->save();
        return redirect()->back();
    }
    
    
    public function getStructure(Request $request){
        $user = Auth::user();
        $today = date("Y-m-d H:i:s");
        $countries = Country::orderBy('country_name_ru', 'ASC')->get();
        if($user->profile['status_id'] <= 1){ return redirect()->back();  }
        $phone = $request->input('phone');
        
        $qualifications = Qualification::all();
        $packs = Pack::all();
        $data = Null;
        if($request->input('level')){
            $level = $request->input('level');
        }else{
            $level = 0;
        }
        if($request->input('net_owner_id')){
            $net_owner = User::find($request->input('net_owner_id'));
        }else{
            $net_owner = $user;
        }
        
        $net_owner_sponsors = [];
        $sponsors = explode(',', $net_owner->profile->sponsors);
            foreach ($sponsors as $order => $sponsor){
                if($order != 0){
                    $sponsor_user = User::findOrFail($sponsor);
                    if($sponsor_user){
                        $net_owner_sponsors[$order] = $sponsor_user;
                    }
                }
            }
        
        //формирование запроса по фильтру
        $query = Profile::query();
        //учитываем пакет
        if ($request->input('pack') && $request->input('pack') != 0) {
            $query = $query->where('company_pack', '=', $request->input('pack'));
        }
        //учитываем квалификацию
        if ($request->input('qualification') && $request->input('qualification') != 0) {
            $query = $query->where('company_status', '=', $request->input('qualification'));
        }
        //учитываем логин в компании
        if ($request->input('login') && count($request->input('login')) > 0) {
            $query = $query->where('company_login', 'like', '%'.$request->input('login').'%');
        }
        //учитываем статус клуба
        if ($request->input('club_status') !== '0') {
            if($request->input('club_status') == '1'){ //новички
                $query = $query->where('status_id', '=', 2);
            }
            if($request->input('club_status') == '2'){ //В клубе
                $query = $query->where('status_id', '>', 2)
                        ->whereHas('latest_abonement', function ($q) use ($today) {
                            $q->where([['srok', '>=', $today], ['created_at', '<=', $today]]);
                          });
            }
            if($request->input('club_status') == '3'){ //Вне клуба
                $query = $query->where('status_id', '>', 2)
                        ->whereDoesntHave('latest_abonement', function ($q) use ($today) {
                            $q->where([['srok', '>=', $today], ['created_at', '<=', $today]]);
                        });
            }
        }
        //поиск по имени
        if($request->input('name') !== '' && $request->input('family') === ''){
            $user_name = trim($request->input('name'));
            if(count($user_name)>0){
                $query = $query->join('users', function ($join) use ($user_name) {
                    $join->on('users.id', '=', 'profiles.user_id')
                        ->where('users.name', 'like', '%'.$user_name.'%');
                });
            }
        }
        //поиск по фамилии
        if($request->input('name') === '' && $request->input('family') !== ''){
            $user_family = trim($request->input('family'));
            if(count($user_family)>0){    
                $query = $query->join('users', function ($join) use ($user_family) {
                    $join->on('users.id', '=', 'profiles.user_id')
                        ->where('users.family', 'like', '%'.$user_family.'%');
                });
            }
        }
        //поиск по имени & фамилии
        if($request->input('name') !== '' && $request->input('family') !== ''){
            $user_name = trim($request->input('name'));
            $user_family = trim($request->input('family'));
            if(count($user_name)>0 && count($user_family)>0){    
                $query = $query->join('users', function ($join) use ($user_name, $user_family) {
                    $join->on('users.id', '=', 'profiles.user_id')
                        ->where('users.name', 'like', '%'.$user_name.'%')
                        ->where('users.family', 'like', '%'.$user_family.'%');
                });
            }
        }
        //по телефону
        if($phone !== Null && $phone !== ""){
            $query = $query->join('phones', function ($join) use ($phone){
                $join->on('phones.profile_id', '=', 'profiles.id')
                        ->where('number', 'like', '%'.trim($phone).'%');
            });
        }
        //по просмотру видео
        if($request->input('video_meeting') && $request->input('video_meeting') !== Null && $request->input('video_meeting') !== 0){
            $video_meeting = $request->input('video_meeting');
            if($video_meeting == 1){ //Посмотрел только 1ое видео
                $query = $query->join('videos', function ($join) {
                    $join->on('videos.user_id', '=', 'profiles.user_id')
                        ->where('video1', '=', '100')
                        ->where('video2', '=', '0');
                });
            }
            if($video_meeting == 2){ //Посмотрел все видео
                $query = $query->join('videos', function ($join) {
                    $join->on('videos.user_id', '=', 'profiles.user_id')
                        ->where('video2', '=', '100');
                });
            }
            if($video_meeting == 3){ //Не смотрел видео вообще
                $query = $query->whereDoesntHave('videos');
            }

        }
        //по стране
        if($request->input('country') !== "0" and  $request->input('CountryCity') === "0"){
            
            $country = $request->input('country'); 
            $query = $query->join('cities', function ($join) use ($country){
                $join->on('cities.id', '=', 'profiles.city')
                        ->where('country_id', '=', $country);
            });
        }        
        //по городу
        if($request->input('country') && $request->input('country') !== "0" && $request->input('CountryCity') !== "0"){
            $query = $query->where('city', '=', $request->input('CountryCity'));
        }
        //выбираем только связанных
        $query = $query->where('sponsors', 'like', '%'.$net_owner->id.'%');
        //выбираем только выше новичков
        if ($request->input('club_status') == '0') {
            $query = $query->where('status_id', '>', 1);
        }
        //порядок сортировки
        $query = $query->orderBy('profiles.id', 'DESC');
        //пагинируем данные для по-страничного вывода
        $data = $query->paginate(12);
        //$data = $query->toSql();
        //echo $data;
        
        $moderate = FALSE; //модерация партнеров сети
        
        //фильтруем данные по уровню
        if($level == 0){ //все до кучи
            foreach($data as $child){
                $child_levels = explode(',', $child->sponsors);
                foreach($child_levels as $child_level => $child_sponsor){
                    if($user->id == $child_sponsor){
                        $child->level = $child_level+1;
                    }
                }
                if($child->company_pack_confirmed == 0 or
                        $child->company_status_confirmed == 0 or
                            $child->company_login_confirmed == 0){
                    $moderate = TRUE;
                }
            }        
        }else{ //только определенного уровня
            foreach($data as $child_key => $child){
                $child_levels = explode(',', $child->sponsors);
                $child_level = array_search($user->id, $child_levels);
                if($level != ($child_level+1)){
                    unset($data[$child_key]);
                }
                if($child->company_pack_confirmed == 0 or
                        $child->company_status_confirmed == 0 or
                            $child->company_login_confirmed == 0){
                    $moderate = TRUE;
                }
            }
        }
        
        return view('cabinet.structure',[
                                    'qualifications'=> $qualifications,
                                    'packs'=> $packs,
                                    'level'=> $level,
                                    'countries'=> $countries,
                                    'net_owner'=> $net_owner,
                                    'net_owner_sponsors'=> $net_owner_sponsors,
                                    'data'=> $data,
                                    'moderate'=> $moderate
                                    ]);
        
    }

    public function getModeration(Request $request, Notify $notify){
        $liberty_user = Auth::user();
        if($liberty_user->profile['status_id'] <= 1){ return redirect()->back();  }
        
        $notify_text ='';
        if($request->has('company_login_confirmed')){
            $partner = Profile::findOrFail($request->input('partner_id'));
            $partner->company_login_confirmed = $request->input('company_login_confirmed');
            $partner->save();
            $notify_text = 'Ваш спонсор '.$liberty_user->name.' '.$liberty_user->family.' подтвердил ваш Логин в Компании';
        }
        if($request->has('company_status_confirmed')){
            $partner = Profile::findOrFail($request->input('partner_id'));
            $partner->company_status_confirmed = $request->input('company_status_confirmed');
            $partner->save();
            $notify_text = 'Ваш спонсор '.$liberty_user->name.' '.$liberty_user->family.' подтвердил вашу Квалификацию в Компании';
        }
        if($request->has('company_pack_confirmed')){
            $partner = Profile::findOrFail($request->input('partner_id'));
            $partner->company_pack_confirmed = $request->input('company_pack_confirmed');
            $partner->save();
            $notify_text = 'Ваш спонсор '.$liberty_user->name.' '.$liberty_user->family.' подтвердил ваш Пакет в Компании';
        }
        
        if($request->has('partner_id')){
            
            $partner = Profile::findOrFail($request->input('partner_id'));
            //change club status            
            $club_status = $partner->status_id;
            
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 1){
                        $club_status = 3;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 2 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack == 1){
                        $club_status = 4;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 2 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack >= 2){
                        $club_status = 5;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 3 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack >= 1){
                        $club_status = 6;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 4 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack >= 1){
                        $club_status = 7;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status == 5 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack >= 1){
                        $club_status = 8;
                        }
                        
            if($partner->company_login_confirmed == 1 && strlen($partner->company_login) >= 1
                        && $partner->company_status_confirmed == 1 && $partner->company_status >= 6 
                        && $partner->company_pack_confirmed == 1 && $partner->company_pack >= 1){
                        $club_status = 9;
                        }
                        
            $partner->status_id = $club_status;
            $partner->save();
            
            //notifing
            $user_partner = User::findOrFail($partner->user->id);
            $notify->SendNotify($notify_text, $user_partner);
        }
        
        $query = Profile::query();
        $query = $query->Where('sponsors', 'like', '%'.$liberty_user->id.'%');

        $data = $query->paginate(10);
        
        foreach ($data as $key => $value){
            if($value->company_status_confirmed != 0 
                    && $value->company_login_confirmed != 0 
                        && $value->company_pack_confirmed != 0){
                        unset($data[$key]);
                        }
        }
        
        return view('cabinet.moderate',['data'=> $data]);
    }

    public function clubcart_activation(Request $request){
        $user = User::find($request->input('user_id'));
        $profile = $user->profile;
        $good = Good::find($request->input('good_id'));
        
        if($profile->balance > $good->price){
            $delta = $good->price - $profile->balance;
            echo 'Бабла мало! delta ='.$delta;
        }else{
            $abonement = $user->abonements;
            if(!$abonement){
                
            }else{
                $now = Time();
                echo date('Y-m-d H:i:s', strtotime('+'.$good->days.' days'));
                                
                //echo $now+$good->days;
                /*
                $abonement = new Abonement;
                $abonement->user_id = $request->input('user_id');
                $abonement->title = $good->title;
                $abonement->price = $good->price;
                $abonement->srok = $good->price;
                $abonement->save();
                 * 
                 */
            }
        }
    }
    
    public function updateRecommendation($recommendation_id = null, $task = null){
        $sponsor = Auth::user();
        $notify = new Notify;
        $recommendation = Recommendation::find($recommendation_id);
        $partner = User::find($recommendation->user_id);
        $protocol = new Protocol;
        $protocol->text = 'Прием гостя';
        $protocol->type = 'lids';
        $protocol->user_id = $sponsor->id;
        $protocol->save();
                
        $notify_text = '';
        if($task == 'approve'){
            $recommendation->status = 1;
            $notify_text = 'Вы получили рекомендацию от спонсора. Ваш статус - Новичок Liberty club.';
        } elseif($task == 'refuse') {
            $recommendation->status = 2;
            $notify_text = 'Вам отказано в рекомендации. Ваш аккаунт Liberty club заблокирован.';
        }
        $recommendation->save();
        $notify->SendNotify($notify_text, $partner);
                
        if($task == 'approve'){
            $partner_profile = Profile::find($recommendation->user->profile->id);
            $partner_profile->sponsor = $sponsor->id;
            $partner_profile->sponsors = $sponsor->id.','.$sponsor->profile->sponsors;
            $partner_profile->status_id = 2;
            $partner_profile->save();
        }elseif($task == 'refuse') {
            $guest_user = User::find($recommendation->user->id);
            $guest_user->blocked = 1;
            $guest_user->save();
        }
        
        if($recommendation->user->source == 'public'){
            $sponsor->public_lids++;
            $sponsor->save();
        }elseif($recommendation->user->source == 'invite'){
            $sponsor->invite_lids++;
            $sponsor->save();
        }
        
        //return Response::json(['msg'=> $task]);         
    }
    
    public function getCountryCities(Request $request){
        $country_id = $request->input('country_id');
        $cities = City::where('country_id','=',$country_id)
                ->orderBy('city_name_ru', 'ASC')->get();
        
        $arr_cities = [];
        foreach ($cities as $city){
            $arr_cities[$city->id] = $city->city_name_ru;
        }
        return Response::json($arr_cities);
    }
            
}