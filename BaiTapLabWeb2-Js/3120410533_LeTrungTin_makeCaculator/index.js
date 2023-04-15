const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);
const getID = document.getElementById.bind(document);
const view_result = $('#view');
const btns = $$('.btn');
const btn_clear = getID('clear');
const btn_del = getID('del');
const btn_calc = getID('calc');

let str = '';
for(let btn of btns){
    btn.onclick = function(){
        str = str + this.innerText;
        view_result.value = str;
        if (view_result.scrollWidth > view_result.clientWidth)
            view_result.scrollLeft = view_result.scrollWidth - view_result.clientWidth;
    }
}

btn_clear.onclick = function(){
    str = '';
    view_result.value = str;
}
btn_del.onclick = function(){
    str = str.substring(0, str.length - 1);
    view_result.value = str;
}
btn_calc.onclick = function(){
    let result = view_result.value;
    let dau = result.match(/[^0123456789.]/g);   //Khớp mọi ký tự trừ ký tự 0 -> 9 và .
    let so1, so2;
    if(dau){
        if(dau.length == 1) {
            so1 = +result.substring(0, result.indexOf(dau[0]));
            so2 = +result.substring(result.indexOf(dau[0]) + 1);
            pheptinh = dau[0];
            console.log('' === 0);    //chuỗi rỗng chuyển sang số thì = 0 (về mặt giá trị, là xét với 2 dấu ==, còn === là false vì nó xét tới type cmnr)
            console.log(+'');   //0
        }
        if(dau.length == 2) {
            if(result[0]=='-'){
                so1 = +result.substring(0, result.indexOf(dau[1], 1));
                so2 = +result.substring(result.indexOf(dau[1], 1) + 1);
                pheptinh = dau[1];
            }else{
                so1 = +result.substring(0, result.indexOf(dau[0]));
                so2 = +result.substring(result.indexOf(dau[0]) + 1);
                pheptinh = dau[0];
            }
        }
        if(dau.length == 3) {
            so1 = +result.substring(0, result.indexOf(dau[1], 1));
            so2 = +result.substring(result.indexOf(dau[1], 1) + 1);
            pheptinh = dau[1];
        }
    }else{
        so1 = +result;
        so2 = 0;
        pheptinh = '+';
    }
    view_result.value = tinhtoan(so1, so2, pheptinh);
}

function tinhtoan(a, b, pheptinh){
    let kq;
    switch (pheptinh) {
        case '+':
            kq = a + b;
            break;
        case '-':
            kq = a - b;
            break;
        case '*':
            kq = a * b;
            break;
        case '/':
            try {
                kq = a / b;
                if(!kq){
                    kq = 'Infinity';
                }
            }
            catch(err){
                kq = 'Infinity';
            }
            break;
        case '^':
            kq = a ** b;
            break;
    }
    console.log(kq);
    return kq || 'ERROR';
}