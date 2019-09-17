@extends('layouts.master') 
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Modal  Personal Details-->
            <div class="modal fade bs-example-modal-lg" id="modalPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                  <div class="modal-header g-bg-grey">
                    <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel">Personal Information</h4>
                    <button type="button" class="close pull-right" data-dismiss="modal"><span class="g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                  </div>
                  <div class="modal-body">
                      <form id="form1" action="">
                      <div class="row mb-4">
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Name:</b></label>
                          <input type="text" class="form-control" id="name" name="name" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Lastame:</b></label>
                          <input type="text" class="form-control" id="lastname" name="lastname" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Email:</b></label>
                          <input type="text" class="form-control" id="email" name="email" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>phone:</b></label>
                          <input type="text" class="form-control" id="phone" name="phone" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Mobile:</b></label>
                          <input type="text" class="form-control" id="mobile" name="mobile" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>Address:</b></label>
                          <input type="text" class="form-control" id="addr" name="addr" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>State:</b></label>
                          <input type="text" class="form-control" id="state" name="state" value="">
                        </div>
                        <div class="col-3 f-size-14 mb-0">
                          <label class="mb-1" class="mb-0"><b>City:</b></label>
                          <input type="text" class="form-control" id="city" name="city" value="">
                        </div>
                      </div>
                      <div class="row mb-4">
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Zip:</b></label>
                            <input type="text" class="form-control" id="zip" name="zip" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Country:</b></label>
                            <select id="country" name="country" class="form-control">
                              <option value="Afghanistan">Afghanistan</option>
                              <option value="Åland Islands">Åland Islands</option>
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antarctica">Antarctica</option>
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                              <option value="Argentina">Argentina</option>
                              <option value="Armenia">Armenia</option>
                              <option value="Aruba">Aruba</option>
                              <option value="Australia">Australia</option>
                              <option value="Austria">Austria</option>
                              <option value="Azerbaijan">Azerbaijan</option>
                              <option value="Bahamas">Bahamas</option>
                              <option value="Bahrain">Bahrain</option>
                              <option value="Bangladesh">Bangladesh</option>
                              <option value="Barbados">Barbados</option>
                              <option value="Belarus">Belarus</option>
                              <option value="Belgium">Belgium</option>
                              <option value="Belize">Belize</option>
                              <option value="Benin">Benin</option>
                              <option value="Bermuda">Bermuda</option>
                              <option value="Bhutan">Bhutan</option>
                              <option value="Bolivia">Bolivia</option>
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                              <option value="Botswana">Botswana</option>
                              <option value="Bouvet Island">Bouvet Island</option>
                              <option value="Brazil">Brazil</option>
                              <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                              <option value="Brunei Darussalam">Brunei Darussalam</option>
                              <option value="Bulgaria">Bulgaria</option>
                              <option value="Burkina Faso">Burkina Faso</option>
                              <option value="Burundi">Burundi</option>
                              <option value="Cambodia">Cambodia</option>
                              <option value="Cameroon">Cameroon</option>
                              <option value="Canada">Canada</option>
                              <option value="Cape Verde">Cape Verde</option>
                              <option value="Cayman Islands">Cayman Islands</option>
                              <option value="Central African Republic">Central African Republic</option>
                              <option value="Chad">Chad</option>
                              <option value="Chile">Chile</option>
                              <option value="China">China</option>
                              <option value="Christmas Island">Christmas Island</option>
                              <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                              <option value="Colombia">Colombia</option>
                              <option value="Comoros">Comoros</option>
                              <option value="Congo">Congo</option>
                              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                              <option value="Cook Islands">Cook Islands</option>
                              <option value="Costa Rica">Costa Rica</option>
                              <option value="Cote D'ivoire">Cote D'ivoire</option>
                              <option value="Croatia">Croatia</option>
                              <option value="Cuba">Cuba</option>
                              <option value="Cyprus">Cyprus</option>
                              <option value="Czech Republic">Czech Republic</option>
                              <option value="Denmark">Denmark</option>
                              <option value="Djibouti">Djibouti</option>
                              <option value="Dominica">Dominica</option>
                              <option value="Dominican Republic">Dominican Republic</option>
                              <option value="Ecuador">Ecuador</option>
                              <option value="Egypt">Egypt</option>
                              <option value="El Salvador">El Salvador</option>
                              <option value="Equatorial Guinea">Equatorial Guinea</option>
                              <option value="Eritrea">Eritrea</option>
                              <option value="Estonia">Estonia</option>
                              <option value="Ethiopia">Ethiopia</option>
                              <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                              <option value="Faroe Islands">Faroe Islands</option>
                              <option value="Fiji">Fiji</option>
                              <option value="Finland">Finland</option>
                              <option value="France">France</option>
                              <option value="French Guiana">French Guiana</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="French Southern Territories">French Southern Territories</option>
                              <option value="Gabon">Gabon</option>
                              <option value="Gambia">Gambia</option>
                              <option value="Georgia">Georgia</option>
                              <option value="Germany">Germany</option>
                              <option value="Ghana">Ghana</option>
                              <option value="Gibraltar">Gibraltar</option>
                              <option value="Greece">Greece</option>
                              <option value="Greenland">Greenland</option>
                              <option value="Grenada">Grenada</option>
                              <option value="Guadeloupe">Guadeloupe</option>
                              <option value="Guam">Guam</option>
                              <option value="Guatemala">Guatemala</option>
                              <option value="Guernsey">Guernsey</option>
                              <option value="Guinea">Guinea</option>
                              <option value="Guinea-bissau">Guinea-bissau</option>
                              <option value="Guyana">Guyana</option>
                              <option value="Haiti">Haiti</option>
                              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                              <option value="Hungary">Hungary</option>
                              <option value="Iceland">Iceland</option>
                              <option value="India">India</option>
                              <option value="Indonesia">Indonesia</option>
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                              <option value="Iraq">Iraq</option>
                              <option value="Ireland">Ireland</option>
                              <option value="Isle of Man">Isle of Man</option>
                              <option value="Israel">Israel</option>
                              <option value="Italy">Italy</option>
                              <option value="Jamaica">Jamaica</option>
                              <option value="Japan">Japan</option>
                              <option value="Jersey">Jersey</option>
                              <option value="Jordan">Jordan</option>
                              <option value="Kazakhstan">Kazakhstan</option>
                              <option value="Kenya">Kenya</option>
                              <option value="Kiribati">Kiribati</option>
                              <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                              <option value="Korea, Republic of">Korea, Republic of</option>
                              <option value="Kuwait">Kuwait</option>
                              <option value="Kyrgyzstan">Kyrgyzstan</option>
                              <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                              <option value="Latvia">Latvia</option>
                              <option value="Lebanon">Lebanon</option>
                              <option value="Lesotho">Lesotho</option>
                              <option value="Liberia">Liberia</option>
                              <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                              <option value="Liechtenstein">Liechtenstein</option>
                              <option value="Lithuania">Lithuania</option>
                              <option value="Luxembourg">Luxembourg</option>
                              <option value="Macao">Macao</option>
                              <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                              <option value="Madagascar">Madagascar</option>
                              <option value="Malawi">Malawi</option>
                              <option value="Malaysia">Malaysia</option>
                              <option value="Maldives">Maldives</option>
                              <option value="Mali">Mali</option>
                              <option value="Malta">Malta</option>
                              <option value="Marshall Islands">Marshall Islands</option>
                              <option value="Martinique">Martinique</option>
                              <option value="Mauritania">Mauritania</option>
                              <option value="Mauritius">Mauritius</option>
                              <option value="Mayotte">Mayotte</option>
                              <option value="Mexico">Mexico</option>
                              <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                              <option value="Moldova, Republic of">Moldova, Republic of</option>
                              <option value="Monaco">Monaco</option>
                              <option value="Mongolia">Mongolia</option>
                              <option value="Montenegro">Montenegro</option>
                              <option value="Montserrat">Montserrat</option>
                              <option value="Morocco">Morocco</option>
                              <option value="Mozambique">Mozambique</option>
                              <option value="Myanmar">Myanmar</option>
                              <option value="Namibia">Namibia</option>
                              <option value="Nauru">Nauru</option>
                              <option value="Nepal">Nepal</option>
                              <option value="Netherlands">Netherlands</option>
                              <option value="Netherlands Antilles">Netherlands Antilles</option>
                              <option value="New Caledonia">New Caledonia</option>
                              <option value="New Zealand">New Zealand</option>
                              <option value="Nicaragua">Nicaragua</option>
                              <option value="Niger">Niger</option>
                              <option value="Nigeria">Nigeria</option>
                              <option value="Niue">Niue</option>
                              <option value="Norfolk Island">Norfolk Island</option>
                              <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                              <option value="Norway">Norway</option>
                              <option value="Oman">Oman</option>
                              <option value="Pakistan">Pakistan</option>
                              <option value="Palau">Palau</option>
                              <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                              <option value="Panama">Panama</option>
                              <option value="Papua New Guinea">Papua New Guinea</option>
                              <option value="Paraguay">Paraguay</option>
                              <option value="Peru">Peru</option>
                              <option value="Philippines">Philippines</option>
                              <option value="Pitcairn">Pitcairn</option>
                              <option value="Poland">Poland</option>
                              <option value="Portugal">Portugal</option>
                              <option value="Puerto Rico">Puerto Rico</option>
                              <option value="Qatar">Qatar</option>
                              <option value="Reunion">Reunion</option>
                              <option value="Romania">Romania</option>
                              <option value="Russian Federation">Russian Federation</option>
                              <option value="Rwanda">Rwanda</option>
                              <option value="Saint Helena">Saint Helena</option>
                              <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                              <option value="Saint Lucia">Saint Lucia</option>
                              <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                              <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                              <option value="Samoa">Samoa</option>
                              <option value="San Marino">San Marino</option>
                              <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                              <option value="Saudi Arabia">Saudi Arabia</option>
                              <option value="Senegal">Senegal</option>
                              <option value="Serbia">Serbia</option>
                              <option value="Seychelles">Seychelles</option>
                              <option value="Sierra Leone">Sierra Leone</option>
                              <option value="Singapore">Singapore</option>
                              <option value="Slovakia">Slovakia</option>
                              <option value="Slovenia">Slovenia</option>
                              <option value="Solomon Islands">Solomon Islands</option>
                              <option value="Somalia">Somalia</option>
                              <option value="South Africa">South Africa</option>
                              <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                              <option value="Spain">Spain</option>
                              <option value="Sri Lanka">Sri Lanka</option>
                              <option value="Sudan">Sudan</option>
                              <option value="Suriname">Suriname</option>
                              <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                              <option value="Swaziland">Swaziland</option>
                              <option value="Sweden">Sweden</option>
                              <option value="Switzerland">Switzerland</option>
                              <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                              <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                              <option value="Tajikistan">Tajikistan</option>
                              <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                              <option value="Thailand">Thailand</option>
                              <option value="Timor-leste">Timor-leste</option>
                              <option value="Togo">Togo</option>
                              <option value="Tokelau">Tokelau</option>
                              <option value="Tonga">Tonga</option>
                              <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                              <option value="Tunisia">Tunisia</option>
                              <option value="Turkey">Turkey</option>
                              <option value="Turkmenistan">Turkmenistan</option>
                              <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                              <option value="Tuvalu">Tuvalu</option>
                              <option value="Uganda">Uganda</option>
                              <option value="Ukraine">Ukraine</option>
                              <option value="United Arab Emirates">United Arab Emirates</option>
                              <option value="United Kingdom">United Kingdom</option>
                              <option value="United States">United States</option>
                              <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                              <option value="Uruguay">Uruguay</option>
                              <option value="Uzbekistan">Uzbekistan</option>
                              <option value="Vanuatu">Vanuatu</option>
                              <option value="Venezuela">Venezuela</option>
                              <option value="Viet Nam">Viet Nam</option>
                              <option value="Virgin Islands, British">Virgin Islands, British</option>
                              <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                              <option value="Wallis and Futuna">Wallis and Futuna</option>
                              <option value="Western Sahara">Western Sahara</option>
                              <option value="Yemen">Yemen</option>
                              <option value="Zambia">Zambia</option>
                              <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Password:</b></label>
                            <input type="password" class="form-control" id="password" name="password" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Password Confirm:</b></label>
                            <input type="password" class="form-control" id="password-confirm" name="password-confirm" value="">
                          </div>
                        </div>
                    </form>
                </div>
                <div id="btnCluster" class="modal-footer g-bg-grey" id="modal-footerq">
                      
                </div>
              </div>
            </div>
          </div>
            <!-- end of Personal Details modal ------------------------------>
            <!-- Modal  Bank Details-->
            <div class="modal fade bs-example-modal-lg" id="modalBank" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-lg">
                  <div class="modal-content">
                    <div class="modal-header g-bg-grey">
                      <h4 id="userTitle" class="modal-title g-color-white" id="myModalLabel">Bank Information</h4>
                      <button type="button" class="close pull-right" data-dismiss="modal"><span class="g-color-white" aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="form1" action="">
                        <div class="row mb-4">
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Bank Name:</b></label>
                            <input type="text" class="form-control" id="bankname" name="bankname" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Country:</b></label>
                            <select id="country2" name="country2" class="form-control">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cote D'ivoire">Cote D'ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-bissau">Guinea-bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                <option value="Korea, Republic of">Korea, Republic of</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Reunion">Reunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Helena">Saint Helena</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-leste">Timor-leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Account ID:</b></label>
                            <input type="text" class="form-control" id="accid" name="accid" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Account Number:</b></label>
                            <input type="text" class="form-control" id="account" name="account" value="">
                          </div>
                        </div>
                        <div class="row mb-4">
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Account Name:</b></label>
                            <input type="text" class="form-control" id="accname" name="accname" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>SWIFT/BIC:</b></label>
                            <input type="text" class="form-control" id="swift" name="swift" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>IBAN:</b></label>
                            <input type="text" class="form-control" id="iban" name="iban" value="">
                          </div>
                          <div class="col-3 f-size-14 mb-0">
                            <label class="mb-1" class="mb-0"><b>Currency:</b></label>
                            <input type="text" class="form-control" id="currency" name="currency" value="">
                          </div>
                        </div>
                      </form>
                  </div>
                  <div id="btnClusterB" class="modal-footer g-bg-grey" id="modal-footerq">
                        
                  </div>
                </div>
              </div>
            </div>
              <!-- end of Bank Details modal ------------------------------>
          
    <!-- Content Header (Page header) -->
  
    <!-- Main content -->
    <section class="content mt-3">
        <div class="container-fluid">
          <div class="row">
          <div class="col-sm-6">
          <div class="row">
            {{-- <div class="col-sm-1 col-lg-1"></div> --}}
            <div class="col-sm-12 col-lg-12">
            <!-- Profile Image -->
            <div class="card card-primary card-outline g-bg-color-darkgrey">
              
              <div class="card-body box-profile">
                <div class="text-center">
                    <h1 class="g-color-white">Personal Details</h1>
                  <img class="profile-user-img img-fluid img-circle"
                       src="/img/profile.png"
                       alt="User profile picture">
                </div>

                <h3 id="namep" class="profile-username text-center g-color-white">{{$user[0]->name}}&nbsp;{{$user[0]->lastname}}</h3>

                <p id="emailp" class="text-muted text-center">{{$user[0]->email}}</p>
                <div class="row">
                    <div class="col-sm-1 col-lg-1"></div>
                    <div class="col-sm-10 col-lg-10">
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Phone</b> <a id="phonep" class="float-right">{{$user[0]->phone}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Mobile</b> <a id="mobilep" class="float-right">{{$user[0]->mobile}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>Address</b> <a id="addrp" class="float-right">{{$user[0]->addr}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>City</b> <a id="cityp" class="float-right">{{$user[0]->city}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                    <b>State</b> <a id="statep" class="float-right">{{$user[0]->state}}</a>
                  </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Zip</b> <a id="zipp" class="float-right">{{$user[0]->zip}}</a>
                    </li>
                  <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey mb-4">
                    <b>Country</b> <a id="countryp" class="float-right">{{$user[0]->country}}</a>
                  </li>
                </ul>
                <a href="#" class="btn btn-primary btn-block" onClick="openclientData({{$user[0]->id}})"><b class=" g-color-white">Edit</b></a>
                  </div>
                  <div class="col-sm-1 col-lg-1"></div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
            {{-- <div class="col-sm-1 col-lg-1"></div> --}}
          </div>
          </div>
          <div class="col-sm-6">
          <div class="row">
              {{-- <div class="col-sm-1 col-lg-1"></div> --}}
              <div class="col-sm-12 col-lg-12">
              <!-- Profile Image -->
              <div class="card card-primary card-outline g-bg-color-darkgrey">
                
                <div class="card-body box-profile">
                  <div class="text-center">
                      <h1 class="g-color-white">Bank Details</h1>
                      <span class="fa-stack fa-lg " style="font-size: 64px;">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                        </span> 
                        @if($user[0]->getBank->isNotEmpty())
                          <h3 id="nameb" class="profile-username text-center g-color-white">{{$user[0]->getBank[0]->bankname}}</h3>
                        @else
                          <h3 id="nameb" class="profile-username text-center g-color-red">PLEASE ADD YOUR BANK DETAILS</h3>
                        @endif
                  </div>
                  
                  <div class="row">
                      <div class="col-sm-1 col-lg-1"></div>
                      <div class="col-sm-10 col-lg-10">
                  @if($user[0]->getBank->isNotEmpty())
                  <ul class="list-group list-group-unbordered mb-3 mt-3">
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Country</b> <a id="countryb" class="float-right">{{$user[0]->getBank[0]->country}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account ID</b> <a id="accidb" class="float-right">{{$user[0]->getBank[0]->accid}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account</b> <a id="accountb" class="float-right">{{$user[0]->getBank[0]->account}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>Account Name</b> <a id="accnameb" class="float-right">{{$user[0]->getBank[0]->accname}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>SWIFT / BIC</b> <a id="swiftb" class="float-right">{{$user[0]->getBank[0]->swift}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                      <b>IBAN</b> <a id="ibanb" class="float-right">{{$user[0]->getBank[0]->iban}}</a>
                    </li>
                    <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey mb-4">
                      <b>Currency</b> <a id="currencyb" class="float-right">{{$user[0]->getBank[0]->currency}}</a>
                    </li>
                  </ul>
                  <a href="#" class="btn btn-primary btn-block" onClick="openclientBank({{auth()->user()->id}})"><b class=" g-color-white">Edit</b></a>
                  @else
                  <ul class="list-group list-group-unbordered mb-3 mt-3">
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>Country</b> <a id="countryb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>Account ID</b> <a id="accidb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>Account</b> <a id="accountb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>Account Name</b> <a id="accnameb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>SWIFT / BIC</b> <a id="swiftb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey">
                        <b>IBAN</b> <a id="ibanb" class="float-right"></a>
                      </li>
                      <li class="list-group-item px-2 g-bg-color-darkgrey g-color-white brdr-color-grey mb-4">
                        <b>Currency</b> <a id="currencyb" class="float-right"></a>
                      </li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-block" onClick="openNewclientBank({{auth()->user()->id}})"><b class=" g-color-white">Add Bank Details</b></a>
                  @endif
                    </div>
                    <div class="col-sm-1 col-lg-1"></div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              </div>
              {{-- <div class="col-sm-1 col-lg-1"></div> --}}
            </div>
          </div>
        </div>
        </div>
    </section>
</div>
@endsection
 
@section('javascript')
<!-- JSGrid -->

<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)

</script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Sparkline -->
<script src="/dist/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/dist/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/dist/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Slimscroll -->
<script src="/dist/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/dist/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript" charset="utf8" src="{{ asset('assets/js/clients.js') }}"></script>
<!-- Swal -->
<script src="{{asset('assets/js/sweetalert2.all.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/swal-forms.js')}}" type="text/javascript"></script>
<!-- Boostrap Toggle -->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script>

@stop