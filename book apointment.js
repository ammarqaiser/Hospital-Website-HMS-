$(document).ready(function(){
    console.log("Document loaded");
    $("#alert_box").hide();
    $("#submit_btn").click(function(){
        $("#alert_box").show();
        console.log("Alert closed");
    });
});