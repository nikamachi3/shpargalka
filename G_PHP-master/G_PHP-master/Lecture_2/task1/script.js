function calculateTax(){
    var salary = document.getElementById("salary").value;
    document.getElementById("tax").value = salary*0.2;
    document.getElementById("cash").value = salary - salary*0.2;
}