
//Get modal element
var overlay = document.getElementById('modal');
//Get open modal button
var mainBookingBtn = document.querySelector('a.btn');
// Get close button
var bookingCloseBtn = document.getElementById('bookingCloseBtn');
var bookingDropdownMenu= document.getElementsByClassName('dropdown-menu')[0];
var dateSelectorFrom = document.getElementsByClassName('date-selector-input')[0];
var dateSelectorTo = document.getElementsByClassName('date-selector-input')[1];
var calendar = document.getElementsByClassName('dropdown-booking-calendar')[0];
var x = document.getElementById("datepickerFrom1");
var y = document.getElementById("datepickerTo1");
Date.shortMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
let HomeButton = document.getElementsByClassName("btn btn-primary btn-block");
let datePickerOn = 0;

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
    bookingDropdownMenu.style.display='flex';
}

//Function close booking
function closeModal(){
    overlay.style.display='none';
    bookingDropdownMenu.style.display='none';
    calendar.style.display='none';
    $( "#datepickerFrom1" ).datepicker( "destroy" );
    $( "#datepickerTo1" ).datepicker( "destroy" );

}
//Function close booking if outside click
function clickOutside(e){
    if (e.target == overlay){
        overlay.style.display='none';
        calendar.style.display='none';
        bookingDropdownMenu.style.display='none';
        $( "#datepickerFrom1" ).datepicker( "destroy" );
        $( "#datepickerTo1" ).datepicker( "destroy" );
    }
}
function dateSelectFrom() {
    $( "#datepickerFrom1" ).datepicker( "destroy" );
    calendar.style.display='block';
    x.style.display='block';
    $( function() {
        y.style.display ='none';
        var dateFormat = "mm/dd/yy",
            from = $( "#datepickerFrom1" )
                .datepicker({
                    minDate: 0,
                    changeMonth: true,
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                    y.style.display ='block';
                    x.style.display ='none';
                    var date = $(this).datepicker('getDate'),
                        day  = date.getDate(),
                        month = Date.shortMonths[date.getMonth()],
                        year =  date.getFullYear();
                    document.getElementsByClassName('date-d')[0].innerHTML = day.toString();
                    document.getElementsByClassName('date-m')[0].innerHTML = month.toString();
                    document.getElementsByClassName('date-y')[0].innerHTML = year.toString();
                    datePickerOn = 1;
                }),
            to = $( "#datepickerTo1" ).datepicker({
                changeMonth: true,
            })
                .on( "change", function() {
                    from.datepicker( "option", getDate( this ) );
                    y.style.display ='none';
                    calendar.style.display='none';
                    var date = $(this).datepicker('getDate'),
                        day  = date.getDate(),
                        month = Date.shortMonths[date.getMonth()],
                        year =  date.getFullYear();
                    document.getElementsByClassName('date-d')[1].innerHTML = day.toString();
                    document.getElementsByClassName('date-m')[1].innerHTML = month.toString();
                    document.getElementsByClassName('date-y')[1].innerHTML = year.toString();
                });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
}
function dateSelectTo() {
    if (datePickerOn === 1) {
        x.style.display='none';
        calendar.style.display='block';
        y.style.display='block';
    }
    else {
        $( "#datepickerFrom1" ).datepicker( "destroy" );
        $( "#datepickerTo1" ).datepicker( "destroy" );
        calendar.style.display='block';
        y.style.display='block';
        $( "#datepickerTo1" ).datepicker({
            changeMonth: true,
            minDate: +1,
        })
            .on( "change", function() {
                y.style.display ='none';
                calendar.style.display='none';
                var date = $(this).datepicker('getDate'),
                    day  = date.getDate(),
                    month = Date.shortMonths[date.getMonth()],
                    year =  date.getFullYear();
                document.getElementsByClassName('date-d')[1].innerHTML = day.toString();
                document.getElementsByClassName('date-m')[1].innerHTML = month.toString();
                document.getElementsByClassName('date-y')[1].innerHTML = year.toString();
            });

    }

}





