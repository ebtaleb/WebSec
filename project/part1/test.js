
window.onload = function() {
    var owner = $("a.navbar-brand strong").text();
    var payload = {"owner":owner,"title":"La fete chez moi","descr":"Pizza et bieres gratuites a volonte chez moi","event_type":"RANDO","address":"18 Boulevard Saint-Marcel,  , France","path":"[]","start_date":"2016-01-22","start_time":"03:55:30","lat":48.8394645,"lng":2.360846199999969};

    $.ajax({
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json'
        },
        type: "POST",
        url: "/api/events/post",
        data: JSON.stringify(payload),
        dataType: "json",
        success: function() {alert("trap");},
        error: function() {alert("fail");}
    });
};
