
<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
        <a class="navbar-brand py-0" href="/">
            <img class="logo d-none" src="/images/logo.jpg" alt="Casa De Tobias" height="43">
            <img class="mini-logo" src="/images/mini-logo.jpg" alt="Casa De Tobias" height="43">
        </a>
        <div class="btn-group dropdown dropdown-booking-show ml-auto order-md-3">
            <a class="btn btn-secondary main-button rounded d-lg-inline" href="#" data-toggle="dropdown">BOOK A ROOM</a>
            <div class="dropdown-menu dropdown-menu-booking dropdown-menu-right">
                    <div class="dropdown-booking-form" id="dropdownBooking">
                    <!-- close button -->
                    <div class="dropdown-booking-close">
                        <button type="button" class="close" aria-label="Close">
                            <span aria-hidden="true" id="bookingCloseBtn">&times;</span>
                        </button>
                    </div>
                    <!-- date selector -->
                    <div class="date-selector d-flex flex-row mb-3">
                        <div class="date-selector-input" data-toggle="datepicker-inline" data-target="datepickerFrom1" id="testing">
                            <div class="date-label">Check In</div>
                            <div class="date-placeholder"></div>
                            <div class="date-values" id="dateFrom1">
                                <div class="date-d">{{ \Carbon\Carbon::now('+08:00')->day }}</div>
                                <div class="date-my"><span class="date-m">{{\Carbon\Carbon::now('+08:00')->shortEnglishMonth}}</span>, <span class="date-y">{{\Carbon\Carbon::now('+08:00')->year}}</span></div>
                            </div>
                        </div>
                        <div class="date-selector-input" data-toggle="datepicker-inline" data-target="datepickerTo1">
                            <div class="date-label">Check Out</div>
                            <div class="date-placeholder"></div>
                            <div class="date-values" id="dateTo1">
                                <div class="date-d">{{\Carbon\Carbon::now('+08:00')->day}}</div>
                                <div class="date-my"><span class="date-m">{{\Carbon\Carbon::now('+08:00')->shortEnglishMonth}}</span>, <span class="date-y">{{\Carbon\Carbon::now('+08:00')->year}}</span></div>
                            </div>
                        </div>
                    </div>
                    <!-- submit button -->
                    <button class="btn btn-primary btn-block" href="/test" onclick="console.log(checkin.toString()),console.log(checkout.toString())">CHECK AVAILABILITY</button>
                </div>
                <div class="dropdown-booking-calendar">
                    <!-- datepicker -->
                    <div class="datepicker-range1" data-min-night="1" data-max-night="7">
                        <div class="datepicker-div" id="datepickerFrom1" data-id="dateFrom1"></div>
                        <div class="datepicker-div" id="datepickerTo1" data-id="dateTo1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End line for date selector -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ isActiveURL('/about') }}">
                    <a class="nav-link" href="/about">THE RESORT</a>
                </li>
                <li class="nav-item {{ isActiveURL('/gallery') }}">
                    <a class="nav-link" href="/gallery">GALLERY</a>
                </li>
                <li class="nav-item {{ isActiveURL('/contact') }}">
                    <a class="nav-link" href="/contact">CONTACT US</a>
                </li>
                <li class="nav-item {{ isActiveURL('/rooms') }}">
                    <a class="nav-link" href="/rooms">ROOMS</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
