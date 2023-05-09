// 타이머 함수 

// 1. setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('a'), 2000);

clearTimeout(timeOut);

// 2. setInterval() / clearInterval() 
const myInterval = setInterval(() => console.log('b'), 1000);

clearInterval(myInterval);

// 1~5를 1초마다 콘솔에 출력해 주세요

// setTimeout(() => console.log('1'), 1000);
// setTimeout(() => console.log('2'), 2000);
// setTimeout(() => console.log('3'), 3000);
// setTimeout(() => console.log('4'), 4000);
// setTimeout(() => console.log('5'), 5000);

// for (let i = 1; i < 6; i++) {
//     setTimeout(()=>{console.log(i);}, i*1000)
// }

let a = 1;

const ex1 = setInterval(() => {
    console.log(a++);
    if(a > 5) {
        clearInterval(ex1);
    }
}, 1000);