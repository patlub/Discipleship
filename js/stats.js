$(document).ready(function () {
    $('.loader').fadeIn(400); //fade out after 3 seconds
    var url = "php/sex_stats.php"; // the script where you handle the form input.
    $.ajax({
        type: "get",
        url: url,
        data:{stat:1},
        dataType: 'text',
        success: function (data) {
            $('.loader').fadeOut(200); //fade out after 3 seconds//alert(data); // show response from the php script.
            var res = data.split(" ");
            var male = res[0];
            var female = res[1];
            alert(data);
            var chartdata = {
                labels: ['Male', 'Female'],
                series: [male, female]
            };

//    var sum = function(a, b) { return a + b };
            var options = {
                width: 300,
                height: 200
            };
            new Chartist.Pie('#sex-pie', chartdata, options);
        }
    });
});
