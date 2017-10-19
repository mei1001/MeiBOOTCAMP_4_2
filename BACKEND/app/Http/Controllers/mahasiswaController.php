<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    function StudentInput(Request $req){
        DB::beginTransaction();
        try{
            $this->validate($req, [
                'nama' => 'required'
            ]);
        $mahasiswa = new mahasiswa;
        $mahasiswa->nama = $req->input('nama');
        $mahasiswa->alamat = $req->input('alamat');
        $mahasiswa->phonenumb = $req->input('phonenumb');
        $mahasiswa->save();
        DB::commit();
        return response()->json($mahasiswa, 200);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
        }
    }
    function mahasiswaUpdate(Request $req){
        DB::beginTransaction();
        try {
        $NIM= $req->input('NIM');
        $newaalamat = $req->input('alamat');
        $newphonenumb = $req->input('phonenumb');
        DB::update('update mahasiswas set alamat = ?, phonenumber =?  where NIM = ?' , [$newaalamat, $newphonenumb, $NIM]);
        return response()->json(['message' => 'Success'], 200);
        
        // DB::table('mahasiswas')
        // ->where('id', $mahasiswaId);
        // ->update(['alamat'=> $newaddress;'phoneno'=>$newphoneno;]);
        }
        catch(\Exception $e){
            DB::rollback();
            return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
        }
    }

}

// $NIM= $req->input('NIM');
// $newalamat = $req->input('alamat');
// $newphonenumb = $req->input('phonenumb');
// DB::update('update mahasiswas set alamat = ?, phonenumb =?  where NIM = ?' , [$newalamat, $newphonenumb, $NIM]);
// return response()->json(['message' => 'Success'], 200);
// // DB::table('mahasiswas')
// // ->where('id', $mahasiswaId);
// // ->update(['alamat'=> $newalamat;'phonenumb'=>$newphonenumb;]);
// }
// catch(\Exception $e){
//     DB::rollback();
//     return response()->json(['message'=>'Failed to Sign Up, exception:' + $e], 500);
// }