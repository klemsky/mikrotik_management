var chkGroup = false;
var chkUnit = false;
var chkDID = false;
var chkPost = false;
var chkPhone = false;
var chkHunting = false;
var chkFax = false;
var chkFloor = false;
var chkTower = false;
var sessionLogin = false;
var reorderFlag = false;

$(document).ready(function(){
    $('#modal-action').on('hidden.bs.modal', function (e) {
      $(".add-site").removeClass("active");
    })
});

function getSession() {
    $.ajax({
        type: "GET",
        url: "/getSessionLogin",
        dataType: "json",
        success: function(response){
            if(response.login != null)
                sessionLogin = true;
        },
    });
}

function getListTabExtension(){
	$.ajax({
        type: "GET",
        url: "/getListTab",
        dataType: "json",
        success: function(response){
            showListTab(response);
        }
    });
}

function getListExtension(table){
    $(".sidebar-menu li").removeClass("active");
    $("#"+table+"").addClass("active");
	$.ajax({
        type: "GET",
        url: "/getListExtension",
        dataType: "json",
        data: {table:table},
        success: function(response){
            showListExtension(response.data, response.table);
        }
    });
}

function showInfo(){
    location.reload();
}

function showInfo2() {
    $(".table-height").css('display','none');
    $(".syahdanImage").show();
    $(".table-info").show();
    $(".table-data").html("");
    $(".table-search").html("");
    $(".button-reorder").html("");
    $(".sidebar-menu li").removeClass("active");
    $(".sidebar-dropdown info").addClass("active");
}

function showInfo3(){
    $(".table-height").css('display','none');
    $(".syahdanImage").show();
    $(".table-info").show();
    $(".table-data").html("");
    $(".table-search").html("");
    $(".button-reorder").html("");
    $(".sidebar-menu li").removeClass("active");
    $(".sidebar-dropdown info").addClass("active");
    $(".info").addClass("active");
}

function showListTab(data){
	var strHTML = "";

    $('.site-tab').remove();

    // if(sessionLogin)
    //     strHTML += "<li class='sidebar-dropdown site-tab add-site' style='padding:0;'><a href='javascript:;' onclick=detailAddSite("+data[0].id+")><span style='padding:10px 0 10px 10px;'>Add New Site&nbsp;&nbsp;</span><h5><span class='fas fa-map-marked-alt'></span></h5></a></li>";

	for(var i=0;i<data.length;i++) {
	    if(data[i].TableName!="alam_sutera_main_campus" && data[i].TableName!="bcld" && data[i].TableName!="binus_school_bekasi" && data[i].TableName!="pjj_palembang" && data[i].TableName!="binus_center" && data[i].TableName!="vicon")
            strHTML += "<li class='sidebar-dropdown site-tab' id='" + data[i].TableName + "' style='padding:0; border-top:none;'><a href='javascript:;' onclick=getListExtension('" + data[i].TableName + "')><span class='menu-text' style='padding:10px 0 10px 10px;'>" + data[i].TabName + "</span></a></li>";
        else
	        strHTML += "<li class='sidebar-dropdown site-tab' id='" + data[i].TableName + "' style='padding:0;'><a href='javascript:;' onclick=getListExtension('" + data[i].TableName + "')><span class='menu-text' style='padding:10px 0 10px 10px;'>" + data[i].TabName + "</span></a></li>";
    }

	$(".sidebar-menu ul").append(strHTML);
}

function showActionColumn(){
    $(".button-reorder").html("<button type='button' class='btn btn-outline-warning' onclick='showReorderColumn()'>REORDER</button>");
    $(".action-head").show();
    $(".reorder-head").hide();
    $(".action-column").show();
    $(".reorder-column").hide();
    reorderFlag = false;
}

function showReorderColumn(){
    $(".button-reorder").html("<button type='button' class='btn btn-outline-warning' onclick='showActionColumn()'>ACTION</button>");
    $(".action-head").hide();
    $(".reorder-head").show();
    $(".action-column").hide();
    $(".reorder-column").show();
    reorderFlag = true;
}

function removeActionButton(){
    $(".button-reorder").html("");
}

function reorderData(name, id, idSwap, countRow, table, type){
    $.ajax({
        type: "GET",
        url: "/reorderUpdate",
        dataType: "json",
        data: {
            name: name,
            id: parseInt(id),
            idSwap: parseInt(idSwap),
            countRow: parseInt(countRow),
            table: table,
            type: type
        },
        success: function(response){
            if(name == "") {
                showListExtension(response.data, table);
                showReorderColumn();
            }
        }
    });
}

function reorderUnit(name, id, idSwap, countRowUnit, table, type){
    $.ajax({
        type: "GET",
        url: "/reorderUpdateUnit",
        dataType: "json",
        data: {
            name: name,
            id: parseInt(id),
            idSwap: parseInt(idSwap),
            countRowUnit: parseInt(countRowUnit),
            table: table,
            type: type
        },
        success: function(response){
            if(name == "") {
                showListExtension(response.data, table);
                showReorderColumn();
            }
        }
    });
}

