const $ = document.querySelector.bind(document);
const form = $('form');
const btn = $('button');
const inp_name = $('input[name="name"]');
const inp_pri = $('input[name="pri"]');
const inp_img = $('input[name="img"]');

btn.onclick = function(e){
    e.preventDefault();

    //Check name 
    let v_name = inp_name.value;
    let v_pri = inp_pri.value;
    let v_img = inp_img.value;

    if(v_name.length < 5 || v_name.length > 40){
        alert('Nhập tên trong khoảng 5 - 40 ký tự!');
        return;
    }

    const floatRegex = /^[+]?\d+(\.\d+)?$/;
    if(!floatRegex.test(v_pri)){
        alert('Giá trị không hợp lệ!!');
        return;
    }

    if(v_img.length > 225){
        alert('Nhập link ảnh tối đa 225 ký tự');
        return;
    }

    //Nếu đầu vào ok:
    form.submit();
}