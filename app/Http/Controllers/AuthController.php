<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

use function Laravel\Prompts\password;

class AuthController extends Controller
{
    function login()
    {
        return view('auth.login');
    }

    function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            $user = Auth::user();

            if ($user->email_verified_at !== null) {
                switch ($user->role) {
                    case 'Super Admin':
                        return redirect()->route('dashboard')->with('success', 'Anda berhasil login sebagai Super Admin.');
                    case 'Admin':
                        return redirect()->route('dashboard.admin')->with('success', 'Anda berhasil login sebagai Admin.');
                    case 'Karyawan':
                        return redirect()->route('dashboard.karyawan')->with('success', 'Anda berhasil login sebagai Karyawan.');
                    default:
                        Auth::logout();
                        return redirect()->route('login')->withErrors('Peran pengguna tidak dikenali.');
                }
            } else {
                Auth::logout();
                return redirect()->route('login')->withErrors('Akun Anda belum aktif. Harap lakukan verifikasi terlebih dahulu.');
            }
        } else {
            return redirect()->back()->withInput()->withErrors([
                'email' => 'Email atau password salah.',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Anda telah berhasil logout.');
    }

    function register()
    {
        return view('auth.register');
    }

    function register_action(Request $request)
    {
        $str = Str::random(13);
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:6',
            'profile' => 'required|image|file',
        ], [
            'name.required' => 'Username wajib diisi.',
            'name.min' => 'name minimal 5 karakter(a-z, A-Z, 0-9).',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email telah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter(a-z, A-Z, 0-9).',
            'profile.required' => 'Foto Profil wajib diupload.',
            'profile.image' => 'Foto Profil yang diupload harus image.',
            'profile.file' => 'Foto Profil harus berupa file.',
        ]);

        $profile_file = $request->file('profile');
        $profile_ekstensi = $profile_file->extension();
        $nama_profile = date('ymdhis') . "." . $profile_ekstensi;
        $profile_file->move(public_path('pictures/profile'), $nama_profile);

        $infoRegister = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'profile' => $nama_profile,
            'verify_key' => $str,
        ];

        User::create($infoRegister);

        $details = [
            'name' => $infoRegister['name'],
            'role' => 'Admin',
            'datetime' => date('Y-m-d H:i:s'),
            'website' => 'Verifikasi pendaftaran Wisata di Website Kami!',
            'url' => 'http://' . request()->getHttpHost() . '/' . 'verify/' . $infoRegister['verify_key'],
        ];

        Mail::to($infoRegister['email'])->send(new AuthMail($details));

        return redirect()->route('login')->with('success', 'Link verifikasi telah dikirim ke email anda. Silahkan cek untuk melakukan verifikasi.');
    }

    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
                ->update(['email_verified_at' => date('Y-m-d H:i:s')]);
            return redirect()->route('login')->with('success', 'Verifikasi berhasil, Akun anda sudah aktif.');
        } else {
            return redirect()->route('login')->withErrors('Key tidak valid, pastikan telah melakukan register.')->withInput();
        }
    }

    public function profile()
    {
        return view('users.profile');
    }

    public function operator_admin()
    {
        return view('pages.operator.admin.admin');
    }

    public function admin_tambah()
    {
        //    
    }

    public function admin_edit()
    {
        //    
    }

    public function operator_karyawan()
    {
        return view('pages.operator.karyawan.karyawan');
    }

    public function karyawan_tambah()
    {
        //    
    }

    public function karyawan_edit()
    {
        //    
    }
}
