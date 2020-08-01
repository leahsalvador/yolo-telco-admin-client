<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>International Business & Travel Opportunities, LLC</title>

    <link href="/cubabto/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/cubabto/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="/cubabto/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/cubabto/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/cubabto/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/cubabto/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/cubabto/css/style.css">



</head>

<style>
    .input_image {
        width: 25%;
    }

    .swal2-cancel {
        font-size: 13px !important;
    }


    @media only screen and (min-width: 769px) and (max-width: 1145px) {
        .input_image {
            width: 35%;
        }
    }

    @media only screen and (max-width: 768px) {
        .input_image {
            width: 100%;
        }
    }
</style>

<body>
    <div class="top"></div>

    <div class="wrapper">
        <div class="spacer"></div>
        <div class="form-holder">
            <div class="logo-container">
                <div class="logo-holder"></div>
            </div>

            <h4 class="cuba">Travel Application</h4>
            <?php
            function unfilled_form()
            {
                ?>

                <div class="form-inputs">
                    <form method="POST" id="form_upload" enctype="multipart/form-data">

                        <div class="form-group input_image" ">
                            <div class=" input-group input-file" name="Fichier1">
                            <span class="input-group-btn">
                                <button style="background-color:#233f91;color:#fff;border:1px solid #233f91;" class="btn btn-default btn-choose" type="button">Upload Passport Image</button>
                            </span>
                            <input type="text" class="form-control" placeholder='Choose a file...' />
                            <span class="input-group-btn">
                                <button style="background-color:#ed1c24;" class="btn btn-warning btn-reset" type="button">Delete</button>
                            </span>
                        </div>
                </div>

                <div class="form-group first" style="width:100%;">
                    <label style="font-weight:bold;width:100%;" for="">
                        GROUP NAME / Group Leader: <input type="" id="groupname" class="group_name_input inputs" style="" value="">
                    </label>
                </div>

                <label class="personal" style="" for="">Personal Information (EXACTLY as it appears on your passport)</label>

                <div class="form-group main-form" style="width:100%;">

                    <div class="first-row-grid">

                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                First Name: <input type="text" id="fristname" name="fristname" class="inputs first_name" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                Middle Name: <input type="" id="middlename" name="middlename" class="inputs middle-name" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Last Name: <input type="" id="lastname" name="lastname" class="inputs last_name" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                Mother's Maided Name: <input type="" id="mothersmaidenname" name="mothersmaidenname" class="inputs maiden-name" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                Trip Dates: <input type="" id="tripdates" name="tripdates" class="inputs trip_dates" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Phone: <input type="" id="phone" name="phone" class="inputs phone" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                E-mail: <input type="email" id="email" name="email" class="inputs email" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Passport Number: <input type="" id="pssportnumber" name="pssportnumber" class="inputs passport_number" style="" value="">
                            </label>
                        </div>



                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                Passport Expiration Date: <input type="" id="pssportxpirationdates" name="pssportxpirationdates" class="inputs passport_exp_date" style="" value="">
                            </label>
                        </div>


                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Address: <input type="" id="address" name="address" class="inputs address" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Gender: <input type="" id="gender" name="gender" class="inputs gender" style="" value="">
                            </label>
                        </div>

                        <div class="first-grid">
                            <label class="middle-name_label" style="" for="">
                                Occupation: <input type="" id="occupation" name="occupation" class="inputs occupation" style="" value="">
                            </label>
                        </div>

                    </div>
                    <!-- </div> -->
                    <div class="second-row-grid">
                        <div class="first-grid">
                            <label class="firstname_label" style="" for="">
                                Nationality: <input type="" id="nationality" name="nationality" class="inputs nationality" style="" value="">
                            </label>
                        </div>
                    </div>



                    <label class="personal" style="" for="">Emergency Contact</label>

                    <div class="second-row-grid">
                        <div class="second-grid">
                            <label class="firstname_label" style="" for="">
                                Name: <input type="" id="ecname" name="ecname" class="inputs phone" style="" value="">
                            </label>
                        </div>

                        <div class="second-grid">
                            <label class="firstname_label" style="" for="">
                                Phone: <input type="" id="ecphone" name="ecphone" class="inputs phone" style="" value="">
                            </label>
                        </div>
                    </div>

                    <div class="second-row-grid">
                        <div class="second-grid">
                            <label class="middle-name_label" style="" for="">
                                Relationship: <input type="" id="ecrilationship" name="ecrilationship" class="inputs relationship" style="" value="">
                            </label>
                        </div>
                    </div>

                    <label class="personal" style="" for="">Cuba Travel(if applicable)</label>

                    <div>
                        <label class="firstname_label" style="" for="">
                            How many times have you traveled to Cuba (if applicable)? <input type="" id="cttimes" name="cttimes" class="inputs how_travel" style="" value="">
                        </label>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            If born in Cuba, when did you leave(if applicable)? <input type="" id="ctborn" name="ctborn" class="inputs born" style="" value="">
                        </label>
                    </div>

                    <div class="second-row-grid">
                        <div class="second-grid">
                            <label class="firstname_label" style="" for="">
                                Cuban Passport Number (if applicable): <input type="text" id="cpssportnumber" name="cpssportnumber" class="inputs applicable" style="" value="">
                            </label>
                        </div>

                        <div class="second-grid">
                            <label class="middle-name_label" style="" for="">
                                Expiration Date: <input type="" id="exdates" name="exdates" class="inputs exp_date" style="" value="">
                            </label>
                        </div>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            When was the last time you traveled to Cuba (if applicable)? <input type="" id="cwhen" name="cwhen" class="inputs last_time" style="" value="">
                        </label>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            Which license did you use (if applicable)? <input type="" id="cwhich" name="cwhich" class="inputs license" style="" value="">
                        </label>
                    </div>

                    <label class="personal" style="" for="">Accommodations</label>

                    <div>
                        <label class="firstname_label" style="" for="">
                            Name of Accommodations: <input type="" id="nameofaccommodations" name="nameofaccommodations" class="inputs n_accomodation" style="" value="">
                        </label>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            Please select one:&nbsp;&nbsp;
                            <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Standard">Own Room&nbsp;&nbsp;
                            <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Executive">Shared Room (shared bed)&nbsp;&nbsp;
                            <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Junior">Shared Room (separate beds) &nbsp;&nbsp;
                        </label>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            if shared room, name of roommate: <input type="" id="nameofroommates" name="nameofroommates" class="inputs roommate" style="" value="">
                        </label>
                    </div>


                    <div>
                        <label class="firstname_label" style="" for="">
                            Please select one:&nbsp;&nbsp;
                            <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Standard">Standard Room&nbsp;&nbsp;
                            <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Executive">Executive Room&nbsp;&nbsp;
                            <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Junior">Junior Suite &nbsp;&nbsp;
                            <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Senior">Senior Suite &nbsp;&nbsp;
                        </label>
                    </div>

                    <div>
                        <label class="firstname_label" style="" for="">
                            Notes/ Special Requests: <input type="" id="notes" name="notes" class="inputs notes" style="" value="">
                        </label>
                    </div>

                    <label class="personal" style="" for="">Special Needs/ Allergies</label>

                    <div>
                        <label class="firstname_label" style="" for="">
                            Please let us know of any special needs or allergies you have so we may better accommodate you: <input type="" id="specialneeds1" name="specialneeds1" class="inputs allergies" style="" value="">
                        </label>
                    </div>


                    <label class="pledge">
                        I, <input type="" id="filledapp" name="filledapp" class="inputs i" style="" value="">, have filled this application out to the best of my knowledge.
                        I acknowledge that I am going to Cuba(if applicable) on a International Business & Travel Opportunities, LLC People-to-People (CBF PTP) trip.
                        I agree to follow the itinerary as set out for me by International Business & Travel Opportunities, LLC Foundation.
                        I will not hold them accountable if I am found to be in violation of the law.
                    </label>

                    <div class="signature-grid">
                        <div class="sign-grid1">
                            <label style="" for="" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                            <div class="pad">
                                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature"></canvas>
                                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear" class="btn btn-primary  " data-action="clear">Clear</button>
                            </div>
                        </div>

                        <div class="sign-grid">
                            <label class="middle-name_label" style="" for="">
                                Date: <input type="" id="date" name="date" class="inputs email" style="" value="">
                            </label>
                        </div>
                    </div>
                </div>
        </div>

        <div class="spacer"></div>
        <div class="right-logo-holder">
            <div class="right-logo"></div>
        </div>
        <h5 class="service_provider">TRAVEL SERVICE PROVIDER – PARTICIPANT CONTRACT</h5>
        <p>This agreement sets forth the terms and conditions under which we,<b>International Business & Travel Opportunities, LLC</b>, in return for payment of the amount indicated as
            the total price.</p>

        <p><b>Responsibility:</b> We, as the principal, are responsible to you for arranging the travel program and confirming that all activities promised will be
            executed, or, in the event an activity cannot happen, that we will find a suitable replacement. </p>

        <p>As evidenced by my signature below, <b>International Business & Travel Opportunities, LLC</b> shall not be responsible for any breach of contract or any intentional action on the
            part of the below-named parties which results in any loss, damage, delay, or injury to property, participant, or participant</p>

        <p><b>International Business & Travel Opportunities, LLC</b> is not responsible for natural disasters or unforeseeable acts of nature for breakdown of machinery, acts of governments
            or other authorities, war, whether declared or not, hostilities, civil disturbances, strikes, pilferage, epidemics, quarantines, customs regulations,
            delays, or cancelations of or changes in itinerary or schedules, omissions, vendor defaults, or for any loss beyond their control.</p>

        <p><b>International Business & Travel Opportunities, LLC</b> is not responsible for any loss or damage resulting from improper or insufficient passports, visas, or other documents.
            <b>International Business & Travel Opportunities, LLC</b> is not liable or responsible for any additional expenses or liability, medically or otherwise, sustained or incurred by the
            below-names participants as a result of injury, damage or loss, or as a result of the cause set forth above in this document or through the
            participation in any activities or events engages in during the program.
        </p>

        <label class="personal" style="" for="">I understand and acknowledge International Business & Travel Opportunities, LLC provides NO travel insurance coverage</label>

        <p><b>Reservations and Payment:</b> We will confirm the reservation within 7 days after receiving the reservation request.
            If you have elected that <b>International Business & Travel Opportunities, LLC</b> book your flights and the flights are fully booked, we will advise you of alternate travel
            dates. The ticket will be issued only after the reservation is confirmed, and you must pay the full flight price when the ticket is issued.
            All checks, money orders, and credit card drafts must be made payable to <b>International Business & Travel Opportunities, LLC</b>
            If you have elected to book your own flights, it is solely your responsibility to do so. <b>International Business & Travel Opportunities, LLC</b> will not be held responsible if
            there are no available flights after booking your program. </p>

        <p><b>Travel Program Price:</b> The travel program price as laid out in the Cost Inclusions represents your cost for all items mentioned in the Cost
            Inclusions of your program. If there is anything else you require, you will need to request that your Cost Inclusions be adjusted to meet your
            needs before confirming and paying for your program. </p>

        <p><b>Airport Taxes:</b> Travel program price does not include airport taxes unless otherwise stated in the Cost Inclusions. This is the responsibility of
            the participant to pay at the airport. </p>

        <p><b>Cancellation and Refund:</b> If you cancel your reservation or if you fail to travel on the Travel Program, your right to receive a refund is limited,
            as set forth below:</p>

        <p>If your notice is received:</p>

        <ul>
            <li>More than 10 Weeks before departure, you are entitled to a 100% refund (less the non-refundable deposit).</li>
            <li>More than 45 days before departure, you are entitled to a 50% refund (less the non-refundable deposit). </li>
            <li>Within 45 days before departure, you are not entitled to a refund. </li>
            <li>At any time, if we resell your Travel Program space, you are entitled to a full refund (less the non-refundable deposit).</li>
        </ul>

        <p>We have no right to cancel the program less than 10 days before departure except in circumstances that make it physically impossible to
            perform the trip. If this occurs, we will notify you as soon as possible but no later than the scheduled departure date. If the flight is canceled, a
            full refund will be made to you within 14 days after cancelation.
            The rights and remedies made available under this contract are in addition to any other rights or remedies available under applicable law.
            However, we offer refunds under this contract with the express understanding that the receipt of the refund by you waives any additional
            remedies. </p>

        <p><b>International Travel Program:</b> The program schedule is subject to the Cuban government law and OFAC review. If not honored, a full refund
            will be made to you automatically. International Travel Program: The program schedule is subject to the Cuban government law and OFAC review. If not honored, a full refund
            will be made to you automatically. </p>

        <p>Signing of this document constitutes my acceptance of these terms and conditions, and the undersigned agree to indemnify and hold <b>International Business & Travel Opportunities, LLC</b> harmless from any legal action or attorney fees, expenses, and damage resulting from matters set forth herein before. </p>

        <div class="spacer"></div>

        <div class="signature-grid">
            <div class="sign-grid1">
                <label for="" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>
                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature1"></canvas>
                    <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear1" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>
            </div>

            <div class="sign-grid">
                <label class="middle-name_label" style="" for="">
                    Date: <input type="" id="date1" name="date1" class="inputs email" style="" value="">
                </label>
            </div>
        </div>

        <div class="spacer"></div>
        <div class="right-logo-holder">
            <div class="right-logo"></div>
        </div>
        <h5 class="service_provider">TRAVEL SERVICE PROVIDER – FLIGHT AGREEMENT</h5>
        <p>
            This agreement sets forth the terms and conditions under which we, <b>International Business & Travel Opportunities, LLC</b>, in return for payment of the amount indicated
            as the total price, agree to provide you this flight (if applicable). Please verify with your <b>International Business & Travel Opportunities, LLC</b> agent if the total price of
            your package includes a flight.
        </p>

        <p><b>Responsibility:</b> We, as the principal, are responsible to you for arranging the flight (if elected), provided however, that in the absence of
            negligence on our part, we are not responsible for personal injury or property damage caused by the air carrier or other suppliers of any of the
            services offered in connection with the charter</p>

        <p><b>Reservations and Payment:</b> We will confirm your reservation within 7 days after receiving your request. If the flights are fully booked for your
            chosen dates, we will advise you of alternate travel dates. The ticket will be issued only after the reservation is confirmed, and you must pay the
            full price when the ticket is issued. All checks, money orders, and credit card drafts must be made payable to <b>International Business & Travel Opportunities, LLC</b></p>

        <label class="personal" style="" for="">Airport taxes and excess baggage charges are NOT included in the price and will be collected separately.</label>

        <p><b>Health Insurance:</b> Basic health insurance is mandatory when traveling to Cuba(if applicable). It will be included in your flight purchase. If you are interested
            in receiving more information about this coverage, please advise <b>International Business & Travel Opportunities, LLC</b></p>

        <p><b>Travel Insurance:</b> Travel Insurance is not included. If you are interested in purchasing Travel Insurance coverage, please advise your travel
            agent. </p>

        <p><b>Baggage:</b> This will vary depending on which air carrier you are flying with. You will be informed upon booking your ticket. International Business & Travel Opportunities, LLC does not take responsibility for baggage loss or baggage charges and is subject to the airline or charter company as indicated in the
            airline or charter’s company form. </p>

        <p><b>Cancelation and Refund:</b> This is determined by the air carrier.</p>

        <ul>
            <li>All requests for refunds must be sent to us in writing (e-mail, post, or facsimile). </li>
            <li>We have no right to cancel the flight less than 10 days before departure except in circumstances that make it physically impossible to
                perform the trip. If this occurs, we will notify you as soon as possible but no later than the scheduled departure date. If the flight is
                canceled, a full refund will be made to you within 14 days after cancelation.</li>
            <li>The rights and remedies made available under this contract are in addition to any other rights or remedies available under applicable
                law. However, we offer refunds under this contract with the express understanding that the receipt of the refund by you waives any
                additional remedies. </li>
        </ul>

        <p><b>International Flights:</b> The operation of the charter flight is subject to the Cuban government granting landing rights. If the air carrier cannot
            obtain landing rights, the flight will be canceled, and a full refund will be made to you automatically</p>

        <p>Furthermore, <b>International Business & Travel Opportunities, LLC</b> is not responsible for natural disasters or unforeseeable acts of nature for breakdown of machinery, acts of
            governments or other authorities, war, whether declared or not, hostilities, civil disturbances, strikes, pilferage, epidemics, quarantines, customs
            regulations, delays, or cancelations of or changes in itinerary or schedules, omissions, vendor defaults, or for any loss beyond their control.</p>

        <p>Furthermore, <b>International Business & Travel Opportunities, LLC</b> is not responsible for any loss or damage resulting from improper or insufficient passports, visas, or other
            documents. <b>International Business & Travel Opportunities, LLC</b> is not liable or responsible for any additional expenses or liability, medically or otherwise, sustained or
            incurred by the below-names participants as a result of injury, damage or loss, or as a result of the cause set forth above in this document or
            through the participation in any activities or events engages in during the program.</p>

        <label class="personal" style="" for="">I understand and acknowledge International Business & Travel Opportunities, LLC provides NO travel insurance coverage.</label>

        <p>I have read and agree to the terms and conditions of the Operator-Participant Contract. I have signed up for the flight specified above and on
            the Reservation Form.</p>

        <div class="signature-grid">
            <div class="sign-grid1">


                <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;display:inline;" class="sign-pad" id="signature2"></canvas>
                    <button style="padding:0;margin:0;width:50px;display:inline;position:relative;bottom:6px;" type="button" id="clear2" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>


            </div>

            <div class="sign-grid">
                <label class="middle-name_label" style="" for="">
                    Date: <input type="" id="date2" name="date2" class="inputs email" style="" value="">
                </label>
            </div>
        </div>

        <div class="spacer"></div>
        <div class="right-logo-holder">
            <div class="right-logo"></div>
        </div>
        <h5 class="service_provider">MEDIA RELEASE WAIVER</h5>

        <p>I hereby grant International Business & Travel Opportunities, LLC permission to use my likeness in a photograph,
            video, or other digital media in any and all of its publications, including web-based publications, without payment or
            other consideration.
        </p>

        <p>I understand and agree that all photos taken by International Business & Travel Opportunities, LLC staff will become
            the property of International Business & Travel Opportunities, LLC.</p>

        <p>I hereby irrevocably authorize the International Business & Travel Opportunities, LLC to edit, alter, copy, exhibit,
            publish, or distribute these photos for any lawful purpose. In addition, I waive any right to inspect or approve the
            finished product wherein my likeness appears. Additionally, I waive any right to royalties or other compensation
            arising or related to the use of the photo.</p>

        <label class="personal" style="" for="">I HAVE READ AND UNDERSTAND THE ABOVE MEDIA RELEASE WAIVER.</label>

        <div class="second-row-grid">
            <div class="second-grid">
                <label class="firstname_label" style="" for="">
                    Print Name: <input type="" id="printname" name="printname" class="inputs print_name" style="" value="">
                </label>
            </div>
        </div>

        <div class="signature-grid">
            <div class="sign-grid1">

                <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature3"></canvas>
                    <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear3" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>


            </div>

            <div class="sign-grid">
                <label class="middle-name_label" style="" for="">
                    Date: <input type="" id="date3" name="date3" class="inputs email" style="" value="">
                </label>
            </div>
        </div>

        <div class="spacer"></div>
        <h5 class="service_provider">LIABILITY RELEASE WAIVER</h5>

        <p>This agreement releases International Business & Travel Opportunities, LLC from all liability relating to injuries that
            may occur during the People-to-People program. I agree to hold International Business & Travel Opportunities, LLC
            entirely free from any liability, including financial responsibility for injuries incurred, regardless of whether injuries are
            caused by negligence. </p>

        <p>I also acknowledge the risks involved in traveling and visiting a foreign country. These include but are not limited to
            theft, illness, or general accidents. I swear that I am participating voluntarily and that all risks have been made clear
            to me. Additionally, I do not have any conditions that will increase my likelihood of experiencing injuries while
            engaging in this program. </p>

        <p>By signing below, I forfeit all right to bring a suit against International Business & Travel Opportunities, LLC for any
            reason. I will also make every effort to obey safety precautions and ask for clarification when needed. </p>

        <label class="personal" style="" for="">I HAVE READ AND UNDERSTAND THE ABOVE MEDIA RELEASE WAIVER.</label>

        <div class="second-row-grid">
            <div class="second-grid">
                <label class="firstname_label" style="" for="">
                    Print Name: <input type="" id="printname1" name="printname1" class="inputs print_name" style="" value="">
                </label>
            </div>
        </div>

        <div class="signature-grid">
            <div class="sign-grid1">


                <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature4"></canvas>
                    <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear4" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>



            </div>

            <div class="sign-grid">
                <label class="middle-name_label" style="" for="">
                    Date: <input type="" id="date4" name="date4" class="inputs email" style="" value="">
                </label>
            </div>
        </div>


        <div class="spacer"></div>
        <div class="right-logo-holder">
            <div class="right-logo"></div>
        </div>

        <div class="visa">
            <div>
                <h1>Visa</h1>
                <p>APPLICATION</p>
            </div>
        </div>
        <div class="spacer"></div>

        <label>
            I, <input type="" id="Vname" name="Vname" class="inputs i" style="" value="">, and authorized and/or licensed traveler to Cuba(if applicable),
            request that International Business & Travel Opportunities, LLC assists on my behalf with the application to obtain and receive an
            Entry Permit to Cuba(if applicable).
        </label>

        <p>This document represents an application only. It is entirely within the authority of the Government of
            Cuba(if applicable) to review and process the information contained in the application and to approve or deny the
            visa. International Business & Travel Opportunities, LLC is not responsible or liable to the licensed traveler, if the Government of Cuba(if applicable)
            decides to deny the application and/ or entry into Cuba(if applicable).</p>

        <div class="signature-grid">
            <div class="sign-grid1">

                <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="Vsignature"></canvas>
                    <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear5" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>


            </div>

            <div class="sign-grid">
                <label class="middle-name_label" style="" for="">
                    Date: <input type="" id="Vdate" name="Vdate" class="inputs email" style="" value="">
                </label>
            </div>
        </div>

        <div class="second-row-grid">

            <div class="second-grid">
                <label class="firstname_label" style="" for="">
                    Passport #: <input type="" id="Vpassportnumber" name="Vpassportnumber" class="inputs passport_visa" style="" value="">
                </label>
            </div>

            <div class="second-grid">
                <label class="middle-name_label" style="" for="">
                    Expiration Date: <input type="" id="Vexpirationdates" name="Vexpirationdates" class="inputs passport_exp_date" style="" value="">
                </label>
            </div>

            <div class="second-grid">
                <label class="middle-name_label" style="" for="">
                    Country of Issue: <input type="" id="Vcountryofissue" name="Vcountryofissue" class="inputs country" style="" value="">
                </label>
            </div>
        </div>

        <div class="spacer"></div>
        <div class="spacer"></div>


        <div class="spacer"></div>
        <div class="right-logo-holder">
            <div class="right-logo"></div>
        </div>
        <h5 class="service_provider">TRAVEL AFFIDAVIT - General / Specific Licenses</h5>

        <p>I understand that, travel transactions related to Cuba(if applicable) must be directly incident to one of the selfauthorizing general license purposeful travel categories or travel authorized under the auspice of a
            specific license granted on a case-by-case basis. Under current US travel restrictions with respect to
            Cuba, travel-related transactions are prohibited except for the following categories and that by signing
            my name at the bottom of this Affidavit, I declare that I fall under the category I have checked below. </p>

        <input type="checkbox" name="check1" id="check1" value="checked"><label>1. Family Visits</label><br>
        <input type="checkbox" name="check2" id="check2" value="checked"> <label>2. Official Business of the U.S. Government, Foreign Governments, and Certain Intergovernmental Organizations</label><br>
        <input type="checkbox" name="check3" id="check3" value="checked"> <label>3. Journalist Activities </label> <br>
        <input type="checkbox" name="check4" id="check4" value="checked"> <label>4. Professional Research </label><br>
        <input type="checkbox" name="check5" id="check5" value="checked"> <label>5. Professional Meetings or Conferences </label><br>
        <label for="">6. Educational Activities</label><br>
        <input style="margin-left:20px;" type="checkbox" name="check6a" id="check6a" value="checked"> <label>General license for educational activities</label> <br>
        <input style="margin-left:20px;" type="checkbox" name="check6b" id="check6b" value="checked"> <label>General license for people-to-people travel </label><br>
        <input type="checkbox" name="check7" id="check7" value="checked"> <label>7. Religious Activities in Cuba(if applicable) </label><br>
        <input type="checkbox" name="check8" id="check8" value="checked"> <label>8. Public Performances, Clinics, Workshops, Athletic, & Other </label><br>
        <input type="checkbox" name="check9" id="check9" value="checked"> <label>9. Support for the Cuban(if applicable) People </label><br>
        <input type="checkbox" name="check10" id="check10" value="checked"> <label>10. Humanitarian Projects</label> <br>
        <input type="checkbox" name="check11" id="check11" value="checked"> <label>11. Activities of Private Foundation / Research / Educational Institutions </label><br>
        <input type="checkbox" name="check12" id="check12" value="checked"> <label>12. Exportation & Re-exportation of Certain Internet-Based Services </label><br>
        <input type="checkbox" name="check13" id="check13" value="checked"> <label>13. Transactions Related to Information & Informational Materials</label> <br>
        <input type="checkbox" name="check14" id="check14" value="checked"> <label>14. Certain Export Transactions</label><br>
        <input type="checkbox" name="check15" id="check15" value="checked"> <label>15. Specific License (OFAC License #:<input type="" id="Olicensenumber" class="inputs i" style="" value="">)</label> <br>

        <div class="spacer"></div>

        <div class="second-row-grid">
            <div class="second-grid">
                <label class="firstname_label" style="" for="">
                    Name: <input type="" id="TAname" name="TAname" class="inputs name_afidavit" style="" value="">
                </label>
            </div>

            <div class="second-grid">
                <label class="middle-name_label" style="" for="">
                    Address: <input type="" id="TAaddress" name="TAaddress" class="inputs address_afidavit" style="" value="">
                </label>
            </div>
        </div>

        <div class="signature-grid">
            <div class="sign-grid">
                <label class="firstname_label" style="" for="">
                    Date of Birth: <input type="" id="TAdateofbirth" name="TAdateofbirth" class="inputs passport_number" style="" value="">
                </label>
            </div>

            <div class="sign-grid1">

                <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                <div class="pad">
                    <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="TAsignature"></canvas>
                    <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear6" class="button clear btn btn-primary  " data-action="clear">Clear</button>
                </div>


            </div>
        </div>
        <p>I certify that the above information is true and correct.</p>

        <div class="spacer"></div>

        <center><button type="button" id="submit" data-action="submit" name="submit" class="btn btn-primary btn btn-primary-primary">Submit</button></center>
        <!-- -->
        <div class="spacer"></div>
        </form>
    <?php
    } //functionclose
    ?>


    <?php





    if ($_SESSION['user']->user_group == 0) {

        unfilled_form();
    } else if ($filled) {

        foreach ($filled as $fill) {




            ?>

            <div class="form-inputs">
                <form method="POST" id="form_upload" enctype="multipart/form-data">

                    <div class="form-group input_image" ">
                            <div class=" input-group input-file" name="Fichier1">
                        <span class="input-group-btn">
                            <button style="background-color:#233f91;color:#fff;border:1px solid #233f91;" class="btn btn-default btn-choose" type="button">Upload Passport Image</button>
                        </span>
                        <input type="text" class="form-control" placeholder='Choose a file...' />
                        <span class="input-group-btn">
                            <button style="background-color:#ed1c24;" class="btn btn-warning btn-reset" type="button">Delete</button>
                        </span>
                    </div>
            </div>

            <div class="form-group first" style="width:100%;">
                <label style="font-weight:bold;width:100%;" for="">
                    GROUP NAME / Group Leader: <input type="" id="groupname" class="group_name_input inputs" style="" value="<?php echo $fill->groupname; ?>">
                </label>
            </div>

            <label class="personal" style="" for="">Personal Information (EXACTLY as it appears on your passport)</label>

            <div class="form-group main-form" style="width:100%;">

                <div class="first-row-grid">

                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            First Name: <input type="text" id="fristname" name="fristname" class="inputs first_name" style="" value="<?php echo $fill->fristname; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            Middle Name: <input type="" id="middlename" name="middlename" class="inputs middle-name" style="" value="<?php echo $fill->middlename; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Last Name: <input type="" id="lastname" name="lastname" class="inputs last_name" style="" value="<?php echo $fill->lastname; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            Mother's Maided Name: <input type="" id="mothersmaidenname" name="mothersmaidenname" class="inputs maiden-name" style="" value="<?php echo $fill->mothersmaidenname; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            Trip Dates: <input type="" id="tripdates" name="tripdates" class="inputs trip_dates" style="" value="<?php echo $fill->tripdates; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Phone: <input type="" id="phone" name="phone" class="inputs phone" style="" value="<?php echo $fill->phone; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            E-mail: <input type="email" id="email" name="email" class="inputs email" style="" value="<?php echo $fill->email; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Passport Number: <input type="" id="pssportnumber" name="pssportnumber" class="inputs passport_number" style="" value="<?php echo $fill->pssportnumber; ?>">
                        </label>
                    </div>



                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            Passport Expiration Date: <input type="" id="pssportxpirationdates" name="pssportxpirationdates" class="inputs passport_exp_date" style="" value="<?php echo $fill->pssportxpirationdates; ?>">
                        </label>
                    </div>


                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Address: <input type="" id="address" name="address" class="inputs address" style="" value="<?php echo $fill->address; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Gender: <input type="" id="gender" name="gender" class="inputs gender" style="" value="<?php echo $fill->gender; ?>">
                        </label>
                    </div>

                    <div class="first-grid">
                        <label class="middle-name_label" style="" for="">
                            Occupation: <input type="" id="occupation" name="occupation" class="inputs occupation" style="" value="<?php echo $fill->occupation; ?>">
                        </label>
                    </div>

                </div>
                <!-- </div> -->
                <div class="second-row-grid">
                    <div class="first-grid">
                        <label class="firstname_label" style="" for="">
                            Nationality: <input type="" id="nationality" name="nationality" class="inputs nationality" style="" value="<?php echo $fill->nationality; ?>">
                        </label>
                    </div>
                </div>



                <label class="personal" style="" for="">Emergency Contact</label>

                <div class="second-row-grid">
                    <div class="second-grid">
                        <label class="firstname_label" style="" for="">
                            Name: <input type="" id="ecname" name="ecname" class="inputs phone" style="" value="<?php echo $fill->emergency_name; ?>">
                        </label>
                    </div>

                    <div class="second-grid">
                        <label class="firstname_label" style="" for="">
                            Phone: <input type="" id="ecphone" name="ecphone" class="inputs phone" style="" value="<?php echo $fill->emergency_phone; ?>">
                        </label>
                    </div>
                </div>

                <div class="second-row-grid">
                    <div class="second-grid">
                        <label class="middle-name_label" style="" for="">
                            Relationship: <input type="" id="ecrilationship" name="ecrilationship" class="inputs relationship" style="" value="<?php echo $fill->emergency_relationship; ?>">
                        </label>
                    </div>
                </div>

                <label class="personal" style="" for="">Cuba Travel(if applicable)</label>

                <div>
                    <label class="firstname_label" style="" for="">
                        How many times have you traveled to Cuba (if applicable)? <input type="" id="cttimes" name="cttimes" class="inputs how_travel" style="" value="<?php echo $fill->cuba_how_many_times; ?>">
                    </label>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        If born in Cuba, when did you leave(if applicable)? <input type="" id="ctborn" name="ctborn" class="inputs born" style="" value="<?php echo $fill->cuba_born_in_cuba; ?>">
                    </label>
                </div>

                <div class="second-row-grid">
                    <div class="second-grid">
                        <label class="firstname_label" style="" for="">
                            Cuban Passport Number (if applicable): <input type="text" id="cpssportnumber" name="cpssportnumber" class="inputs applicable" style="" value="<?php echo $fill->cuban_passport_number; ?>">
                        </label>
                    </div>

                    <div class="second-grid">
                        <label class="middle-name_label" style="" for="">
                            Expiration Date: <input type="" id="exdates" name="exdates" class="inputs exp_date" style="" value="<?php echo $fill->cuba_exp_date; ?>">
                        </label>
                    </div>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        When was the last time you traveled to Cuba (if applicable)? <input type="" id="cwhen" name="cwhen" class="inputs last_time" style="" value="<?php echo $fill->cuba_last_time; ?>">
                    </label>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        Which license did you use (if applicable)? <input type="" id="cwhich" name="cwhich" class="inputs license" style="" value="<?php echo $fill->cuba_wich_licence; ?>">
                    </label>
                </div>

                <label class="personal" style="" for="">Accommodations</label>

                <div>
                    <label class="firstname_label" style="" for="">
                        Name of Accommodations: <input type="" id="nameofaccommodations" name="nameofaccommodations" class="inputs n_accomodation" style="" value="<?php echo $fill->accomodation_name; ?>">
                    </label>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        Please select one:&nbsp;&nbsp;
                        <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Standard" <?php if ($fill->accomodation_roomtype1 == "Standard") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>Own Room&nbsp;&nbsp;
                        <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Executive" <?php if ($fill->accomodation_roomtype1 == "Executive") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>>Shared Room (shared bed)&nbsp;&nbsp;
                        <input type="radio" name="roomtype" id="roomtype" class="inputs roomtype" style="" value="Junior" <?php if ($fill->accomodation_roomtype1 == "Junior") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>Shared Room (separate beds) &nbsp;&nbsp;
                    </label>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        if shared room, name of roommate: <input type="" id="nameofroommates" name="nameofroommates" class="inputs roommate" style="" value="<?php echo $fill->accomodation_roommate; ?>">
                    </label>
                </div>


                <div>
                    <label class="firstname_label" style="" for="">
                        Please select one:&nbsp;&nbsp;
                        <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Standard" <?php if ($fill->accomodation_roomtype2 == "Standard") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>>Standard Room&nbsp;&nbsp;
                        <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Executive" <?php if ($fill->accomodation_roomtype2 == "Executive") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?>>Executive Room&nbsp;&nbsp;
                        <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Junior" <?php if ($fill->accomodation_roomtype2 == "Junior") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>Junior Suite &nbsp;&nbsp;
                        <input type="radio" name="roomtype2" id="roomtype2" class="inputs roomtype" style="" value="Senior" <?php if ($fill->accomodation_roomtype2 == "Senior") {
                                                                                                                                        echo "checked";
                                                                                                                                    } ?>>Senior Suite &nbsp;&nbsp;
                    </label>
                </div>

                <div>
                    <label class="firstname_label" style="" for="">
                        Notes/ Special Requests: <input type="" id="notes" name="notes" class="inputs notes" style="" value="<?php echo $fill->accomodation_notes; ?>">
                    </label>
                </div>

                <label class="personal" style="" for="">Special Needs/ Allergies</label>

                <div>
                    <label class="firstname_label" style="" for="">
                        Please let us know of any special needs or allergies you have so we may better accommodate you: <input type="" id="specialneeds1" name="specialneeds1" class="inputs allergies" style="" value="<?php echo $fill->accomodation_special_needs; ?>">
                    </label>
                </div>


                <label class="pledge">
                    I, <input type="" id="filledapp" name="filledapp" class="inputs i" style="" value="<?php echo $fill->accomodation_pledge; ?>">, have filled this application out to the best of my knowledge.
                    I acknowledge that I am going to Cuba(if applicable) on a International Business & Travel Opportunities, LLC People-to-People (CBF PTP) trip.
                    I agree to follow the itinerary as set out for me by International Business & Travel Opportunities, LLC Foundation.
                    I will not hold them accountable if I am found to be in violation of the law.
                </label>

                <div class="signature-grid">
                    <div class="sign-grid1">
                        <label style="" for="" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

                        <div class="pad">
                            <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature"></canvas>
                            <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear" class="btn btn-primary  " data-action="clear">Clear</button>
                        </div>
                    </div>

                    <div class="sign-grid">
                        <label class="middle-name_label" style="" for="">
                            Date: <input type="" id="date" name="date" class="inputs email" style="" value="<?php echo $fill->accomodation_date; ?>">
                        </label>
                    </div>
                </div>
            </div>
    </div>

    <div class="spacer"></div>
    <div class="right-logo-holder">
        <div class="right-logo"></div>
    </div>
    <h5 class="service_provider">TRAVEL SERVICE PROVIDER – PARTICIPANT CONTRACT</h5>
    <p>This agreement sets forth the terms and conditions under which we,<b>International Business & Travel Opportunities, LLC</b>, in return for payment of the amount indicated as
        the total price.</p>

    <p><b>Responsibility:</b> We, as the principal, are responsible to you for arranging the travel program and confirming that all activities promised will be
        executed, or, in the event an activity cannot happen, that we will find a suitable replacement. </p>

    <p>As evidenced by my signature below, <b>International Business & Travel Opportunities, LLC</b> shall not be responsible for any breach of contract or any intentional action on the
        part of the below-named parties which results in any loss, damage, delay, or injury to property, participant, or participant</p>

    <p><b>International Business & Travel Opportunities, LLC</b> is not responsible for natural disasters or unforeseeable acts of nature for breakdown of machinery, acts of governments
        or other authorities, war, whether declared or not, hostilities, civil disturbances, strikes, pilferage, epidemics, quarantines, customs regulations,
        delays, or cancelations of or changes in itinerary or schedules, omissions, vendor defaults, or for any loss beyond their control.</p>

    <p><b>International Business & Travel Opportunities, LLC</b> is not responsible for any loss or damage resulting from improper or insufficient passports, visas, or other documents.
        <b>International Business & Travel Opportunities, LLC</b> is not liable or responsible for any additional expenses or liability, medically or otherwise, sustained or incurred by the
        below-names participants as a result of injury, damage or loss, or as a result of the cause set forth above in this document or through the
        participation in any activities or events engages in during the program.
    </p>

    <label class="personal" style="" for="">I understand and acknowledge International Business & Travel Opportunities, LLC provides NO travel insurance coverage</label>

    <p><b>Reservations and Payment:</b> We will confirm the reservation within 7 days after receiving the reservation request.
        If you have elected that <b>International Business & Travel Opportunities, LLC</b> book your flights and the flights are fully booked, we will advise you of alternate travel
        dates. The ticket will be issued only after the reservation is confirmed, and you must pay the full flight price when the ticket is issued.
        All checks, money orders, and credit card drafts must be made payable to <b>International Business & Travel Opportunities, LLC</b>
        If you have elected to book your own flights, it is solely your responsibility to do so. <b>International Business & Travel Opportunities, LLC</b> will not be held responsible if
        there are no available flights after booking your program. </p>

    <p><b>Travel Program Price:</b> The travel program price as laid out in the Cost Inclusions represents your cost for all items mentioned in the Cost
        Inclusions of your program. If there is anything else you require, you will need to request that your Cost Inclusions be adjusted to meet your
        needs before confirming and paying for your program. </p>

    <p><b>Airport Taxes:</b> Travel program price does not include airport taxes unless otherwise stated in the Cost Inclusions. This is the responsibility of
        the participant to pay at the airport. </p>

    <p><b>Cancellation and Refund:</b> If you cancel your reservation or if you fail to travel on the Travel Program, your right to receive a refund is limited,
        as set forth below:</p>

    <p>If your notice is received:</p>

    <ul>
        <li>More than 10 Weeks before departure, you are entitled to a 100% refund (less the non-refundable deposit).</li>
        <li>More than 45 days before departure, you are entitled to a 50% refund (less the non-refundable deposit). </li>
        <li>Within 45 days before departure, you are not entitled to a refund. </li>
        <li>At any time, if we resell your Travel Program space, you are entitled to a full refund (less the non-refundable deposit).</li>
    </ul>

    <p>We have no right to cancel the program less than 10 days before departure except in circumstances that make it physically impossible to
        perform the trip. If this occurs, we will notify you as soon as possible but no later than the scheduled departure date. If the flight is canceled, a
        full refund will be made to you within 14 days after cancelation.
        The rights and remedies made available under this contract are in addition to any other rights or remedies available under applicable law.
        However, we offer refunds under this contract with the express understanding that the receipt of the refund by you waives any additional
        remedies. </p>

    <p><b>International Travel Program:</b> The program schedule is subject to the Cuban government law and OFAC review. If not honored, a full refund
        will be made to you automatically. International Travel Program: The program schedule is subject to the Cuban government law and OFAC review. If not honored, a full refund
        will be made to you automatically. </p>

    <p>Signing of this document constitutes my acceptance of these terms and conditions, and the undersigned agree to indemnify and hold <b>International Business & Travel Opportunities, LLC</b> harmless from any legal action or attorney fees, expenses, and damage resulting from matters set forth herein before. </p>

    <div class="spacer"></div>

    <div class="signature-grid">
        <div class="sign-grid1">
            <label for="" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>
            <div class="pad">
                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature1"></canvas>
                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear1" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>
        </div>

        <div class="sign-grid">
            <label class="middle-name_label" style="" for="">
                Date: <input type="" id="date1" name="date1" class="inputs email" style="" value="<?php echo $fill->travel_service_date; ?>">
            </label>
        </div>
    </div>

    <div class="spacer"></div>
    <div class="right-logo-holder">
        <div class="right-logo"></div>
    </div>
    <h5 class="service_provider">TRAVEL SERVICE PROVIDER – FLIGHT AGREEMENT</h5>
    <p>
        This agreement sets forth the terms and conditions under which we, <b>International Business & Travel Opportunities, LLC</b>, in return for payment of the amount indicated
        as the total price, agree to provide you this flight (if applicable). Please verify with your <b>International Business & Travel Opportunities, LLC</b> agent if the total price of
        your package includes a flight.
    </p>

    <p><b>Responsibility:</b> We, as the principal, are responsible to you for arranging the flight (if elected), provided however, that in the absence of
        negligence on our part, we are not responsible for personal injury or property damage caused by the air carrier or other suppliers of any of the
        services offered in connection with the charter</p>

    <p><b>Reservations and Payment:</b> We will confirm your reservation within 7 days after receiving your request. If the flights are fully booked for your
        chosen dates, we will advise you of alternate travel dates. The ticket will be issued only after the reservation is confirmed, and you must pay the
        full price when the ticket is issued. All checks, money orders, and credit card drafts must be made payable to <b>International Business & Travel Opportunities, LLC</b></p>

    <label class="personal" style="" for="">Airport taxes and excess baggage charges are NOT included in the price and will be collected separately.</label>

    <p><b>Health Insurance:</b> Basic health insurance is mandatory when traveling to Cuba(if applicable). It will be included in your flight purchase. If you are interested
        in receiving more information about this coverage, please advise <b>International Business & Travel Opportunities, LLC</b></p>

    <p><b>Travel Insurance:</b> Travel Insurance is not included. If you are interested in purchasing Travel Insurance coverage, please advise your travel
        agent. </p>

    <p><b>Baggage:</b> This will vary depending on which air carrier you are flying with. You will be informed upon booking your ticket. International Business & Travel Opportunities, LLC does not take responsibility for baggage loss or baggage charges and is subject to the airline or charter company as indicated in the
        airline or charter’s company form. </p>

    <p><b>Cancelation and Refund:</b> This is determined by the air carrier.</p>

    <ul>
        <li>All requests for refunds must be sent to us in writing (e-mail, post, or facsimile). </li>
        <li>We have no right to cancel the flight less than 10 days before departure except in circumstances that make it physically impossible to
            perform the trip. If this occurs, we will notify you as soon as possible but no later than the scheduled departure date. If the flight is
            canceled, a full refund will be made to you within 14 days after cancelation.</li>
        <li>The rights and remedies made available under this contract are in addition to any other rights or remedies available under applicable
            law. However, we offer refunds under this contract with the express understanding that the receipt of the refund by you waives any
            additional remedies. </li>
    </ul>

    <p><b>International Flights:</b> The operation of the charter flight is subject to the Cuban government granting landing rights. If the air carrier cannot
        obtain landing rights, the flight will be canceled, and a full refund will be made to you automatically</p>

    <p>Furthermore, <b>International Business & Travel Opportunities, LLC</b> is not responsible for natural disasters or unforeseeable acts of nature for breakdown of machinery, acts of
        governments or other authorities, war, whether declared or not, hostilities, civil disturbances, strikes, pilferage, epidemics, quarantines, customs
        regulations, delays, or cancelations of or changes in itinerary or schedules, omissions, vendor defaults, or for any loss beyond their control.</p>

    <p>Furthermore, <b>International Business & Travel Opportunities, LLC</b> is not responsible for any loss or damage resulting from improper or insufficient passports, visas, or other
        documents. <b>International Business & Travel Opportunities, LLC</b> is not liable or responsible for any additional expenses or liability, medically or otherwise, sustained or
        incurred by the below-names participants as a result of injury, damage or loss, or as a result of the cause set forth above in this document or
        through the participation in any activities or events engages in during the program.</p>

    <label class="personal" style="" for="">I understand and acknowledge International Business & Travel Opportunities, LLC provides NO travel insurance coverage.</label>

    <p>I have read and agree to the terms and conditions of the Operator-Participant Contract. I have signed up for the flight specified above and on
        the Reservation Form.</p>

    <div class="signature-grid">
        <div class="sign-grid1">


            <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

            <div class="pad">
                <canvas style="border:1px dashed  #233f91;display:inline;" class="sign-pad" id="signature2"></canvas>
                <button style="padding:0;margin:0;width:50px;display:inline;position:relative;bottom:6px;" type="button" id="clear2" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>


        </div>

        <div class="sign-grid">
            <label class="middle-name_label" style="" for="">
                Date: <input type="" id="date2" name="date2" class="inputs email" style="" value="<?php echo $fill->flight_agreement_date; ?>">
            </label>
        </div>
    </div>

    <div class="spacer"></div>
    <div class="right-logo-holder">
        <div class="right-logo"></div>
    </div>
    <h5 class="service_provider">MEDIA RELEASE WAIVER</h5>

    <p>I hereby grant International Business & Travel Opportunities, LLC permission to use my likeness in a photograph,
        video, or other digital media in any and all of its publications, including web-based publications, without payment or
        other consideration.
    </p>

    <p>I understand and agree that all photos taken by International Business & Travel Opportunities, LLC staff will become
        the property of International Business & Travel Opportunities, LLC.</p>

    <p>I hereby irrevocably authorize the International Business & Travel Opportunities, LLC to edit, alter, copy, exhibit,
        publish, or distribute these photos for any lawful purpose. In addition, I waive any right to inspect or approve the
        finished product wherein my likeness appears. Additionally, I waive any right to royalties or other compensation
        arising or related to the use of the photo.</p>

    <label class="personal" style="" for="">I HAVE READ AND UNDERSTAND THE ABOVE MEDIA RELEASE WAIVER.</label>

    <div class="second-row-grid">
        <div class="second-grid">
            <label class="firstname_label" style="" for="">
                Print Name: <input type="" id="printname" name="printname" class="inputs print_name" style="" value="<?php echo $fill->media_print_name; ?>">
            </label>
        </div>
    </div>

    <div class="signature-grid">
        <div class="sign-grid1">

            <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

            <div class="pad">
                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature3"></canvas>
                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear3" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>


        </div>

        <div class="sign-grid">
            <label class="middle-name_label" style="" for="">
                Date: <input type="" id="date3" name="date3" class="inputs email" style="" value="<?php echo $fill->media_print_name; ?>">
            </label>
        </div>
    </div>

    <div class="spacer"></div>
    <h5 class="service_provider">LIABILITY RELEASE WAIVER</h5>

    <p>This agreement releases International Business & Travel Opportunities, LLC from all liability relating to injuries that
        may occur during the People-to-People program. I agree to hold International Business & Travel Opportunities, LLC
        entirely free from any liability, including financial responsibility for injuries incurred, regardless of whether injuries are
        caused by negligence. </p>

    <p>I also acknowledge the risks involved in traveling and visiting a foreign country. These include but are not limited to
        theft, illness, or general accidents. I swear that I am participating voluntarily and that all risks have been made clear
        to me. Additionally, I do not have any conditions that will increase my likelihood of experiencing injuries while
        engaging in this program. </p>

    <p>By signing below, I forfeit all right to bring a suit against International Business & Travel Opportunities, LLC for any
        reason. I will also make every effort to obey safety precautions and ask for clarification when needed. </p>

    <label class="personal" style="" for="">I HAVE READ AND UNDERSTAND THE ABOVE MEDIA RELEASE WAIVER.</label>

    <div class="second-row-grid">
        <div class="second-grid">
            <label class="firstname_label" style="" for="">
                Print Name: <input type="" id="printname1" name="printname1" class="inputs print_name" style="" value="<?php echo $fill->liability_print_name; ?>">
            </label>
        </div>
    </div>

    <div class="signature-grid">
        <div class="sign-grid1">


            <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

            <div class="pad">
                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="signature4"></canvas>
                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear4" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>



        </div>

        <div class="sign-grid">
            <label class="middle-name_label" style="" for="">
                Date: <input type="" id="date4" name="date4" class="inputs email" style="" value="<?php echo $fill->liability_date; ?>">
            </label>
        </div>
    </div>


    <div class="spacer"></div>
    <div class="right-logo-holder">
        <div class="right-logo"></div>
    </div>

    <div class="visa">
        <div>
            <h1>Visa</h1>
            <p>APPLICATION</p>
        </div>
    </div>
    <div class="spacer"></div>

    <label>
        I, <input type="" id="Vname" name="Vname" class="inputs i" style="" value="<?php echo $fill->visa_pledge; ?>">, and authorized and/or licensed traveler to Cuba(if applicable),
        request that International Business & Travel Opportunities, LLC assists on my behalf with the application to obtain and receive an
        Entry Permit to Cuba(if applicable).
    </label>

    <p>This document represents an application only. It is entirely within the authority of the Government of
        Cuba(if applicable) to review and process the information contained in the application and to approve or deny the
        visa. International Business & Travel Opportunities, LLC is not responsible or liable to the licensed traveler, if the Government of Cuba(if applicable)
        decides to deny the application and/ or entry into Cuba(if applicable).</p>

    <div class="signature-grid">
        <div class="sign-grid1">

            <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

            <div class="pad">
                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="Vsignature"></canvas>
                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear5" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>


        </div>

        <div class="sign-grid">
            <label class="middle-name_label" style="" for="">
                Date: <input type="" id="Vdate" name="Vdate" class="inputs email" style="" value="<?php echo $fill->visa_date; ?>">
            </label>
        </div>
    </div>

    <div class="second-row-grid">

        <div class="second-grid">
            <label class="firstname_label" style="" for="">
                Passport #: <input type="" id="Vpassportnumber" name="Vpassportnumber" class="inputs passport_visa" style="" value="<?php echo $fill->visa_passport_number; ?>">
            </label>
        </div>

        <div class="second-grid">
            <label class="middle-name_label" style="" for="">
                Expiration Date: <input type="" id="Vexpirationdates" name="Vexpirationdates" class="inputs passport_exp_date" style="" value="<?php echo $fill->visa_exp_date; ?>">
            </label>
        </div>

        <div class="second-grid">
            <label class="middle-name_label" style="" for="">
                Country of Issue: <input type="" id="Vcountryofissue" name="Vcountryofissue" class="inputs country" style="" value="<?php echo $fill->visa_country_issue; ?>">
            </label>
        </div>
    </div>

    <div class="spacer"></div>
    <div class="spacer"></div>


    <div class="spacer"></div>
    <div class="right-logo-holder">
        <div class="right-logo"></div>
    </div>
    <h5 class="service_provider">TRAVEL AFFIDAVIT - General / Specific Licenses</h5>

    <p>I understand that, travel transactions related to Cuba(if applicable) must be directly incident to one of the selfauthorizing general license purposeful travel categories or travel authorized under the auspice of a
        specific license granted on a case-by-case basis. Under current US travel restrictions with respect to
        Cuba, travel-related transactions are prohibited except for the following categories and that by signing
        my name at the bottom of this Affidavit, I declare that I fall under the category I have checked below. </p>

    <input type="checkbox" name="check1" id="check1" value="checked" <?php echo $fill->travel_check1; ?>><label>1. Family Visits</label><br>
    <input type="checkbox" name="check2" id="check2" value="checked" <?php echo $fill->travel_check2; ?>> <label>2. Official Business of the U.S. Government, Foreign Governments, and Certain Intergovernmental Organizations</label><br>
    <input type="checkbox" name="check3" id="check3" value="checked" <?php echo $fill->travel_check3; ?>> <label>3. Journalist Activities </label> <br>
    <input type="checkbox" name="check4" id="check4" value="checked" <?php echo $fill->travel_check4; ?>> <label>4. Professional Research </label><br>
    <input type="checkbox" name="check5" id="check5" value="checked" <?php echo $fill->travel_check5; ?>> <label>5. Professional Meetings or Conferences </label><br>
    <label for="">6. Educational Activities</label><br>
    <input style="margin-left:20px;" type="checkbox" name="check6a" id="check6a" value="checked" <?php echo $fill->travel_check6a; ?>> <label>General license for educational activities</label> <br>
    <input style="margin-left:20px;" type="checkbox" name="check6b" id="check6b" value="checked" <?php echo $fill->travel_check6b; ?>> <label>General license for people-to-people travel </label><br>
    <input type="checkbox" name="check7" id="check7" value="checked" <?php echo $fill->travel_check7; ?>> <label>7. Religious Activities in Cuba(if applicable) </label><br>
    <input type="checkbox" name="check8" id="check8" value="checked" <?php echo $fill->travel_check8; ?>> <label>8. Public Performances, Clinics, Workshops, Athletic, & Other </label><br>
    <input type="checkbox" name="check9" id="check9" value="checked" <?php echo $fill->travel_check9; ?>> <label>9. Support for the Cuban(if applicable) People </label><br>
    <input type="checkbox" name="check10" id="check10" value="checked" <?php echo $fill->travel_check10; ?>> <label>10. Humanitarian Projects</label> <br>
    <input type="checkbox" name="check11" id="check11" value="checked" <?php echo $fill->travel_check11; ?>> <label>11. Activities of Private Foundation / Research / Educational Institutions </label><br>
    <input type="checkbox" name="check12" id="check12" value="checked" <?php echo $fill->travel_check12; ?>> <label>12. Exportation & Re-exportation of Certain Internet-Based Services </label><br>
    <input type="checkbox" name="check13" id="check13" value="checked" <?php echo $fill->travel_check13; ?>> <label>13. Transactions Related to Information & Informational Materials</label> <br>
    <input type="checkbox" name="check14" id="check14" value="checked" <?php echo $fill->travel_check14; ?>> <label>14. Certain Export Transactions</label><br>
    <input type="checkbox" name="check15" id="check15" value="checked" <?php echo $fill->travel_check15; ?>> <label>15. Specific License (OFAC License #:<input type="" id="Olicensenumber" class="inputs i" style="" value="<?php echo $fill->Olicensenumber; ?>">)</label> <br>

    <div class="spacer"></div>

    <div class="second-row-grid">
        <div class="second-grid">
            <label class="firstname_label" style="" for="">
                Name: <input type="" id="TAname" name="TAname" class="inputs name_afidavit" style="" value="<?php echo $fill->travel_name; ?>">
            </label>
        </div>

        <div class="second-grid">
            <label class="middle-name_label" style="" for="">
                Address: <input type="" id="TAaddress" name="TAaddress" class="inputs address_afidavit" style="" value="<?php echo $fill->travel_address; ?>">
            </label>
        </div>
    </div>

    <div class="signature-grid">
        <div class="sign-grid">
            <label class="firstname_label" style="" for="">
                Date of Birth: <input type="" id="TAdateofbirth" name="TAdateofbirth" class="inputs passport_number" style="" value="<?php echo $fill->travel_date_of_birth; ?>">
            </label>
        </div>

        <div class="sign-grid1">

            <label for="name" class="l_initial"> Signature(Use your Mouse or finger phone to sign):</label>

            <div class="pad">
                <canvas style="border:1px dashed  #233f91;" class="sign-pad" id="TAsignature"></canvas>
                <button style="padding:0;margin:0;width:50px;position:relative;bottom:6px;" type="button" id="clear6" class="button clear btn btn-primary  " data-action="clear">Clear</button>
            </div>


        </div>
    </div>
    <p>I certify that the above information is true and correct.</p>

    <div class="spacer"></div>

    <center><button type="button" id="submit" data-action="submit" name="submit" class="btn btn-primary btn btn-primary-primary">Submit</button></center>
    <!-- -->
    <div class="spacer"></div>
    </form>
<?php
    } //<!--foreach closing -->
} else {

    unfilled_form();
}



?>
</div>

</div>
<!-- jQuery -->
<script src="/cubabto/vendor/jquery/jquery.min.js"></script>
<script src="/cubabto/vendor/sweetalert/sweetalert2.all.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/cubabto/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/cubabto/vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="/cubabto/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/cubabto/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="/cubabto/vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/cubabto/dist/js/sb-admin-2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

<script>
    function bs_input_file() {
        $(".input-file").before(
            function() {
                if (!$(this).prev().hasClass('input-ghost')) {
                    var element = $("<input type='file' name='image' id='image' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name", $(this).attr("name"));
                    element.change(function() {
                        element.next(element).find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function() {
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function() {
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor", "pointer");
                    $(this).find('input').mousedown(function() {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
        );
    }
    $(function() {
        bs_input_file();
    });

    $(document).ready(function() {



        var submit = document.querySelector("[data-action=submit]");
        var clear = document.querySelector("[data-action=clear]");
        var canvas1 = document.getElementById('signature');
        var canvas2 = document.getElementById('signature1');
        var canvas3 = document.getElementById('signature2');
        var canvas4 = document.getElementById('signature3');
        var canvas5 = document.getElementById('signature4');
        var canvas6 = document.getElementById('Vsignature');
        var canvas7 = document.getElementById('TAsignature');
        //var canvas = document.querySelector("canvas");

        var signature11 = new SignaturePad(canvas1);
        var signature122 = new SignaturePad(canvas2);
        var signature233 = new SignaturePad(canvas3);
        var signature344 = new SignaturePad(canvas4);
        var signature455 = new SignaturePad(canvas5);
        var Vsignature66 = new SignaturePad(canvas6);
        var TAsignature77 = new SignaturePad(canvas7);

        $(document).on("click", "#clear", function(event) {
            var canvas = document.getElementById('signature');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear1", function(event) {
            var canvas = document.getElementById('signature1');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear2", function(event) {
            var canvas = document.getElementById('signature2');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear3", function(event) {
            var canvas = document.getElementById('signature3');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear4", function(event) {
            var canvas = document.getElementById('signature4');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear5", function(event) {
            var canvas = document.getElementById('Vsignature');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });

        $(document).on("click", "#clear6", function(event) {
            var canvas = document.getElementById('TAsignature');
            var signature = new SignaturePad(canvas);
            signature.clear();
        });
        $('#submit').click(function() {
            //alert();
            // $(document).on('submit', '#form_upload', function(event){
            // alert();
            var dataUrl1 = signature11.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl2 = signature122.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl3 = signature233.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl4 = signature344.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl5 = signature455.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl6 = Vsignature66.toDataURL("data:image/png;base64,iVBORw0K...");
            var dataUrl7 = TAsignature77.toDataURL("data:image/png;base64,iVBORw0K...");
            // document.getElementById('imagen_firma').src = dataUrl;
            // var signature = dataUrl1.replace(/^data:image\/(png|jpg);base64,/, "");
            // var signature1 = dataUrl2.replace(/^data:image\/(png|jpg);base64,/, "");
            // var signature2 = dataUrl3.replace(/^data:image\/(png|jpg);base64,/, "");
            // var signature3 = dataUrl4.replace(/^data:image\/(png|jpg);base64,/, "");
            // var signature4 = dataUrl5.replace(/^data:image\/(png|jpg);base64,/, "");
            // var Vsignature = dataUrl6.replace(/^data:image\/(png|jpg);base64,/, "");
            // var TAsignature = dataUrl7.replace(/^data:image\/(png|jpg);base64,/, "");
            var extension = $('#image').val().split('.').pop().toLowerCase();
            // var image = $('#image').prop('files')[0];
            var groupname = $('#groupname').val(); //1    
            var fristname = $('#fristname').val(); //2
            var middlename = $('#middlename').val(); //3
            var lastname = $('#lastname').val();
            var mothersmaidenname = $('#mothersmaidenname').val(); //4
            var tripdates = $('#tripdates').val(); //5
            var phone = $('#phone').val(); //5
            var email = $('#email').val(); //7
            var pssportnumber = $('#pssportnumber').val(); //8     
            var pssportxpirationdates = $('#pssportxpirationdates').val(); //9

            var address = $('#address').val(); //10
            var gender = $('#gender').val(); //11




            var occupation = $('#occupation').val(); //12
            var nationality = $('#nationality').val(); //13
            var ecname = $('#ecname').val(); //14
            var ecphone = $('#ecphone').val(); //15
            var ecrilationship = $('#ecrilationship').val(); //16
            var cttimes = $('#cttimes').val(); //17     
            var ctborn = $('#ctborn').val(); //18
            var cpssportnumber = $('#cpssportnumber').val(); //19

            var exdates = $('#exdates').val(); //20
            var cwhen = $('#cwhen').val(); //21
            var cwhich = $('#cwhich').val(); //22
            var nameofaccommodations = $('#nameofaccommodations').val(); //23
            var roomtype = $('input[name="roomtype"]:checked').val(); //24
            var nameofroommates = $('#nameofroommates').val(); //25     
            var roomtype2 = $('input[name="roomtype2"]:checked').val(); //26
            var notes = $('#notes').val(); //27
            var specialneeds1 = $('#specialneeds1').val(); //28
            var specialneeds = specialneeds1; //29
            var filledapp = $('#filledapp').val(); //30

            var signature = dataUrl1.replace(/^data:image\/(png|jpg);base64,/, "");
            var date = $('#date').val(); //31
            var signature1 = dataUrl2.replace(/^data:image\/(png|jpg);base64,/, "");
            var date1 = $('#date1').val(); //32
            var signature2 = dataUrl3.replace(/^data:image\/(png|jpg);base64,/, "");
            var date2 = $('#date2').val(); //33
            var printname = $('#printname').val();
            var signature3 = dataUrl4.replace(/^data:image\/(png|jpg);base64,/, "");
            var date3 = $('#date3').val(); //34
            var printname1 = $('#printname1').val(); //35

            var signature4 = dataUrl5.replace(/^data:image\/(png|jpg);base64,/, "");
            var date4 = $('#date4').val(); //35
            var Vname = $('#Vname').val(); //36
            var Vsignature = dataUrl6.replace(/^data:image\/(png|jpg);base64,/, "");
            var Vdate = $('#Vdate').val(); //37
            var Vpassportnumber = $('#Vpassportnumber').val(); //38
            var Vexpirationdates = $('#Vexpirationdates').val(); //39
            var Vcountryofissue = $('#Vcountryofissue').val(); //40
            var TAname = $('#TAname').val(); //41
            var TAaddress = $('#TAaddress').val(); //42

            var TAdateofbirth = $('#TAdateofbirth').val(); //43
            var TAsignature = dataUrl7.replace(/^data:image\/(png|jpg);base64,/, "");
            //-------------------------------Check Box -------------------------------------------------------------------
            // var check1 = $('#check1').val();
            var check1 = $('input[name="check1"]:checked').val(); //44
            var check2 = $('input[name="check2"]:checked').val(); //45
            var check3 = $('input[name="check3"]:checked').val(); //46
            var check4 = $('input[name="check4"]:checked').val(); //47
            var check5 = $('input[name="check5"]:checked').val(); //48

            var check6a = $('input[name="check6a"]:checked').val(); //49
            var check6b = $('input[name="check6b"]:checked').val(); //50

            var check7 = $('input[name="check7"]:checked').val(); //51
            var check8 = $('input[name="check8"]:checked').val(); //52
            var check9 = $('input[name="check9"]:checked').val(); //53
            var check10 = $('input[name="check10"]:checked').val(); //54

            var check11 = $('input[name="check11"]:checked').val(); //54
            var check12 = $('input[name="check12"]:checked').val(); //56
            var check13 = $('input[name="check13"]:checked').val(); //57
            var check14 = $('input[name="check14"]:checked').val(); //58
            var check15 = $('input[name="check15"]:checked').val(); //59
            var Olicensenumber = $('#Olicensenumber').val(); //60



            if (extension !== "") {
                if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                    alert("Invalid Image File");
                    $('#image').val('');
                    return false;
                }
            }



            var form_data = new FormData();
            var files = $('#image')[0].files[0];
            form_data.append('signature', signature);
            form_data.append('signature1', signature1);
            form_data.append('signature2', signature2);
            form_data.append('signature3', signature3);
            form_data.append('signature4', signature4);
            form_data.append('Vsignature', Vsignature);
            form_data.append('TAsignature', TAsignature);

            form_data.append('image', files)

            form_data.append('groupname', groupname);
            form_data.append('fristname', fristname);
            form_data.append('middlename', middlename);
            form_data.append('lastname', lastname);
            form_data.append('mothersmaidenname', mothersmaidenname);

            form_data.append('tripdates', tripdates);
            form_data.append('phone', phone);
            form_data.append('email', email);
            form_data.append('pssportnumber', pssportnumber);
            form_data.append('pssportxpirationdates', pssportxpirationdates);

            form_data.append('address', address);
            form_data.append('gender', gender);
            form_data.append('occupation', occupation);
            form_data.append('nationality', nationality);
            form_data.append('ecname', ecname);

            form_data.append('ecphone', ecphone);
            form_data.append('ecrilationship', ecrilationship);
            form_data.append('cttimes', cttimes);
            form_data.append('ctborn', ctborn);
            form_data.append('cpssportnumber', cpssportnumber);

            form_data.append('exdates', exdates);
            form_data.append('cwhen', cwhen);
            form_data.append('cwhich', cwhich);
            form_data.append('nameofaccommodations', nameofaccommodations);
            form_data.append('roomtype', roomtype);

            form_data.append('nameofroommates', nameofroommates);
            form_data.append('roomtype2', roomtype2);
            form_data.append('notes', notes);
            form_data.append('specialneeds1', specialneeds1);

            form_data.append('filledapp', filledapp);
            form_data.append('date', date);
            form_data.append('date1', date1);
            form_data.append('date2', date2);
            form_data.append('printname', printname);

            form_data.append('date3', date3);
            form_data.append('printname1', printname1);
            form_data.append('date4', date4);
            form_data.append('Vname', Vname);
            form_data.append('Vdate', Vdate);

            form_data.append('Vpassportnumber', Vpassportnumber);
            form_data.append('Vexpirationdates', Vexpirationdates);
            form_data.append('Vcountryofissue', Vcountryofissue);
            form_data.append('TAname', TAname);
            form_data.append('TAaddress', TAaddress);
            form_data.append('TAdateofbirth', TAdateofbirth);


            form_data.append('check1', check1);
            form_data.append('check2', check2);
            form_data.append('check3', check3);
            form_data.append('check4', check4);
            form_data.append('check5', check5);

            form_data.append('check6a', check6a);
            form_data.append('check6b', check6b);
            form_data.append('check7', check7);
            form_data.append('check8', check8);
            form_data.append('check9', check9);

            form_data.append('check10', check10);
            form_data.append('check11', check11);
            form_data.append('check12', check12);
            form_data.append('check13', check13);
            form_data.append('check14', check14);
            form_data.append('check15', check15);

            form_data.append('Olicensenumber', Olicensenumber);


            // alert(files);
            // return;





            $.ajax({
                url: "/cubabto/login/submit_form/",
                method: 'POST',
                data: form_data,
                contentType: false,
                processData: false,
                // dataType: "html",
                success: function(data) {

                    // swal(

                    //     'Form was successfuly submited!',
                    //     'Successfully submit!',
                    //     'success'
                    // ).then(function(){
                    //     if(data == "admin"){
                    //             window.location.href="/cubabto/login/admin_view";
                    //     }else{
                    //             window.location.href="/cubabto/login/user_view";
                    //     }
                    // }); 
                    // alert(data);

                    swal({
                        title: 'Saved!',
                        text: "Form Successfully saved!",
                        type: 'success',
                        showCancelButton: true,
                        confirmButtonColor: '##0981b5',
                        cancelButtonColor: '#5cb85c',
                        cancelButtonText: 'Add Additional Travelers',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.value) {

                            if (data == "admin") {
                                window.location.href = "/cubabto/login/admin_view";
                            } else {
                                window.location.href = "/cubabto/login/user_view";
                            }

                        } else {

                            jQuery('html').animate({
                                scrollTop: jQuery(".top").offset().top
                            }, 4000);

                        }

                    });


                }
            });


            //------------------------------------------------------------------------------------------------------------------------------------



        });
        //------------------------------------------------------------------------------------------------------------------------------------


    });
</script>

</body>

</html>