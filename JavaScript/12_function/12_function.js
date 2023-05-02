// 함수

// 함수 선언문
function add( a, b ) {
    return a + b;
}

console.log( add( 1, 2 ) );

// 함수 표현식
let add2 = function( a, b ) {
    return a + b;
}

console.log( add2( 4, 2 ) );

// 익명 함수 : 단독으로 사용하면 에러 발생
// function( a, b ) {
//     return a + b;
// }

// 화살표 함수 : 리턴값만 있는 경우 한줄로 표현 가능
let test1 = () => "안녕";

// function test1() {
//     return "안녕";
// }

console.log( test1() );

let add3 = ( a, b ) => a + b;
console.log( add3( 5, 6 ));

// Function 생성자 함수
let add4 = Function('a', 'b', 'return a + b;');
console.log( add4(3, 4) );