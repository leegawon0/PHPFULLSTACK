// 현재 시간 불러오는 함수
function clock() {
    let present = new Date();
    let hours = present.getHours();
    let minutes = present.getMinutes();
    let seconds = present.getSeconds();
    let ampm;
    
    if(hours > 12) {
        ampm = '오후'
        hours = hours - 12;
    }
    else {
        ampm = '오전'
    }

    hours = present.getHours().toString();
    minutes = present.getMinutes().toString();
    seconds = present.getSeconds().toString();

    // HTML <span> 태그 안에 현재 시간 출력하기
    let span1 = document.getElementById('span1');
    span1.innerHTML = ampm + ' ' + hours.padStart(2, '0') + ' : ' + minutes.padStart(2, '0') + ' : ' + seconds.padStart(2, '0');
}

// 처음 시간 불러오기
clock();
// 1초마다 시간 다시 불러오기
let myInterval = setInterval(clock, 1000);
// setInterval 내 아규먼트 함수에 괄호 붙이면 콜백 함수로 실행이 불가능
// 1초마다 setInterval이 내부적으로 실행해줘야 하는데 괄호 붙이면 즉시 함수가 실행됨

// 멈추기 버튼
const stopbtn = document.getElementById('stopbtn');
stopbtn.addEventListener( 'click', () => clearInterval(myInterval) );

// 재시작 버튼
const restartbtn = document.getElementById('restartbtn');
restartbtn.addEventListener( 'click', () => { clock(); myInterval = setInterval(clock, 1000) });