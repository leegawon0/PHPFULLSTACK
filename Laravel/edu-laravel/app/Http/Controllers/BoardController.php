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
        $input = ['4', '7', '8']; // categories의 no 컬럼
        // 게시글 번호, 게시글 제목, 카테고리명을 출력해 주세요. (게시글 번호로 오름차순 정렬 후 상위 5개만)

        $result4 = DB::select('select b.bno, b.btitle, c.name from boards b inner join categories c on b.category = c.no where c.no = :no order by b.bno asc limit 5'
            , ['no' => $input[0]]
        );
        $result7 = DB::select('select b.bno, b.btitle, c.name from boards b inner join categories c on b.category = c.no where c.no = :no order by b.bno asc limit 5'
            , ['no' => $input[1]]
        );
        $result8 = DB::select('select b.bno, b.btitle, c.name from boards b inner join categories c on b.category = c.no where c.no = :no order by b.bno asc limit 5'
            , ['no' => $input[2]]
        );

        var_dump($result4);
        var_dump($result7);
        var_dump($result8);
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