function showListExtension(data, table){
    $(".table-height").css('display','block');
    var strHTML = "";
    var name = "";
    var rowspan = 1;
    var colspan = 2;
    var lastDivision = false;
    var countSameUnit = 1;
    if(sessionLogin)
        colspan++;
    chkGroup = false;
    chkUnit = false;
    chkDID = false;
    chkPost = false;
    chkPhone = false;
    chkHunting = false;
    chkFax = false;
    chkFloor = false;
    chkTower = false;

    $(".syahdanImage").hide();
    $(".table-info").hide();
    $(".table-data").html("");

    for(var i=0;i<data.length;i++) {
        if (data[i].Group != "")
            chkGroup = true;
        if (data[i].Unit != "")
            chkUnit = true;
        if (data[i].Position != "")
            chkPost = true;
        if (data[i].DID != "")
            chkDID = true;
        if (data[i].Phone != "")
            chkPhone = true;
        if (data[i].Hunting != "")
            chkHunting = true;
        if (data[i].Fax != "")
            chkFax = true;
        if (data[i].Floor != "")
            chkFloor = true;
        if (data[i].Tower != "")
            chkTower = true;
    }

    if(chkUnit)
        colspan++;
    if(chkPost)
        colspan++;
    if(chkDID)
        colspan++;
    if(chkPhone)
        colspan++;
    if(chkFloor)
        colspan++;
    if(chkTower)
        colspan++;

    strHTML += '<table class="table-data table-hover table-sticky" border="1" width="85%">';
    strHTML += '<thead class="title">';
    strHTML += '<tr scope="col" align="center"><th colspan="'+colspan+'" style="background-color:#f2960b; color:#ffffff;"><h2>'+data[0].Title+'</h2></th></tr>';
    strHTML += '</thead>';

    strHTML += '<tbody>';

    strHTML += '<thead class="column-name"><tr align="center">';
    strHTML += '<td>Name</td>';

    if(chkPost)
        strHTML += '<td>Position</td>';

    strHTML += '<td>Extension</td>';

    if(chkDID)
        strHTML += '<td>DID</td>';
    if(chkPhone)
        strHTML += '<td>Phone</td>';
    if(chkFloor)
        strHTML += '<td>Floor</td>';
    if(chkTower)
        strHTML += '<td>Tower</td>';
    if(sessionLogin) {
        strHTML += '<td class="action-head" width="100px">Action</td>';
        strHTML += '<td class="reorder-head" width="70px" style="display: none; padding: 0; margin: 0;">Reorder</td>';
    }
    strHTML += '</tr></thead>';

    for(var i=0;i<data.length;i++){
        if(i==0){
            if(sessionLogin) {
                if (data[i].Group != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center">';
                    strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '';
                    strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</th>';
                    strHTML += '<th class="reorder-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '</th>';
                    strHTML += '</tr></thead>';
                }
                if (data[i].Unit != "") {
                    lastDivision = true;

                    var unitUp = i - countSameUnit;

                    countSameUnit = 1;
                    for(j=i;j<data.length;j++){
                        if(j+1 != data.length){
                            if(data[j].Unit != data[j+1].Unit){
                                lastDivision = false;
                                break;
                            }
                            else{
                                countSameUnit++;
                            }
                        }
                    }
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center">';
                    strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '';
                    strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</th>';
                    strHTML += '<th class="reorder-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit;
                    strHTML += '&nbsp;<a onclick=reorderUnit("","' + (i+1) + '","' + (j+2) + '","' + countSameUnit + '","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto"></a></th>';
                    strHTML += '</tr></thead>';
                }
            }else{
                if (data[i].Group != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;"><h5>' + data[i].Group + '</h5></th></tr></thead>';
                }
                if (data[i].Unit != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '</h5></th></tr></thead>';
                }
            }
        }

    	if(i>0){
    	    if(sessionLogin) {
                if (data[i].Group != data[i - 1].Group && data[i].Group != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center">';
                    strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '';
                    strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"","' + encodeURIComponent(data[i].Group) + '","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</th>';
                    strHTML += '<th class="reorder-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '</th>';
                    strHTML += '</tr></thead>';
                }
                if (data[i].Unit != data[i - 1].Unit && data[i].Unit != "") {
                    lastDivision = true;

                    var unitUp = i - countSameUnit;

                    countSameUnit = 1;
                    for(j=i;j<data.length;j++){
                        if(j+1 != data.length){
                            if(data[j].Unit != data[j+1].Unit){
                                lastDivision = false;
                                break;
                            }
                            else{
                                countSameUnit++;
                            }
                        }
                    }
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center">';
                    strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '';
                    strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"' + encodeURIComponent(data[i].Unit) + '","","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</th>';
                    strHTML += '<th class="reorder-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '';
                    strHTML += '&nbsp;<a onclick=reorderUnit("","' + (i+1) + '","' + i + '","' + countSameUnit + '","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a>';
                    if(lastDivision == false)
                        strHTML += '<a onclick=reorderUnit("","' + (i+1) + '","' + (j+2) + '","' + countSameUnit + '","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto"></a></th>';
                    strHTML += '</tr></thead>';
                }
            }else{
                if (data[i].Group != data[i - 1].Group && data[i].Group != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;"><h5>' + data[i].Group + '</h5></th></tr></thead>';
                }
                if (data[i].Unit != data[i - 1].Unit && data[i].Unit != "") {
                    strHTML += '<thead class="group-unit"><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '</h5></th></tr></thead>';
                }
            }
        }

    	for(var j=i+1;j<data.length;j++){
            if(data[i].Ext == data[j].Ext && data[i].Unit == data[j].Unit && data[i].Group == data[j].Group) {
                if (data[i].Group != "" && data[j].Group != "") {
                    if (data[i].Group == data[j].Group)
                        rowspan++;
                }else if (data[i].Unit != "" && data[j].Unit!= "") {
                    if (data[i].Unit == data[j].Unit)
                        rowspan++;
                }
            }else
                break;
        }
    	if(rowspan > 1){
            // Data rowspan
    		for(var k=i;k<i+rowspan;k++){
                strHTML += '<tr>';
                strHTML += '<td>'+data[k].Name+'</td>';

                if(chkPost)
                    strHTML += '<td>'+data[k].Position+'</td>';
                if(k==i)
                    strHTML += '<td rowspan="'+rowspan+'">'+data[k].Ext+'</td>';
                if(chkDID)
                    strHTML += '<td>'+data[k].DID+'</td>';
                if(chkPhone)
                    strHTML += '<td>'+data[k].Phone+'</td>';
                if(chkFloor)
                    strHTML += '<td>'+data[k].Floor+'</td>';
                if(chkTower)
                    strHTML += '<td>'+data[k].Tower+'</td>';

                if(sessionLogin) {
                    strHTML += '<td class="action-column"><a onclick=detailDeleteRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</td>';

                    if(k==i){
                        if(k==0){
                            //Data rowspan paling atas dan data[0]
                            strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a></td>';
                        }else{
                            if(data[k-1].Group != data[k].Group || data[k-1].Unit != data[k].Unit){
                                //Data rowspan paling atas
                                strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a></td>';
                            }
                            else{
                                //Data rowspan paling atas tapi tetap di Group dan Unit yang sama
                                strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + k + '","' + (k-1) + '","' + rowspan + '","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a>';
                                strHTML += '&nbsp;<a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a>';
                                strHTML += '</td>';
                            }
                        }
                    }
                    else if(k+1 < i+rowspan){
                        //Data rowspan ditengah
                        strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a>';
                        strHTML += '</td>';
                    }
                    else if(k+1 != data.length){
                        if(data[k+1].Group != data[k].Group || data[k+1].Unit != data[k].Unit){
                            //Data rowspan paling bawah
                            strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a></td>';
                        }
                        else {
                            //Data rowspan paling bawah tapi tetap di Group dan Unit yang sama
                            strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a>';
                            strHTML += '&nbsp;<a onclick=reorderData("' + encodeURIComponent(name) + '","' + k + '","' + (k+1) + '","' + rowspan + '","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a>';
                            strHTML += '</td>';
                        }
                    }
                    else{
                        //Data rowspan paling bawah dan data terakhir
                        strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a></td>';
                    }
                }
                strHTML += '</tr>';
    		}
    		i = i+rowspan-1;
    		rowspan = 1;
    	}else {
            //Data tidak rowspan (Single Data)
            strHTML += '<tr>';
            strHTML += '<td>'+data[i].Name+'</td>';
            if(chkPost)
                strHTML += '<td>'+data[i].Position+'</td>';
            strHTML += '<td rowspan="'+rowspan+'">'+data[i].Ext+'</td>';
            if(chkDID)
                strHTML += '<td>'+data[i].DID+'</td>';
            if(chkPhone)
                strHTML += '<td>'+data[i].Phone+'</td>';
            if(chkFloor)
                strHTML += '<td>'+data[i].Floor+'</td>';
            if(chkTower)
                strHTML += '<td>'+data[i].Tower+'</td>';

            if(sessionLogin) {
                strHTML += '<td class="action-column"><a onclick=detailDeleteRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + table + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                strHTML += '&nbsp;<a onclick=detailUpdateRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + table + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                strHTML += '&nbsp;<a onclick=detailAddRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + table + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                strHTML += '</td>';

                if(i==0){
                    if(data[i+1].Group != data[i].Group || data[i+1].Unit != data[i].Unit){
                        strHTML += '<td class="reorder-column" style="display: none;"></td>';
                    }
                    else {
                        //Data paling pertama
                        strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a></td>';
                    }
                }
                else if(i+1 == data.length){
                    //Data paling terakhir
                    strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a></td>';
                }
                else{
                    if(data[i+1].Group != data[i].Group || data[i+1].Unit != data[i].Unit){
                        if(data[i-1].Group != data[i].Group || data[i-1].Unit != data[i].Unit)
                            strHTML += '<td class="reorder-column" style="display: none;"></td>';
                        else
                            //Data terakhir untuk setiap Group atau Unit dan bukan data paling terakhir
                            strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a></td>';
                    }
                    else if(data[i-1].Group != data[i].Group || data[i-1].Unit != data[i].Unit){
                        //Data pertama untuk setiap Group atau Unit dan bukan data paling pertama
                        strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a></td>';
                    }
                    else {
                        //Data ditengah
                        strHTML += '<td class="reorder-column" style="display: none;"><a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i-1].id + '","","' + table + '","up")><img src="img/up-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=reorderData("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i+1].id + '","","' + table + '","down")><img src="img/down-icon.png" width="25px" height="auto" style="float: right;"></a>';
                        strHTML += '</td>';
                    }
                }
            }
            strHTML += '</tr>';
    	}
    }

    strHTML += '</tbody>';
    strHTML += '</table>';

	$(".table-height").append(strHTML);

	if(sessionLogin) {
        if (!reorderFlag)
            showActionColumn();
        else
            showReorderColumn();
    }
}

