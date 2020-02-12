@extends('layout')
@section('content')
<section id="supporters">
    <div class="container">
        <form action="{{ url('/') }}" method="post" id="searchForm">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-12 p-0" style="margin-right: 10px; ">
                            <select class="form-control search-slt" style="    margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;
                            box-shadow: inset 0 1px 3px #ddd;
                            border-radius: 4px;
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 20px;
                            padding-right: 20px;
                            padding-top: 12px;
                            padding-bottom: 12px;" id="exampleFormControlSelect1" name="location">
                                <option value="">Location</option>
                                <option value="Darwin">Darwin </option>
                                <option value="Katherine">Katherine </option>
                                <option value="Tennant Creek">Tennant Creek</option>
                                <option value="Alice Springs">Alice Springs</option>
                                <option value="Nhulunbuy">Nhulunbuy</option>
                                <option value="Supply Nation Registered">Supply Nation Registered</option>

                                <option value="Regional Remote Area">Regional Remote Area</option>
                            </select>
                        </div>

                        <div class="col-lg-5 col-md-5 col-sm-12 p-0" style="margin-right: 10px; ">

                            <select class="form-control search-slt" style="    margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;
                            box-shadow: inset 0 1px 3px #ddd;
                            border-radius: 4px;
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 20px;
                            padding-right: 20px;
                            padding-top: 12px;
                            padding-bottom: 12px;" id="exampleFormControlSelect2" name="industry">
                                <option value="">Industry Type</option>
                                <option value="Agriculture, Forestry and Fishing">Agriculture, Forestry and Fishing
                                </option>
                                <option value="Mining">Mining </option>
                                <option value="Manufacturing">Manufacturing </option>
                                <option value="Electricity, Gas, Water and Waste Services">Electricity, Gas, Water and
                                    Waste Services</option>
                                <option value="Construction">Construction</option>
                                <option value="Wholesale Trade">Wholesale Trade</option>
                                <option value="Retail Trade">Retail Trade</option>
                                <option value="Accommodation and Food Services">Accommodation and Food Services</option>
                                <option value="Transport, Postal and Warehousing">Transport, Postal and Warehousing
                                </option>
                                <option value="Information Media and Telecommunication">Information Media and
                                    Telecommunication </option>
                                <option value="Financial and Insaurance Services">Financial and Insaurance Services
                                </option>
                                <option value="Rental, Hiring and Real Estate Services">Rental, Hiring and Real Estate
                                    Services</option>
                                <option value="Professional, Scientific and Technical Services">Professional, Scientific
                                    and Technical Services</option>
                                <option value="Administrative and Support Services">Administrative and Support Services
                                </option>
                                <option value="Public Administration and Safety">Public Administration and Safety
                                </option>
                                <option value="Education and Training">Education and Training </option>
                                <option value="Healthcare and Social Assistance">Healthcare and Social Assistance
                                </option>
                                <option value="Art and Recreational Services">Art and Recreational Services</option>

                                <option value="other Services">other Services</option>



                            </select>

                        </div>

                        <div class="col-lg-2 col-md-2 col-sm-12 p-0">
                            <button type="submit" style="margin: 8px 0;
                            display: inline-block;
                            border: 1px solid #ccc;

                            border-radius: 10px;
                            -webkit-box-sizing: border-box;
                            -moz-box-sizing: border-box;
                            box-sizing: border-box;
                            padding-left: 20px;
                            padding-right: 20px;
                            padding-top: 12px;
                            padding-bottom: 12px;" class="btn btn-success wrn-btn" onclick=""
                                name="search">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="result" style="display: none; width:100%; margin-top:30px; ">
            <div> <label style="color: green;">
                    <span id="fetchDataCount">154 Results Match Your Search !</span>
                </label></div>
            <div id="s" style="width:27%; margin: auto;  margin: auto ;">
                <a href="{{ url('/search') }}"> <button class="btn-style1">
                        New Search
                    </button></a>
                <button class="btn-style1" id="myBtn">
                    Buy Report
                </button>
            </div>
            <main id="main" style="display:none">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body">
                            <h5 class="card-title text-center"></h5>
                            <form class="form-signin" id="payment-form" action="" method="post">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Holder Name: </label>
                                    <input type="text" name="card_holder_name" id="card_holder_name"
                                        placeholder="Holder Name" class="form-control">
                                </div>


                                <div class="form-group">
                                    <label>Card Number: </label>
                                    <input type="text" name="Card Number" id="number" maxlength="20"
                                        data-stripe="number" placeholder="Card Number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>CVC: </label>
                                    <input type="text" name="cvc" id="cvc" size="4" maxlength="3" minlength="3"
                                        data-stripe="cvc" placeholder="CVC" class="form-control">
                                </div>


                                <br>
                                <div class="container-fluid">
                                    <div class="row form-inline">
                                        <div class="form-group col-md-3 col-xs-3">
                                            <label>Expiry Date: </label>
                                        </div>
                                        <div class="form-group col-md-3 col-xs-3">
                                            <label>Month: </label>
                                            <select name="exp_month" id="exp_month" class="form-control">
                                                <option value="01">Jan</option>
                                                <option value="02">Feb</option>
                                                <option value="03">Mar</option>
                                                <option value="04">Apr</option>
                                                <option value="05">May</option>
                                                <option value="06">Jun</option>
                                                <option value="07">Jul</option>
                                                <option value="08">Aug</option>
                                                <option value="09">Sep</option>
                                                <option value="10">Oct</option>
                                                <option value="11">Nov</option>
                                                <option value="12">Dec</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 col-xs-3">
                                            <label>Year: </label>
                                            <select class="form-control" name="exp_year" id="exp_year">

                                                <option value="2019">2019</option>
                                                <option value="2020" selected="">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-4">

                                <button class="btn btn-lg btn-primary btn-block text-uppercase"
                                    type="submit">Buy</button>
                            </form>

                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</section>
@endsection
