

<section id="ux-ui-subscribe-from" class="form-section" wow="" bounceinup="" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container subsc-form-popup">
    <div class="wrap-contact100">
      <div class="subscribe-text">
        <h4>Subscribe to our blogs &amp; newsletter and get updates on latest technologies &amp; trends</h4>
      </div>
      <form class="contact100-form validate-form">
        

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
          
          <input class="input100" type="text" name="name" placeholder="Enter your name">
        </div>

        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
          
          <input class="input100" type="text" name="email" placeholder="Enter your email">
          <input type="hidden" name="recaptcha" id="recaptcha">

        </div>
            <div class="submit-butn">
            <button class="form-submit-butn" type="button">Subscribe!</button>
            </div>
      </form>
    </div>
  </div>
</section>





<!--==========================
      business-talk-section
    ============================-->

    <section id="business-talk-section" class="form-section" wow bounceInUp" data-wow-duration="1.4s" style="visibility: visible; animation-duration: 1.4s; animation-name: bounceInUp;">
    <div class="container business-form-popup">
      <div class="talk-heading">
        <h2>Let’s Talk Business</h2>
      </div>
       <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="aboutmu-detail-para">
              <p>Call or email us for further queries and for placing an order for the digital services and for ideal partnership deals, and online success if you want to attain it right now!</p>
            </div>
          </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
        </div>
    </div>
    <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-lg-8">
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif
                       
                               <form id="ser-form" class="needs-validation " novalidate method="POST" action="{{url('sendemail/send')}}">
 {{ csrf_field() }}
                            <div class="form-row ">
                                <div class="col-md-6 mb-3 ">

                                    <input type="text " class="form-control style-filed " id="validationCustom01 " name="name" placeholder="Name " required>
                                    <div class="valid-feedback ">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                    <input type="text " class="form-control style-filed " id="validationCustom01 " name="company_name" placeholder="Company Name " required>
                                    <div class="valid-feedback ">

                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 ">
                                <input type="text " class="form-control style-filed " id="validationCustom01 " name="Subject" placeholder="Subject " required>
                                    <div class="valid-feedback ">
                                </div>
                                <!--<select class="custom-select selec-opt" id="inputGroupSelect01" name="choose_sub" required>-->
                                <!-- <option selected>Choose Your Subject</option>-->
                                <!--    <option value="1">One</option>-->
                                <!--    <option value="2">Two</option>-->
                                <!--    <option value="3">Three</option>-->
                                <!--</select>-->
                                    
                                    </div>
                                
                                
                                <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                        <input type="email " class="form-control style-filed " name="email" id="validationCustomUsername " placeholder="Email Id "
                                               aria-describedby="inputGroupPrepend " required>
                                        <div class="invalid-feedback ">
                                            Please Enter Your Email.
                                        </div>
                                    </div>
                                </div>
                                 
                                <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                        <input class="form-control style-filed " type="tel" name="phone" placeholder="Telephone Number" required>

                                        <div class="invalid-feedback ">
                                            Please Enter Your Telephone.
                                        </div>
                                    </div>
                                </div>
                              <div class="col-md-6 mb-3 ">

                                    <div class="input-group ">
                                        <div class="input-group-prepend ">

                                        </div>
                                      <select class="custom-select selec-opt " id="address-country" name="states"><option value="af">Afghanistan (&#8235;افغانستان&#8236;&lrm;)</option><option value="al">Albania (Shqipëri)</option><option value="dz">Algeria (&#8235;الجزائر&#8236;&lrm;)</option><option value="as">American Samoa</option><option value="ad">Andorra</option><option value="ao">Angola</option><option value="ai">Anguilla</option><option value="ag">Antigua and Barbuda</option><option value="ar">Argentina</option><option value="am">Armenia (Հայաստան)</option><option value="aw">Aruba</option><option value="au">Australia</option><option value="at">Austria (Österreich)</option><option value="az">Azerbaijan (Azərbaycan)</option><option value="bs">Bahamas</option><option value="bh">Bahrain (&#8235;البحرين&#8236;&lrm;)</option><option value="bd">Bangladesh (বাংলাদেশ)</option><option value="bb">Barbados</option><option value="by">Belarus (Беларусь)</option><option value="be">Belgium (België)</option><option value="bz">Belize</option><option value="bj">Benin (Bénin)</option><option value="bm">Bermuda</option><option value="bt">Bhutan (འབྲུག)</option><option value="bo">Bolivia</option><option value="ba">Bosnia and Herzegovina (Босна и Херцеговина)</option><option value="bw">Botswana</option><option value="br">Brazil (Brasil)</option><option value="io">British Indian Ocean Territory</option><option value="vg">British Virgin Islands</option><option value="bn">Brunei</option><option value="bg">Bulgaria (България)</option><option value="bf">Burkina Faso</option><option value="bi">Burundi (Uburundi)</option><option value="kh">Cambodia (កម្ពុជា)</option><option value="cm">Cameroon (Cameroun)</option><option value="ca">Canada</option><option value="cv">Cape Verde (Kabu Verdi)</option><option value="bq">Caribbean Netherlands</option><option value="ky">Cayman Islands</option><option value="cf">Central African Republic (République centrafricaine)</option><option value="td">Chad (Tchad)</option><option value="cl">Chile</option><option value="cn">China (中国)</option><option value="cx">Christmas Island</option><option value="cc">Cocos (Keeling) Islands</option><option value="co">Colombia</option><option value="km">Comoros (&#8235;جزر القمر&#8236;&lrm;)</option><option value="cd">Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)</option><option value="cg">Congo (Republic) (Congo-Brazzaville)</option><option value="ck">Cook Islands</option><option value="cr">Costa Rica</option><option value="ci">Côte d’Ivoire</option><option value="hr">Croatia (Hrvatska)</option><option value="cu">Cuba</option><option value="cw">Curaçao</option><option value="cy">Cyprus (Κύπρος)</option><option value="cz">Czech Republic (Česká republika)</option><option value="dk">Denmark (Danmark)</option><option value="dj">Djibouti</option><option value="dm">Dominica</option><option value="do">Dominican Republic (República Dominicana)</option><option value="ec">Ecuador</option><option value="eg">Egypt (&#8235;مصر&#8236;&lrm;)</option><option value="sv">El Salvador</option><option value="gq">Equatorial Guinea (Guinea Ecuatorial)</option><option value="er">Eritrea</option><option value="ee">Estonia (Eesti)</option><option value="et">Ethiopia</option><option value="fk">Falkland Islands (Islas Malvinas)</option><option value="fo">Faroe Islands (Føroyar)</option><option value="fj">Fiji</option><option value="fi">Finland (Suomi)</option><option value="fr">France</option><option value="gf">French Guiana (Guyane française)</option><option value="pf">French Polynesia (Polynésie française)</option><option value="ga">Gabon</option><option value="gm">Gambia</option><option value="ge">Georgia (საქართველო)</option><option value="de">Germany (Deutschland)</option><option value="gh">Ghana (Gaana)</option><option value="gi">Gibraltar</option><option value="gr">Greece (Ελλάδα)</option><option value="gl">Greenland (Kalaallit Nunaat)</option><option value="gd">Grenada</option><option value="gp">Guadeloupe</option><option value="gu">Guam</option><option value="gt">Guatemala</option><option value="gg">Guernsey</option><option value="gn">Guinea (Guinée)</option><option value="gw">Guinea-Bissau (Guiné Bissau)</option><option value="gy">Guyana</option><option value="ht">Haiti</option><option value="hn">Honduras</option><option value="hk">Hong Kong (香港)</option><option value="hu">Hungary (Magyarország)</option><option value="is">Iceland (Ísland)</option><option value="in">India (भारत)</option><option value="id">Indonesia</option><option value="ir">Iran (&#8235;ایران&#8236;&lrm;)</option><option value="iq">Iraq (&#8235;العراق&#8236;&lrm;)</option><option value="ie">Ireland</option><option value="im">Isle of Man</option><option value="il">Israel (&#8235;ישראל&#8236;&lrm;)</option><option value="it">Italy (Italia)</option><option value="jm">Jamaica</option><option value="jp">Japan (日本)</option><option value="je">Jersey</option><option value="jo">Jordan (&#8235;الأردن&#8236;&lrm;)</option><option value="kz">Kazakhstan (Казахстан)</option><option value="ke">Kenya</option><option value="ki">Kiribati</option><option value="xk">Kosovo</option><option value="kw">Kuwait (&#8235;الكويت&#8236;&lrm;)</option><option value="kg">Kyrgyzstan (Кыргызстан)</option><option value="la">Laos (ລາວ)</option><option value="lv">Latvia (Latvija)</option><option value="lb">Lebanon (&#8235;لبنان&#8236;&lrm;)</option><option value="ls">Lesotho</option><option value="lr">Liberia</option><option value="ly">Libya (&#8235;ليبيا&#8236;&lrm;)</option><option value="li">Liechtenstein</option><option value="lt">Lithuania (Lietuva)</option><option value="lu">Luxembourg</option><option value="mo">Macau (澳門)</option><option value="mk">Macedonia (FYROM) (Македонија)</option><option value="mg">Madagascar (Madagasikara)</option><option value="mw">Malawi</option><option value="my">Malaysia</option><option value="mv">Maldives</option><option value="ml">Mali</option><option value="mt">Malta</option><option value="mh">Marshall Islands</option><option value="mq">Martinique</option><option value="mr">Mauritania (&#8235;موريتانيا&#8236;&lrm;)</option><option value="mu">Mauritius (Moris)</option><option value="yt">Mayotte</option><option value="mx">Mexico (México)</option><option value="fm">Micronesia</option><option value="md">Moldova (Republica Moldova)</option><option value="mc">Monaco</option><option value="mn">Mongolia (Монгол)</option><option value="me">Montenegro (Crna Gora)</option><option value="ms">Montserrat</option><option value="ma">Morocco (&#8235;المغرب&#8236;&lrm;)</option><option value="mz">Mozambique (Moçambique)</option><option value="mm">Myanmar (Burma) (မြန်မာ)</option><option value="na">Namibia (Namibië)</option><option value="nr">Nauru</option><option value="np">Nepal (नेपाल)</option><option value="nl">Netherlands (Nederland)</option><option value="nc">New Caledonia (Nouvelle-Calédonie)</option><option value="nz">New Zealand</option><option value="ni">Nicaragua</option><option value="ne">Niger (Nijar)</option><option value="ng">Nigeria</option><option value="nu">Niue</option><option value="nf">Norfolk Island</option><option value="kp">North Korea (조선 민주주의 인민 공화국)</option><option value="mp">Northern Mariana Islands</option><option value="no">Norway (Norge)</option><option value="om">Oman (&#8235;عُمان&#8236;&lrm;)</option><option value="pk">Pakistan (&#8235;پاکستان&#8236;&lrm;)</option><option value="pw">Palau</option><option value="ps">Palestine (&#8235;فلسطين&#8236;&lrm;)</option><option value="pa">Panama (Panamá)</option><option value="pg">Papua New Guinea</option><option value="py">Paraguay</option><option value="pe">Peru (Perú)</option><option value="ph">Philippines</option><option value="pl">Poland (Polska)</option><option value="pt">Portugal</option><option value="pr">Puerto Rico</option><option value="qa">Qatar (&#8235;قطر&#8236;&lrm;)</option><option value="re">Réunion (La Réunion)</option><option value="ro">Romania (România)</option><option value="ru">Russia (Россия)</option><option value="rw">Rwanda</option><option value="bl">Saint Barthélemy</option><option value="sh">Saint Helena</option><option value="kn">Saint Kitts and Nevis</option><option value="lc">Saint Lucia</option><option value="mf">Saint Martin (Saint-Martin (partie française))</option><option value="pm">Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)</option><option value="vc">Saint Vincent and the Grenadines</option><option value="ws">Samoa</option><option value="sm">San Marino</option><option value="st">São Tomé and Príncipe (São Tomé e Príncipe)</option><option value="sa">Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)</option><option value="sn">Senegal (Sénégal)</option><option value="rs">Serbia (Србија)</option><option value="sc">Seychelles</option><option value="sl">Sierra Leone</option><option value="sg">Singapore</option><option value="sx">Sint Maarten</option><option value="sk">Slovakia (Slovensko)</option><option value="si">Slovenia (Slovenija)</option><option value="sb">Solomon Islands</option><option value="so">Somalia (Soomaaliya)</option><option value="za">South Africa</option><option value="kr">South Korea (대한민국)</option><option value="ss">South Sudan (&#8235;جنوب السودان&#8236;&lrm;)</option><option value="es">Spain (España)</option><option value="lk">Sri Lanka (ශ්&zwj;රී ලංකාව)</option><option value="sd">Sudan (&#8235;السودان&#8236;&lrm;)</option><option value="sr">Suriname</option><option value="sj">Svalbard and Jan Mayen</option><option value="sz">Swaziland</option><option value="se">Sweden (Sverige)</option><option value="ch">Switzerland (Schweiz)</option><option value="sy">Syria (&#8235;سوريا&#8236;&lrm;)</option><option value="tw">Taiwan (台灣)</option><option value="tj">Tajikistan</option><option value="tz">Tanzania</option><option value="th">Thailand (ไทย)</option><option value="tl">Timor-Leste</option><option value="tg">Togo</option><option value="tk">Tokelau</option><option value="to">Tonga</option><option value="tt">Trinidad and Tobago</option><option value="tn">Tunisia (&#8235;تونس&#8236;&lrm;)</option><option value="tr">Turkey (Türkiye)</option><option value="tm">Turkmenistan</option><option value="tc">Turks and Caicos Islands</option><option value="tv">Tuvalu</option><option value="vi">U.S. Virgin Islands</option><option value="ug">Uganda</option><option value="ua">Ukraine (Україна)</option><option value="ae">United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)</option><option value="gb">United Kingdom</option><option value="us">United States</option><option value="uy">Uruguay</option><option value="uz">Uzbekistan (Oʻzbekiston)</option><option value="vu">Vanuatu</option><option value="va">Vatican City (Città del Vaticano)</option><option value="ve">Venezuela</option><option value="vn">Vietnam (Việt Nam)</option><option value="wf">Wallis and Futuna (Wallis-et-Futuna)</option><option value="eh">Western Sahara (&#8235;الصحراء الغربية&#8236;&lrm;)</option><option value="ye">Yemen (&#8235;اليمن&#8236;&lrm;)</option><option value="zm">Zambia</option><option value="zw">Zimbabwe</option><option value="ax">Åland Islands</option></select>

                                        <div class="invalid-feedback ">
                                            Please Enter Your State.
                                        </div>
                                    </div>
                                </div>
                              

                                <div class="col-md-12 mb-3 ">

                                    <textarea class="form-control z-depth-1 are-heigh " id="exampleFormControlTextarea6 " rows="3 " name="message" placeholder="Your Message"></textarea>

                                    <div class="invalid-feedback ">
                                        Please select a region.
                                    </div>
                                </div>
                            </div>
                            <div class="talk-form-btn ">
                     
                            

                                <button class="btn btn-primary btn-sm " type="submit" value="Send">Submit</button>
                            </div>
                        </form>
   </div>
     <div class="col-md-2"></div>
 </div>
 </div>
</section>
