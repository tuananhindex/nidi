$(document).ready(function () {
    var showContactMobile = 1;

    $(".box-contact-purchase").mousedown(function (e) {
        if (e.which == 3) {
            showContactContent(e, $(this));
        }
    })


    $(".box-contact-purchase").click(function (e) {
        showContactContent(e, $(this));
    });

    $(".mobile-contact .contact-icon").click(function (e) {
        if (showContactMobile == 1) {
            showContactMobile += 1;
            $("#album_detai .modal-body .box-contact-detail-mobile").html($(".master-contact .box-contact-detail").html());

            if ($(".master-contact #select_product").prop("disabled")) {
                $(".box-contact-detail-mobile #select_product").val($(".master-contact #select_product").val());
                $(".box-contact-detail-mobile #select_product").prop("disabled", true);
                $(".box-contact-detail-mobile .select-product-area").hide();
            }
        }

        $('#album_detai').modal({
            keyboard: true
        });
    });

    $(".box-contact-detail").click(function (e) {
        e.stopPropagation();
    });



    $(document).on("click", ".box-contact-detail-mobile .location-name", function (e) {
        var id = $(this).attr("id");
        if ($(this).attr("value") == 1) {
            collapsedAll();
            $(this).attr("value", 0)
            $(this).removeClass("expand");
            $(this).addClass("collapsed")
            expandInfo(id, $('.box-contact-detail-mobile #select_product').val());
        } else {
            $(this).attr("value", 1);
            $(this).removeClass("collapsed");
            $(this).addClass("expand");
            collapsedInfo(id, $('.box-contact-detail-mobile #select_product').val());
        }
    });


    $(".box-contact-detail .location-name").click(function (e) {
        e.stopPropagation();

        var id = $(this).attr("id");
        if ($(this).attr("value") == 1) {
            collapsedAll();
            $(this).attr("value", 0)
            $(this).removeClass("expand");
            $(this).addClass("collapsed")
            expandInfo(id, $('.master-contact #select_product').val());
        } else {
            $(this).attr("value", 1);
            $(this).removeClass("collapsed");
            $(this).addClass("expand");
            collapsedInfo(id, $('.master-contact #select_product').val());
        }
    });
    bindingDataForLocation();
    var vCity = $('.master-contact #select_location').val();
    var vProduct = $('.master-contact #select_product').val();
    ShowContactInfoMaster(vCity, vProduct);

    
});


function bindingDataForLocation() {
    var select = document.getElementById("select_location");
    var optEmpty = document.createElement('option');
    optEmpty.value = "";
    optEmpty.text = "";
    select.appendChild(optEmpty);

    arrayCity.forEach(function (item) {
        var opt = document.createElement('option');
        opt.value = item.Value;
        opt.text = item.City;
        select.appendChild(opt);
    });   
}


function expandInfo(offName, vProduct) {
    var pType = "";
    for (var i = 0; i < arrayProduct.length; ++i) {
        if (vProduct == arrayProduct[i].PID) {
            pType = arrayProduct[i].Type;
            break;
        }
    }

    hideAllOffItemProduct();
    if (pType != "") {
        $(".master-contact #" + offName + "_" + pType.toLowerCase()).show();
        $(".box-contact-detail-mobile #" + offName + "_" + pType.toLowerCase()).show();

    } else {
        $(".master-contact #" + offName + "_office div").show();
        $(".box-contact-detail-mobile #" + offName + "_office div").show();
    }


}

function collapsedInfo(offName, vProduct) {
    var pType = "";

    for (var i = 0; i < arrayProduct.length; ++i) {
        if (vProduct == arrayProduct[i].PID) {
            pType = arrayProduct[i].Type;
            break;
        }
    }

    if (pType != "") {
        $(".master-contact #" + offName + "_" + pType.toLowerCase()).hide();
        $(".box-contact-detail-mobile #" + offName + "_" + pType.toLowerCase()).hide();

    } else {
        $(".master-contact #" + offName + "_office div").hide();
        $(".box-contact-detail-mobile #" + offName + "_office div").hide();
    }
}


