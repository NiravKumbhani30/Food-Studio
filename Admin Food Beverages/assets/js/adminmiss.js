function getdata(what,action,id)
{
   // alert(what);
    $.ajax({
        url:'adminmiss.php?what='+what+'&action='+action+'&id='+id,
        type:'POST',
        success: function(data)
        {
            $("#missdata").html(data);
        }
    });
}



function thali(data,thaid)
{
   // alert(what);
    $.ajax({
        url:'adminmiss.php?data='+data+'&thaid='+thaid,
        type:'POST',
        success: function(data)
        {
            $("#missmodal").html(data);
        }
    });
}


function forrate(why,kone,kon,ketla)
{
   // alert(what);
    $.ajax({
        url:'adminmiss.php?why='+why+'&kone='+kone+'&kon='+kon+'&ketla='+ketla,
        type:'POST',
        success: function(data)
        {
            $("#missrate").html(data);
        }
    });
}