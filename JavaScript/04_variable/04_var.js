// console.log("안녕하세요. js파일입니다.", "두번째");

// --------------------
// 변수
// --------------------

// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";
// u_name = "갑돌이";
// console.log( u_name );

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// let u_age = 40; --> 에러발생
// u_age = 30;
// console.log( u_age );

// const : 상수 선언, 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// gender = "여자"; --> 에러발생

// --------------------
// 스코프
// --------------------

// 전역 스코프
let u_name = "홍길동";

// 함수레벨 스코프
function test() {
    console.log( u_name );
    let u_age = 30;
    console.log( u_age );
}
// test();
// console.log( u_age ); --> 에러발생

// 블록레벨 스코프
function test1() {
    if( true ) {
        let v_test1 = "함수 : 테스트1";
        var v_var1 = "var로 선언";
    }
    // console.log( v_test1 ); --> 에러발생
    console.log( v_var1 );
}
test1();

// 변수 선언을 함수 내 최상단에 하면 예기치 못한 오류를 줄일 수 있음

// --------------------
// 호이스팅 (hosting)
// --------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당 하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어올리는 것

console.log( hTest() );
console.log("60행 : " + varTest );
// console.log("61행 : " + letTest ); --> 에러발생
// console.log("62행 : " + constTest ); --> 에러발생

function hTest() {
    return "함수 : hTest";
}

var varTest = "var변수";
console.log("69행 : " + varTest );

let letTest = "let 변수";

const constTest = "const 상수";