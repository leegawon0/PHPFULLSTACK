// 1. 요소를 선택하는 방법

// 1-1. ID로 선택하는 방법
//      document.getElementById();
const TITLE = document.getElementById('title');
TITLE.style.color = 'blue';

// 1-2. 태그명으로 요소를 선택하는 방법
const li = document.getElementsByTagName('li');

// 탕수육은 노란색, 짬뽕은 빨강색으로 변경
li[1].style.color = 'yellow';
li[2].style.color = 'red';

// 탕수육, 볶음밥, 깐풍기는 배경색을 오렌지색
// 짜장면, 짬뽕, 라조기는 배경색을 베이지색
for (let i = 0; i < li.length; i++) {
    if( ( i % 2 ) === 0 ) {
        li[i].style.backgroundColor = 'beige';
    } else {
        li[i].style.backgroundColor = 'orange';
    }
}

// for(let i = 0; i < li.length / 2; i++) {
//     li[2*i].style.backgroundColor = 'blue';
//     li[(2*i)+1].style.backgroundColor = 'red';
// }

// 1-3. 클래스명으로 요소를 선택하는 방법
const noneli = document.getElementsByClassName('none-li');

// 1-4. CSS 선택자로 요소를 선택하는 방법
//      querySelector() : 복수의 요소가 있다면 가장 첫번째 것만 선택
//      querySelectorAll() : 해당하는 모든 요소 선택
const title2 = document.querySelector('#title');
const li2 = document.querySelector('.none-li');
const liall = document.querySelectorAll('.none-li');

// 2. 요소 조작하기
// 2-1. 콘텐츠를 조작하는 방법
//      textContent : 순수한 텍스트 데이터 전달, 이전의 태그들은 모두 제거
//      innerHTML : HTML 태그를 인식해서 전달, 이전의 태그들은 모두 제거
TITLE.textContent = '바꾸기';
TITLE.innerHTML = "<a href='#'>링크</a>";

const div1 = document.querySelector('#div1');
// div1.innerHTML = '이너로 삽입'; -> 원래 있던 자식 데이터들을 모두 삭제해버림

// 요소에 속성 추가
const it = document.querySelector('#it');
it.setAttribute('placeholder', '검색어를 입력하세요');

const naver = document.getElementById('naver');
naver.setAttribute('href', 'http://www.naver.com');

// 요소의 속성을 제거
it.removeAttribute('placeholder');

// 요소의 스타일링

// 인라인으로 스타일 추가
naver.style.textDecoration = 'none';
naver.style.backgroundColor = 'lightgreen';

// 클래스로 스타일 추가
const subtitle = document.getElementById('subtitle');
subtitle.classList.add('class1');

// 새로운 요소 만들기

// 요소 만들기
const ce = document.createElement('li');
ce.innerHTML = '야끼우동';

// 요소를 자식요소의 가장 마지막에 삽입
const ul = document.getElementsByTagName('ul');
// ul[0].appendChild(ce);

// 요소를 특정 위치에 삽입하는 방법
const zzam = document.querySelector('li:nth-child(3)');
ul[0].insertBefore(ce, zzam);

// 해당 요소를 지우는 방법
// ce.remove();

// 라조기와 깐풍기 사이에 "잡채밥", "동파육"을 순서대로 넣고,
// 배경색깔 넣은 것도 제대로 나오도록 수정

const zab = document.createElement('li');
zab.innerHTML = '잡채밥';
const dong = document.createElement('li');
dong.innerHTML = '동파육';

const kkan = document.querySelector('li:nth-child(7)');
ul[0].insertBefore(zab, kkan);
ul[0].insertBefore(dong, kkan);

for (let i = 0; i < li.length; i++) {
    if( ( i % 2 ) === 0 ) {
        li[i].style.backgroundColor = 'beige';
    } else {
        li[i].style.backgroundColor = 'orange';
    }
}