<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| 라우트 정의
|--------------------------------------------------------------------------
|
| 문자열 리턴
| xcopy D:\workspace\PHPFULLSTACK\Laravel\edu-laravel\routes C:\Apache24\htdocs\edu-laravel\routes /e /h /k /y
|
*/

Route::get('/hi', function () {
    return '안녕하세요.';
});

/*
|--------------------------------------------------------------------------
| 라우트 정의
|--------------------------------------------------------------------------
|
| 뷰 리턴
| 뷰 파일이 없으면 에러발생, 디버그모드 설정이 false면 500dpfj, true면 에러의 상세정보 출력
| xcopy D:\workspace\PHPFULLSTACK\Laravel\edu-laravel\resources C:\Apache24\htdocs\edu-laravel\resources /e /h /k /y
|
*/

Route::get('/myview', function () {
    return view('myview');
});

Route::get('/home', function () {
    return view('home');
});


/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| 모든 요청에 대한 처리
| 여러 라우터가 해당될 경우 가장 마지막에 정의된 라우터가 실행
|
*/

Route::any('/method', function () {
    return 'ANY Method';
});

/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| GET 요청에 대한 처리
|
*/

Route::get('/method', function () {
    return 'GET Method';
});

/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| POST 요청에 대한 처리
|
*/

Route::post('/method', function() {
    return 'POST Method';
});

/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| PUT 요청에 대한 처리
|
*/

Route::put('/method', function() {
    return 'PUT Method';
});


/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| DELETE 요청에 대한 처리
|
*/

Route::delete('/method', function() {
    return 'DELETE Method';
});

/*
|--------------------------------------------------------------------------
| HTTP 메소드에 대응하는 라우터
|--------------------------------------------------------------------------
|
| 설정한 메소드 요청에 대한 처리
|
*/

Route::match(['get', 'post'], '/method', function () {
    return 'MATCH Method';
});

/*
|--------------------------------------------------------------------------
| 라우트에서 파라미터 제어
|--------------------------------------------------------------------------
|
| 쿼리 스트링으로 파라미터 획득
| http://localhost/query?id=admin&name=lee
|
*/

Route::get('/query', function (Request $request) {
    return $request->id.", ".$request->name;
});

/*
|--------------------------------------------------------------------------
| 라우트에서 파라미터 제어
|--------------------------------------------------------------------------
|
| URL 세그먼트로 지정 파라미터 획득
| http://localhost/segment/1
| http://localhost/segment 만 보내면 404 오류
|
*/

Route::get('/segment/{id}', function ($id) {
    return 'segment ID : '.$id;
});

/*
|--------------------------------------------------------------------------
| 라우트에서 파라미터 제어
|--------------------------------------------------------------------------
|
| URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
|
*/

Route::get('/segment2/{id?}', function ($id = 'base') {
    return 'segment2 ID : '.$id;
});

// Request로도 세그먼트 파라미터를 획득 가능
// 세그먼트 파라미터가 없어도 404에러 발생 안함
// Route::get('/segment2/{id?}', function (Request $request) {
//     return 'segment2 ID : '.$request->id;
// });

/*
|--------------------------------------------------------------------------
| 라우트의 이름 지정
|--------------------------------------------------------------------------
|
| 
|
*/

Route::get('/names/home', function () {
    return view('nameshome');
});

Route::get('/name', function () {
    return 'nameindex';
})->name('names.index');

/*
|--------------------------------------------------------------------------
| 라우트 매칭 실패시 대체 라우트 정의
|--------------------------------------------------------------------------
| 
| 가장 마지막에 정의
|
*/

Route::fallback(function() {
    return '잘못된 경로로 접속하셨습니다.';
});

/*
|--------------------------------------------------------------------------
| 라우트의 그룹 및 공통경로 설정
|--------------------------------------------------------------------------
| 
| 
|
*/

// 공통 경로
Route::middleware('auth')->prefix('users')->group(function () {

    Route::get('/login', function () {
        return 'Login';
    })->name('users.login');
    
    Route::get('/logout', function () {
        return 'Logout';
    })->name('users.logout');
    
    Route::get('/regist', function () {
        return 'Registration';
    })->name('users.regist');

});

/*
|--------------------------------------------------------------------------
| 서명 라우터
|--------------------------------------------------------------------------
| 
| 
|
*/
use Illuminate\Support\Facades\URL;
Route::get('/makesign', function() {
    // 일반 URL 링크 생성하기
    $baseUrl = route('sign');

    // 서명된 URL 링크 생성하기
    $signUrl = URL::signedRoute('sign');

    // 유효기간이 있는 서명된 URL 링크 생성하기
    $limitSignUrl = URL::temporarySignedRoute('sign', now()->addSecond(10));

    return $baseUrl."<br><br>".$signUrl."<br><br>".$limitSignUrl;
});

Route::get('/sign', function () {
    return "Sign";
})->name('sign')->middleware('signed');