function collapsedAll() {
    $(".box-contact-detail .location-name").each(function () {
        $(this).attr("value", 1)
        $(this).removeClass("collapsed");
        $(this).addClass("expand");
    });

    $(".box-contact-detail-mobile .location-name").each(function () {
        $(this).attr("value", 1)
        $(this).removeClass("collapsed");
        $(this).addClass("expand");
    });
}

function expandInfoWhenOneOffice() {
    $(".box-contact-detail .location-name").each(function () {
        if ($(this).css('display') == 'block') {
            $(this).click();
        }
    });

    $(".box-contact-detail-mobile .location-name").each(function () {
        if ($(this).css('display') == 'block') {
            $(this).click();
        }
    });
}

function showContactContent(e, sender) {
    e.stopPropagation();
    $(".box-contact-detail").show();
}

$(document).click(function () {
    $(".box-contact-detail").hide();
})


$('.master-contact #select_location').change(function () {
    var vCity = $('.master-contact #select_location').val();
    var vProduct = $('.master-contact #select_product').val();
    ShowContactInfoMaster(vCity, vProduct);
});


$(document).on("change", ".box-contact-detail-mobile #select_location", function () {
    var vCity = $('.box-contact-detail-mobile #select_location').val();
    var vProduct = $('.box-contact-detail-mobile #select_product').val();
    ShowContactInfoMaster(vCity, vProduct);

});

$(document).on("change", ".box-contact-detail-mobile #select_product", function () {

    var vCity = $('.box-contact-detail-mobile #select_location').val();
    var vProduct = $('.box-contact-detail-mobile #select_product').val();
    ShowContactInfoMaster(vCity, vProduct);

});


$('.master-contact #select_product').change(function () {
    var vCity = $('.master-contact #select_location').val();
    var vProduct = $('.master-contact #select_product').val();
    ShowContactInfoMaster(vCity, vProduct);
});


function HideAllOfficeContact() {
    $(".master-contact .location-name[id=han]").hide();
    $(".master-contact .location-name[id=dng]").hide();
    $(".master-contact .location-name[id=bmt]").hide();
    $(".master-contact .location-name[id=hcm]").hide();
    $(".master-contact .location-name[id=cth]").hide();

    $(".box-contact-detail-mobile .location-name[id=han]").hide();
    $(".box-contact-detail-mobile .location-name[id=dng]").hide();
    $(".box-contact-detail-mobile .location-name[id=bmt]").hide();
    $(".box-contact-detail-mobile .location-name[id=hcm]").hide();
    $(".box-contact-detail-mobile .location-name[id=cth]").hide();
}

function hideAllOffItemProduct() {
    $(".master-contact .off-item-product").each(function () {
        $(this).hide();
    });

    $(".box-contact-detail-mobile .off-item-product").each(function () {
        $(this).hide();
    });
}