function detailDeleteRow(name, id, table){
    var singleData = [];
    var strBody = "";
    var strFooter = "";
    $.ajax({
        type: "GET",
        url: "/getSingleData",
        dataType: "json",
        data: {id:id,table:table},
        success: function(response){
            singleData = response.data[0];
            $('.modal-dialog').removeClass("modal-lg");
            $('#modal-title').html("<h4>Delete this extension?</h4>");

            strBody += '<strong>Name : </strong>'+singleData.Name+'<br>';
            strBody += '<strong>Extension : </strong>'+singleData.Ext+'<br>';
            if (singleData.Group != "")
                strBody += '<strong>Group : </strong>'+singleData.Group+'<br>';
            if (singleData.Unit != "")
                strBody += '<strong>Unit : </strong>'+singleData.Unit+'<br>';
            if (singleData.Position != "")
                strBody += '<strong>Position : </strong>'+singleData.Position+'<br>';
            if (singleData.DID != "")
                strBody += '<strong>DID : </strong>'+singleData.DID+'<br>';
            if (singleData.Phone != "")
                strBody += '<strong>Phone: </strong>'+singleData.Phone+'<br>';
            if (singleData.Floor != "")
                strBody += '<strong>Floor: </strong>'+singleData.Floor+'<br>';
            if (singleData.Tower != "")
                strBody += '<strong>Tower: </strong>'+singleData.Tower+'<br>';
            $('.modal-body').html(strBody)

            strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
            strFooter += '<button type="button" class="btn btn-danger" data-dismiss="modal" onclick=deleteData("'+name+'","'+id+'","'+table+'")>Delete</button>';
            $('.modal-footer').html(strFooter);

            $('#modal-action').modal('show');
        }
    });
}

function detailDeleteGroup(name, unit, group, table){
    var strBody = "";
    var strFooter = "";

    $('.modal-dialog').removeClass("modal-lg");

    if(group!="") {
        $('#modal-title').html("<h4>Delete this Group?</h4>");
        strBody += '<strong>Group : </strong>' + decodeURIComponent(group) + '<br>';
    }
    if(unit!="") {
        $('#modal-title').html("<h4>Delete this Unit?</h4>");
        strBody += '<strong>Unit : </strong>' + decodeURIComponent(unit) + '<br>';
    }

    $('.modal-body').html(strBody)

    strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
    strFooter += '<button type="button" class="btn btn-danger" data-dismiss="modal" onclick=deleteGroup("'+name+'","'+unit+'","'+group+'","'+table+'")>Delete</button>';
    $('.modal-footer').html(strFooter);

    $('#modal-action').modal('show');
}

