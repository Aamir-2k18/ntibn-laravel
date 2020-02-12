@extends('layout')
@section('content')
<script>
    var expanded = false;

          function showCheckboxes()
          {
              var checkboxes = document.getElementById("checkboxes");
              if (!expanded)
              {
              checkboxes.style.display = "block";
              expanded = true;
              }
              else
              {
              checkboxes.style.display = "none";
              expanded = false;
              }
          }


</script>
<link href="{{ url('/css/form-style.css') }}" rel="stylesheet">
<section class="form-box">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="form-wizard">

                    <!-- Form Wizard -->
                    <form role="form" action="" method="post" id="payment-form" enctype="multipart/form-data">

                        <!-- Form progress -->
                        <div class="form-wizard-steps form-wizard-tolal-steps-5">
                            <div class="form-wizard-progress">
                                <div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="5"
                                    style="width: 12.25%;"></div>
                            </div>
                            <!-- Step 1 -->
                            <div class="form-wizard-step active">
                                <div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
                                <p>Personal</p>
                            </div>
                            <!-- Step 1 -->

                            <!-- Step 2 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-location-arrow"
                                        aria-hidden="true"></i></div>
                                <p>Region</p>
                            </div>
                            <!-- Step 2 -->

                            <!-- Step 3 -->

                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                <p>Authority</p>
                            </div>


                            <!-- Step 3 -->

                            <!-- Step 4 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-briefcase" aria-hidden="true"></i>
                                </div>
                                <p>Fees</p>
                            </div>


                            <!-- Step 4 -->

                            <!-- Step 5 -->
                            <div class="form-wizard-step">
                                <div class="form-wizard-step-icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                                <p>Payment</p>
                            </div>


                            <!-- Step 5 -->
                        </div>
                        <!-- Form progress -->


                        <!-- Form Step 1 -->
                        <fieldset style="display: block;">

                            <h4><strong>Applicant Information</strong> <span>Step 1 - 5</span></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="firstName" class="control-label">Title </label>

                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="title" name="title" placeholder="Title" class="form-control"
                                        autofocus="">
                                </div>
                                <div class="col-md-4"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="firstName" class="control-label">Full Name</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="fullname" name="fullname" placeholder="Full Name"
                                        class="form-control" autofocus="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-sm-4 control-label">Position</label>
                                <div class="col-sm-8">
                                    <input type="text" id="position" name="position" placeholder="Position"
                                        class="form-control" autofocus="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 control-label">Email* </label>
                                <div class="col-sm-8">
                                    <input type="email" id="email" placeholder="Email" class="form-control" name="email"
                                        onchange="return emailCheck()">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" id="phonenumber" name="phonenumber" placeholder="Phone Number"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Mobile </label>
                                <div class="col-sm-8">
                                    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Postal </label>
                                <div class="col-sm-8">
                                    <input type="text" id="fax" name="faxPostal" placeholder="Postal"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Town </label>
                                <div class="col-sm-8">
                                    <input type="text" id="town" name="town" placeholder="Town" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">State </label>
                                <div class="col-sm-8">
                                    <input type="text" id="state" name="state" placeholder="State" class="form-control">
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                    <label for="phoneNumber" class="col-sm-4 control-label">Postal </label>
                    <div class="col-sm-8">
                        <input type="text" id="postal" name="postal" placeholder="Postal" class="form-control">
                    </div>
                </div> -->
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Postcode </label>
                                <div class="col-sm-8">
                                    <input type="text" id="postcode" name="postcode" placeholder="Postcode"
                                        class="form-control">
                                </div>
                            </div> <br>

                            <h4><strong>Business Information</strong></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <label for="lastName" class="col-sm-4 control-label">ABN Entity Name</label>
                                <div class="col-sm-8">
                                    <input type="text" id="abn_entity_name" name="abn_entity_name"
                                        placeholder="ABN Entity Name" class="form-control" autofocus="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Business/Trading Name</label>
                                <div class="col-sm-8">
                                    <input type="text" id="business_name" name="business_name"
                                        placeholder="Business/Trading Name" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Business Industry</label>
                                <div class="col-sm-8">


                                    <div class="multiselect" style="width:100%;">
                                        <div class="selectBox form-control" onclick="showCheckboxes()">
                                            <select style="border:none;">
                                                <option>Select Industry</option>
                                            </select>
                                            <div class="overSelect"></div>
                                        </div>
                                        <div id="checkboxes">
                                            <label for="1">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Agriculture, Forestry and Fishing">Agriculture, Forestry and
                                                Fishing</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Mining">Mining</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Manufacturing">Manufacturing</label>
                                            <label for="one">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Electricity, Gas, Water and Waste Services">Electricity, Gas,
                                                Water and Waste Services</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Construction">Construction</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Wholesale Trade">Wholesale Trade</label>
                                            <label for="one">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Retail Trade">Retail Trade</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Accommodation and Food Services">Accommodation and Food
                                                Services</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Transport, Postal and Warehousing">Transport, Postal and
                                                Warehousing</label>

                                            <label for="one">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Information Media and Telecommunication">Information Media
                                                and Telecommunication</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Financial and Insaurance Services">Financial and Insaurance
                                                Services</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Rental, Hiring and Real Estate Services">Rental, Hiring and
                                                Real Estate Services</label>
                                            <label for="one">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Professional, Scientific and Technical Services">Professional,
                                                Scientific and Technical Services</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Administrative and Support Services">Administrative and
                                                Support Services</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Public Administration and Safety">Public Administration and
                                                Safety</label>
                                            <label for="one">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Education and Training">Education and Training</label>
                                            <label for="two">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Healthcare and Social Assistance">Healthcare and Social
                                                Assistance</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="Art and Recrerational Services">Art and Recreational
                                                Services</label>
                                            <label for="three">
                                                <input type="checkbox" name="b_industry[]" class="b_industry"
                                                    value="other Services">other Services</label>



                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="firstName" control-label="">ABN</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="abc" name="abc" placeholder="ABN" class="form-control"
                                        autofocus="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="firstName" control-label="">ACN</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="acn" id="acn" placeholder="ACN" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Principal Place Business</label>
                                <div class="col-sm-8">
                                    <input type="text" id="principal_place" name="principal_place"
                                        placeholder="Principal Place Business" class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">(Address Line 2)</label>
                                <div class="col-sm-8">
                                    <input type="text" id="add_line2" name="add_line2" placeholder="Address Line 2"
                                        class="form-control">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" id="c_email" placeholder="Email" class="form-control"
                                        name="c_email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Website</label>
                                <div class="col-sm-8">
                                    <input type="text" id="website" name="website" class="form-control"
                                        placeholder="Website">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Date Business Commenced</label>
                                <div class="col-sm-8">
                                    <input type="date" id="date_buss_commenced" name="date_buss_commenced"
                                        class="form-control" placeholder="Date Business Commenced">

                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Mobile </label>
                                <div class="col-sm-8">

                                    <input type="text" id="bmobilenumber" name="bmobilenumber"
                                        placeholder="Mobile Number" class="form-control">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Fax </label>
                                <div class="col-sm-8">
                                    <input type="text" id="fax" name="fax" placeholder="Fax" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Town </label>
                                <div class="col-sm-8">
                                    <input type="text" id="btown" name="btown" placeholder="Town" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">State </label>
                                <div class="col-sm-8">
                                    <input type="text" id="bstate" name="bstate" placeholder="State"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Postcode </label>
                                <div class="col-sm-8">
                                    <input type="text" id="postcode" name="postcodebs" placeholder="Postcode"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label for="phoneNumber" class="control-label"><strong>Business Type
                                        </strong></label><br>
                                    <input type="radio" name="business_type" value="1"> Sole Trader <br>
                                    <input type="radio" name="business_type" value="2"> Partnership <br>
                                    <input type="radio" name="business_type" value="3"> Association<br>
                                    <input type="radio" name="business_type" value="4"> Aboriginal Corporation <br>
                                    <input type="radio" class="Session" name="business_type" value="5"> Company (Pty Ltd
                                    or Ltd) <br>


                                </div>
                                <div class="col-sm-6">
                                    <label for="phoneNumber" class="control-label"><strong>Is this business Not for
                                            Profit? </strong></label><br> <input type="radio" name="b_profit"
                                        class="b_profit" value="n"> No<br>
                                    <input type="radio" name="b_profit" class="b_profit" value="y"> Yes<br>

                                    <label for="phoneNumber" class="control-label"><strong>Is this business at least 51%
                                            Indigenous owned? </strong></label><br> <input type="radio" name="b_owned"
                                        class="b_owned" value="n"> No<br>
                                    <input type="radio" name="b_owned" class="b_owned" value="y"> Yes

                                </div>


                            </div>
                            <div class="form-group row">
                                <p style="font-size:14px; font-family:Open Sans,sans-serif;">When submitting this
                                    application, you will need to attach relevant following documentation, whichever is
                                    applicable, to support your application, including:<br>
                                    1) Evidence of Business Registrations/Company extract<br>
                                    2) Proof of Aboriginality or Torres Strait Islander<br>
                                    3) Certificate of Incorporation (if applicable)<br>
                                    4) Information relating to percentage of partnership<br>
                                    5) Any other legal document that show the business
                                    status
                                </p>
                            </div>



                            <div class="form-wizard-buttons">
                                <button type="button" id="firstNext" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>
                        <!-- Form Step 1 -->

                        <!-- Form Step 2 -->
                        <fieldset>

                            <h4><strong>Region</strong><span>Step 2 - 5</span></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-12 control-label"><strong>Where is your business
                                        located? (please tick one)</strong> </label>
                                <div class="col-sm-6">
                                    <input type="checkbox" name="b_location[]" class="b_location" value="Darwin"> Darwin
                                    <br>
                                    <input type="checkbox" name="b_location[]" class="b_location" value="Katherine">
                                    Katherine <br>
                                    <input type="checkbox" name="b_location[]" class="b_location" value="Tennant Creek">
                                    Tennant Creek
                                </div>

                                <div class="col-sm-6">

                                    <input type="checkbox" name="b_location[]" class="b_location" value="Alice Springs">
                                    Alice Springs <br>
                                    <input type="checkbox" name="b_location[]" class="b_location"
                                        value="Regional Remote Area"> Regional Remote Area <br>
                                    <input type="checkbox" name="b_location[]" class="b_location" value="Nhulunbuy">
                                    Nhulunbuy


                                </div>

                                <div class="col-sm-6">

                                    <input type="checkbox" name="b_location[]" class="b_location"
                                        value="Supply Nation Registered"> Supply Nation Registered


                                </div>



                            </div>

                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-8 control-label">How many total staff in the
                                    business? </label>
                                <div class="col-sm-4">
                                    <input type="text" id="b_staff" name="b_staff" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-8 control-label">How many indigenous staff in the
                                    business?</label>
                                <div class="col-sm-4">
                                    <input type="text" id="b_i_staff" name="b_i_staff" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-12 control-label"><strong>Briefly describe the
                                        core activities of the business</strong></label>
                                <div class="col-sm-12">
                                    <textarea rows="2" id="b_description" name="b_description"
                                        class="form-control"></textarea>

                                </div>
                            </div>
                            <br>
                            <h4><strong>Signature</strong></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">

                                <label class="col-sm-4 control-label">Full Name </label>
                                <div class="col-sm-8">
                                    <input type="text" id="s_full_name" name="s_full_name" class="form-control">
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label">Position</label>
                                <div class="col-sm-8">
                                    <input type="text" id="s_position" name="s_position" class="form-control"
                                        autofocus="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-4 control-label">Business Name</label>
                                <div class="col-sm-8">
                                    <input type="text" id="s_b_name" name="s_b_name" class="form-control">

                                </div>
                            </div>
                            <p>I authorise the verification of the information provided on this form is true and
                                correct. I have retained a copy of this application.</p>
                            <div class="form-group row">

                                Upload Signature: &nbsp;&nbsp; <input type="file" name="myFileSignature"
                                    id="myFileSignature">

                            </div>

                            <br>
                            <h4><strong><strong>Use of Information</strong></strong></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <label class="col-sm-8 control-label">Are you currently registered with the ICN NT?
                                </label>
                                <div class="col-sm-4">
                                    <input type="radio" name="icn_nt" class="icn_nt" checked="checked" value="1"> Yes
                                    &nbsp;
                                    <input type="radio" name="icn_nt" class="icn_nt" value="2"> No
                                </div>
                            </div>
                            <div class="form-group row">

                                Upload Additional Doc: &nbsp;&nbsp; <input type="file" name="myFile">

                            </div>
                            <div class="form-group row">

                                Upload Additional Doc: &nbsp;&nbsp; <input type="file" name="myFile1">

                            </div>
                            <div class="form-group row">

                                Upload Additional Doc: &nbsp;&nbsp; <input type="file" name="myFile2">

                            </div>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" id="secondNext" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>

                        <fieldset>

                            <h4><strong>Talent Release Authority</strong> <span>Step 3 - 5</span></h4>
                            <div class="clearfix"></div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Full Name</label>
                                <div class="col-sm-8">
                                    <input type="text" id="t_full_name" name="t_full_name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Phone</label>
                                <div class="col-sm-8">
                                    <input type="text" id="t_phone" name="t_phone" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Address</label>
                                <div class="col-sm-8">
                                    <textarea rows="3" name="t_address" id="t_address" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Town</label>
                                <div class="col-sm-8">
                                    <input type="text" name="t_town" id="t_town" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">State</label>
                                <div class="col-sm-8">
                                    <input type="text" name="t_state" id="t_state" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Postcode</label>
                                <div class="col-sm-8">
                                    <input type="text" name="t_postcode" id="t_postcode" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="phoneNumber" class="col-sm-4 control-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="t_email" id="t_email" class="form-control">
                                </div>
                            </div>
                            <ol>
                                <li>I agree to appear in visual and/or audio recordings which can be used in
                                    advertisements and other documents published by the Northern Territory Indigenous
                                    Business Network (NTIBN).</li>
                                <li>I give permission for my name and visual and/or audio recordings of me to be used in
                                    any associated advertisements and promotional documents.</li>
                                <li>I assign any rights I may have in the visual and/or audio recordings and associated
                                    advertisements and promotional documents to the NTIBN.</li>
                                <li>I am free to enter into this Agreement and to appear in the proposed associated
                                    advertisements and promotional documents</li>
                                <li>This Agreement is made under the laws of the Northern Territory and any dispute can
                                    be taken for resolution by the courts in the Northern Territory.</li>
                            </ol>
                            <p>Wherever possible, the NTIBN will remain sensitive to and understanding of cultural,
                                family and personal sensitivities.</p>

                            <div class="form-group row">
                                <label class="col-sm-8 control-label">Are you of Indigenous or Torres Strait Islander
                                    descent? </label>
                                <div class="col-sm-4">
                                    <input type="radio" name="t_tsid" class="t_tsid" value="1"> Yes &nbsp;
                                    <input type="radio" name="t_tsid" class="t_tsid" value="2"> No
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label">Are there any circumstances in which you would
                                    not want your visual or audio recordings used?</label>
                                <div class="col-sm-12">
                                    <textarea rows="3" name="t_circumstances" id="t_circumstances"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 control-label"><strong>Brief description of visuals/audio
                                        recorded</strong></label>
                                <div class="col-sm-12">
                                    <textarea rows="3" name="t_description" id="t_description"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-4 control-label">Your Signature</label>
                                <div class="col-sm-8">
                                    <input type="file" name="s_signature" id="s_signature" class="form-control">
                                </div>
                            </div>




                            <p>The Northern Territory Indigenous Business Network (NTIBN) is collecting the information
                                in this form to obtain permission to use visual and audio recordings in NTIBN
                                advertising, promotional materials and publications. Visual and/or audio recordings, or
                                other personal information described in this form may be supplied to contractors or
                                service providers engaged by the NTIBN develop or produce advertising, promotional
                                materials or publications, but will not be provided to any other person or organization
                                for purposes other than Northern Territory Government advertising and promotions. You
                                are entitled at any time to access and amend the information provided by you on this
                                form.</p>
                            <br>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" id="thirdNext" class="btn btn-next">Next</button>


                            </div>
                        </fieldset>





                        <!-- Form Step 3 -->

                        <!-- Form Step 4 -->
                        <fieldset>

                            <h4><strong>Membership Fees</strong> <span>Step 4 - 5</span></h4>
                            <label for="lastName" class="control-label" style="color: black;"><strong>Full Member Fees*
                                    (refer to notes below)</strong></label>
                            <div class="form-group row" id="hidevalueNOtselected">
                                <div class="col-sm-6">
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"> Sole Trader </div>
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"><input type="radio"
                                                name="member_ship_fees" class="Session" value="1"> &nbsp; $71.50<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"> Partnership</div>
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"> <input type="radio"
                                                name="member_ship_fees" class="Session" value="2"> &nbsp; $93.50<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"> Association</div>
                                        <div class="col-sm-6" style="margin: 0px; padding:0px;"><input type="radio"
                                                name="member_ship_fees" class="Session" value="3"> &nbsp; $110<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-7" style="margin: 0px; padding:0px;"> Aboriginal Corporation
                                        </div>
                                        <div class="col-sm-5" style="margin: 0px; padding:0px;"><input type="radio"
                                                name="member_ship_fees" class="Session" value="4"> &nbsp; $110<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-7" style="margin: 0px; padding:0px;"> Company (Pty Ltd)</div>
                                        <div class="col-sm-5" style="margin: 0px; padding:0px;"> <input type="radio"
                                                name="member_ship_fees" class="Session" value="5"> &nbsp; $165<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>
                                    <div class="form-group row" style="margin: 0px; padding:0px;">
                                        <div class="col-sm-7" style="margin: 0px; padding:0px;"> Not for Profit</div>
                                        <div class="col-sm-5" style="margin: 0px; padding:0px;"><input type="radio"
                                                name="member_ship_fees" class="Session" value="6"> &nbsp; $110<label
                                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST
                                                INC</label></div>
                                    </div>

                                </div>

                            </div>

                            <label for="lastName" class="control-label" style="color: black;"><strong>Associate Member
                                    Fees</strong></label> &nbsp; &nbsp; <input type="radio" name="member_ship_fees"
                                class="Session" value="7"> &nbsp; $ 220<label
                                style="font-size: 12px; margin-left: 5px; margin-bottom: 0px;"> GST INC</label>

                            <p>*To be eligible for full membership the business must be at least 51% Indigenous owned
                                and based in the Northern Territory. Each application for full or associate membership
                                must provide documentary evidence to support the application.<br>
                                NTIBN Applicants who do not meet the eligibility criteria for full membership and who
                                wish to be affiliated with NTIBN may apply to NTIBN to become an Associate member.
                                Once received your completed application will be assessed by the NTIBN at the next
                                Committee meeting. You will be advised of the outcome and, if endorsed, an invoice will
                                be issued to the business for payment of membership fee.
                            </p>
                            <br>
                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="button" id="forthNext" class="btn btn-next">Next</button>
                            </div>
                        </fieldset>




                        <!-- Form Step 4 -->

                        <!-- Form Step 5 -->
                        <fieldset>

                            <h4>
                                <!--strong>Payment Information coming soon</strong--> <span>Step 5 - 5</span></h4>
                            <div style="clear:both;"></div>
                            <div class="form-group">
                                <label>Bank Name:</label>
                                <input type="text" name="bankname" id="bankname" placeholder="Bank Name"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Payment Type : </label>
                                <label class="radio-inline">
                                    <input type="radio" name="payment_type" class="payment_type" value="1"
                                        checked="checked"> Master Card
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="payment_type" class="payment_type" value="2"> Visa Card
                                </label>
                            </div>

                            <div class="row">

                                <div class="creditCardForm">

                                    <div class="payment">

                                        <div class="form-group owner">
                                            <label for="owner">Holder Name</label>
                                            <input type="text" class="form-control" name="card_holder_name"
                                                id="card_holder_name" placeholder="Holder Name">
                                        </div>
                                        <div class="form-group CVV">
                                            <label for="cvv">CVV</label>
                                            <input type="text" class="form-control" name="cvc" id="cvc" size="4"
                                                maxlength="3" minlength="3" data-stripe="cvc" placeholder="CVC">
                                        </div>
                                        <div class="form-group" id="card-number-field">
                                            <label for="cardNumber">Card Number</label>
                                            <input type="text" class="form-control" name="Card Number" id="number"
                                                size="20" maxlength="20" data-stripe="number" placeholder="Card Number">
                                        </div>
                                        <div class="form-group">
                                            <label>Expiration Date</label>
                                            <select name="exp_month" id="exp_month">
                                                <option value="01">January</option>
                                                <option value="02">February </option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                            </select>
                                            <select name="exp_year" id="exp_year">
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


                            </div>



                            <br>






                            <div class="form-wizard-buttons">
                                <button type="button" class="btn btn-previous">Previous</button>
                                <button type="submit" id="myBtn" class="btn btn-submit">Submit</button>
                                <!-- onclick="submitform()" -->
                            </div>
                        </fieldset>


                        <!-- Form Step 5 -->

                    </form>
                    <!-- Form Wizard -->
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</section>
@endsection
