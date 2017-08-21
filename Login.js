/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateform1() {
    var name1 = document.myform1.name.value;
    var pass1 = document.myform1.password.value;
    //if (name1 == null || name1 == "") {
    //    alert("Name can't be blank");
    //    return false;
    //}
    //else
    if (pass1 == null || pass1 == "") {
        alert("Invalid Password");
        return false;
    }
}
function printNameAndTitle(n,d){
  document.getElementById('name').innerHTML=n;
  document.getElementById('dept').innerHTML=d;
}