function detailUpdateRow(name, id, table){
    var singleData = [];
    var strBody = "";
    var strFooter = "";
    $.ajax({
        type: "GET",
        url: "/getSingleData",
        dataType: "json",
        data: {id:id,table:table},
        success: function(response){
            singleData = response.data[0];
            $('.modal-dialog').addClass("modal-lg");
            $('#modal-title').html("<h4>Update this extension?</h4>");

            strBody += '<div class="container">';

            strBody += '<div class="row">';
            strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
            strBody += '<strong><h5>Old Extension:</h5></strong><br>';
            strBody += '</div>';
            strBody += '<div class="col-md-9">';
            strBody += '<strong><h5>New Extension:</h5></strong><br>';
            strBody += '</div>';
            strBody += '</div>';

            strBody += '<div class="row">';
            strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
            strBody += '<strong>Name : </strong><br>'+singleData.Name+'';
            strBody += '</div>';
            strBody += '<div class="col-md-9">';
            strBody += '<strong>Name : </strong><input type="text" name="name" class="form-control" value="'+singleData.Name+'" required><br>';
            strBody += '</div>';
            strBody += '</div>';

            strBody += '<div class="row">';
            strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
            strBody += '<strong>Extension : </strong><br>'+singleData.Ext+'';
            strBody += '</div>';
            strBody += '<div class="col-md-9">';
            strBody += '<strong>Extension : </strong><input type="text" min="1" name="extension" class="form-control" value="'+singleData.Ext+'" required><br>';
            strBody += '</div>';
            strBody += '</div>';

            if (singleData.Group != "" || chkGroup) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Group : </strong><br>' + singleData.Group + '';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Group : </strong><input type="text" name="group" class="form-control" value="' + singleData.Group + '" required><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Unit != "" || chkUnit) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Unit : </strong><br>'+singleData.Unit+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Unit : </strong><input type="text" name="unit" class="form-control" value="'+singleData.Unit+'" required><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Position != "" || chkPost) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Position : </strong><br>'+singleData.Position+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Position : </strong><input type="text" name="position" class="form-control" value="'+singleData.Position+'" required><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.DID != "" || chkDID) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>DID : </strong><br>'+singleData.DID+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>DID : </strong><input type="number" min="1" name="did" class="form-control" value="'+singleData.DID+'"><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Phone != "" || chkPhone) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Phone: </strong><br>'+singleData.Phone+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Phone: </strong><input type="number" min="1" name="phone" class="form-control" value="'+singleData.Phone+'"><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Hunting != "" || chkHunting) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Hunting: </strong><br>'+singleData.Hunting+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Hunting: </strong><input type="number" min="1" name="hunting" class="form-control" value="'+singleData.Hunting+'"><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Fax != "" || chkFax) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Fax: </strong><br>'+singleData.Fax+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Fax: </strong><input type="number" min="1" name="fax" class="form-control" value="'+singleData.Fax+'"><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Floor != "" || chkFloor) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Floor: </strong><br>'+singleData.Floor+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Floor: </strong><input type="number" min="1" name="floor" class="form-control" value="'+singleData.Floor+'"><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            if (singleData.Tower != "" || chkTower) {
                strBody += '<div class="row">';
                strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
                strBody += '<strong>Tower: </strong><br>'+singleData.Tower+'';
                strBody += '</div>';
                strBody += '<div class="col-md-9">';
                strBody += '<strong>Tower: </strong><input type="text" name="tower" class="form-control" value="'+singleData.Tower+'" required><br>';
                strBody += '</div>';
                strBody += '</div>';
            }

            strBody += '</div>';
            $('.modal-body').html(strBody)

            strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
            strFooter += '<button type="button" class="btn btn-primary" onclick=updateData("'+name+'","'+id+'","'+table+'")>Update</button>';
            $('.modal-footer').html(strFooter);

            $('#modal-action').modal('show');
        }
    });
}

function detailUpdateGroup(name, unit, group, table){
    var strBody = "";
    var strFooter = "";
    strBody += '<div class="container">';

    strBody += '<div class="row">';
    strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
    if(group != "")
        strBody += '<strong><h5>Old Group Name:</h5></strong><br>';
    else if(unit != "")
        strBody += '<strong><h5>Old Unit Name:</h5></strong><br>';
    strBody += '</div>';
    strBody += '<div class="col-md-9">';
    if(group != "")
        strBody += '<strong><h5>New Group Name:</h5></strong><br>';
    else if(unit != "")
        strBody += '<strong><h5>New Unit Name:</h5></strong><br>';
    strBody += '</div>';
    strBody += '</div>';

    if (group != "") {
        $('.modal-dialog').addClass("modal-lg");
        $('#modal-title').html("<h4>Update this Group?</h4>");
        strBody += '<div class="row">';
        strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
        strBody += '<strong>Group : </strong><br>' + decodeURIComponent(group) + '';
        strBody += '</div>';
        strBody += '<div class="col-md-9">';
        strBody += '<strong>Group : </strong><input type="text" name="group" class="form-control" value="' + decodeURIComponent(group) + '" required><br>';
        strBody += '</div>';
        strBody += '</div>';
    }

    if (unit != "") {
        $('.modal-dialog').addClass("modal-lg");
        $('#modal-title').html("<h4>Update this Unit?</h4>");
        strBody += '<div class="row">';
        strBody += '<div class="col-md-3" style="border-right: 1px solid black">';
        strBody += '<strong>Unit : </strong><br>'+decodeURIComponent(unit)+'';
        strBody += '</div>';
        strBody += '<div class="col-md-9">';
        strBody += '<strong>Unit : </strong><input type="text" name="unit" class="form-control" value="'+decodeURIComponent(unit)+'" required><br>';
        strBody += '</div>';
        strBody += '</div>';
    }

    strBody += '</div>';
    $('.modal-body').html(strBody)

    strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
    strFooter += '<button type="button" class="btn btn-primary" onclick=updateGroup("'+name+'","'+unit+'","'+group+'","'+table+'")>Update</button>';
    $('.modal-footer').html(strFooter);

    $('#modal-action').modal('show');
}

