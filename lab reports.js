$(document).ready(function(){
    console.log("Document loaded");
    $("#rep_img").hide();
    
    $("#img_btn").click(function(){
        $("#rep_img").toggle("3999", function(){
            alert("Image closed");

        });
        console.log("Toggle hide and show");
    
    });
    $("#prt_btn").bind('click',function() {
       alert("Right click on the Image to download the report!!")
        var thePopup = window.open( "images/labimge.jpg", "Customer Listing", "menubar=0,location=0,height=700,width=700" );
        $('#popup-content').clone().appendTo( thePopup.document.body );
       
        thePopup.print();
        
      
    });
            
    
    
   
});