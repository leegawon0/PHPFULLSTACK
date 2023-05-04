console.log( Math.ceil(3.5) );
console.log( Math.round(3.5) );
console.log( Math.floor(3.5) );
// console.log( Math.random() );

// random() 메소드를 이용해서 1~10까지 랜덤으로 나오게 해 주세요
let ran = Math.random();
console.log( Math.floor(ran*10)+1 );

let a = Math.floor(ran*10)+1;

let arr = [];
for( let i = 0; i < 100000; i++ ) {
    let b = Math.floor(Math.random()*10)+1;
    arr.push( b );
}

let arr1 = arr.filter( val => val === 1 ).lenghth;
console.log( arr1 );