function detailAddSite(id){
    $(".add-site").addClass("active");
    var strBody = "";
    var strFooter = "";

    $('.modal-dialog').removeClass("modal-lg");
    $('#modal-title').html("<h4>Add new Site?</h4>");

    strBody += '<strong><h6>New Site:</h6></strong><br>';

    strBody += '<strong>Site Name: <input type="text" name="site-name" class="form-control" value="" required></strong><br>';

    $('.modal-body').html(strBody)

    strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
    strFooter += '<button type="button" class="btn btn-success" onclick=addSite('+id+')>Add Site</button>';
    $('.modal-footer').html(strFooter);

    $('#modal-action').modal('show');
}

function detailAddRow(name, id, table){
    var singleData = [];
    var strBody = "";
    var strFooter = "";
    $.ajax({
        type: "GET",
        url: "/getSingleData",
        dataType: "json",
        data: {id:id,table:table},
        success: function(response){
            singleData = response.data[0];
            $('.modal-dialog').removeClass("modal-lg");
            $('#modal-title').html("<h4>Add this extension?</h4>");

            strBody += '<strong><h6>Add data after this extension?</h6></strong><br>';
            strBody += '<strong>Name : </strong>'+singleData.Name+'<br>';
            strBody += '<strong>Extension : </strong>'+singleData.Ext+'<br>';
            if (singleData.Group != "" || chkGroup)
                strBody += '<strong>Group : </strong>' + singleData.Group + '<br>';
            if (singleData.Unit != "" || chkUnit)
                strBody += '<strong>Unit : </strong>'+singleData.Unit+'<br>';
            if (singleData.Position != "" || chkPost)
                strBody += '<strong>Position : </strong>'+singleData.Position+'<br>';
            if (singleData.DID != "" || chkDID)
                strBody += '<strong>DID : </strong>'+singleData.DID+'<br>';
            if (singleData.Phone != "" || chkPhone)
                strBody += '<strong>Phone: </strong>'+singleData.Phone+'<br>';
            if (singleData.Floor != "" || chkFloor)
                strBody += '<strong>Floor: </strong>'+singleData.Floor+'<br>';
            if (singleData.Tower != "" || chkTower)
                strBody += '<strong>Tower: </strong>'+singleData.Tower+'<br>';

            strBody += '<hr>';

            strBody += '<strong><h6>New Data:</h6></strong><br>';
            strBody += '<strong>Name : </strong><input type="text" name="name" class="form-control" value="" required><br>';
            strBody += '<strong>Extension : </strong><input type="text" min="1" name="extension" class="form-control" value="' + singleData.Ext + '" required><br>';
            // if (singleData.Group != "" || chkGroup)
                strBody += '<strong>Group : </strong><input type="text" name="group" class="form-control" value="' + singleData.Group + '" required><br>';
            // if (singleData.Unit != "" || chkUnit)
                strBody += '<strong>Unit : </strong><input type="text" name="unit" class="form-control" value="" required><br>';
            // if (singleData.Position != "" || chkPost)
                strBody += '<strong>Position : </strong><input type="text" name="position" class="form-control" value="'+singleData.Position+'" required><br>';
            if (singleData.DID != "" || chkDID)
                strBody += '<strong>DID : </strong><input type="number" min="1" name="did" class="form-control" value="'+singleData.DID+'"><br>';
            if (singleData.Phone != "" || chkPhone)
                strBody += '<strong>Phone: </strong><input type="number" min="1" name="phone" class="form-control" value="'+singleData.Phone+'"><br>';
            if (singleData.Floor != "" || chkFloor)
                strBody += '<strong>Floor: </strong><input type="number" min="1" name="floor" class="form-control" value="'+singleData.Floor+'"><br>';
            if (singleData.Tower != "" || chkTower)
                strBody += '<strong>Tower: </strong><input type="text" name="tower" class="form-control" value="'+singleData.Tower+'" required><br>';

            $('.modal-body').html(strBody)

            strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
            strFooter += '<button type="button" class="btn btn-success" onclick=addData("'+name+'","'+id+'","'+table+'")>Add</button>';
            $('.modal-footer').html(strFooter);

            $('#modal-action').modal('show');
        }
    });
}

function detailAddGroup(name, id, unit, group, table){
    var singleData = [];
    var strBody = "";
    var strFooter = "";

    $('.modal-dialog').removeClass("modal-lg");
    $('#modal-title').html("<h4>Add this extension?</h4>");

    if(group != "")
        strBody += '<strong><h6>Add data in ('+decodeURIComponent(group)+') ?</h6></strong><br>';
    if(unit != "")
        strBody += '<strong><h6>Add data in ('+decodeURIComponent(unit)+') ?</h6></strong><br>';

    strBody += '<strong><h6>New Data:</h6></strong><br>';
    strBody += '<strong>Name : </strong><input type="text" name="name" class="form-control" value="" required><br>';
    strBody += '<strong>Extension : </strong><input type="text" min="1" name="extension" class="form-control" value="" required><br>';
    if (group != "" && chkGroup)
        strBody += '<strong>Group : </strong><input type="text" name="group" class="form-control" value="' + decodeURIComponent(group) + '" required><br>';
    if (unit != "" && chkUnit)
        strBody += '<strong>Unit : </strong><input type="text" name="unit" class="form-control" value="'+decodeURIComponent(unit)+'" required><br>';
    if (chkPost)
        strBody += '<strong>Position : </strong><input type="text" name="position" class="form-control" value="" required><br>';
    if (chkDID)
        strBody += '<strong>DID : </strong><input type="number" min="1" name="did" class="form-control" value=""><br>';
    if (chkPhone)
        strBody += '<strong>Phone: </strong><input type="number" min="1" name="phone" class="form-control" value=""><br>';
    if (chkFloor)
        strBody += '<strong>Floor: </strong><input type="number" min="1" name="floor" class="form-control" value=""><br>';
    if (chkTower)
        strBody += '<strong>Tower: </strong><input type="text" name="tower" class="form-control" value="" required><br>';

    $('.modal-body').html(strBody)

    strFooter += '<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>';
    strFooter += '<button type="button" class="btn btn-success" onclick=addGroup("'+name+'",'+id+',"'+unit+'","'+group+'","'+table+'")>Add</button>';
    $('.modal-footer').html(strFooter);

    $('#modal-action').modal('show');
}

