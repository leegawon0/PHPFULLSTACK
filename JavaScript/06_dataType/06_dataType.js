// --------------------
// 데이터 타입
// --------------------

// 숫자 (number)
let num = 1;

// 문자열 (string)
let str = "안녕";

// 불리언 (boolean)
let bool = true;

// null
let test1 = null;

// undefined
let test2;

// 심볼 (symbol) : 둘 이상의 상수가 같은 값을 가지지만 서로 다른 역할을 할 때 사용
const S_CONST1 = Symbol("심볼입니다.");
const S_CONST2 = Symbol("심볼입니다.");

if( S_CONST1 === S_CONST2 ) {
    console.log( "TRUE" );
}
else {
    console.log( "FALSE" );
}

// console.log( typeof( num ) );
// console.log( typeof( str ) );
// console.log( typeof( bool ) );
// console.log( typeof( test1 ) );
// console.log( typeof( test2 ) );
// console.log( typeof( S_CONST1 ) );

// --------------------
// 객체 타입 (JSON)
// --------------------

let obj1 = {
    u_name: "홍길동"
    ,u_age: 30
    ,u_gender: "남자"
    ,test: function () {
        console.log( "객체 함수 test" );
    }
    ,addr: {
        addr1: "대구"
        ,addr2: "중구"
    }
}

console.log( obj1 );
console.log( obj1.u_name );
console.log( obj1.u_age );
console.log( obj1.u_gender );
console.log( obj1.test );
console.log( obj1.addr.addr1 );

// 배열 (Array)
let arr = [ "탕수육", "짜장면", "짬뽕" ];
console.log( arr[0] );
console.log( arr[1] );
console.log( arr[2] );