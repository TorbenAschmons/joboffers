/*--------- Job-Filter-Accordeon ----------*/


function joboffersFilter() {
    var filter11 = $("#filter11").val();
    var filter21 = $("#filter21").val();

    $(".joboffers .panel-heading").each(function(){
        if( ($(this).data('filter11') == filter11 || filter11 == '')  && ($(this).data('filter21') == filter21 || filter21 == '') ) {
            $(this).slideDown();
        }
        else {
            $(this).slideUp();
        }
    });
}

window.addEventListener('load',
    function() {
        
        $(".joboffers .form-group select").change(function() {
            joboffersFilter();
        });


        $(".joboffers a.joboffers__btn-all-offers").click(function() {
            $("#filter11").val('');
            $("#filter21").val('');
            joboffersFilter();
            return false;
        });
    }

);
