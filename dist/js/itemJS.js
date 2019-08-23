$("#btnRegister").click(function () {
    var formData=$("#saveformItm").serialize();//assemble all data in form from header
    $.ajax({
        url:"../api/service/ItemService.php",//service data pass to interface
        method:"post",
        async:true,
        data:formData+"&operation=saveItm"
    }).done(function (res) {
        alert(res);
    })
});

$("#btnUpdate").click(function () {
    var formData=$("#saveformItm").serialize();
    $.ajax({
        url:"../api/service/ItemService.php",
        method:"post",
        async:true,
        data:formData+"&operation=updateItm"
    }).done(function (res) {
        alert(res);
    })
});

$("#btnDelete").click(function () {
    var formData=$("#saveformItm").serialize();
    $.ajax({
        url:"../api/service/ItemService.php",
        method:"post",
        async:true,
        data:formData+"&operation=deleteItm"
    }).done(function (res) {
        alert(res);
    })
});

function getAllItems() {

    $('#itemTable').empty();

    $.ajax({
        url:"../api/service/ItemService.php",
        method:"GET",
        async:true,
        dataType:'json',
        data: "&operation=getAllItem"
    }).done(function (res) {
        console.log(res);

        for(let i in res){
            let item = res[i];
            let itemId = item[0];
            let itemName = item[1];
            let uprice = item[2];
            let qty = item[3];

            let tableRow = " <tr>\n" +
                "                    <td scope=\"row\">"+itemId+"</td>\n" +
                "                    <td>"+itemName+"</td>\n" +
                "                    <td>"+uprice+"</td>\n" +
                "                    <td>"+qty+"</td>\n" +
                "                </tr>";


            $('#itemTable').append(tableRow);

        }
    });


}
getAllItems();