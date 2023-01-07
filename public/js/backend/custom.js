$(document).ready(function() {

    //Nav Profile Toogle
    $('.profile-toggle').click( function(){
        $('.profile-details').toggle();
    });

    //Select2 Add
    $('.select2').select2()

});

//Delete button alert
function delete_msg(){
    alert('Are you sure about this action?');
};
