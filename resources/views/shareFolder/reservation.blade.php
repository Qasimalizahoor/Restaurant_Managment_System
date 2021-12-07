<section class="section" id="reservation">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="left-text-content">
                    <div class="section-heading">
                        <h6>Contact Us</h6>
                        <h2>Here You Can Make A Reservation Or Just walkin to our cafe</h2>
                    </div>
                    <p>If you want to reserve your Table or Food. So fill this form correctly and make sure you will be there.<br>
                      Thanks
                    </p>
                    <div class="row">
                     
                        <div class="col-lg-6">
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <h4>Phone Numbers</h4>
                                @foreach ($companies as $company )
                                <span>{{ $company->contact }}<br>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="message">
                                <i class="fa fa-envelope"></i>
                                <h4>Emails</h4>
                                @foreach ($companies as $company)
                                <span>{{ $company->email }}<br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-form">
                    <form id="contact" action="{{ route('reservations.store') }}" method="post">
                      @csrf
                      <div class="row">
                        <div class="col-lg-12">
                            <h4>Table Reservation</h4>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                            <input name="name" type="text" id="name" placeholder="Your Name*" required="">
                          </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                          <fieldset>
                          <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                        </fieldset>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <input name="phone" type="text" id="phone" placeholder="Phone Number*" required="">
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="number" name="guest" placeholder="Number of guest">
                        </div>
                        <div class="col-lg-6">
                            <div id="filterDate2">    
                              <div class="input-group ">
                                <input  name="date" id="date" type="date" class="form-control" placeholder="dd/mm/yyyy">
                              </div>
                            </div>   
                        </div>
                        <div class="col-md-6 col-sm-12">
                          <input type="time" name="time">
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <textarea name="message" rows="6" id="message" placeholder="Message" required=""></textarea>
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button-icon">Make A Reservation</button>
                          </fieldset>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>