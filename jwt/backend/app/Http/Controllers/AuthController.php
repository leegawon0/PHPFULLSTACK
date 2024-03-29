<?php

namespace App\Http\Controllers;

use App\Lib\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    protected $obj_jwt;

    public function __construct() {
        $this->obj_jwt = new JWT();
    }

    /*
        JWT토큰 생성
    */
    function issueToken(Request $req) {
        Log::debug("------- issueJWT Start -------");
        Log::debug("id", $req->only('id', 'pw'));
        //유효성 체크

        // DB에서 유저 검색

        // JWT 생성
        $token = $this->obj_jwt->createJWT($req->only('id', 'pw'));
        Log::debug("------- issueJWT End -------");

        $res = [
            'errflg' => '0',
            'token' => $token
        ];
        return response(json_encode($res), 200);
    }

    /* 
    토큰 검증용
    */
    public function chk(Request $req) {
        $token = $req->header('Authorization');

        $res = [
            'errflg' => '0',
            'msg' => 'OK'
        ];
        $status = 200;

        if( !($this->obj_jwt->chkToken($token)) ) {
            $res = [
                'errflg' => '1',
                'msg' => 'Invalid Token'
            ];
            $status = 401;
        };

        return response(json_encode($res), 200);
    }

    /*
    로그인
    */
    public function login(Request $req) {
        Log::debug("------- Login Start -------");
        Log::debug("id", $req->only('id', 'pw'));
        //유효성 체크

        // DB에서 유저 검색

        // JWT 생성
        $token = $this->obj_jwt->createJWT($req->only('id', 'pw'));
        Log::debug("------- issueJWT End -------");

        $res = [
            'errflg' => '0',
            'token' => $token
        ];
        Log::debug("------- Login End -------");
        return response(json_encode($res), 200);
    }
}
