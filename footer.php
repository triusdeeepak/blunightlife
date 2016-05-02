    <div class="guestlist">

      <div class="container">

        <form>

          <div class="calendar">

            <h5>Select Event</h5>

            <div class="event">

              <div class="title">Event Name</div>
              <div class="date">Friday 25 March 2016</div>
              <div class="time">23:00 - Late</div>

            </div>

            <div class="event">

              <div class="title">Event Name</div>
              <div class="date">Saturday 26 March 2016</div>
              <div class="time">23:00 - Late</div>

            </div>

            <div class="event">

              <div class="title">Event Name</div>
              <div class="date">Friday 1 April 2016</div>
              <div class="time">23:00 - Late</div>

            </div>

          </div>

          <div class="guests">

            <h5>Enter Your Details</h5>

            <div class="name">
              <select>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="text" name="full-name-1" placeholder="Full Name">
              <input type="text" name="email-address-1" placeholder="Email Address">
              <input type="text" name="phone-number-1" placeholder="Phone Number">
            </div>

            <div class="clear-space" style="height: 30px"></div>

            <h5>Enter Your Guests' Details</h5>

            <div class="name">
              <select>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="text" name="full-name-1">
              <input type="text" name="email-address-1">
              <input type="text" name="phone-number-1">
            </div>

            <div class="name">
              <select>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="text" name="full-name-1">
              <input type="text" name="email-address-1">
              <input type="text" name="phone-number-1">
            </div>

            <div class="name">
              <select>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="text" name="full-name-1">
              <input type="text" name="email-address-1">
              <input type="text" name="phone-number-1">
            </div>

            <div class="name">
              <select>
                <option value="">Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
              <input type="text" name="full-name-1">
              <input type="text" name="email-address-1">
              <input type="text" name="phone-number-1">
            </div>

          </div>

          <button class="button">Place Booking</button>

        </form>

        <script>
          $( ".calendar .event" ).click(function() {
            $( this ).toggleClass( "selected" );
          });
        </script>

      </div>

    </div>

    <div class="footer">

      <div class="container">

        <div class="cities">

          <div class="column city">

            <h5>London</h5>

            <ul class="list">
              <a href="#"><li>W Hotel</li></a>
              <a href="#"><li>DSTRKT</li></a>
              <a href="#"><li>Raffles</li></a>
              <a href="#"><li>Libertine</li></a>
              <a href="#"><li>Toy Room</li></a>
              <a href="#"><li>Maddox</li></a>
              <a href="#"><li>Cuckoo</li></a>
              <a href="#"><li>Cirque Le Soir</li></a>
            </ul>

          </div>

          <div class="column city">
 
           <h5>Barcelona</h5>

            <ul class="list">
              <a href="#"><li>W Hotel</li></a>
              <a href="#"><li>CDLC</li></a>
              <a href="#"><li>Opium</li></a>
              <a href="#"><li>Pacha</li></a>
            </ul>

          </div>

          <div class="column city">

            <h5>Las Vegas</h5>

            <ul class="list">
              <a href="#"><li>XS</li></a>
              <a href="#"><li>Hakkasan</li></a>
              <a href="#"><li>10AK</li></a>
              <a href="#"><li>Marquee</li></a>
              <a href="#"><li>Light</li></a>
              <a href="#"><li>Chateau</li></a>
              <a href="#"><li>Tao</li></a>
            </ul>

          </div>

          <div class="column city">

            <h5>Dubai</h5>

            <ul class="list">
              <a href="#"><li>Cavalli</li></a>
              <a href="#"><li>Cirque Le Soir</li></a>
              <a href="#"><li>Pacha</li></a>
              <a href="#"><li>Iris</li></a>
              <a href="#"><li>Toy Room</li></a>
              <a href="#"><li>Mahiki</li></a>
            </ul>

          </div>

          <div class="column city">

            <h5>New York</h5>

            <ul class="list">
              <a href="#"><li>Lavo</li></a>
              <a href="#"><li>Marquee</li></a>
              <a href="#"><li>Pacha</li></a>
              <a href="#"><li>10AK</li></a>
              <a href="#"><li>Avenue</li></a>
            </ul>

          </div>

          <div class="column city last">

            <h5>Shanghai</h5>

            <ul class="list">
              <a href="#"><li>M2</li></a>
              <a href="#"><li>Cirque Le Soir</li></a>
              <a href="#"><li>Bar Rouge</li></a>
              <a href="#"><li>M1NT</li></a>
              <a href="#"><li>MYST</li></a>
            </ul>

          </div>

          <div class="clear-space"></div>

        </div>

        <div class="links">

          <a href="#">FAQ</a>
          <a href="#">Contact</a>
          <a href="#">Sitemap</a>
          <a href="#">Terms</a>
          <a href="#">Privacy</a>

        </div>

        <div class="copyright">Blu Nightlife &copy; 2016. All Rights Reserved. <br> Company No. 01234567</div>

        <div class="logo">
          <img src="http://www.weareinnovate.net/Websites/BluNL/images/logo-blue.png" width="100%">
        </div>

      </div>

    </div>
    
    <script>
     $('.icons .fa')
        .delay(4000)
        .queue( function(next){ 
          $(this).css('opacity','1'); 
          next(); 
      });
    </script>
    
    <script>
    var count = 0;
	var delays = [3000, 5000, 10000, 60000, 20000, 60000, 40000, 40000];
	var people = [3, 5, 10, 6, 2, 6, 4, 8];
	var dates =  [3, 9, 5, 7, 6, 8, 4, 10];
	var locations = ['Las%20Vegas', 'London', 'New%20York', 'Barcelona', 'Dubai', 'Shanghai', 'London', 'Barcelona'];
      
      function showNotification() {
          console.log(count);
          var delay = 0;
      	  if ((count + 1) == delays.length) {
	      	  delay = delays[count];
	      	  count = 0;
      	  } else {
	      	  delay = delays[count];
	      	  count++;
      	  }
      	  
      	  console.log(delay);
      	  $( ".live-bookings" ).load( "live-bookings.php?people=" + people[count] + "&location=" + locations[count] + "&date=" + getDate(dates[count]), function() {
		  	 $( ".live-bookings" ).fadeIn(500, function() {
		  	     setTimeout(function(){ 
			     	$( ".live-bookings").fadeOut(500, function() {
				     	$( ".live-bookings" ).html("");
				     	showNotification();
			     	}); 
			     }, delay);
		     });
  		  });
	      
      }
      
      function getDate(daysToAdd) {
	    var someDate = new Date();
		someDate.setDate(someDate.getDate() + daysToAdd); 
		var dd = someDate.getDate();
		var mm = someDate.getMonth() + 1;
		var y = someDate.getFullYear();
		
		if (dd < 10) {
			dd = "0" + dd;
		}
		if (mm < 10) {
			mm = "0" + mm;
		}
		
		var someFormattedDate = dd + '%20/%20'+ mm + '%20/%20'+ y;
		return someFormattedDate;
      }
      
    </script>
    
    <script>
    $(function() {
	    // Code here
	     $( ".live-bookings" ).hide();
	     setTimeout(function(){ 
			showNotification();     	
	     }, 3000);
	     
	     
	});
    </script>
    
    <script>
    $('.flex-prev').click(function() {
	    $(this).addClass('active');
	    $(this).attr('disabled','disabled');
	    $('.flex-next').removeClass('active');
    });
    </script>
    
    <script>
    $('.flex-next').click(function() {
	    $(this).addClass('active');
	    $(this).attr('disabled','disabled');
	    $('.flex-prev').removeClass('active');
    });
    </script>

    <script>
      $( ".choice .button.left" ).click(function() {
        $( ".guestlist" ).toggleClass( "active" );
      });
    </script>
