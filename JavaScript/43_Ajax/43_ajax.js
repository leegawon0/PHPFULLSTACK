// https://picsum.photos

// const url = "https://picsum.photos/v2/list?page=1&limit=5";

const runBtn = document.getElementById('runBtn');
const imgSection = document.getElementById('imgSection');

runBtn.addEventListener('click', runApi);

function runApi() {
    var inputUrl = document.getElementById('inputUrl').value; 
    fetch(inputUrl)
    .then(res => {return res.json()})
    .then(data => makeList(data))
    .catch(err => {
        if(err) {
            alert('유효한 주소를 입력하세요');
            return console.log(err);
        }
    });
    // .catch(console.log);
}

function makeList(data) {
    imgSection.replaceChildren();
    data.forEach(item => {
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        imgSection.appendChild(tagImg);
    });
}