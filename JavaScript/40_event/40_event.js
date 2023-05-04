// 인라인 이벤트 등록 : html 파일의 11행, 13행 확인

// 프로퍼티 리스너
const btn1 = document.getElementById('btn1');
btn1.onclick = function() {
    location.href = "http://www.google.com";
}
// btn1.onclick = function() {
//     window.open('http://www.google.com');
// }