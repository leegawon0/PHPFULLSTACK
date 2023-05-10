(function () {

    document.addEventListener("keydown", function (e) {
    
    let key = e.keyCode;
    
    let zzang = document.getElementById("zzang");
    
    let y = parseInt(zzang.style.top || 0, 10);
    
    let x = parseInt(zzang.style.left || 0, 10);
    
    
    
    
    if (key === 37 /* LEFT */) {
    
    zzang.style.left = x - 50 + "px";
    
    }
    
    if (key === 38 /* TOP */) {
    
    zzang.style.top = y - 50 + "px";
    
    }
    
    if (key === 39 /* RIGHT */) {
    
    zzang.style.left = x + 50 + "px";
    
    }
    
    if (key === 40 /* BOTTOM */) {
    
    zzang.style.top = y + 50 + "px";
    
    }
    
    });
    
    })();