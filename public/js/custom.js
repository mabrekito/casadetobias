
//Get modal element
var overlay = document.getElementById('modal');
//Get open modal button
var mainBookingBtn = document.querySelector('a.btn');
// Get close button
var bookingCloseBtn = document.getElementById('bookingCloseBtn');
var bookingDropdownMenu= document.getElementsByClassName('dropdown-menu')[0];
var dateSelectorFrom = document.getElementsByClassName('date-selector-input')[0];
var dateSelectorTo = document.getElementsByClassName('date-selector-input')[1];
var calendarFrom = document.getElementsByClassName('date-values')[0];
var x = document.getElementById("datepickerFrom1");
var y = document.getElementById("datepickerTo1");
Date.shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
let HomeButton = document.getElementsByClassName("btn btn-primary btn-block");
var checkin = undefined;
var checkout = null;
var date = undefined;


//Click event
mainBookingBtn.addEventListener('click', openModal);
dateSelectorFrom.addEventListener('click', dateSelectFrom);
dateSelectorTo.addEventListener('click', dateSelectTo);

//Close click event
bookingCloseBtn.addEventListener('click', closeModal);
//Outside click event
window.addEventListener('click', clickOutside);

//Function open booking

function openModal(){
    overlay.style.display='block';
    bookingDropdownMenu.style.display='block';
}

//Function close booking
function closeModal(){
    overlay.style.display='none';
    bookingDropdownMenu.style.display='none';
    $( "#datepickerFrom1" ).datepicker( "destroy" );
    $( "#datepickerTo1" ).datepicker( "destroy" );

}
//Function close booking if outside click
function clickOutside(e){
    if (e.target == overlay){
        overlay.style.display='none';
        bookingDropdownMenu.style.display='none';
        $( "#datepickerFrom1" ).datepicker( "destroy" );
        $( "#datepickerTo1" ).datepicker( "destroy" );
    }
}
function dateSelectFrom() {

    $( "#datepickerTo1" ).datepicker( "destroy" );
    $(function calendar() {
        $( "#datepickerFrom1" ).datepicker({
            minDate:0,
            formatDate: 'd M, yy',
        });
        $("#datepickerFrom1 ").on("change",function calendar(){

            var date = $(this).datepicker('getDate'),
                day  = date.getDate(),
                month = Date.shortMonths[date.getMonth()],
                year =  date.getFullYear();
            document.getElementsByClassName('date-d')[0].innerHTML = day.toString();
            document.getElementsByClassName('date-m')[0].innerHTML = month.toString();
            document.getElementsByClassName('date-y')[0].innerHTML = year.toString();
            $( "#datepickerFrom1" ).datepicker( "destroy" );
            $( "#datepickerTo1" ).datepicker( "destroy" );
            y.style.display='block';
            checkin = date;

            $(function () {
                $( "#datepickerTo1" ).datepicker({
                    minDate: date,
                    formatDate: 'd M, yy',
                });
                $("#datepickerTo1 ").on("change",function calendar(){
                     date = $(this).datepicker('getDate'),
                        day  = date.getDate(),
                        month = Date.shortMonths[date.getMonth()],
                        year =  date.getFullYear();
                    document.getElementsByClassName('date-d')[1].innerHTML = day.toString();
                    document.getElementsByClassName('date-m')[1].innerHTML = month.toString();
                    document.getElementsByClassName('date-y')[1].innerHTML = year.toString();
                    checkout = new Date(date);
                    $( "#datepickerTo1" ).datepicker( "destroy" );
                    $( "#datepickerFrom1" ).datepicker( "destroy" );
                });
            });
        });
    });
}
function dateSelectTo() {
    y.style.display='block';
    $(function () {
        $( "#datepickerTo1" ).datepicker({
            formatDate: 'd M, yy',
        });
        $("#datepickerTo1 ").on("change",function(){
            var date = $(this).datepicker('getDate'),
                day  = date.getDate(),
                month = Date.shortMonths[date.getMonth()],
                year =  date.getFullYear();
            document.getElementsByClassName('date-d')[1].innerHTML = day.toString();
            document.getElementsByClassName('date-m')[1].innerHTML = month.toString();
            document.getElementsByClassName('date-y')[1].innerHTML = year.toString();

        });
    });
}




