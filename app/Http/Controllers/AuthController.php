<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\AdminProfile;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
        $kategori = Kategori::all();
        return view('auth.register', compact('kategori'));
    }

    public function register_action(Request $request)
    {
        $str = Str::random(13);

        // Validasi data yang diterima
        $request->validate([
            'name' => 'required|min:5',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
            'profile' => 'required|image|file',
            'nama_wisata' => 'required|unique:wisata,nama_wisata',
            'kategori' => 'required',
            'gambar_wisata' => 'required|image|file',
            'alamat' => 'required',
            'deskripsi' => 'required',
        ], [
            'name.required' => 'Username wajib diisi.',
            'name.min' => 'Nama minimal 5 karakter(a-z, A-Z, 0-9).',
            'email.required' => 'Email wajib diisi.',
            'email.unique' => 'Email telah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 6 karakter(a-z, A-Z, 0-9).',
            'profile.required' => 'Foto Profil wajib diupload.',
            'profile.image' => 'Foto Profil yang diupload harus image.',
            'profile.file' => 'Foto Profil harus berupa file.',
            'nama_wisata.required' => 'Nama wisata wajib diisi.',
            'nama_wisata.unique' => 'Nama wisata sudah dipakai.',
            'kategori.required' => 'Kategori wajib dipilih.',
            'gambar_wisata.required' => 'Gambar wisata wajib diupload.',
            'gambar_wisata.image' => 'Gambar wisata yang diupload harus image.',
            'alamat.required' => 'Alamat lengkap wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        DB::beginTransaction();

        try {
            // Proses upload foto profil
            $profile_file = $request->file('profile');
            $profile_ekstensi = $profile_file->extension();
            $nama_profile = date('ymdhis') . "." . $profile_ekstensi;
            $profile_file->move(public_path('pictures/profile/admin'), $nama_profile);

            // Simpan data user
            $infoRegister = [
                'name' => $request->name,
                'email' => $request->email,
                'plain_password' => $request->password,
                'password' => bcrypt($request->password),
                'profile' => $nama_profile,
                'verify_key' => $str,
            ];

            $user = User::create($infoRegister);

            // Proses upload gambar wisata
            $gambar_wisata_file = $request->file('gambar_wisata');
            $gambar_wisata_ekstensi = $gambar_wisata_file->extension();
            $nama_gambar_wisata = date('ymdhis') . "_wisata." . $gambar_wisata_ekstensi;
            $gambar_wisata_file->move(public_path('pictures/wisata'), $nama_gambar_wisata);

            // Simpan data wisata
            $infoWisata = [
                'nama_wisata' => $request->nama_wisata,
                'status' => 'inactive',
                'alamat_lengkap' => $request->alamat,
                'gambar_wisata' => $nama_gambar_wisata,
                'deskripsi' => $request->deskripsi,
                'id_kategori' => $request->kategori,
            ];

            $wisata = Wisata::create($infoWisata);

            // Simpan profil admin dan hubungkan dengan wisata
            $adminProfile = [
                'id_user' => $user->id,
                'id_wisata' => $wisata->wisata_id,
            ];

            AdminProfile::create($adminProfile);

            // Kirim email verifikasi
            $details = [
                'name' => $infoRegister['name'],
                'role' => 'Admin',
                'datetime' => date('Y-m-d H:i:s'),
                'website' => 'Verifikasi pendaftaran Wisata di Website Kami!',
                'url' => 'http://' . request()->getHttpHost() . '/' . 'verify/' . $infoRegister['verify_key'],
            ];

            Mail::to($infoRegister['email'])->send(new AuthMail($details));

            DB::commit();

            return redirect()->route('login')->with('success', 'Link verifikasi telah dikirim ke email anda. Silahkan cek untuk melakukan verifikasi.');
        } catch (\Exception $e) {
            DB::rollBack();
            // Tangani kesalahan
            return redirect()->back()->withErrors('Terjadi kesalahan saat mendaftar. Silakan coba lagi.');
        }
    }

    function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
            ->where('verify_key', $verify_key)
            ->exists();
        if ($keyCheck) {
            User::where('verify_key', $verify_key)
                ->update(['email_verified_at' => date('Y-m-d H:i:s')]);

            $user = User::where('verify_key', $verify_key)->first();
            $adminProfile = AdminProfile::where('id_user', $user->id)->first();
            if ($adminProfile) {
                Wisata::where('wisata_id', $adminProfile->id_wisata)
                    ->update(['status' => 'active']);
            }
            return redirect()->route('login')->with('success', 'Verifikasi berhasil, Akun anda sudah aktif.');
        } else {
            return redirect()->route('login')->withErrors('Key tidak valid, pastikan telah melakukan register.')->withInput();
        }
    }

    // function verify($verify_key)
    // {
    //     // Cek apakah verify_key ada di tabel User
    //     $keyCheck = User::select('verify_key')
    //         ->where('verify_key', $verify_key)
    //         ->exists();

    //     if ($keyCheck) {
    //         // Temukan user berdasarkan verify_key
    //         $user = User::where('verify_key', $verify_key)->first();

    //         // Perbarui email_verified_at
    //         $user->update(['email_verified_at' => date('Y-m-d H:i:s')]);

    //         // Ambil admin profile yang terkait dengan user
    //         $adminProfile = \App\Models\AdminProfile::where('id_user', $user->id)->first();

    //         if ($adminProfile) {
    //             // Update status wisata menjadi 'active' untuk id_wisata terkait admin
    //             \App\Models\Wisata::where('wisata_id', $adminProfile->id_wisata)
    //                 ->update(['status' => 'active']);
    //         }

    //         // Redirect dengan pesan sukses
    //         return redirect()->route('login')->with('success', 'Verifikasi berhasil, Akun anda sudah aktif.');
    //     } else {
    //         // Redirect dengan pesan error jika key tidak valid
    //         return redirect()->route('login')->withErrors('Key tidak valid, pastikan telah melakukan register.')->withInput();
    //     }
    // }    

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('pictures/wisata/deskripsi_wisata'), $fileName);

            $url = asset('pictures/wisata/deskripsi_wisata/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
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

    function register2()
    {
        return view('auth.register2');
    }
}
