// Date
const NOW = new Date('2023-07-12 23:07:12.123');
console.log( NOW );

// getFullYear() : 연도만 가져오는 메소드
console.log( ( NOW.getFullYear() ) + "년" );

// getMonth() : 월을 가져오는 메소드 (+1을 해줘야 현재 월과 같아짐)
console.log( ( NOW.getMonth()+1 ) + "월" );

// getDate() : 일을 가져오는 메소드
console.log( ( NOW.getDate() ) + "일" );

// getDay() : 요일을 가져오는 메소드 ( 일요일~토요일 : 0~6 )
let a;
if( NOW.getDay() === 0 ) {
    a = '일'
} else if( NOW.getDay() === 1 ) {
    a = '월'
} else if( NOW.getDay() === 2 ) {
    a = '화'
} else if( NOW.getDay() === 3 ) {
    a = '수'
} else if( NOW.getDay() === 4 ) {
    a = '목'
} else if( NOW.getDay() === 5 ) {
    a = '금'
} else if( NOW.getDay() === 6 ) {
    a = '토'
}
console.log( a + "요일" );

// getTime() : 1970/01/01 기준으로 몇 밀리초가 지났는지 초를 가져오는 메소드
console.log( "시간(Linux) : " + ( NOW.getTime() ) );

// getHours() : 시간을 가져오는 메소드
console.log( ( NOW.getHours() ) + "시" );

// getMinutes() : 분을 가져오는 메소드
console.log( ( NOW.getMinutes() ) + "분" );

// getSeconds() : 분을 가져오는 메소드
console.log( ( NOW.getSeconds() ) + "초" );

// getMilliseconds() : 밀리초를 가져오는 메소드
console.log( ( NOW.getMilliseconds() ) + "밀리초" );

// 기준일 : 2022년 9월 30일 19시 20분 10초
// 몇일 전인지 출력해 주세요

const A = new Date('2022-09-30 19:20:10');
const B = new Date();

let bb = B.getTime();
let aa = A.getTime();

let date = Math.ceil( ( bb - aa ) / 86400000 );

console.log( date + "일" );

const ANOW = new Date();
const AMONTH = new Date( ANOW.setMonth(B.getMonth()) - ANOW.setMonth(A.getMonth()) );
console.log( AMONTH.getMonth() + "개월" );