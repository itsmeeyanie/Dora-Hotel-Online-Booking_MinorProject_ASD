<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
.csslider {
  -moz-perspective: 1300px;
  -ms-perspective: 1300px;
  -webkit-perspective: 1300px;
  perspective: 1300px;
  display: inline-block;
  float: right;
  position: relative;
  margin-top: 120px;
  background-blend-mode: hard-light;
}

.csslider > input:nth-of-type(10):checked ~ ul li:first-of-type {
  margin-left: -900%;
}
.csslider > input:nth-of-type(9):checked ~ ul li:first-of-type {
  margin-left: -800%;
}
.csslider > input:nth-of-type(8):checked ~ ul li:first-of-type {
  margin-left: -700%;
}
.csslider > input:nth-of-type(7):checked ~ ul li:first-of-type {
  margin-left: -600%;
}
.csslider > input:nth-of-type(6):checked ~ ul li:first-of-type {
  margin-left: -500%;
}
.csslider > input:nth-of-type(5):checked ~ ul li:first-of-type {
  margin-left: -400%;
}
.csslider > input:nth-of-type(4):checked ~ ul li:first-of-type {
  margin-left: -300%;
}
.csslider > input:nth-of-type(3):checked ~ ul li:first-of-type {
  margin-left: -200%;
}
.csslider > input:nth-of-type(2):checked ~ ul li:first-of-type {
  margin-left: -100%;
}
.csslider > input:nth-of-type(1):checked ~ ul li:first-of-type {
  margin-left: 0%;
}


.csslider > ul {
  position: relative;
  width: 550px;
  height: 470px;
  z-index: 1;
  font-size: 0;
  line-height: 0;
  background-color: white;
  border: 10px solid #3a3a3a;
  margin: 0 auto;
  padding: 0;
  overflow: hidden;
  white-space: nowrap;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}
.csslider > ul > li {
  position: relative;
  display: inline-block;
  width: 100%;
  height: 100%;
  overflow: hidden;
  font-size: 15px;
  font-size: initial;
  line-height: normal;
  -moz-transition: all 0.5s cubic-bezier(0.4, 1.3, 0.65, 1);
  -o-transition: all 0.5s ease-out;
  -webkit-transition: all 0.5s cubic-bezier(0.4, 1.3, 0.65, 1);
  transition: all 0.5s cubic-bezier(0.4, 1.3, 0.65, 1);
  -moz-background-size: cover;
  -o-background-size: cover;
  -webkit-background-size: cover;
  background-size: cover;
  vertical-align: top;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  white-space: normal;
}
.csslider > ul > li.scrollable {
  overflow-y: scroll;
}

img {
    margin-top: 20px;
    background-blend-mode: hard-light;
    border: 5px  solid #e6e9ed;
}

h5 {
    font-family: "Futurist Fixed-width";
    font-weight: bold;
    margin-top: 10px;
}

p {
    font-family: "Segoe UI Emoji";
    margin-left: 50px;
    margin-right: 50px;
}


    </style>
</head>
<body>
    <div class="container gallery-container">

        <div class="csslider" style="background-color: grey; text-align: center;">
        <input type="radio" name="slides" id="slides_1" checked />
        <input type="radio" name="slides" id="slides_2" />
        <input type="radio" name="slides" id="slides_3" />
        <input type="radio" name="slides" id="slides_4" />
        <input type="radio" name="slides" id="slides_5" />
        <input type="radio" name="slides" id="slides_6" />
        <input type="radio" name="slides" id="slides_7" />
        <input type="radio" name="slides" id="slides_8" />
        <input type="radio" name="slides" id="slides_N" />
        <ul>
            <li><img src="images/rooms/superior-03.jpg" alt="rooms">
                <div class="caption">
                        <h5>SUPERIOR</h5>
                        <p style="font-weight: bold;"> Modern Look</p>
                        <p> Amenities includes <i>free wifi, LCD TV, writing desk, sofas, aircon, telephone, rain shower</i></p>
                        <button id="room002" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/superior-double.jpg" alt="rooms">
                <div class="caption">
                        <h5>SUPERIOR</h5>
                        <p style="font-weight: bold;">Sunkissed <i>twin bed</i></p>
                        <p> Amenities includes <i>free wifi, LCD TV, writing desk, sofas, aircon, telephone, rain shower</i></p>
                        <button id="room004" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/deluxe-2.jpg" alt="rooms">
                <div class="caption">
                        <h5>DELUXE</h5>
                        <p style="font-weight: bold;">Sky Bed</p>
                        <p>Amenities includes <i>free wifi, LCD TV, desk, sofas, mini ref, airconditioning, telephone
                        rain shower, minibar</i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/deluxe-2.jpg" alt="rooms">
                <div class="caption">
                        <h5>DELUXE</h5>
                        <p style="font-weight: bold;">Sky Bed</p>
                        <p>Amenities includes <i>free wifi, LCD TV, desk, sofas, mini ref, airconditioning, telephone
                        rain shower, minibar</i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/deluxe-2.jpg" alt="rooms">
                <div class="caption">
                        <h5>DELUXE</h5>
                        <p style="font-weight: bold;">Sky Bed</p>
                        <p>Amenities includes <i>free wifi, LCD TV, desk, sofas, mini ref, airconditioning, telephone
                        rain shower, minibar</i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/deluxe-2.jpg" alt="rooms">
                <div class="caption">
                        <h5>DELUXE</h5>
                        <p style="font-weight: bold;">Splashy <i>twin bed</i></p>
                        <p>Amenities includes <i>free wifi, LCD TV, sofas, mini ref, airconditioning, telephone
                        rain shower, a way to the pool </i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/bclass.jpg" alt="Traffic">
                <div class="caption">
                        <h5>BUSINESS CLASS</h5>
                        <p style="font-weight: bold;">All You Need</p>
                        <p>Amenities includes <i> own room wifi, office desk, sofas, mini bar, mini ref, cabinet, airconditioning, telephone, rain shower and bath tub, bathrob, slippers, complimentary entrance to spa and gym, free breakfast </i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/bclass.jpg" alt="Traffic">
                <div class="caption">
                        <h5>BUSINESS CLASS</h5>
                        <p style="font-weight: bold;">All You Need</p>
                        <p>Amenities includes <i> own room wifi, office desk, sofas, mini bar, mini ref, cabinet, airconditioning, telephone, rain shower and bath tub, bathrob, slippers, complimentary entrance to spa and gym, free breakfast </i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                </div>
            </li>
            <li><img src="images/rooms/bclass-1.jpg" alt="Traffic">
                <div class="caption">
                        <h5>BUSINESS CLASS</h5>
                        <p style="font-weight: bold;">All You Need</p>
                        <p>Amenities includes <i> own room wifi, sofas, mini bar, mini ref, cabinet, airconditioning, telephone, rain shower and bath tub, complimentary entrance to spa and gym, free breakfast </i></p>
                        <button id="room006" class="btn btn-secondary">CHOOSE ME</button>
                    </div>
            </li>
        </ul>

            
    </div>
</body>
</html>

