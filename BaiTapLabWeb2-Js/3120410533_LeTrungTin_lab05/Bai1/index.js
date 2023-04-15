const btn_create = document.getElementsByClassName('create')[0];
const btn_insert_row = document.getElementsByClassName('insert-row')[0];
const btn_insert_col = document.getElementsByClassName('insert-col')[0];
const btn_del_row = document.getElementsByClassName('del-row')[0];
const btn_del_table = document.getElementsByClassName('del-table')[0];

const input = document.getElementById('input');
const enter = document.getElementsByClassName('enter')[0];
const alertValid = document.querySelector('p');

const table = document.getElementById('table').firstElementChild;

btn_create.addEventListener('click', function(){
    table.innerHTML = `
        <tr>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
        <tr>
            <td>Cell</td>
            <td>Cell</td>
        </tr>
    `;
})

btn_insert_row.addEventListener('click', function(){
    if(table.children.length !== 0){
        let current_col = document.getElementsByTagName('tr')[0].children.length;
        let td_str = '';
        for (let index = 1; index <= current_col; index++) {
            td_str += '<td>Cell</td>';
        }
        const str = `
            <tr>
                ${td_str}
            </tr>
        `;
        table.insertAdjacentHTML("beforeend", str);
    }
})

btn_insert_col.addEventListener('click', function(){
    let tr = document.getElementsByTagName('tr');
    for (let index = 0; index < tr.length; index++) {
        tr[index].insertAdjacentHTML("beforeend", '<td>Cell</td>');
    }
})

btn_del_row.addEventListener('click', function(){
    input.disabled = false;
    input.style.borderWidth = '2px';
    input.focus();

    enter.disabled = false;
})

enter.addEventListener('click', function(){
    let resultCheck = CheckValid(input);
    if(resultCheck) {
        Delrow(input.value);
        input.value = '';
    }
})

btn_del_table.addEventListener('click', function(){
    table.innerHTML = '';
})

function CheckValid(input) {
    if(input.value === ''){
        input.style.borderColor = 'red';
        input.focus();
        alertValid.innerText = 'Vui lòng nhập đầy đủ thông tin.';
        return;
    }
    let checkValid = (/^[+-]?\d+(\.\d+)?$/).test(input.value);
    if (!checkValid) {
        input.style.borderColor = 'red';
        input.focus();
        alertValid.innerText = 'Vui lòng nhập đúng thông tin!. Ví dụ: 1, 2, 3,...';
    }else{
        enter.disabled = true;
        input.disabled = true;
        input.style.borderColor = 'black';
        input.style.borderWidth = '1px';
        alertValid.innerText = '';
        return true;
    }
}

function Delrow(value){
    if(table.children.length !== 0){
        let tab_childs = table.children.length;
        if(1 <= value && value <= tab_childs){
            table.children[value - 1].remove();
        }
    }
}

// const floatRegex = /^[+-]?\d+(\.\d+)?$/;

// console.log("3.14" ,        floatRegex.test("3.14"));              // true
// console.log("-3.14" ,       floatRegex.test("-3.14"));            // true
// console.log("+3.14" ,       floatRegex.test("+3.14"));            // true
// console.log("0.1" ,         floatRegex.test("0.1"));                // true
// console.log("-10" ,         floatRegex.test("-10"));                // true
// console.log("14241" ,       floatRegex.test("14241"));            // true
// console.log(" -14241" ,     floatRegex.test(" -14241"));        // true
// console.log("0" ,           floatRegex.test("0"));                    // true
// console.log("0.0" ,         floatRegex.test("0.0"));                // true

// console.log('\n\n\n');

// console.log(".10" ,            floatRegex.test("10."));                             // false
// console.log("10." ,            floatRegex.test("10."));                             // false
// console.log("abc" ,            floatRegex.test("abc"));                             // false
// console.log("3.14.159" ,       floatRegex.test("3.14.159"));                        // false
// console.log("" ,               floatRegex.test(""));                                   // false
// console.log(" " ,              floatRegex.test(" "));                                 // false
// console.log("    5     " ,     floatRegex.test("    5     "));               // false
// console.log("         " ,      floatRegex.test("         "));                 // false
// console.log(" -14241" ,        floatRegex.test(" -14241"));                     // false
// console.log("14241 " ,         floatRegex.test("14241 "));                       // false
// console.log("-142 41" ,        floatRegex.test("-142 41"));                     // false
// console.log("." ,              floatRegex.test("."));                                 // false
// console.log(".0" ,             floatRegex.test(".0"));                               // false
// console.log("0." ,             floatRegex.test("0."));                               // false