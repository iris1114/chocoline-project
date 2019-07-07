





function select_month(){
    var select_month =document.getElementById('select_month');
    if(select_month){
        for(var i=1 ;i<=12; i++){
            var t =i+"月";
            var v = i;
            var new_option = new Option(t, v);
            select_month.options.add(new_option); 
        }
    }

}

function select_year(){
    var nowTime = new Date();
    var theYear = nowTime.getFullYear();

    var select_year = document.getElementById("select_year");
    if(select_year){
        for (var i = 0; i < 20; i++) {
            var t = theYear + i + "年";
            var v = theYear + i;
            var new_option = new Option(t, v);
            select_year.options.add(new_option);
        }
    }
}

function do_first(){
    select_month();
    select_year();
}

window.addEventListener('load',do_first);