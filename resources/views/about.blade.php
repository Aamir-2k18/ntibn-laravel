@extends('layout')
@section('content')


<!--==========================
      About Section
    ============================-->
<section id="speakers" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">


    <div class="container">
        <div class="section-header">
            <h2>Our History</h2>

        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <p>The NTIBN or Northern Territory Indigenous Business Network, is just that. A group of
                        Indigenous businesses working together to create more opportunity and a greater potential
                        for Indigenous business in the Northern Territory.
                        As the peak body representing Northern Territory Indigenous business, the NTIBN offers
                        members organisational development, industry-based development, business support,
                        collaborative and promotional opportunities, and can even help to link businesses up with
                        training and personal development opportunities.
                        The NTIBN exists to support current and emerging Indigenous businesses in their journey to
                        success through programs that work by focusing on strengths, and how they can be used by
                        Indigenous business owners and entrepreneurs to further their futures in business.
                        Enquire About NTIBN Membership</p>
                    <p><a style="color:blue;" href="{{ url('/NTIBNStrategicPlan2018_2021v2.pdf') }}"
                            target="_blank">Click here to access our strategic plan</a></p>



                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
    </div>
    <div style="margin:auto;margin-top:10px;margin-bottom:10px; margin-left:50%;"><a href="register.php"><button
                class="btn btn-success">Join Us </button></a></div>

    <div class="container mctclass">
        <div class="section-header">
            <h2>NTIBN Board Members</h2>

        </div>

        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/jason.png') }}" width="100%"><br>
                                    <h3>Jason Elsegood</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Chairperson</h3>

                                    <p>Jason is the Chairperson of the NTIBN, Director/CEO of Cross Cultural
                                        Consultants and Co-Director of IE Project (NT) Pty Ltd.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/aidan.png') }}" width="100%"><br>
                                    <h3>Aidan McGuinness</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Managing Director</h3>

                                    <p>Aidan McGuinness is the Managing Director of Finniss River
                                        Constructions, a 100% Indigenous owned and operated business in Darwin
                                        Northern Territory. Aidan is a Kungarakan man and a young leader within
                                        his Community.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/bill_risk.png') }}" width="100%"><br>
                                    <h3>Bill Risk</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Business owner</h3>

                                    <p>A Senior Larrakia Elder with extensive heritage knowledge, Bill Risk is a
                                        well-known business owner and respected leader within Larrakia and the wider
                                        community.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/jason_jones.png') }}" width="100%">
                                    <br>
                                    <h3>Jason Jones</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Construction Manager</h3>

                                    <p>Jason Jones is Construction Manager at Rusca Bros and is leading Rusca
                                        Building Division. Through the Construction division, he is leading
                                        a STEPS program in partnership with NT Govt. This program works
                                        with at risk youth, giving them opportunities to learn and pursue careers in
                                        construction.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/mark_modie.png') }}" width="100%">
                                    <br>
                                    <h3>Mark Moodie</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Managing Director</h3>

                                    <p>Mark Moodie is an Indigenous Australian who was born in Redcliffe QLD and has
                                        lived in the Northern Territory since 1978. Mark is the Managing Director of
                                        Indigenous Mining &amp; Energy Consultants NT Pty Ltd (IMECNT).
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="flip-card text-center">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="{{ url('/img/about/ray.png') }}" width="100%">
                                    <br>
                                    <h3>Raymond Pratt</h3>

                                </div>
                                <div class="flip-card-back p-2">
                                    <h3>Director of DICE Australia</h3>

                                    <p>Raymond Pratt is born of proud Western Arrernte heritage. Ray is the director
                                        of DICE Australia and associated companies which include Dice Contracting,
                                        Dice Renascent and Alpha Dice.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
        <br>
    </div>

</section>
@endsection
