function getdata(what)
{
    $.ajax({
        url:'miss.php?what='+what,
        type:'POST',
        success: function(data)
        {
            $("#missdata").html(data);
        }
    });
}

// Fixthali Quick View Modal
function product(data,proid)
{
    // alert (data,proid);
    $.ajax({
        url:'miss.php?data='+data+'&proid='+proid,
        type:'POST',
        success: function(data)
        {
            $("#missmodal").html(data);
        }
    });
}

// Item Quick View Modal
function product1(data1,proid1)
{
    // alert (data1,proid1);
    $.ajax({
        url:'miss.php?data1='+data1+'&proid1='+proid1,
        type:'POST',
        success: function(data)
        {
            $("#missmodal1").html(data);
        }
    });
}

// Fixthali rate
function forrate(why,kone,kon,ketla)
{
   // alert(what);
    $.ajax({
        url:'miss.php?why='+why+'&kone='+kone+'&kon='+kon+'&ketla='+ketla,
        type:'POST',
        success: function(data)
        {
            $("#missrate").html(data);
        }
    });
}

// Item rate
function forrrate(why1,kone1,kon1,ketla1)
{
   // alert(what);
    $.ajax({
        url:'miss.php?why1='+why1+'&kone1='+kone1+'&kon1='+kon1+'&ketla1='+ketla1,
        type:'POST',
        success: function(data)
        {
            $("#missrate1").html(data);
        }
    });
}

// Captcha
function getdatacaptcha(captcha)
{
    $.ajax({
        url:'miss.php?captcha='+captcha,
        type:'POST',
        success: function(data)
        {
            $("#captcha").html(data);
        }
    });
}



function combobox(combo,comboid)
{
    $.ajax({
        url:'miss.php?combo='+combo+'&comboid='+comboid,
        type:'POST',
        success: function(data)
        {
            $("#"+combo+"data").html(data);
        }
    });
}
