<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use App\Models\User;
use App\Models\Barang;
use App\Models\Pricelist;
use App\Models\Voucher;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Carbon;
use Jenssegers\Agent\Agent;

class LandingPageController extends Controller
{
    public function rules($id = false)
    {
        return  [
            'name_id' => 'nullable',
            'username_id' => 'nullable',
            'origin' => 'required',
            'destinasi' => 'required',
            'jenis_barang_id' => 'required',
            'berat_id' => 'nullable',
            'dimensi_id' => 'nullable',
            'harga_id' => 'required',
            'note' => 'nullable',
            'packing' => 'required',
            'gambar' => 'nullable',
            'voucher_id' => 'nullable',
            'jenis_pembayaran_id' => 'required',
            'invoice_id' => 'nullable',
            'nomer_resi_id' => 'nullable',
        ];
    }

    public function create()
    {
        $getorigin = Pricelist::select('id', 'origin')->get();
        $getdestinasi = Pricelist::select('id', 'destinasi')->get();
        $getberat = Pricelist::select('id', 'berat')->get();
        $getdimensi = Pricelist::select('id', 'dimensi')->get();
        $getharga = Pricelist::select('id', 'harga')->get();
        $getjenisbarang = Barang::select('id', 'jenis_barang')->get();
        $getvoucher = Voucher::select('id', 'voucher')->get();
        $getjenispembayaran = Pembayaran::select('id', 'jenis_pembayaran')->get();

        return view('user.landing-page.create', compact(
            'getorigin',
            'getdestinasi',
            'getjenisbarang',
            'getberat',
            'getdimensi',
            'getharga',
            'getvoucher',
            'getjenispembayaran',
        ));
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, $this->rules());
        $input = $request->all();
        if ($gambar = $request->file('gambar')) {
            $destinationPath = 'gambar/pesanan';
            $profileImage = date('YmdHis') . "." . $gambar->getClientOriginalExtension();
            $gambar->move($destinationPath, $profileImage);
            $input['gambar'] = "$profileImage";
        }
        Pesanan::create($input);
        $pesanan = Pesanan::first();
        return redirect()->route('user.landing-page.show', $pesanan->id);
    }

    public function show(Pesanan $pesanan)
    {
        return view('user.landing-page.show', compact('pesanan'));
    }

    public function login(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOMEUSER);
    }

    // public function register(Request $request)
    // {
    //     $agent = new Agent();
    //     $agent->setUserAgent('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2');

    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'username' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'username' => $request->username,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     $user->forceFill([
    //         'last_login_at' => Carbon::now()->toDateTimeString(),
    //         'last_login_ip' => $request->getClientIp(),
    //         'browser' => $agent->browser(),
    //     ])->save();

    //     // $user->assignRole('user');

    //     event(new Registered($user));

    //     Auth::login($user);

    //     return redirect(RouteServiceProvider::HOMEUSER);
    // }
}