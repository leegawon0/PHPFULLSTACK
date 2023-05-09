// 인라인 이벤트 등록 : html 파일의 11행, 13행 확인

// 프로퍼티 리스너
const btn1 = document.getElementById('btn1');
btn1.onclick = function() {
    location.href = "http://www.google.com";
}
// btn1.onclick = function() {
//     window.open('http://www.google.com');
// }

// addEventListener(eventType, function) 방식
const btn2 = document.querySelector('#btn2');
// document.getElementById('btn2');
// btn2.addEventListener('click', () => {
//     location.href = "http://www.daum.net";
// });

// 팝업 창 열기
let newWindow = null;
btn2.addEventListener('click', () => {
        newWindow = open('http://www.daum.net', '', 'width=500 height=500');
    });

// 팝업 창 닫기
const btn3 = document.getElementById('btn3');
btn3.addEventListener('click', () => newWindow.close());

// 이벤트 삭제
// removeEventListener(eventType, function)
// addEventListener()로 등록한 이벤트의 인자와 같은 인자를 셋팅해야 삭제됩니다.
// btn3.removeEventListener('click', popUpClose(newWindow));

// function popUpClose(a) {
//     a.close();
// }

// 이벤트 타입
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => alert('div1 클릭'));
div1.addEventListener('mouseenter', () => alert('div1 진입'));