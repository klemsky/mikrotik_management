$(document).ready(function() { 
    $countAccessList = 1;

    $("#add-ip-clientDashboard").on("click", function() { 
        if($countAccessList > 4)
            $(".register-center").css("height","750px");        
        if($countAccessList > 7)
            $(".register-center").css("height","900px");
        if($countAccessList > 9)
            $(".register-center").css("height","1000px");
        if($countAccessList > 11)
            $(".register-center").css("height","1100px");
        if($countAccessList > 13)
            $(".register-center").css("height","1200px");
        
        $countAccessList += 1; 
        $("#countAccessIP").val($countAccessList);
        $("#address-container").append("<input type=\"text\" class=\"form-control\" name=\"txtAccess["+ $countAccessList +"]\" placeholder=\"IP Address "+$countAccessList+"\"  style=\"margin-bottom: 10px\">"); 
    });
    $("#remove-ip-clientDashboard").on("click", function() {
        if($countAccessList == 5)
            $(".register-center").css("height","auto");        
        if($countAccessList == 6)
            $(".register-center").css("height","700px");
        if($countAccessList == 8)
            $(".register-center").css("height","800px");
        if($countAccessList == 10)
            $(".register-center").css("height","900px");
        if($countAccessList == 12)
            $(".register-center").css("height","1000px");

        if($countAccessList > 1){
            $countAccessList -= 1;
            $("#address-container").children().last().remove();
        }
    });
});

var log=1;
	function changeStation(){
		if(log==1){
			log = 0;
			$("#data-log").css('display','none');
			$("#data-ip").css('display','block');
			$("#change-button").text("Log");
		}
		else{
			log = 1;
			$("#data-ip").css('display','none');
			$("#data-log").css('display','block');
			$("#change-button").text("IP Address");
		}
	}
  function openNav() {
    document.getElementById("sidebar").style.left = "0px";
  }
  function closeNav() {
    document.getElementById("sidebar").style.left = "-280px";
  }
  function showTime(){
      $("#input-date-container").html('<input type="date" class="form-control" id="tempText" name="expiry_date" placeholder="dd/mm/yyyy"/>');
      $("#input-date-container").css('padding-top','10px');
      $("#input-date-container").css('padding-bottom','5px');
  }
  
  function hideTime(){
      $("#input-date-container").html('');
      $("#input-date-container").css('padding-top','0px');
      $("#input-date-container").css('padding-bottom','0px');
  }
  
  