// 1. 버튼을 클릭 시 아래 내용의 알림이 나옵니다.
        // 안녕하세요.
        // 숨어있는 div를 찾아보세요

// 2. 특정 영역에 마우스 포인터가 진입하면 아래 내용의 알림이 나옵니다.
        // 두근두근

// 3. 2번의 영역을 클릭하면 배경색이 베이지 색으로 바뀝니다.
        // 들켰다!

// 4. 3번의 상태에서 다시 한번 더 클릭하면 배경색이 흰색으로 바뀌어 안 보이게 됩니다.
        // 다시 숨는다

const btn = document.querySelector('.btn');
btn.addEventListener('click', () => alert('안녕하세요. \n숨어있는 div를 찾아보세요.'));

const hidden = document.querySelector('.hidden');
const hiddenimg = document.querySelector('.hiddenimg');

hidden.style.top = Math.floor(Math.random() * 80) + 'vh';
hidden.style.left = Math.floor(Math.random() * 80) + 'vw';
hiddenimg.style.display = 'none';

let flag = false;

hidden.addEventListener('mouseenter', function() {
        if( flag === false ) {
                alert('두근두근');
        }
});

hidden.addEventListener('click', function() {
        if( flag === false )
        {
        hiddenimg.style.display = 'block';
        alert('들켰다!');
        return flag = true;
        }
        else {
        hiddenimg.style.display = 'none';
        alert('다시 숨는다');
        hidden.style.top = Math.floor(Math.random() * 80) + 'vh';
        hidden.style.left = Math.floor(Math.random() * 80) + 'vw';
        return flag = false;
        }
});
