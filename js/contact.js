/*global $, console, next, mixitup*/

$(function () {
    "use strict";
    var input = $(".contact-us .container-our .container > .row .form-contact > form .choose-file .file input");
    input.on("change", function () {
        $(".contact-us .container-our .container > .row .form-contact > form .choose-file .text").text(input.val().substr("12"));
        if ($(this).val() !== "") {
            $(".contact-us .container-our .container > .row .form-contact > form .choose-file .text").css("border", "1px solid #e8e8e8");
        }
        
    });
    $(".contact-us .container-our .container > .row .form-contact > form .col-md-6 input").on("focus", function () {
        $(this).prev(".alert").removeClass("active");
    });

    $(".contact-us .container-our .container > .row .form-contact > form .col-md-6 input").on("blur", function () {
        
        if ($(this).val() === "") {
            
            $(this).prev(".alert").children(".inset-alert").text("Please fill in this field");
            
            $(this).prev(".alert").addClass("active").delay(2000).queue(function (next) {
                
                $(this).removeClass("active");
                
                next();
            });
            
        }
       
    });

    $(".contact-us .container-our .container > .row .form-contact > form .email input").on("keyup", function () {
        

        $(this).on("blur", function () {
            if ($(this).val() !== "") {
                
                if ($(this).val().indexOf("@yahoo.com") > 1) {

                    $(this).prev(".alert").removeClass("active");

                } else {
                    $(this).prev(".alert").children(".inset-alert").text("this field Contain on @yahoo.com");
                    $(this).prev(".alert").addClass("active").delay(3000).queue(function (next) {
                        $(this).removeClass("active");
                        next();
                    });
                }
            }
        });
    });
    $(".contact-us .container-our .container > .row .form-contact > form .col-md-6 input").on("keyup", function () {
        $(this).css({
            border: "1px solid #e8e8e8"
        });
    });
    
    $(".contact-us .container-our .container > .row .form-contact > form").on("submit", function (e) {
        
        var linktext = $(".contact-us .container-our .container > .row .form-contact > form .link-text input"),
            linkemail = $(".contact-us .container-our .container > .row .form-contact > form .email input"),
            chooseFile = $(".contact-us .container-our .container > .row .form-contact > form .choose-file .text"),
            alert = $(".contact-us .container-our .container > .row .form-contact > form .email .alert"),
            lnikAlert = $(".contact-us .container-our .container > .row .form-contact > form .link-text .alert"),
            inputFile = $(".contact-us .container-our .container > .row .form-contact > form .choose-file .file input");
        
        $(".contact-us .container-our .container > .row .form-contact > form .link-text input").each(function () {
            if ($(this).val() === "") {
                
                $(this).css({
                    border: "1px solid red"
                });
                chooseFile.css({
                    border: "1px solid red"
                });
                $(this).prev(".alert").children(".inset-alert").text("Please fill in this field");
                
                $(this).prev(".alert").addClass("active").delay(3000).queue(function (next) {
                    $(this).removeClass("active");
                    next();
                });
            } else {
                chooseFile.css({
                    border: "1px solid #e8e8e8"
                });
                $(this).css({
                    border: "1px solid #e8e8e8"
                });

            }
            
            if (linkemail.val() !== "") {
                
                if (linkemail.val().indexOf("@yahoo.com") > 1) {

                    linkemail.css({
                        border: "1px solid #e8e8e8"
                    });


                } else {

                    linkemail.css({
                        border: "1px solid red"
                    });
                    alert.children(".inset-alert").text("this field Contain on @yahoo.com");

                    alert.addClass("active").delay(3000).queue(function (next) {
                        $(this).removeClass("active");
                        next();
                    });
                }

                
            } else {
                alert.children(".inset-alert").text("Please fill in this field");

                alert.addClass("active").delay(3000).queue(function (next) {
                    $(this).removeClass("active");
                    next();
                });
                linkemail.css({
                    border: "1px solid red"
                });
            }

        });

        if (linktext.val() !== "" && linkemail.val().indexOf("@yahoo.com") > 1 && inputFile.val() !== "") {
            return;
        }
        
        e.preventDefault();
        
    });

});