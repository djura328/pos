function addProduct(id){
       
    var ids = $("#"+id+"row").length;
    if (ids) {
        var quantyty = parseFloat($("#"+id+"row .com input").val());
        var data = {id:id, com:quantyty};
        $.ajax({
            url : "ajax/check.php",
            type: "POST",
            data : data,
            success: function(data){
                var com = data;
                if(com <= 0){
                    alert("U magacinu ne postoji vise ovog proizvoda");
                }
                else{
                    return false;
                }
            }
        });
        
        $("#"+id+"row .com input").val(quantyty+1);
        calculation();
    } 
    else {
        var data = {id:id};
        $.ajax({
            url : "ajax/check.php",
            type: "POST",
            data : data,
            success: function(data){
                var com = data;
                if(com == 0){
                    alert("U magacinu ne postoji vise ovog proizvoda");
                }
                else{
                    return false;
                }
            }
        });
        
        $.ajax({
            url : "ajax/setProtuct.php",
            type: "POST",
            data : data,
            success: function(data){
                $("#productTable").append(data);
                calculation();
            }
        });
    }   
}

function removeProduct(row) {
    $("#"+row+"row").remove();
    calculation();
}

function calculation(){
    var i = 0;
    var sumTotal = 0;
    var q = 1;
    $('#productTable tr').each(function() {
    var a = $(this).find(".price").html();
    var q = $(this).find(".com input").val();
    
    $(this).find(".total").html(parseFloat(a)*parseFloat(q));
    if(a === undefined){
    }
    else{
        var sum = parseFloat(a);
        sumTotal = sumTotal + (sum * q);
        $("#subTotal").html(sumTotal);
        //$("#subTotal").html(Number(sumTotal).toLocaleString('en'));
        $("#sumCash").val(sumTotal);
        //$("#sumCash").val(Number(sumTotal).toLocaleString('en'));
    }
    i++;
    if(i === 1){
        $("#subTotal").html(0);
    }
    });
    var rowCount = $('#productTable tr').length;
    $("#item").html(rowCount-1 + " item");
}

function removeCom(id){
    var quantyty = parseFloat($("#"+id+"row .com input").val());
    if(quantyty === 1){
        $("#"+id+"row").remove();
        $("#sumCash").val(0);
        calculation();
    }
    else{
        $("#"+id+"row .com input").val(quantyty-1);
        calculation();
    }
}

function addCom(id){
    var quantyty = parseFloat($("#"+id+"row .com input").val());
    $("#"+id+"row .com input").val(quantyty+1);
    calculation();
}

function addPayement(){
    
    var data = {};
    
     $.ajax({
        url : "ajax/getTicket.php",
        type: "POST",
        data : data,
        success: function(data){
            $('#printSection').html(data);
            $('#myModal').modal('show');
        }
    });
    
    
}

function addDiscount(){
    
    if($("#discount").val() === ""){
       var discount = 0;
    }
    else{
        var discount = parseFloat($("#discount").val());
    }

    var subTotal = parseFloat($("#subTotal").text());
    
    var sumCash = subTotal - (subTotal*discount/100);
    $("#sumCash").val(sumCash);
    //$("#sumCash").val(sumCash).toFixed(2).toLocaleString();
    //$("#sumCash").val(Number(sumCash).toLocaleString('en'));
}

function getCategory(id){
    
    var id = id;
    
    var data = {id:id};
    
    $.ajax({
        url : "ajax/getProtuct.php",
        type: "POST",
        data : data,
        success: function(data){
            $("#category").html(data);
        }
    });
}

$(document).ready(function(){
  $('ul.nav.nav-pills li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});
});

function addNewProduct(){
     $('#modalProduct').modal('show');
}

function PrintElem(elem){
      var mywindow = window.open('', 'PRINT', 'height=400,width=600');


        mywindow.document.write('<html><head><title>' + document.title  + '</title>');

        mywindow.document.write('</head><body >');
      mywindow.document.write('<h1>' + document.title  + '</h1>');
        mywindow.document.write(document.getElementById(elem).innerHTML);
        mywindow.document.write('</body></html>');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
}
