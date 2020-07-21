<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <title>Check In Form</title>     
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container ts">
        <form action="insert.php" method="post" target="_blank">  
            <header>
                <h1 class="prf">PATIENT REGISTRATION FORM</h1> 
                <div class="deco"></div> 
            </header>
            <div class="half1">
        <!--************************************************* First Name *************************************************-->
                <div class="address">
                    <label for="firstName">First Name</label><br>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" class="ts2" required><br>
        <!--************************************************* Last Name *************************************************-->
                    <label for="lastName">Last Name</label><br>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="ts2" required><br>
                </div>
        <!--************************************************** street ***************************************************-->
                <div class="address">
                    <span style="font-size: 18px;">ADDRESS</span><br><hr><br>
                    <div class="address1">
                        <label for="street">Street</label><br>
                        <input type="text" name="street" id="street" placeholder="Street" class="ts2" required>   
                    </div>  
        <!--************************************************** unit ****************************************************-->
                    <div class="address2">
                        <label for="unit">Unit</label><br>
                        <input type="text" name="unit" id="unit" placeholder="Unit" class="ts2">
                    </div>
                </div>
        <!--************************************************** city ****************************************************-->
                <div class="address">
                    <div class="address3">
                        <label for="city">City</label><br>
                        <input type="text" name="city" id="city" placeholder="City" class="ts2" required><br><br>  
                    </div>
        <!--************************************************** state ***************************************************-->
                    <div class="address4">
                        <label for="state">State</label><br>
                        <input type="text" name="state" id="state" list="states" class="ts2" placeholder="State" required><br><br>  
                        <datalist id="states">
                            <?
                            $states = [ 'State', 'AL', 'AK', 'AS', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'DC', 'FM', 'FL', 'GA', 'GU',
                                'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA', 'ME', 'MH', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO',
                                'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'MP', 'OH', 'OK', 'OR', 'PW', 'PA', 'PR', 
                                'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VI', 'VA', 'WA', 'WV', 'WI', 'WY' ];
                            foreach ($states as $state) {
                                echo "<option value='$state'>$state</option>";
                            }
                            ?>
                        </datalist>
                    </div>    
        <!--************************************************** zip ******************************************************-->
                    <div class="address5">  
                        <label for="zip">Zip</label><br>
                        <input type="text" name="zip" id="zip" placeholder="Zip" class="ts2" required><br><br>  
                    </div>
                </div>
        <!--*************************************************** E-mail ***************************************************-->
                <div class="address"> 
                    <label for="email">E-mail</label><br>
                    <input type="email" name="email" id="email" placeholder="E-mail" class="ts2" required><br>
                </div>
        <!--************************************************* Telephone **************************************************-->            
                <div class="address"> 
                    <label for="telephone">Telephone</label><br>
                    <input type="text" name="telephone" id="telephone" placeholder="Telephone" class="ts2" required><br>
                </div>
        <!--*************************************************** month ****************************************************--> 
                <div class="address"> 
                    <span style="font-size: 18px;">Date of Birth</span><br><hr><br>
                    <div class="address3"> 
                        <label for="month">Month</label><br>
                        <input type="text" name="month" id="month" list="months" class="ts2" placeholder="Month" required>
                        <datalist id="months">
                            <?
                            $month = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 
                            'October', 'November', 'December'];
                            foreach ($month as $month) {
                                echo "<option value='$month'>$month</option>";
                            }
                            ?>
                        </datalist><br><br>
                    </div>
        <!--**************************************************** day *****************************************************--> 
                    <div class="address4"> 
                        <label for="day">Day</label><br>
                        <input type="text" name="day" id="day" list="days" class="ts2" placeholder="Day" required>
                        <datalist id="days">
                            <?php
                            for ($x = 1; $x <= 31; $x+=1) {
                            echo  "<option value='$x'>$x</option>";
                            }
                            ?>
                        </datalist><br><br>
                    </div>
        <!--**************************************************** year ***************************************************--> 
                    <div class="address5">
                        <label for="year">Year</label><br>
                        <input type="text" name="year" id="year" list="years" class="ts2" placeholder="Year" required>
                        <datalist id="years">
                            <?php
                            for ($x = 1920; $x <=date("Y");  $x++) {
                            echo  "<option value='$x'>$x</option>";
                            }
                            ?>
                        </datalist><br><br>
                    </div>
                </div>
        <!--************************************************* Gender ****************************************************--> 
                <div class="address">
                    <label for="gender">Gender</label><br>
                    <input type="text" name="gender" id="gender" list="genders" class="ts2" placeholder="Gender" required>
                    <datalist id="genders">
                        <option value="Gender">
                        <option value="Male">
                        <option value="Female">
                    </datalist><br>
                </div>
        <!--************************************************ Ethnicity **************************************************--> 
                <div class="address">
                    <label for="ethnicity">Ethnicity</label><br>
                    <input type="text" name="ethnicity" id="ethnicity" list="ethnicitys" class="ts2" placeholder="Ethnicity" required>
                    <datalist id="ethnicitys">
                        <option value="Ethnicity">
                        <option value="Hispanic">
                        <option value="Not Hispanic"> 
                    </datalist><br>
                </div>
        <!--*************************************************** Race ****************************************************--> 
                <div class="address">
                    <label for="race">Race</label><br>
                    <input type="text" name="race" id="race" list="races" class="ts2" placeholder="Race" required>
                    <datalist id="races">
                        <option value="African American">
                        <option value="American Indian">
                        <option value="Alaskan Native">
                        <option value="Asian">
                        <option value="Caucasian">
                        <option value="Native Hawaiian">
                        <option value="Pacific Islander">
                    </datalist><br>
                </div>
        <!--********************************************** Marital Status ************************************************--> 
                <div class="address">
                    <div class="address6">
                        <label for="maritalStatus">Marital Status</label><br>
                        <input type="text" name="maritalStatus" id="maritalStatus" list="maritalStatuss" 
                        class="ts2" placeholder="Marital Status" required>
                        <datalist id="maritalStatuss">
                            <option value="Married">
                            <option value="Single">
                            <option value="Divorced">
                            <option value="Separated">
                            <option value="Widowed ">
                        </datalist><br><br><br>
                    </div>
                    <div class="address7">
                    </div>
        <!--*********************************************** Number of Children ******************************************--> 
                    <div class="address8">
                        <label for="numberOfChildren">Number of Children</label><br>
                        <input type="number" name="numberOfChildren" id="numberOfChildren" min="0" max="10" 
                        class="ts2" required><br><br><br>
                    </div>
                </div>
        <!--*************************************************** Submit **************************************************--> 
                <div class="address">    
                    <button type="submit" name="submit" class="ts3">Submit</button>
                </div>  
            </div>
        <!--*************************************************** Agreement ************************************************--> 
            <div class="half2"><br>
                <h2 class="pa">PATIENT AGREEMENT</h2>
                <h3 class="prn">Please Read Notice of Privacy Practices and check the Box Below
                <span style="color:red; font-size:20px; vertical-align: middle;">*</span></h3>
                <p class="agree">This Notice describes how medical information about you may be used and disclosed and 
                    how you can get access to this information. Please review it carefully. Personally identifiable 
                    information about your health, your health care, and your payment for health care is called Protected 
                    Health Information. We must safeguard your Protected Health Information and give you this Notice about 
                    our privacy practices that explains how, when and why we may use or disclose your Protected Health 
                    Information. Except in the situations set out in the Notice, we must use or disclose only the minimum 
                    necessary Protected Health Information to carry out the use or disclosure. We must follow the practices 
                    described in this Notice, but we can change our privacy practices and the terms of this Notice at any 
                    time. If we revise the Notice, you may read the new version of the Notice of Privacy Practices on our 
                    website at [insert web address of Covered Department]. You also may ask for a copy of the Notice by 
                    calling us at [insert phone number of Covered Department] and asking us to mail you a copy or by asking 
                    for a copy at your next appointment. Uses and Disclosures of Your Protected Health Information That Do 
                    Not Require Your Consent We may use and disclose your Protected Health Information as follows without 
                    your permission: For treatment purposes. We may disclose your health information to doctors, nurses and 
                    others who provide your health care. For example, your information may be shared with people performing 
                    lab work or x-rays. To obtain payment. We may disclose your health information in order to collect 
                    payment for your health care. For instance, we may release information to your insurance company. For 
                    health care operations. We may use or disclose your health information in order to perform business 
                    functions like employee evaluations and improving the service we provide. We may disclose your 
                    information to students training with us. We may use your information to contact you to remind you of 
                    your appointment or to call you by name in the waiting room when your doctor is ready to see you. When 
                    required by law. We may be required to disclose your Protected Health Information to law enforcement 
                    officers, courts or government agencies. For example, we may have to report abuse, neglect or certain 
                    physical injuries. For public health activities. We may be required to report your health information 
                    to government agencies to prevent or control disease or injury. We also may have to report work-related 
                    illnesses and injuries to your employer so that your workplace may be monitored for safety. For health 
                    oversight activities. We may be required to disclose your health information to government agencies so 
                    that they can monitor or license health care providers such as doctors and nurses. For activities 
                    related to death. We may be required to disclose your health information to coroners, medical examiners 
                    and funeral directors so that they can carry out duties related to your death, such as determining the 
                    cause of death or preparing your body for burial. We also may disclose your information to those 
                    involved with locating, storing or transplanting donor organs or tissue. For studies. In order to serve 
                    our patient community, we may use or disclose your health information for research studies, but only 
                    after that use is approved by UWM's Institutional Review Board or a special privacy board. In most 
                    cases, your information will be used for studies only with your permission. To avert a threat to health 
                    or safety. In order to avoid a serious threat to health or safety, we may disclose health information 
                    to law enforcement officers or other persons who might prevent or lessen that threat. For specific 
                    government functions. In certain situations, we may disclose health information of military officers 
                    and veterans, to correctional facilities, to government benefit programs, and for national security 
                    reasons. For workers' compensation purposes. We may disclose your health information to government 
                    authorities under workers' compensation laws. For fundraising purposes. We may use certain information 
                    (such as demographic information, dates of services, department of service, treating physicians, and 
                    outcomes) to send fundraising communications to you. However, you may opt out of receiving any such 
                    communications by contacting our Privacy Officer (listed below) and your decision to opt-out will have 
                    no impact on your treatment. Uses and Disclosures of Your Protected Health Information That Offer You an 
                    Opportunity to Object In the following situations, we may disclose some of your Protected Health 
                    Information if we first inform you about the disclosure and you do not object: In patient directories. 
                    Your name, location and general health condition may be listed in our patient directory for disclosure 
                    to callers or visitors who ask for you by name. Additionally, your religion may be shared with clergy.
                    To your family, friends or others involved in your care. We may share with these people information 
                    related to their involvement in your care or information to notify them as to your location or general 
                    condition. We may release your health information to organizations handling disaster relief efforts. 
                    Uses and Disclosures of Your Protected Health Information That Require Your Consent The following uses 
                    and disclosures of your Protected Health Information will be made only with your written permission, 
                    which you may withdraw at any time: For research purposes. In order to serve our patient community, 
                    we may want to use your health information in research studies. For example, researchers may want to 
                    see whether your treatment cured your illness. In such an instance, we will ask you to complete a form 
                    allowing us to use or disclose your information for research purposes. Completion of this form is 
                    completely voluntary and will have no effect on your treatment. For marketing purposes. Without your 
                    permission, we will not send you mail or call you on the telephone in order to urge you to use a 
                    particular product or service, unless such a mailing or call is part of your treatment. Additionally, 
                    without your permission we will not sell or otherwise disclose your Protected Health Information to any 
                    person or company seeking to market its products or services to you. Of psychotherapy notes. Without 
                    your permission, we will not use or disclose notes in which your doctor describes or analyzes a 
                    counseling session in which you participated, unless the use or disclosure is for on-site student 
                    training, for disclosure required by a court order, or for the sole use of the doctor who took the 
                    notes. For any other purposes not described in this Notice. Without your permission, we will not use 
                    or disclose your health information under any circumstances that are not described in this Notice. 
                    Your Rights Regarding Your Protected Health Information You have the following rights related to your 
                    Protected Health Information: To inspect and request a copy of your Protected Health Information. 
                    You may look at and obtain a copy of your Protected Health Information in most cases. You may not 
                    view or copy psychotherapy notes, information collected for use in a legal or government action, 
                    and information which you cannot access by law. If we use or maintain the requested information 
                    electronically, you may request that information in electronic format. To request that we correct 
                    your Protected Health Information. If you think that there is a mistake or a gap in our file of 
                    your health information, you may ask us in writing to correct the file. We may deny your request if we 
                    find that the file is correct and complete, not created by us, or not allowed to be disclosed. If we 
                    deny your request, we will explain our reasons for the denial and your rights to have the request and 
                    denial and your written response added to your file. If we approve your request, we will change the 
                    file, report that change to you, and tell others that need to know about the change in your file. To 
                    request a restriction on the use or disclosure of your Protected Health Information. You may ask us to 
                    limit how we use or disclose your information, but we generally do not have to agree to your request. 
                    An exception is that we must agree to a request not to send Protected Health Information to a health 
                    plan for purposes of payment or health care operations if you have paid in full for the related product 
                    or service. If we agree to all or part of your request, we will put our agreement in writing and obey it 
                    except in emergency situations.  We cannot limit uses or disclosures that are required by law. To 
                    request confidential communication methods. You may ask that we contact you at a certain address or in 
                    a certain way. We must agree to your request as long as it is reasonably easy for us to do so. To find 
                    out what disclosures have been made. You may get a list describing when, to whom, why, and what of your 
                    Protected Health Information has been disclosed during the past six years. We must respond to your 
                    request within sixty days of receiving it. We will only charge you for the list if you request more 
                    than one list per year. The list will not include disclosures made to you or for purposes of treatment, 
                    payment, health care operations if we do not use electronic health records, our patient directory, 
                    national security, law enforcement, and certain health oversight activities. To receive notice if 
                    your records have been breached. UWM will notify you if there has been an acquisition, access, use or 
                    disclosure of your Protected Health Information in a manner not allowed under the law and which we are 
                    required by law to report to you. We will review any suspected breach to determine the appropriate 
                    response under the circumstances. To obtain a paper copy of this Notice. Upon your request, we will 
                    give you a paper copy of this Notice. If you have any questions about these rights, please contact us. 
                    How to Complain about Our Privacy Practices If you think we may have violated your privacy rights, or 
                    if you disagree with a decision we made about your Protected Health Information, you may file a 
                    complaint with our Privacy Officer by writing to [contact information]. You may also file a complaint 
                    with the Secretary of the U.S. Department of Health and Human Services by writing to 200 Independence 
                    Avenue SW, Washington, D.C. 20201 or by calling 1-877-696-6775. We will take no action against you if 
                    you make a complaint to either or both of these persons. How to Receive More Information About our 
                    Privacy Practices If you have questions about this Notice or about our privacy practices, please 
                    contact our Privacy Officer, [contact information for Privacy Officer of Covered Department]. 
                    Effective Date This Notice is effective on September 23, 2013.W are required by law to maintain the 
                    privacy of, and provie individuals with, this notice of our legal duties and privacy practices with 
                    respect to protected health information. If you have any objections to this form, please ask to 
                    speak with our HIPAA Compliance Officer in person or by phone at our main phone number. This signature 
                    is only acknowledgement that you have received this ntoice of our Privacy Practices.
                </p>
                <p class="agree2">
                    <label for="checkbox" style="color: red; font-size:20px; vertical-align:middle;">*</label>
                    <input type="checkbox" name="checkbox" value="check" id="checkbox" required 
                    style="vertical-align:middle;">
                    <span style="color: black; vertical-align:middle;">I Agree</span>
                </p>
            </div>
            <hr>
        <!--*************************************************** footer **************************************************--> 
            <div class="container2">
                <footer>
                    <p class="ts4">Designed by&nbsp;&nbsp;Yamrote Yilma</p>
                </footer>  
            </div>  
        </form>
    </div>    
</body>

</html>