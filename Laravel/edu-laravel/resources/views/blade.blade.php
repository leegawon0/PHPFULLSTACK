{{-- 상속 --}}
@extends('layout.layout')

{{-- 부모 템플릿에 해당하는 yield 부분에 자리를 차지 --}}
@section('title', '자식타이틀')

{{-- 처리해야 하는 코드가 많을 경우에는, @section과 @endsection 사이에 소스코드 기재 --}}
@section('contents')
    <h2>콘텐츠 영역입니다.</h2>
    <p>...</p>
    <p>콘텐츠 끝</p>
@endsection

@section('test')
        <h2>자식의 영역입니다.</h2>
        <p>...</p>
@endsection

{{-- 조건문 --}}
@section('if')
    <hr>
    <h3>If</h3>
    @if($data['gender'] === '남자')
        <span>남자입니다.</span>
    @elseif($data['address'] === '대구')
        <span>대구입니다.</span>
    @else
        <span>모든 조건 탈락</span>
    @endif
@endsection

{{-- 반복문 --}}
@section('for')
    <hr>
    <h3>For</h3>
    @for($i = 0; $i < 5; $i++)
        <span>{{$i}}</span>
    @endfor
@endsection

{{-- foreach와 forelse의 경우, $loop 변수가 생성되고 사용할 수 있다. --}}
@section('foreach')
    <hr>
    <h3>Foreach</h3>
    @foreach($data as $key => $value)
        <span>{{$loop->iteration.'/'.$loop->count}}</span>
        <span>{{$key.' : '.$value}}</span>
        <br>
    @endforeach
@endsection

{{-- foreach와 동작 방식은 똑같지만 빈 배열이 넘어올 경우 @empty 부분이 실행 --}}
@section('forelse')
    <hr>
    <h3>Forelse</h3>
    @forelse($data2 as $key => $value)
        <span>{{$key.' : '.$value}}</span>
    @empty
        <span>빈 배열입니다.</span>
    @endforelse
@endsection