$(document).ready(function () {
    $("#add-disciple-form").submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $('.loader').fadeIn(400); //fade out after 3 seconds

        var url = "php/add_disciple.php"; // the script where you handle the form input.
        $.ajax({
            type: "POST",
            url: url,
            data: $("#add-disciple-form").serialize(), // serializes the form's elements.
            success: function (data) {
                //$('.networkError').fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                $('.loader').fadeOut(200); //fade out after 3 seconds
                $('.success-alert').fadeIn(400).delay(3000).fadeOut(300); //fade out after 3 seconds
                document.getElementById("add-disciple-form").reset();
                //alert(data); // show response from the php script.
                }
            });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });

    $("#edit-disciple-form").submit(function (e) {
        e.preventDefault();
        e.stopImmediatePropagation();
        $('.loader').fadeIn(400); //fade out after 3 seconds

        var url = "php/edit_disciple.php"; // the script where you handle the form input.
        $.ajax({
            type: "POST",
            url: url,
            data: $("#edit-disciple-form").serialize(), // serializes the form's elements.
            success: function (data) {
                //$('.networkError').fadeIn(400).delay(3000).fadeOut(400); //fade out after 3 seconds
                $('.loader').fadeOut(200); //fade out after 3 seconds
                $('.success-alert').fadeIn(400).delay(3000).fadeOut(300); //fade out after 3 seconds
                $("#edit-disciple-form :input").prop("disabled", true);
                location.href = 'index.php';
                //alert(data); // show response from the php script.
            }
        });
        e.preventDefault(); // avoid to execute the actual submit of the form.
    });
});
