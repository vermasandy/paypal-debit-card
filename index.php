<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="A.js"></script>
</head>

<body>
<form method="post" action="paypal_pro.php" >
            	<table class="second_step">
               
                	<tr>
                    	<td>First Name</td>
                        <td>:</td>
                        <td><input id="fname" type="text" name="customer_first_name" value="John"  required="required"/></td>
                        <td>Address1</td>
                        <td>:</td>
                        <td><input id="address1" type="text" name="customer_address1" value="1 Main St"  required="required"/></td>
                    </tr>
                    <tr>
                    	<td>Last Name</td>
                        <td>:</td>
                        <td><input id="lname" type="text" name="customer_last_name" value="Doe"  required="required"/></td>
                        <td>City</td>
                        <td>:</td>
                        <td><input id="city" type="text" name="customer_city" value="San Jose"  required="required"/></td>
                    </tr>
                    <tr>
                    	<td>Credit card type</td>
                        <td>:</td>
                        <td>
                        	<select id="cardtype" name="customer_credit_card_type">
                            	<option value="visa" selected="selected">Visa</option>
                                <option value="master_card">Master Card</option>
                                <option value="discocer">Discover</option>
                                <option value="visa">Visa</option>
                            </select>
                        </td>
                        
                        <td>Zip</td>
                        <td>:</td>
                        <td><input id="zip" type="text" name="customer_zip" value="95131"  required="required"/></td>
                    </tr>
                    <tr>
                    	<td>Credit Card No</td>
                        <td>:</td>
                        <td><input id="cnumber" type="text" name="customer_credit_card_number" value="4069929390455673"  required="required"/></td>
                        <td>State</td>
                        <td>:</td>
                        <td ><input id="state" type="text" name="customer_state" value="CA"  required="required"/>( State iso code)</td>
                       
                    </tr>
                	<tr>
                    	<td>Expiration Date</td>
                        <td>:</td>
                        <td>
                        	<select id="exp_month" name="cc_expiration_month" style="width: 95px;">
                            	                                	<option value="1">1</option>
                                                                	<option value="2">2</option>
                                                                	<option value="3">3</option>
                                                                	<option value="4">4</option>
                                                                	<option value="5">5</option>
                                                                	<option value="6">6</option>
                                                                	<option value="7">7</option>
                                                                	<option value="8">8</option>
                                                                	<option value="9">9</option>
                                                                	<option value="10" selected="selected">10</option>
                                                                	<option value="11">11</option>
                                                                	<option value="12">12</option>
                                                            </select>
                            <select id="exp_year" name="cc_expiration_year" style="width: 95px; margin-left: 10px;">
                            	                                	<option value="2012">2012</option>
                                                                	<option value="2013">2013</option>
                                                                	<option value="2014">2014</option>
                                                                	<option value="2015">2015</option>
                                                                	<option value="2016" selected="selected">2016</option>
                                                                	<option value="2017">2017</option>
                                                                	<option value="2018">2018</option>
                                                                	<option value="2019">2019</option>
                                                                	<option value="2020">2020</option>
                                                            </select>
                        </td>
                         <td>Country</td>
                        <td>:</td>
                        <td>
                        	                         	<select id="country" name="customer_country" required="required">
                            	                            		<option value="GB">United Kingdom</option>
                                                            		<option value="US">United States</option>
                                                            		<option value="AF">Afghanistan</option>
                                                            		<option value="AL">Albania</option>
                                                            		<option value="DZ">Algeria</option>
                                                            		<option value="AS">American Samoa</option>
                                                            		<option value="AD">Andorra</option>
                                                            		<option value="AO">Angola</option>
                                                            		<option value="AI">Anguilla</option>
                                                            		<option value="AQ">Antarctica</option>
                                                            		<option value="AG">Antigua And Barbuda</option>
                                                            		<option value="AR">Argentina</option>
                                                            		<option value="AM">Armenia</option>
                                                            		<option value="AW">Aruba</option>
                                                            		<option value="AU">Australia</option>
                                                            		<option value="AT">Austria</option>
                                                            		<option value="AZ">Azerbaijan</option>
                                                            		<option value="BS">Bahamas</option>
                                                            		<option value="BD">Bangladesh</option>
                                                            		<option value="BB">Barbados</option>
                                                            		<option value="BY">Belarus</option>
                                                            		<option value="BE">Belgium</option>
                                                            		<option value="BZ">Belize</option>
                                                            		<option value="BJ">Benin</option>
                                                            		<option value="BM">Bermuda</option>
                                                            		<option value="BT">Bhutan</option>
                                                            		<option value="BO">Bolivia</option>
                                                            		<option value="BA">Bosnia And Herzegowina</option>
                                                            		<option value="BW">Botswana</option>
                                                            		<option value="BV">Bouvet Island</option>
                                                            		<option value="BR">Brazil</option>
                                                            		<option value="IO">British Indian Ocean Territory</option>
                                                            		<option value="BN">Brunei Darussalam</option>
                                                            		<option value="BG">Bulgaria</option>
                                                            		<option value="BF">Burkina Faso</option>
                                                            		<option value="BI">Burundi</option>
                                                            		<option value="KH">Cambodia</option>
                                                            		<option value="CM">Cameroon</option>
                                                            		<option value="CA">Canada</option>
                                                            		<option value="CV">Cape Verde</option>
                                                            		<option value="KY">Cayman Islands</option>
                                                            		<option value="CF">Central African Republic</option>
                                                            		<option value="TD">Chad</option>
                                                            		<option value="CL">Chile</option>
                                                            		<option value="CN">China</option>
                                                            		<option value="CX">Christmas Island</option>
                                                            		<option value="CC">Cocos (Keeling) Islands</option>
                                                            		<option value="CO">Colombia</option>
                                                            		<option value="KM">Comoros</option>
                                                            		<option value="CG">Congo</option>
                                                            		<option value="CD">Congo, The Democratic Republic Of The</option>
                                                            		<option value="CK">Cook Islands</option>
                                                            		<option value="CR">Costa Rica</option>
                                                            		<option value="CI">Cote D'Ivoire</option>
                                                            		<option value="HR">Croatia (Local Name: Hrvatska)</option>
                                                            		<option value="CU">Cuba</option>
                                                            		<option value="CY">Cyprus</option>
                                                            		<option value="CZ">Czech Republic</option>
                                                            		<option value="DK">Denmark</option>
                                                            		<option value="DJ">Djibouti</option>
                                                            		<option value="DM">Dominica</option>
                                                            		<option value="DO">Dominican Republic</option>
                                                            		<option value="TP">East Timor</option>
                                                            		<option value="EC">Ecuador</option>
                                                            		<option value="EG">Egypt</option>
                                                            		<option value="SV">El Salvador</option>
                                                            		<option value="GQ">Equatorial Guinea</option>
                                                            		<option value="ER">Eritrea</option>
                                                            		<option value="EE">Estonia</option>
                                                            		<option value="ET">Ethiopia</option>
                                                            		<option value="FK">Falkland Islands (Malvinas)</option>
                                                            		<option value="FO">Faroe Islands</option>
                                                            		<option value="FJ">Fiji</option>
                                                            		<option value="FI">Finland</option>
                                                            		<option value="FR">France</option>
                                                            		<option value="FX">France, Metropolitan</option>
                                                            		<option value="GF">French Guiana</option>
                                                            		<option value="PF">French Polynesia</option>
                                                            		<option value="TF">French Southern Territories</option>
                                                            		<option value="GA">Gabon</option>
                                                            		<option value="GM">Gambia</option>
                                                            		<option value="GE">Georgia</option>
                                                            		<option value="DE">Germany</option>
                                                            		<option value="GH">Ghana</option>
                                                            		<option value="GI">Gibraltar</option>
                                                            		<option value="GR">Greece</option>
                                                            		<option value="GL">Greenland</option>
                                                            		<option value="GD">Grenada</option>
                                                            		<option value="GP">Guadeloupe</option>
                                                            		<option value="GU">Guam</option>
                                                            		<option value="GT">Guatemala</option>
                                                            		<option value="GN">Guinea</option>
                                                            		<option value="GW">Guinea-Bissau</option>
                                                            		<option value="GY">Guyana</option>
                                                            		<option value="HT">Haiti</option>
                                                            		<option value="HM">Heard And Mc Donald Islands</option>
                                                            		<option value="VA">Holy See (Vatican City State)</option>
                                                            		<option value="HN">Honduras</option>
                                                            		<option value="HK">Hong Kong</option>
                                                            		<option value="HU">Hungary</option>
                                                            		<option value="IS">Iceland</option>
                                                            		<option value="IN">India</option>
                                                            		<option value="ID">Indonesia</option>
                                                            		<option value="IR">Iran (Islamic Republic Of)</option>
                                                            		<option value="IQ">Iraq</option>
                                                            		<option value="IE">Ireland</option>
                                                            		<option value="IL">Israel</option>
                                                            		<option value="IT">Italy</option>
                                                            		<option value="JM">Jamaica</option>
                                                            		<option value="JP">Japan</option>
                                                            		<option value="JO">Jordan</option>
                                                            		<option value="KZ">Kazakhstan</option>
                                                            		<option value="KE">Kenya</option>
                                                            		<option value="KI">Kiribati</option>
                                                            		<option value="KP">Korea, Democratic People's Republic Of</option>
                                                            		<option value="KR">Korea, Republic Of</option>
                                                            		<option value="KW">Kuwait</option>
                                                            		<option value="KG">Kyrgyzstan</option>
                                                            		<option value="LA">Lao People's Democratic Republic</option>
                                                            		<option value="LV">Latvia</option>
                                                            		<option value="LB">Lebanon</option>
                                                            		<option value="LS">Lesotho</option>
                                                            		<option value="LR">Liberia</option>
                                                            		<option value="LY">Libyan Arab Jamahiriya</option>
                                                            		<option value="LI">Liechtenstein</option>
                                                            		<option value="LT">Lithuania</option>
                                                            		<option value="LU">Luxembourg</option>
                                                            		<option value="MO">Macau</option>
                                                            		<option value="MK">Macedonia, Former Yugoslav Republic Of</option>
                                                            		<option value="MG">Madagascar</option>
                                                            		<option value="MW">Malawi</option>
                                                            		<option value="MY">Malaysia</option>
                                                            		<option value="MV">Maldives</option>
                                                            		<option value="ML">Mali</option>
                                                            		<option value="MT">Malta</option>
                                                            		<option value="MH">Marshall Islands</option>
                                                            		<option value="MQ">Martinique</option>
                                                            		<option value="MR">Mauritania</option>
                                                            		<option value="MU">Mauritius</option>
                                                            		<option value="YT">Mayotte</option>
                                                            		<option value="MX">Mexico</option>
                                                            		<option value="FM">Micronesia</option>
                                                            		<option value="MD">Moldova, Republic Of</option>
                                                            		<option value="MC">Monaco</option>
                                                            		<option value="MN">Mongolia</option>
                                                            		<option value="MS">Montserrat</option>
                                                            		<option value="MA">Morocco</option>
                                                            		<option value="MZ">Mozambique</option>
                                                            		<option value="MM">Myanmar</option>
                                                            		<option value="NA">Namibia</option>
                                                            		<option value="NR">Nauru</option>
                                                            		<option value="NP">Nepal</option>
                                                            		<option value="NL">Netherlands</option>
                                                            		<option value="AN">Netherlands Antilles</option>
                                                            		<option value="NC">New Caledonia</option>
                                                            		<option value="NZ">New Zealand</option>
                                                            		<option value="NI">Nicaragua</option>
                                                            		<option value="NE">Niger</option>
                                                            		<option value="NG">Nigeria</option>
                                                            		<option value="NU">Niue</option>
                                                            		<option value="NF">Norfolk Island</option>
                                                            		<option value="MP">Northern Mariana Islands</option>
                                                            		<option value="NO">Norway</option>
                                                            		<option value="OM">Oman</option>
                                                            		<option value="PK">Pakistan</option>
                                                            		<option value="PW">Palau</option>
                                                            		<option value="PA">Panama</option>
                                                            		<option value="PG">Papua New Guinea</option>
                                                            		<option value="PY">Paraguay</option>
                                                            		<option value="PE">Peru</option>
                                                            		<option value="PH">Philippines</option>
                                                            		<option value="PN">Pitcairn</option>
                                                            		<option value="PL">Poland</option>
                                                            		<option value="PT">Portugal</option>
                                                            		<option value="PR">Puerto Rico</option>
                                                            		<option value="QA">Qatar</option>
                                                            		<option value="RE">Reunion</option>
                                                            		<option value="RO">Romania</option>
                                                            		<option value="RU">Russian Federation</option>
                                                            		<option value="RW">Rwanda</option>
                                                            		<option value="KN">Saint Kitts And Nevis</option>
                                                            		<option value="LC">Saint Lucia</option>
                                                            		<option value="VC">Saint Vincent And The Grenadines</option>
                                                            		<option value="WS">Samoa</option>
                                                            		<option value="SM">San Marino</option>
                                                            		<option value="ST">Sao Tome And Principe</option>
                                                            		<option value="SA">Saudi Arabia</option>
                                                            		<option value="SN">Senegal</option>
                                                            		<option value="SC">Seychelles</option>
                                                            		<option value="SL">Sierra Leone</option>
                                                            		<option value="SG">Singapore</option>
                                                            		<option value="SK">Slovakia (Slovak Republic)</option>
                                                            		<option value="SI">Slovenia</option>
                                                            		<option value="SB">Solomon Islands</option>
                                                            		<option value="SO">Somalia</option>
                                                            		<option value="ZA">South Africa</option>
                                                            		<option value="GS">South Georgia, South Sandwich Islands</option>
                                                            		<option value="ES">Spain</option>
                                                            		<option value="LK">Sri Lanka</option>
                                                            		<option value="SH">St. Helena</option>
                                                            		<option value="PM">St. Pierre And Miquelon</option>
                                                            		<option value="SD">Sudan</option>
                                                            		<option value="SR">Suriname</option>
                                                            		<option value="SJ">Svalbard And Jan Mayen Islands</option>
                                                            		<option value="SZ">Swaziland</option>
                                                            		<option value="SE">Sweden</option>
                                                            		<option value="CH">Switzerland</option>
                                                            		<option value="SY">Syrian Arab Republic</option>
                                                            		<option value="TW">Taiwan</option>
                                                            		<option value="TJ">Tajikistan</option>
                                                            		<option value="TZ">Tanzania, United Republic Of</option>
                                                            		<option value="TH">Thailand</option>
                                                            		<option value="TG">Togo</option>
                                                            		<option value="TK">Tokelau</option>
                                                            		<option value="TO">Tonga</option>
                                                            		<option value="TT">Trinidad And Tobago</option>
                                                            		<option value="TN">Tunisia</option>
                                                            		<option value="TR">Turkey</option>
                                                            		<option value="TM">Turkmenistan</option>
                                                            		<option value="TC">Turks And Caicos Islands</option>
                                                            		<option value="TV">Tuvalu</option>
                                                            		<option value="UG">Uganda</option>
                                                            		<option value="UA">Ukraine</option>
                                                            		<option value="AE">United Arab Emirates</option>
                                                            		<option value="UM" selected="selected">United States Minor Outlying Islands</option>
                                                            		<option value="UY">Uruguay</option>
                                                            		<option value="UZ">Uzbekistan</option>
                                                            		<option value="VU">Vanuatu</option>
                                                            		<option value="VE">Venezuela</option>
                                                            		<option value="VN">Viet Nam</option>
                                                            		<option value="VG">Virgin Islands (British)</option>
                                                            		<option value="VI">Virgin Islands (U.S.)</option>
                                                            		<option value="WF">Wallis And Futuna Islands</option>
                                                            		<option value="EH">Western Sahara</option>
                                                            		<option value="YE">Yemen</option>
                                                            		<option value="YU">Yugoslavia</option>
                                                            		<option value="ZM">Zambia</option>
                                                            		<option value="ZW">Zimbabwe</option>
                                                            </select>
                        </td>
                    </tr>
                	<tr>
                    	<td>Card Varification No</td>
                        <td>:</td>
                        <td><input id="cvc" type="text" name="cc_cvv2_number" value="962"  required="required"/></td>
                        <td>Price </td>
                        <td>:</td>
                        <td>
                        	<input id="price" type="text" name="example_payment_amuont" value="5"  />
                        </td>
                    </tr>
                    <tr>
                    	<td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                        	<input type="submit" name="submit" value="Submit"  required="required"/>
                        </td>
                    </tr>
                	
                	
                </table>
                </form>

<div>
<h2>Demo info for sandbox testing</h2>
<div>First Name: 	John</div>
<div>Last Name: 	Doe</div>
<div>Card Type: 	visa</div>
<div>Card Number: 	4069929390455673</div>
<div>Expiration Date: 	10 2014</div>

<div>Card Verification Number: 	962</div>

<div>Billing Address:</div>
<div>Address 1: 	1 Main St</div>
<div>Address 2: 	(optional)</div>
<div>City: 	San Jose</div>
<div>State: 	CA</div>
<div>ZIP Code: 95131	(5 or 9 digits)</div>
<div>Country: 	United States</div>
<button id="insertValues">insert all</button>
 <div id="write"></div>
</div>

<script>
		$(function(){
		   $("#insertValues").click(function(){
			writeDoc('playing around :p');	
           });		
        });
		function writeDoc(str) {
				$("#write").html(str);
		}
</script>
</body>
</html>
