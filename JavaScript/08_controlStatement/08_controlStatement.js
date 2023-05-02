// 제어문

// --------------------
// 조건문 (if, switch)
// --------------------

if( 1 > 0 ) {
    console.log( "1은 0보다 크다." );
} else if(1 < 0) {
    console.log( "1은 0보다 작다." );
} else {
    console.log( "기타 등등" );
}

let u_age = 30;
switch ( u_age ) {
    case 20:
        console.log( "20살" );
        break;

    default:
        console.log( u_age + "살" );
        break;
}

// --------------------
// 반복문 (while, do_while, for, foreach, for...in, for...of)
// --------------------

let num = 0;

while ( num <= 3 ) {
    console.log(num);
    num++;
}

let num1 = 1;
console.log( "2단" );
do {
    console.log( " 2 * " + num1 + " = " + (2 * num1) )
    num1++;
} while ( num1 <= 9 );

console.log( "2단" );
num1 = 1;
for (let i = 1; i <= 9; i++) {
    console.log( " 2 * " + i + " = " + (2 * i) )
}

let arr = [1, 2, 3, 4];
arr.forEach( function( val ) {
    console.log( val );
});

obj1 = {
    u_name: "홍길동"
    ,u_age: "20"
}

// for...in : 모든 객체를 루프 가능
for( let i in obj1 ) {
    console.log( i + " : " + obj1[i] );
}

let arr2 = [5, 4, 3];
arr2.num = 2;

console.log( arr2 );

// for...of : 
for( let i of arr2 ) {
    console.log( i );
}