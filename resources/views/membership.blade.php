@extends('layout')
@section('content')
<section id="membership" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">

    <div class="container">
        <h3 class="text-center">Membership</h3>
        <p class="text-center head">
            Members of the NTIBN have access to a wide range of services and benefits within the network. These
            include<br>

        </p>
        <ul style="margin-top: 0px; margin-left: 20px;">

            <li>Access to the peak body representing NT Indigenous business</li>

            <li> Organisational development for NT Indigenous business</li>
            <li>Industry based development for NT Indigenous business</li>
            <li>Member business support</li>
            <li>Collaborative and promotion opportunities</li>
            <li>Training and personal development to support current and emerging business</li>
            <li>Regional representatives and support for remote business operators </li>
        </ul>
        <p></p>


        <div class="row">
            <div class="col-lg-2 col-md-2">
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="flip-card text-center">
                    <div class="flip-card-inner abt">
                        <div class="flip-card-front home-fr">
                            <br>
                            <i class="fa fa-group"></i>
                            <br>
                            <h3>Certified Membership</h3>
                        </div>
                        <div class="flip-card-back p-2">
                            <h3>Certified Membership</h3>
                            <p>Certified Membership are for businesses that are a minimum of 51% Indigenous owned, has
                                majority Indigenous control and is a Northern Territory based business. Confirmation of
                                Aboriginality or cultural identity is a requirement of the certification process.
                                Statutory declarations are not accepted.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="flip-card text-center">
                    <div class="flip-card-inner abt">
                        <div class="flip-card-front home-fr">
                            <br>
                            <i class="fa fa-group"></i>
                            <br>
                            <h3>Associate Membership</h3>
                        </div>
                        <div class="flip-card-back p-2">
                            <h3>Associate Membership</h3>
                            <p>Associate Membership is for any business that does not meet the criteria for Certified
                                membership, that supports Indigenous business and/or Indigenous employment.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-2 col-md-2">
            </div>
        </div>
        <div style="margin:auto;margin-top:50px;margin-bottom:10px; text-align:center;"><a
                href="{{ url('/registeration') }}"><button class="btn btn-success">Join Us </button></a></div>

    </div>
</section>
@endsection
