@extends('layouts.app')

@section('content')
    <header class="py-5 bg-image-full bg-image-contact">
        <div class="layer">
            <h2>Contact Us</h2>
        </div>
    </header>
    <div class="container top-30 bottom-30">
        <div class="row">
            <div class="col-md-12">
                <h1 class="contact-us-title">Always happy to hear from you, feel free  to contact us any time for any quiries</h1>
                <div class="col-md-7 top-30">
                    <div class="contact__address__inner">
                        <!-- Start Single Adress -->
                        <div class="single__contact__address">
                            <div class="contact__icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="contact__details">
                                <p><span>Address</span> : <br> Douala - Cameroun , Akwa - Emilie Saker.
                                    <br>P.O. Box: 1234
                                </p>
                            </div>
                        </div>
                        <!-- End Single Adress -->
                    </div>
                    <div class="contact__address__inner">
                        <div class="single__contact__address">
                            <div class="contact__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="contact__details">
                                <p><span>Phone</span> : +237 123 456 789
                                    <br>+237 123 456 789
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="contact__address__inner">
                        <div class="single__contact__address">
                            <div class="contact__icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="contact__details">
                                <p><span>Email</span> : infos@pae-essamba.net
                                    <br>infos@pae-essamba.net
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 top-30">
                    <form class="form-horizontal" action=" " method="post"  id="contact_form">
                        <fieldset>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="first_name" placeholder="Your Name" class="form-control"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input name="email" placeholder="Your E-Mail Address" class="form-control"  type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input name="phone" placeholder="Your phone" class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="comment" placeholder="Your message" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-lg pull-right"><span class="glyphicon glyphicon-send"></span>&nbsp;Send message</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container top-30 bottom-60">
        <div class="row">
            <div class="col-md-12">
                <h3>Find us on google map</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2026078.574251953!2d11.1657063924212!3d7.333141364891164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10613753703e0f21%3A0x2b03c44599829b53!2sCameroon!5e0!3m2!1sen!2sbd!4v1554741802822!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
@endsection