function ShowContactInfoMaster(vCity, vProduct) {
    hideAllOffItemProduct();
    collapsedAll();
    HideAllOfficeContact();
    if (vCity != "") {
        var esValue = "";
        var asValue = "";
        var pType = "";
        for (var i = 0; i < arrayCity.length; ++i) {
            if (vCity == arrayCity[i].Value) {
                esValue = arrayCity[i].PRODUCT_ES
                asValue = arrayCity[i].PRODUCT_AS
                break;
            }
        }

        for (var i = 0; i < arrayProduct.length; ++i) {
            if (vProduct == arrayProduct[i].PID) {
                pType = arrayProduct[i].Type;
                break;
            }
        }

        if (esValue == asValue) {
            switch (esValue) {
                case "HAN":
                    $(".master-contact .location-name[id=han]").show();
                    $(".box-contact-detail-mobile .location-name[id=han]").show();
                    break;
                case "DNG":
                    $(".master-contact .location-name[id=dng]").show();
                    $(".box-contact-detail-mobile .location-name[id=dng]").show();
                    break;
                case "BMT":
                    $(".master-contact .location-name[id=bmt]").show();
                    $(".box-contact-detail-mobile .location-name[id=bmt]").show();
                    break;
                case "HCM":
                    $(".master-contact .location-name[id=hcm]").show();
                    $(".box-contact-detail-mobile .location-name[id=hcm]").show();
                    break;
                case "CTH":
                    $(".master-contact .location-name[id=cth]").show();
                    $(".box-contact-detail-mobile .location-name[id=cth]").show();
                    break;
            }

        } else {
            if (esValue = "HCM" && asValue == "CTH") {
                if (pType != "") {
                    if (pType == "ES" || pType == "CLOUD" || pType == "PERSON") {
                        $(".master-contact .location-name[id=hcm]").show();
                        $(".box-contact-detail-mobile .location-name[id=hcm]").show();

                    } else {
                        $(".master-contact .location-name[id=cth]").show();
                        $(".box-contact-detail-mobile .location-name[id=cth]").show();

                    }
                } else {
                    $(".master-contact #hcm_es_cth_as").show();
                    $(".box-contact-detail-mobile #hcm_es_cth_as").show();
                }

            } else if (esValue = "CTH" && asValue == "HCM") {
                if (pType != "") {
                    if (pType == "AS" || pType == "CLOUD" || pType == "PERSON") {
                        $(".master-contact .location-name[id=hcm]").show();
                        $(".box-contact-detail-mobile .location-name[id=hcm]").show();

                    } else {
                        $(".master-contact .location-name[id=cth]").show();
                        $(".box-contact-detail-mobile .location-name[id=cth]").show();

                    }
                } else {
                    $(".master-contact #hcm_as_cth_es").show();
                    $(".box-contact-detail-mobile #hcm_as_cth_es").show();
                }
            }
        }

        expandInfoWhenOneOffice();
    } else {
        $(".master-contact .location-name[id=han]").show();
        $(".master-contact .location-name[id=dng]").show();
        $(".master-contact .location-name[id=bmt]").show();
        $(".master-contact .location-name[id=hcm]").show();
        $(".master-contact .location-name[id=cth]").show();

        $(".box-contact-detail-mobile .location-name[id=han]").show();
        $(".box-contact-detail-mobile .location-name[id=dng]").show();
        $(".box-contact-detail-mobile .location-name[id=bmt]").show();
        $(".box-contact-detail-mobile .location-name[id=hcm]").show();
        $(".box-contact-detail-mobile .location-name[id=cth]").show();
    }
}


var arrayProduct = [
 { "PID": "1", "PCode": "MISASME2015", "Type": "ES" },
 { "PID": "2", "PCode": "AMIS.VN", "Type": "CLOUD" },
 { "PID": "3", "PCode": "MTAX", "Type": "CLOUD" },
 { "PID": "4", "PCode": "MISAMimosa2014", "Type": "AS" },
 { "PID": "5", "PCode": "MISABamboo2015", "Type": "AS" },
 { "PID": "6", "PCode": "QLTH.VN", "Type": "AS" },
 { "PID": "7", "PCode": "QLTS", "Type": "AS" },
 { "PID": "8", "PCode": "HOTICH.VN", "Type": "AS" },
 { "PID": "9", "PCode": "mimosaX12014", "Type": "AS" },
 { "PID": "10", "PCode": "bamboo_x1_2015", "Type": "AS" },
 { "PID": "11", "PCode": "Panda2011", "Type": "AS" },
 { "PID": "12", "PCode": "CUKCUK.VN", "Type": "PERSON" }]