function deleteData(name, id, table){
    $.ajax({
        type: "GET",
        url: "/deleteExt",
        dataType: "json",
        data: {name:name,id:id,table:table},
        success: function(response){
            if(name == "")
                showListExtension(response.data, table);
            else
                showSearchExtension(name,response.data);
        }
    });
}

function deleteGroup(name, unit, group, table){
    $.ajax({
        type: "GET",
        url: "/deleteGroupExt",
        dataType: "json",
        data: {name:name,unit:unit,group:group,table:table},
        success: function(response){
            if(name == "")
                showListExtension(response.data, table);
            else
                showSearchExtension(name,response.data);
        }
    });
}

function updateData(name, id, table){
    var nameInput = ($("input[name=name]").val()!=undefined) ? $("input[name=name]").val() : "";
    var extInput = ($("input[name=extension]").val()!=undefined) ? $("input[name=extension]").val() : "";
    var groupInput = ($("input[name=group]").val()!=undefined) ? $("input[name=group]").val() : "";
    var unitInput = ($("input[name=unit]").val()!=undefined) ? $("input[name=unit]").val() : "";
    var postInput = ($("input[name=position]").val()!=undefined) ? $("input[name=position]").val() : "";
    var didInput = ($("input[name=did]").val()!=undefined) ? $("input[name=did]").val() : "";
    var phoneInput = ($("input[name=phone]").val()!=undefined) ? $("input[name=phone]").val() : "";
    var huntingInput = ($("input[name=hunting]").val()!=undefined) ? $("input[name=hunting]").val() : "";
    var faxInput = ($("input[name=fax]").val()!=undefined) ? $("input[name=fax]").val() : "";
    var floorInput = ($("input[name=floor]").val()!=undefined) ? $("input[name=floor]").val() : "";
    var towerInput = ($("input[name=tower]").val()!=undefined) ? $("input[name=tower]").val() : "";

    if(nameInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nama harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else if(extInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nomor extension harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else {
        $.ajax({
            type: "GET",
            url: "/updateExt",
            dataType: "json",
            data: {
                name: name,
                id: id,
                table: table,
                nameInput: nameInput,
                extInput: extInput,
                groupInput: groupInput,
                unitInput: unitInput,
                postInput: postInput,
                didInput: didInput,
                phoneInput: phoneInput,
                huntingInput: huntingInput,
                faxInput: faxInput,
                floorInput: floorInput,
                towerInput: towerInput,
            },
            success: function (response) {
                $('#modal-action').modal('hide');
                if (name == "")
                    showListExtension(response.data, table);
                else
                    showSearchExtension(name, response.data);
            }
        });
    }
}

function updateGroup(name, unit, group, table){
    var groupInput = ($("input[name=group]").val()!=undefined) ? $("input[name=group]").val() : "";
    var unitInput = ($("input[name=unit]").val()!=undefined) ? $("input[name=unit]").val() : "";

    if(groupInput == "" && group != ""){
        Swal.fire({
            type: 'error',
            text: 'Group Tidak Boleh Kosong',
            confirmButtonColor: '#762F8D',
        })
    }else if(unitInput == "" && unit != ""){
        Swal.fire({
            type: 'error',
            text: 'Unit Tidak Boleh Kosong',
            confirmButtonColor: '#762F8D',
        })
    }else {
        $.ajax({
            type: "GET",
            url: "/updateGroupExt",
            dataType: "json",
            data: {
                name: name,
                table: table,
                unit: unit,
                group: group,
                groupInput: groupInput,
                unitInput: unitInput,
            },
            success: function (response) {
                $('#modal-action').modal('hide');
                if (name == "")
                    showListExtension(response.data, table);
                else
                    showSearchExtension(name, response.data);
            }
        });
    }
}

function addSite(id){
    var siteInput = ($("input[name=site-name]").val()!=undefined) ? $("input[name=site-name]").val() : "";
    siteInput = siteInput.replace(/[^A-Z0-9]/ig, "_");
    siteInput = siteInput.toLowerCase();

    if(siteInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nama site harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else{
        $.ajax({
            type: "GET",
            url: "/addSite",
            dataType: "json",
            data: {
                id: id,
                siteInput: siteInput,
            },
            success: function (response) {
                $('#modal-action').modal('hide');
                getListTabExtension();
            },
        });
    }
}

function addData(name, id, table){
    var nameInput = ($("input[name=name]").val()!=undefined) ? $("input[name=name]").val() : "";
    var extInput = ($("input[name=extension]").val()!=undefined) ? $("input[name=extension]").val() : "";
    var groupInput = ($("input[name=group]").val()!=undefined) ? $("input[name=group]").val() : "";
    var unitInput = ($("input[name=unit]").val()!=undefined) ? $("input[name=unit]").val() : "";
    var postInput = ($("input[name=position]").val()!=undefined) ? $("input[name=position]").val() : "";
    var didInput = ($("input[name=did]").val()!=undefined) ? $("input[name=did]").val() : "";
    var phoneInput = ($("input[name=phone]").val()!=undefined) ? $("input[name=phone]").val() : "";
    var huntingInput = ($("input[name=hunting]").val()!=undefined) ? $("input[name=hunting]").val() : "";
    var faxInput = ($("input[name=fax]").val()!=undefined) ? $("input[name=fax]").val() : "";
    var floorInput = ($("input[name=floor]").val()!=undefined) ? $("input[name=floor]").val() : "";
    var towerInput = ($("input[name=tower]").val()!=undefined) ? $("input[name=tower]").val() : "";

    if(nameInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nama harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else if(extInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nomor extension harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else {
        $.ajax({
            type: "GET",
            url: "/addExt",
            dataType: "json",
            data: {
                name: name,
                id: id,
                table: table,
                nameInput: nameInput,
                extInput: extInput,
                groupInput: groupInput,
                unitInput: unitInput,
                postInput: postInput,
                didInput: didInput,
                phoneInput: phoneInput,
                huntingInput: huntingInput,
                faxInput: faxInput,
                floorInput: floorInput,
                towerInput: towerInput,
            },
            success: function (response) {
                $('#modal-action').modal('hide');
                if (name == "")
                    showListExtension(response.data, table);
                else
                    showSearchExtension(name, response.data);
            },
        });
    }
}

function addGroup(name,id,unit,group,table){
    var nameInput = ($("input[name=name]").val()!=undefined) ? $("input[name=name]").val() : "";
    var extInput = ($("input[name=extension]").val()!=undefined) ? $("input[name=extension]").val() : "";
    var groupInput = ($("input[name=group]").val()!=undefined) ? $("input[name=group]").val() : "";
    var unitInput = ($("input[name=unit]").val()!=undefined) ? $("input[name=unit]").val() : "";
    var postInput = ($("input[name=position]").val()!=undefined) ? $("input[name=position]").val() : "";
    var didInput = ($("input[name=did]").val()!=undefined) ? $("input[name=did]").val() : "";
    var phoneInput = ($("input[name=phone]").val()!=undefined) ? $("input[name=phone]").val() : "";
    var huntingInput = ($("input[name=hunting]").val()!=undefined) ? $("input[name=hunting]").val() : "";
    var faxInput = ($("input[name=fax]").val()!=undefined) ? $("input[name=fax]").val() : "";
    var floorInput = ($("input[name=floor]").val()!=undefined) ? $("input[name=floor]").val() : "";
    var towerInput = ($("input[name=tower]").val()!=undefined) ? $("input[name=tower]").val() : "";

    if(nameInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nama harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else if(extInput == ""){
        Swal.fire({
            type: 'error',
            text: 'Nomor extension harus diisi',
            confirmButtonColor: '#762F8D',
        })
    }else {
        $.ajax({
            type: "GET",
            url: "/addGroupExt",
            dataType: "json",
            data: {
                name: name,
                id: id,
                table: table,
                nameInput: nameInput,
                extInput: extInput,
                groupInput: groupInput,
                unitInput: unitInput,
                postInput: postInput,
                didInput: didInput,
                phoneInput: phoneInput,
                huntingInput: huntingInput,
                faxInput: faxInput,
                floorInput: floorInput,
                towerInput: towerInput,
            },
            success: function (response) {
                $('#modal-action').modal('hide');
                if (name == "")
                    showListExtension(response.data, table);
                else
                    showSearchExtension(name, response.data);
            },
        });
    }
}

function searchExtension(code){
    if(code == "13") {
        var name = $(".search-menu").val();
        if(name == "" || name.length < 3)
            showInfo3();
        else {
            $.ajax({
                type: "GET",
                url: "/showSearch",
                dataType: "json",
                data: {name: name},
                success: function (response) {
                    if (response.data.length == 0) {
                        Swal.fire({
                            type: 'error',
                            text: 'Data tidak ditemukan',
                            confirmButtonColor: '#762F8D',
                        })
                    } else
                        showSearchExtension(name, response.data);
                },
            });
        }
    }
}

function showSearchExtension(name,data) {
    $(".table-height").css('display','block');
    var strHTML = "";
    var rowspan = 1;
    var colspan = 2;
    if(sessionLogin)
        colspan++;
    chkGroup = false;
    chkUnit = false;
    chkDID = false;
    chkPost = false;
    chkPhone = false;
    chkHunting = false;
    chkFax = false;
    chkFloor = false;
    chkTower = false;

    $(".syahdanImage").hide();
    $(".table-info").hide();
    $(".table-data").html("");
    $(".table-search").html("");

    for (var x = 0; x < data.length; x++) {

        strHTML += '<table class="table-data table-bordered table-striped table-hover" border="1" width="80%">';

        for(var i=0;i<data.length;i++) {
            if (data[i].Group != "")
                chkGroup = true;
            if (data[i].Unit != "")
                chkUnit = true;
            if (data[i].Position != "")
                chkPost = true;
            if (data[i].DID != "")
                chkDID = true;
            if (data[i].Phone != "")
                chkPhone = true;
            if (data[i].Hunting != "")
                chkHunting = true;
            if (data[i].Fax != "")
                chkFax = true;
            if (data[i].Floor != "")
                chkFloor = true;
            if (data[i].Tower != "")
                chkTower = true;
        }
        if(chkUnit)
            colspan++;
        if(chkPost)
            colspan++;
        if(chkDID)
            colspan++;
        if(chkPhone)
            colspan++;
        if(chkFloor)
            colspan++;
        if(chkTower)
            colspan++;

        for(var i=0;i<data.length;i++){

            if(i==0){
                if(data[i].Title == data[0].Title && data[i].Title != "") {
                    strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#f2960b; color:#ffffff;"><h2>' + data[i].Title + '</h2></th></tr></thead><tbody>';
                }
                if(sessionLogin) {
                    if (data[i].Group != "") {
                        strHTML += '<thead><tr scope="col" align="center">';
                        strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '';
                        strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                        strHTML += '</th>';
                        // strHTML += '<th class="reorder-column" colspan="' + colspan + '">' + data[i].Group + '</th>';
                        strHTML += '</tr></thead>';
                    }
                    if (data[i].Unit != "") {
                        strHTML += '<thead><tr scope="col" align="center">';
                        strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '';
                        strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                        strHTML += '</th>';
                        // strHTML += '<th class="reorder-column" colspan="' + colspan + '">' + data[i].Unit + '</th>';
                        strHTML += '</tr></thead>';
                    }
                }else{
                    if (data[i].Group != "") {
                        strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;"><h5>' + data[i].Group + '</h5></th></tr></thead>';
                    }
                    if (data[i].Unit != "") {
                        strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '</h5></th></tr></thead>';
                    }
                }

                strHTML += '<thead><tr align="center">';
                strHTML += '<th>Name</th>';

                if(chkPost)
                    strHTML += '<th>Position</th>';

                strHTML += '<th>Extension</th>';

                if(chkDID)
                    strHTML += '<th>DID</th>';
                if(chkPhone)
                    strHTML += '<th>Phone</th>';
                if(chkFloor)
                    strHTML += '<th>Floor</th>';
                if(chkTower)
                    strHTML += '<th>Tower</th>';
                if(sessionLogin) {
                    strHTML += '<th class="action-head" width="100px">Action</th>';
                    // strHTML += '<th class="reorder-head" width="40px" style="display: none;">Reorder</th>';
                }
                strHTML += '</tr></thead>';
            }
            if(i>0){
                if(data[i].Title != data[i-1].Title && data[i].Title != "") {
                    strHTML += '<tr><th colspan="' + colspan + '" style="border-left-color:white;border-right-color: white;background-color: white"><h1></h1></th></tr>';
                    strHTML += '<tr><th colspan="' + colspan + '" style="border-left-color:white;border-right-color: white;background-color: white"><h1></h1></th></tr>';

                    strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#f2960b; color:#ffffff;"><h2>' + data[i].Title + '</h2></th></tr></thead><tbody>';

                    strHTML += '<thead><tr align="center">';
                    strHTML += '<th>Name</th>';

                    if(chkPost)
                        strHTML += '<th>Position</th>';

                    strHTML += '<th>Extension</th>';

                    if(chkDID)
                        strHTML += '<th>DID</th>';
                    if(chkPhone)
                        strHTML += '<th>Phone</th>';
                    if(chkFloor)
                        strHTML += '<th>Floor</th>';
                    if(chkTower)
                        strHTML += '<th>Tower</th>';
                    if(sessionLogin) {
                        strHTML += '<th class="action-head" width="100px">Action</th>';
                        // strHTML += '<th class="reorder-head" width="40px" style="display: none;">Reorder</th>';
                    }
                    strHTML += '</tr></thead>';
                }
                if(sessionLogin) {
                    if (data[i].Group != data[i - 1].Group && data[i].Group != "") {
                        strHTML += '<thead><tr scope="col" align="center">';
                        strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;">' + data[i].Group + '';
                        strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"","' + encodeURIComponent(data[i].Group) + '","' + data[i].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                        strHTML += '</th>';
                        // strHTML += '<th class="reorder-column" colspan="' + colspan + '">' + data[i].Group + '</th>';
                        strHTML += '</tr></thead>';
                    }
                    if (data[i].Unit != data[i - 1].Unit && data[i].Unit != "") {
                        strHTML += '<thead><tr scope="col" align="center">';
                        strHTML += '<th class="action-column" colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '';
                        strHTML += '<a onclick=detailDeleteGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailUpdateGroup("' + encodeURIComponent(name) + '","' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailAddGroup("' + encodeURIComponent(name) + '",'+data[i].id+',"' + encodeURIComponent(data[i].Unit) + '","","' + data[i].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                        strHTML += '</th>';
                        // strHTML += '<th class="reorder-column" colspan="' + colspan + '">' + data[i].Unit + '</th>';
                        strHTML += '</tr></thead>';
                    }
                }else{
                    if (data[i].Group != data[i - 1].Group && data[i].Group != "") {
                        strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#0090d1; color:#ffffff;"><h5>' + data[i].Group + '</h5></th></tr></thead>';
                    }
                    if (data[i].Unit != data[i - 1].Unit && data[i].Unit != "") {
                        strHTML += '<thead><tr scope="col" align="center"><th colspan="' + colspan + '" style="background-color:#00a8f2; color:#ffffff;">' + data[i].Unit + '</h5></th></tr></thead>';
                    }
                }
            }

            for(var j=i+1;j<data.length;j++){
                if(data[i].Ext == data[j].Ext && data[i].Unit == data[j].Unit && data[i].Group == data[j].Group) {
                    if (data[i].Group != "" && data[j].Group != "") {
                        if (data[i].Group == data[j].Group)
                            rowspan++;
                    }else if (data[i].Unit != "" && data[j].Unit!= "") {
                        if (data[i].Unit == data[j].Unit)
                            rowspan++;
                    }
                }else
                    break;
            }
            if(rowspan > 1){
                for(var k=i;k<i+rowspan;k++){
                    strHTML += '<tr>';
                    strHTML += '<td>'+data[k].Name+'</td>';

                    if(chkPost)
                        strHTML += '<td>'+data[k].Position+'</td>';
                    if(k==i)
                        strHTML += '<td rowspan="'+rowspan+'">'+data[k].Ext+'</td>';
                    if(chkDID)
                        strHTML += '<td>'+data[k].DID+'</td>';
                    if(chkPhone)
                        strHTML += '<td>'+data[k].Phone+'</td>';
                    if(chkFloor)
                        strHTML += '<td>'+data[k].Floor+'</td>';
                    if(chkTower)
                        strHTML += '<td>'+data[k].Tower+'</td>';
                    if(sessionLogin) {
                        strHTML += '<td width="90px"><a onclick=detailDeleteRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailUpdateRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                        strHTML += '&nbsp;<a onclick=detailAddRow("' + encodeURIComponent(name) + '","' + data[k].id + '","' + data[k].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                        strHTML += '</td>'
                    }
                    strHTML += '</tr>';
                }
                i = i+rowspan-1;
                rowspan = 1;
            }else {
                strHTML += '<tr>';
                strHTML += '<td>'+data[i].Name+'</td>';
                if(chkPost)
                    strHTML += '<td>'+data[i].Position+'</td>';
                strHTML += '<td rowspan="'+rowspan+'">'+data[i].Ext+'</td>';
                if(chkDID)
                    strHTML += '<td>'+data[i].DID+'</td>';
                if(chkPhone)
                    strHTML += '<td>'+data[i].Phone+'</td>';
                if(chkFloor)
                    strHTML += '<td>'+data[i].Floor+'</td>';
                if(chkTower)
                    strHTML += '<td>'+data[i].Tower+'</td>';

                if(sessionLogin) {
                    strHTML += '<td width="90px"><a onclick=detailDeleteRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i].TableName + '")><img src="img/delete-icon.svg" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailUpdateRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i].TableName + '")><img src="img/update-icon.png" width="25px" height="auto"></a>';
                    strHTML += '&nbsp;<a onclick=detailAddRow("' + encodeURIComponent(name) + '","' + data[i].id + '","' + data[i].TableName + '")><img src="img/add-icon.png" width="25px" height="auto"></a>';
                    strHTML += '</td>'
                }

                strHTML += '</tr>';
            }
        }
        strHTML += '</tbody>';
        strHTML += '</table>';
        break;
    }
    $(".table-height").append(strHTML);
    
    removeActionButton();

    // if(sessionLogin) {
    //     if (!reorderFlag)
    //         showActionColumn();
    //     else
    //         showReorderColumn();
    // }
}
