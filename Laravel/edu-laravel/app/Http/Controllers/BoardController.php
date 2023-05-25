<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 쿼리 빌더
        // $result = DB::select('select * from categories');
        // $no = '5'; 
        // $result = DB::select('select * from categories where no = :no'
        // , ['no' => $no]
        // );
        // $result = DB::select('select * from categories where no = ? and no = ?'
        // , [$no, 7]
        // );
        $input = ['4', '7', '8', '1', '0']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)

        // $qmark = array_fill(0, count($input), '?');
        // $wherein = implode(',', $qmark);
        $wherein = '?';
        for ($i=1; $i < count($input); $i++) { 
            $wherein .= ', ?';
        }

        // $result2 = DB::select('SELECT b.bno, b.btitle, c.name FROM boards b, categories c WHERE c.no = b.category AND c.no IN (?, ?, ?) ORDER BY b.bno ASC LIMIT 5', $input);
        // $result = DB::select('SELECT b.bno, b.btitle, c.name FROM boards b INNER JOIN categories c ON b.category = c.no WHERE c.no IN ('.$wherein.') ORDER BY b.bno ASC LIMIT 5'
        // , $input);

        // $result2 = DB::insert('INSERT INTO boards( category, btitle, bcontent, created_at, updated_at ) VALUES( :category, :btitle, :bcontent, NOW(), NOW())', 
        // ['category' => '1'
        // , 'btitle' => '제목테스트2'
        // , 'bcontent' => '내용테스트2'
        // ]);

        // 방금 등록한 게시글의 제목 : test, 내용 : testtest로 변경해 주세요.

        // $result3 = DB::update('UPDATE boards SET btitle = :btitle, bcontent = :bcontent, updated_at = NOW() WHERE bno = :bno'
        //     , [
        //     'btitle' => 'test'
        //     , 'bcontent' => 'testtest'
        //     , 'bno' => 30002
        // ]);

        // delete
        // $result4 = DB::delete('DELETE FROM boards WHERE bno IN( ?, ? )', [30001, 30002]);

        // 쿼리 빌더 체이닝
        $no = '5';
        // $result5 = DB::table('categories')->where('no', '=', $no)->dd(); // TODO: 삭제 예정
        
        // select * from `categories` where `no` = ?
        // $result5 = DB::table('categories')->where('no', '=', $no)->get();

        $no1 = '5';
        $no2 = '8';

        // select * from `categories` where `no` = ? and `no` = ?
        // $result6 = DB::table('categories')->where('no', $no1)->where('no', $no2)->dd();

        // select * from `categories` where `no` = ? or `no` = ?
        // $result6 = DB::table('categories')->where('no', $no1)->orWhere('no', $no2)->get();

        // select * from `categories` where `no` in (?, ?)
        // $result7 = DB::table('categories')->whereIn('no', [$no1, $no2])->dd();

        // select * from `categories` where `no` not in (?, ?)
        // $result8 = DB::table('categories')->whereNotIn('no', [$no1, $no2])->dd();

        // select `id`, `no`, `name` from `categories`
        // $result9 = DB::table('categories')->select('id', 'no', 'name')->dd();

        // select * from `categories` order by `name` desc
        // $result10 = DB::table('categories')->orderBy('name', 'desc')->get();

        // ***** 주의해서 사용(사용 안하는 것 추천) ***** whereRaw()
        // $result11 = DB::table('categories')->whereRaw('no = '.$no1);

        // first() : Limit 1과 비슷한 작동
        // $result = DB::table('boards')->orderBy('bno', 'desc')->first();

        // firstOrFail() : first() 같은 동작을 하는데, 실패시 결과가 예외 발생(엘로퀀트 모델 객체에서만 사용 가능)
        // $result = Board::firstOrFail();

        // 집계 메소드
        // $result = DB::table('boards')->count(); //결과의 레코드 수 반환
        // $result = DB::table('boards')->max('bno'); 해당 컬럼의 최대치를 반환

        // 트랜잭션
        // DB::beginTransaction(); // 트랜잭션 시작
        // DB::rollback(); // 롤백
        // DB::commit(); // 커밋

        // 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력해 주세요.
        // 카테고리 번호, 카테고리 명, 글 개수
        $result = DB::table('categories as c')
        ->join('boards as b', 'c.no', 'b.category')
        ->select('c.no', 'c.name', DB::raw('count(*) as cnt'))
        ->where('c.active_flg', '1')
        ->groupBy('c.no', 'c.name')
        ->get();

        $result1 = DB::table('categories as c')
        ->join('boards as b', 'c.no', 'b.category')
        ->select('c.no', 'c.name')
        ->selectRaw('COUNT(*) AS cnt')
        ->where('c.active_flg', '1')
        ->groupBy('c.no', 'c.name') // group by 절에는 select로 뽑는 컬럼 명을 모두 적어 주어야 함
        ->get();

        var_dump($result1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
