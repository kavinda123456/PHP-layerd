$("#btnProceed").click(function () {
    var customerFormData=$("#formOrder").serialize();
    $.ajax({
        url:"transaction.php",
        method:"post",
        async:true,
        data:customerFormData
    }).done(function (res) {
        alert(res)
    })
});
loadItem();

function loadItem() {
    $.ajax({
        url:"LoadFile.php",
        method:"post",
        async:true,
        data:"operation=getItem"
    }).done(function (res) {
        $('#txtItemID').append(res);
    });
}

$('#iid').change(function () {
    var formdata=$('#formOrder').serialize();
    $.ajax({
        url:"LoadFile.php",
        method:"post",
        async:true,
        data:formdata+"&type=searchItem",
        dataType:'json'
    }).done(function (res) {
        $('#txtItemName').val(res[1]);
        $('#txtQty').val(res[2]);
        $('#txtUprice').val(res[3]);
    })
});

// $("#btnProceed").click(function () {
//     var formData=$("#formOrder").serialize();
//     $.ajax({
//         url:"../api/service/OrderService.php",
//         method:"post",
//         async:true,
//         data:formData+"&operation=transaction"
//     }).done(function (res) {
//         alert(res);
//     })
// });