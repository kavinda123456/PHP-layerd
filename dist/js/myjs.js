$(document).ready(function() {
    $("#btnadd").click(function () {
        var id = $("#CId").val();
        var name = $("#CName").val();
        var address = $("#CAddress").val();
        var climit = $("#CLimit").val();
        var mark = "<tr><td><input type='checkbox' name='record'>" + id + "</td><td>" + name + "</td><td>" + address + "</td><td>" + climit + "</td><td>";
        $("table tbody").append(mark);
    });
});

var rIndex,
    table = document.getElementById("table");
function addDataToTable() {
    if (!checkEmptyDetails()) {
        var newRow = table.insertRow(table.length),
            // cells are depend on your table
            cell1 = newRow.insertCell(0),
            cell2 = newRow.insertCell(1),
            cell3 = newRow.insertCell(2),
            cell4 = newRow.insertCell(3),
            cell5 = newRow.insertCell(4),
            cell6 = newRow.insertCell(5),
            cell7 = newRow.insertCell(6),

            //here , use id to the input
            ///=============================
            //get values from input fields
            cname = document.getElementById("cname").value,
            email = document.getElementById("email").value,
            id = document.getElementById("id").value,
            address = document.getElementById("address").value,
            tel = document.getElementById("tel").value,
            city = document.getElementById("city").value,
            zip = document.getElementById("inputZip").value;
//set values to the table
        cell1.innerHTML = cname;
        cell2.innerHTML = email;
        cell3.innerHTML = id;
        cell4.innerHTML = address;
        cell5.innerHTML = tel;
        cell6.innerHTML = city;
        cell7.innerHTML = zip;

        selectedRow();
    }
}
