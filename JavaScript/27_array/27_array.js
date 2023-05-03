let arr = [1, 2, 3, 4, 5];
console.log( arr );

// push() 메소드 : 배열에 값 추가
arr.push( 6 );

arr[6] = 7;
console.log( arr );

arr[10] = 11; // -> 비권장, 중간에 값이 없는 빈 방들이 생겨남
console.log( arr );

// delete : 배열의 값 삭제
delete arr[5];
console.log( arr ); // -> 값은 지워져도 방은 남아있음, 배열 크기도 그대로

// splice() 메소드 : 배열의 요소를 삭제 또는 교체

arr.splice(5, 1);
arr.splice(6, 4);
console.log( arr );

arr.splice(5, 1, 6);
console.log( arr );

let arrT = [1, 2, 3, 4, 5];
arrT.splice(0, 0, 0);
console.log( arrT );

arrT.push( 6, 7, 8 ); // 가변 파라미터로 모든 값을 추가
console.log( arrT );

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용

console.log( arr.indexOf( 10 ) ); // -> 없는 값을 찾으면 -1을 뱉어냄

let arr2 = [1, 2, 3, 3, 4, 1];
console.log( arr2.indexOf( 1 ) ); // -> 찾는 값 중 가장 첫 번째에 있는 값의 인덱스
console.log( arr2.lastIndexOf( 1 ) ); // -> 찾는 값 중 가장 마지막에 있는 값의 인덱스

// slice() 메소드 : 

// 예제
let fileName = 'javaScript.log.php';
// 아래처럼 콘솔에 출력해 주세요. (indexOf(), lastIndexof(), slice() 메소드 이용)

let num1 = fileName.indexOf('.');
let num2 = fileName.lastIndexOf('.');

let a = fileName.slice( 0, num1 );
let b = fileName.slice( num1+1, num2 );
let c = fileName.slice( num2+1 );

console.log( a );
console.log( b );
console.log( c );

let arrF = fileName.split('.');
console.log( arrF[0] );
console.log( arrF[1] );
console.log( arrF[2] );

// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrC1 = [1, 2, 3];
let arrC2 = [10, 20, 30];
let arrC3 = [111, 222, 333];
let arrC = arrC1.concat( arrC2, arrC3 );
console.log( arrC );

// includes() 메소드 : 배열이 특정 요소를 가지고 있는지 판별
let arrI = [1, 2, 3, 4];
console.log( arrI.includes( 5 ) );

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 반환
const arrS = [ 6, 3, 5, 8, 92, 3, 7, 5, 100, 80, 40 ];
console.log( arrS.sort() ); // -> 문자열 기준으로 정렬
arrS.sort( ( a, b ) => a - b ); // -> 오름차순 정렬
arrS.sort( ( a, b ) => b - a ); // -> 내림차순 정렬
console.log( arrS );

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열 만들어 줌
const arrJ = [ "안녕", "하세", "요" ];
console.log( arrJ.join(', ') );

// every() 메소드 : 배열의 요소들이 주어진 함수의 조건을 만족하는 지 판별
const arrE = [1, 2, 3, 4, 5];
let result = arrE.every(
    function( val ) {
        return val <= 5;
    }
);
console.log( result );

// 모든 요소의 2로 나눈 나머지가 1인지 판별해주세요.
let result2 = arrE.every( val => ( val % 2 ) === 0 );
console.log( result2 );

// some() 메소드 : 배열 안에 함수의 조건을 만족하는 요소가 하나라도 있는 지 판별
const arrSome = [1, 2, 3, 4, 5];
let result3 = arrSome.some( val => val <= 1 );
console.log( result3 );

// filter() 메소드 : 주어진 함수의 조건을 만족하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result4 = arrFilter.filter( val => val >= 3 );
console.log( result4 );