var arrayCity = [
    { "City": "Hà Nội", "Value": "23", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
    { "City": "Hồ Chí Minh", "Value": "28", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "An Giang", "Value": "0", "PRODUCT_ES": "CTH", "PRODUCT_AS": "CTH" },
  { "City": "Bà Rịa - Vũng Tàu", "Value": "1", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Bắc Giang", "Value": "2", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Bắc Kạn", "Value": "3", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Bạc Liêu", "Value": "4", "PRODUCT_ES": "CTH", "PRODUCT_AS": "HCM" },
  { "City": "Bắc Ninh", "Value": "5", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Bến Tre", "Value": "6", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Bình Định", "Value": "7", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Bình Dương", "Value": "8", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Bình Phước", "Value": "9", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Bình Thuận", "Value": "10", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Cà Mau", "Value": "11", "PRODUCT_ES": "CTH", "PRODUCT_AS": "CTH" },
  { "City": "Cần Thơ", "Value": "12", "PRODUCT_ES": "CTH", "PRODUCT_AS": "CTH" },
  { "City": "Cao Bằng", "Value": "13", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Đà Nẵng", "Value": "14", "PRODUCT_ES": "DNG", "PRODUCT_AS": "DNG" },
  { "City": "Đắk Lắk", "Value": "15", "PRODUCT_ES": "BMT", "PRODUCT_AS": "BMT" },
  { "City": "Đắk Nông", "Value": "16", "PRODUCT_ES": "BMT", "PRODUCT_AS": "BMT" },
  { "City": "Điện Biên", "Value": "17", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Đồng Nai", "Value": "18", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Đồng Tháp", "Value": "19", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Gia Lai", "Value": "20", "PRODUCT_ES": "BMT", "PRODUCT_AS": "BMT" },
  { "City": "Hà Giang", "Value": "21", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hà Nam", "Value": "22", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hà Tĩnh", "Value": "24", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hải Dương", "Value": "25", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hải Phòng", "Value": "26", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hậu Giang", "Value": "27", "PRODUCT_ES": "CTH", "PRODUCT_AS": "CTH" },
  { "City": "Hòa Bình", "Value": "29", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Hưng Yên", "Value": "30", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Khánh Hòa", "Value": "31", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Kiên Giang", "Value": "32", "PRODUCT_ES": "CTH", "PRODUCT_AS": "HCM" },
  { "City": "Kon Tum", "Value": "33", "PRODUCT_ES": "BMT", "PRODUCT_AS": "BMT" },
  { "City": "Lai Châu", "Value": "34", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Lâm Đồng", "Value": "35", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Lạng Sơn", "Value": "36", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Lào Cai", "Value": "37", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Long An", "Value": "38", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Nam Định", "Value": "39", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Nghệ An", "Value": "40", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Ninh Bình", "Value": "41", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Ninh Thuận", "Value": "42", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Phú Thọ", "Value": "43", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Phú Yên", "Value": "44", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Quảng Bình", "Value": "45", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Quảng Nam", "Value": "46", "PRODUCT_ES": "DNG", "PRODUCT_AS": "DNG" },
  { "City": "Quảng Ngãi", "Value": "47", "PRODUCT_ES": "DNG", "PRODUCT_AS": "DNG" },
  { "City": "Quảng Ninh", "Value": "48", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Quảng Trị", "Value": "49", "PRODUCT_ES": "DNG", "PRODUCT_AS": "DNG" },
  { "City": "Sóc Trăng", "Value": "50", "PRODUCT_ES": "CTH", "PRODUCT_AS": "HCM" },
  { "City": "Sơn La", "Value": "51", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Tây Ninh", "Value": "52", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Thái Bình", "Value": "53", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Thái Nguyên", "Value": "54", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Thanh Hóa", "Value": "55", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Thừa Thiên - Huế", "Value": "56", "PRODUCT_ES": "DNG", "PRODUCT_AS": "DNG" },
  { "City": "Tiền Giang", "Value": "57", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Trà Vinh", "Value": "58", "PRODUCT_ES": "CTH", "PRODUCT_AS": "HCM" },
  { "City": "Tuyên Quang", "Value": "59", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Vĩnh Long", "Value": "60", "PRODUCT_ES": "HCM", "PRODUCT_AS": "HCM" },
  { "City": "Vĩnh Phúc", "Value": "61", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" },
  { "City": "Yên Bái", "Value": "62", "PRODUCT_ES": "HAN", "PRODUCT_AS": "HAN" }]
