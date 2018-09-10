<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Gregwar\Captcha\PhraseBuilder;
use Session; 

class ZhuceController extends Controller
{
    public function zhuce()
    {
        return view('home.zhuce');
    }

    public function store(Request $request)
    {
        $user = new User;
        $user -> name = $request -> name;
        $user -> password = Hash::make($request->password);
        if($user -> save()){
            return redirect('/home/denglu')->with('success', '注册成功');
        }else{
            return back()->with('error','注册失败');
        }
    }

    public function denglu()
    {
        return view('home.denglu');
    }

        public function dologin(Request $req)
    {
        // $user = User::where('username',$request->username)->first();
        //  if(!$user){
        //       return back()->with('error','登录失败');
        //  }
        //   //校验密码
        //   if(Hash::check($request->password,$user->password)){
        //     //将登录信息写入session
        //      session(['username'=>$user->username,'id'=>$user->id]);
        //     return redirect('/shop')->with('success','登录成功');
        //   }else{
        //     return back()->with('error','登录失败');
        //   }
        //   
        //   
          //根据用户名读数据库
        $user=Users::where('name',$req->name)->first();
        
        $userInput = \Request::get('captcha');
        
    // if(!$user){
        //     return back()->with('error','登录失败');
        // }
        // //校验密码
        // if(Hash::check($req->password,$user->password)){
        //     //写入session
        //     session(['name'=>$user->name,'id'=>$user->id]);
        //     return redirect('/admin')->with('success','登陆成功');
        // }else{
        //     return back()->with('error','登录失败');
        // }


        $password=Hash::check($req->password,$user->password); 
        if(Session::get('milkcaptcha') == $userInput){
            if($user && $password){
                session(['name'=>$user->name,'id'=>$user->id]);
                return redirect('/home')->with('success','登陆成功');
            }else{
                return back()->with('error','用户名或密码错误');
            }
         }else{
        //     //echo '验证码错误';
            return back()->with('error','验证码错误');
         }

    }

    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
 
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //dd($a);


        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        ob_clean();
        header('Content-Type: image/jpeg');
        $builder->output();


    }


}