$(document).ready(function() {
    $('#group').click(function(e) {
        // initializing variables
        var name = $('#name').val();
        var design = $('#designation').val();
        var education = $('#eduction').val();
        var contact = $('#contact').val();
        var address = $('#address').val();

        // initializing the variables with regular expressions
        var design_regex = /^[a-zA-Z]+$/;
        var edu_regex = /^[a-zA-z]+$/;
        var cont_regex = /^[0-9]{10}$/;
        var add_regex = /^[0-9a-zA-Z]+$/;
        if (!name.match(design_regx) || name.length == 0) {
            $('#p5').text('* For your name please use alphabets only *');
            $('#name').focus();
            return false;
        } else if (!design.match(design_regex) || design.length == 0) {
            $('#p1').text('* For your designation please use alphabets only *');
            $('#designation').focus();
            return false;
        } else if (!education.match(edu_regex) || education.length == 0) {
            $('#p2').text('* For your education please use alphabets only *');
            $('#education').focus();
            return false;
        } else if (!contact.match(cont_regex) || !contact.length > 10) {
            $('#p3').text('* For your contact please use numbers only *');
            $('#contact').focus();
            return false;
        } else if (!address.match(add_regex) || address.length == 0) {
            $('#p4').text('* For your address please use numbers and letters *');
            $('#address').focus();
            return false;
        } else {
            alert("Form Submitted Successfuly!");
            return true;
        }
    });
});
s