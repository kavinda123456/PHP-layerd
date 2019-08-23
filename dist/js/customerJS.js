$("#btnRegister").click(function () {
    var formData=$("#custForm").serialize();
    $.ajax({
        url:"../api/service/CustomerService.php",
        method:"post",
        async:true,
        data:formData+"&operation=saveCust"
    }).done(function (res) {
        alert(res);
    })
});

$("#btnUpdate").click(function () {
    var formData=$("#custForm").serialize();
    $.ajax({
        url:"../api/service/CustomerService.php",
        method:"post",
        async:true,
        data:formData+"&operation=updateCust"
    }).done(function (res) {
        alert(res);
    })
});

$("#btnDelete").click(function () {
    var formData=$("#custForm").serialize();
    $.ajax({
        url:"../api/service/CustomerService.php",
        method:"post",
        async:true,
        data:formData+"&operation=deleteCust"
    }).done(function (res) {
        alert(res);
    })
});

function getAllCustomers() {

    $('#customerTable').empty();

    $.ajax({
        url:"../api/service/CustomerService.php",
        method:"GET",
        async:true,
        dataType:'json',
        data: "&operation=getAllCustomers"
    }).done(function (res) {
        console.log(res);

        for(let i in res){
            let customer = res[i];
            let customerId = customer[0];
            let customerName = customer[1];
            let customerAddress = customer[2];
            let customerSalary = customer[3];

            let tableRow = " <tr>\n" +
                "                    <td scope=\"row\">"+customerId+"</td>\n" +
                "                    <td>"+customerName+"</td>\n" +
                "                    <td>"+customerAddress+"</td>\n" +
                "                    <td>"+customerSalary+"</td>\n" +
                "                </tr>";


            $('#customerTable').append(tableRow);

        }
    });

}

getAllCustomers();

$("#btnSearch").click(function () {
    var formData=$("#custForm").serialize();
    $.ajax({
        url:"../api/service/CustomerService.php",
        method:"GET",
        async:true,
        data:formData+"&operation=searchCust"
    }).done(function (res) {
        alert(res);
        document.getElementById("name").value="kevin";
        document.getElementById("address").value="walasmulla";
        document.getElementById("salary").value="Rs.500"
    })
});

