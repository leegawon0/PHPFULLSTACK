// setTimeout(() => {
//     console.log('A');
// }, 3000);

// setTimeout(() => {
//     console.log('B');
// }, 2000);

// setTimeout(() => {
//     console.log('C');
// }, 1000);

// 1. 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.

// setTimeout(() => {
//     console.log('A');
//     setTimeout(() => {
//         console.log('B');
//         setTimeout(() => {
//             console.log('C');
//         }, 1000);
//     }, 2000);
// }, 3000);

// 2. promise를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.

function fnc(a, b) {
        return new Promise( resolve => {
            setTimeout(() => resolve(a), b*1000);
            console.log(a);
        }
    )
}

fnc('A', 3)
.then(() => fnc('B', 2))
.then(() => fnc('C', 1))

// ----------------------------------

// const ABC = {
//     fncA() {
//     return new Promise( resolve => 
//         setTimeout(() => resolve('A'), 3000)
//     )}

//     , fncB() {
//     return new Promise( resolve => 
//         setTimeout(() => resolve('B'), 2000)
//     )}

//     , fncC() {
//     return new Promise( resolve => 
//         setTimeout(() => resolve('C'), 1000)
//     )}
// }

// ABC.fncA()
// .then(i => {console.log(i); return ABC.fncB();})
// .then(i => {console.log(i); return ABC.fncC();})
// .then(i => console.log(i));

// ----------------------------------

// 얘는 쓰면 안됨
// ABC.fncA()
// .then(i => ABC.fncB(console.log(i)))
// .then(i => ABC.fncC(console.log(i)))
// .then(i => console.log(i));