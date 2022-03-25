<?php
namespace App\Http\Controllers\Vendor;
use Auth;
use App\Models\Vendor;
use Exception;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
class GoogleVendorController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleCallback(){
        try {
            $user = Socialite::driver('google')->user();
            $finduser = Vendor::where('social_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                return redirect('/vendor/dashboard');
            }else{
                $newUser = Vendor::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'social_id'=> $user->id,
                    'social_type'=> 'google',
                    'password' => encrypt('my-google'),
                ]);
                Auth::login($newUser);
                return redirect('/vendor/dashboard');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}