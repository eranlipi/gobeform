$(document).ready(function () {

    $('#gobeForm').validate({

        /*    highlight: function(element, errorClass, validClass) {
         $(element).addClass(errorClass).removeClass(validClass);
         $(element.form).find("label[for=" + element.id + "]")
         .addClass(errorClass);
         },*/

        rules: {
            name: {
                required: true,
                minlength: 2
            },
            phone: {
                required: true,
                digits: true,
                minlength: 9,
                maxlength: 11,
            },
            Radio: {
                required: true,

            },
            birthdate: {
                required: true,

            },

            'agree[]': {
                required: true,
            }

        },
        messages: {
            name: {
                required: "name is required",
                minlength: "the name must be at least 2 chars"
            },
            phone: {
                required: "Phone is required",
                digits: "number must be with digits",
                minlength: "the number need to be at lest 9 digits",
            },
            Radio: {
                required: "gender is required"
            },
            birthdate: {
                required: "you need to write the hours too, if you don't know you can ask your Doctor"
            },
            'agree[]': {
                required: "you must to agree"
            }
        }


    });


    // random number to hidden input
    var now = new Date();
    var randomNum = '';
    // randomNum += Math.round(Math.random()*9);
    randomNum += Math.round(Math.random() * 9);
    randomNum += now.getTime();
    var elem = document.getElementById("ID").value = randomNum;
});  