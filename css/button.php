/*Кружочки внизу для перезагрузки страницы*/
.lds-ripple {
  
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  margin-top: 30px;
}
.lds-ripple div {
  position: absolute;
  border: 4px solid rgb(27, 148, 204);
  opacity: 1;
  border-radius: 50%;
  animation: lds-ripple 1s cubic-bezier(0, 0.2, 0.8, 1) infinite;
}
.lds-ripple div:nth-child(2) {
  animation-delay: -0.5s;
}
@keyframes lds-ripple {
  0% {
    top: 36px;
    left: 36px;
    width: 0;
    height: 0;
    opacity: 1;
  }
  100% {
    top: 0px;
    left: 0px;
    width: 72px;
    height: 72px;
    opacity: 0;
  }
}

/*Резиновые кнопки*/

button {
  position: relative;
  display: inline-block;
  background: none;
  outline: none;
  border: none;
  padding: 0;
  cursor: pointer;
  color: #eee;
  text-transform: uppercase;
  font-weight: 700;
  letter-spacing: .05em;
}
button span {
  position: relative;
  z-index: 1;
  display: block;
  min-width: 1em;
  padding: 1em;
  border-radius: 2em;
  background-color: #d99d61;
  border: 1px solid #d4904c;
  -webkit-box-shadow: -5px 5px 10px rgba(0, 0, 0, 0.2);
          box-shadow: -5px 5px 10px rgba(0, 0, 0, 0.2);
  -webkit-transition: background-color .2s, -webkit-transform .1s, -webkit-box-shadow .2s;
  transition: background-color .2s, -webkit-transform .1s, -webkit-box-shadow .2s;
  transition: transform .1s, box-shadow .2s, background-color .2s;
  transition: transform .1s, box-shadow .2s, background-color .2s, -webkit-transform .1s, -webkit-box-shadow .2s;
}
button::after {
  content: '';
  position: absolute;
  top: -1em;
  bottom: -1em;
  left: -1em;
  right: -1em;
  border-radius: 4em;
  -webkit-box-shadow: 0 0 0px rgba(0, 0, 0, 0.2), inset 0 0 0px rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 0px rgba(0, 0, 0, 0.2), inset 0 0 0px rgba(0, 0, 0, 0.2);
  -webkit-transition: -webkit-box-shadow .1s;
  transition: -webkit-box-shadow .1s;
  transition: box-shadow .1s;
  transition: box-shadow .1s, -webkit-box-shadow .1s;
}
button:hover span, button:focus span {
  background-color: #dca56d;
}
button:active span {
  background-color: #d99d61;
  -webkit-transform: scale(0.97);
          transform: scale(0.97);
  -webkit-box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.2);
          box-shadow: -2px 2px 5px rgba(0, 0, 0, 0.2);
}
button:active::after {
  -webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.2), inset -3px 3px 1em rgba(0, 0, 0, 0.2);
          box-shadow: 0 0 2px rgba(0, 0, 0, 0.2), inset -3px 3px 1em rgba(0, 0, 0, 0.2);
}

body {
  background-color: #d99d61;
}

.wrap {
  width: 100%;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
.wrap button {
  margin: 1em;
}


/*Градиентная кнопка*/

.gradient-wrap {
  width: 100%;
  height: 100vh;
  background: linear-gradient(to left, #1366ff71, #ff0b6d75);
}
.gradient-btn {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 180px;
  height: 60px;
  text-align: center;
  line-height: 60px;
  font-family: sans-serif;
  font-size: 24px;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 6px;
  transition: .5s;
  background-color: rgba(0, 140, 255, 0.089);
  border: 4px solid #fff;
  border-radius: 60px;
  box-shadow: 0 5px 20px rgba(0,0,0, .5);
  overflow: hidden;
}
.gradient-btn::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(to left, #1366ff33, #ff0b6d);
  z-index: -1;
  border-radius: 60px;
  transform: scaleX(0);
  transform-origin: right;
  transition: transform .5s ease-in-out;
}
.gradient-btn:hover::before {
  transform: scaleX(1);
  transform-origin: left;
}





/* Кнопка в шапке Медклауд*/
@import url("https://fonts.googleapis.com/css?family=Share+Tech+Mono");
body {
  background-color: #000000;
  font-family: "Share Tech Mono", monospace;
}

a {
  text-decoration: none;
  color: #00ffb4;
}

.glitch-btn {
  display: inline-block;
  position: absolute;
  z-index:2;
  top: 8%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 36px;
  transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
  color: #ffffff;
}

.glitch-btn .mask {
  position: absolute;
  z-index:2;
  width: 100%;
  overflow: hidden;
  display: none;
}

.glitch-btn .mask span {
  position: absolute;
  z-index:2;
  left: 50%;
  -webkit-transform: translateX(-50%);
  transform: translateX(-50%);
  width: 100%;
  top: -100%;
}

.glitch-btn:hover {
  color: #000000;
}

.glitch-btn:hover:before {
  background: #847fcc;
  transform: translateX(120%) scaleX(3) scaleY(0.8);
}

.glitch-btn:before {
  content: "";
  position: absolute;
  z-index:2;
  left: -15%;
  top: -50%;
  background: #42a396;
  width: 40%;
  height: 200%;
  padding: 0px;
  z-index: -1;
  transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.glitch-btn:after {
  content: "";
  position: absolute;
  z-index:2;
  left: -5%;
  top: 105%;
  background: #00ffb4;
  width: 112%;
  height: 10%;
  padding: 0px;
  z-index: -1;
  transition: all 0.8s cubic-bezier(0.23, 1, 0.32, 1);
}

.glitch-btn:hover:after {
  background: #4e4e4e;
  transform: translateX(-55%) translateY(-600%) rotate(90deg) scaleX(0.3);
}

.glitch-btn .mask1 {
  height: 20%;
  top: 19%;
}

.glitch-btn .mask2 {
  height: 30%;
  top: 35%;
}

.glitch-btn .mask3 {
  height: 57%;
  top: 63%;
}

.hidden {
  opacity: 0;
}

.glitch-btn:hover .mask1 {
  animation: glitchin1 0.2s 0.3s both;
}

.glitch-btn:hover .mask2 {
  animation: glitchin2 0.2s 0.2s both;
}

.glitch-btn:hover .mask3 {
  animation: glitchin1 0.2s 0.2s both;
}

.glitch-btn:hover .hidden {
  animation: fade-in 0.1s 0.2s forwards;
}

.glitch-btn:hover .text {
  animation: fade-in 0.1s 0.2s forwards;
}

.glitch-btn:hover .mask {
  display: block;
}

@-webkit-keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@keyframes fade-in {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
@-webkit-keyframes glitchin1 {
  100% {
    opacity: 0;
    transform: translate(0px, 0px);
  }
  95% {
    opacity: 1;
    -webkit-transform: translate(0.5px, 0.05px);
    transform: translate(0.5px, 0.05px);
  }
  90% {
    -webkit-transform: translate(0.6px, -0.3px);
    transform: translate(0.6px, -0.3px);
  }
  85% {
    -webkit-transform: translate(1.2px, 0px);
    transform: translate(1.2px, 0px);
  }
  80% {
    -webkit-transform: translate(1.2px, 0.2px);
    transform: translate(1.2px, 0.2px);
  }
  75% {
    -webkit-transform: translate(0.5px, 1px);
    transform: translate(0.5px, 1px);
  }
  70% {
    -webkit-transform: translate(0.3px, 1.2px);
    transform: translate(0.3px, 1.2px);
  }
  65% {
    -webkit-transform: translate(-2.1px, 0.7px);
    transform: translate(-2.1px, 0.7px);
  }
  60% {
    -webkit-transform: translate(3.6px, 0.4px);
    transform: translate(3.6px, 0.4px);
  }
  55% {
    -webkit-transform: translate(0.45px, 1.8px);
    transform: translate(0.45px, 1.8px);
  }
  50% {
    -webkit-transform: translate(-3px, -1px);
    transform: translate(-3px, -1px);
  }
  45% {
    -webkit-transform: translate(-4.4px, 1.1px);
    transform: translate(-4.4px, 1.1px);
  }
  40% {
    -webkit-transform: translate(-4.2px, 2.4px);
    transform: translate(-4.2px, 2.4px);
  }
  35% {
    -webkit-transform: translate(2.6px, 1.3px);
    transform: translate(2.6px, 1.3px);
  }
  30% {
    -webkit-transform: translate(-1.4px, 2.8px);
    transform: translate(-1.4px, 2.8px);
  }
  25% {
    -webkit-transform: translate(6px, 0.75px);
    transform: translate(6px, 0.75px);
  }
  20% {
    -webkit-transform: translate(0px, -1.6px);
    transform: translate(0px, -1.6px);
  }
  15% {
    -webkit-transform: translate(-5.95px, -0.85px);
    transform: translate(-5.95px, -0.85px);
  }
  10% {
    -webkit-transform: translate(3.6px, 3.6px);
    transform: translate(3.6px, 3.6px);
  }
  5% {
    -webkit-transform: translate(-0.95px, -0.95px);
    transform: translate(-0.95px, -0.95px);
  }
  1% {
    opacity: 1;
  }
}
@keyframes glitchin1 {
  100% {
    opacity: 0;
    transform: translate(0px, 0px);
  }
  95% {
    opacity: 1;
    -webkit-transform: translate(0.5px, 0.05px);
    transform: translate(0.5px, 0.05px);
  }
  90% {
    -webkit-transform: translate(0.6px, -0.3px);
    transform: translate(0.6px, -0.3px);
  }
  85% {
    -webkit-transform: translate(1.2px, 0px);
    transform: translate(1.2px, 0px);
  }
  80% {
    -webkit-transform: translate(1.2px, 0.2px);
    transform: translate(1.2px, 0.2px);
  }
  75% {
    -webkit-transform: translate(0.5px, 1px);
    transform: translate(0.5px, 1px);
  }
  70% {
    -webkit-transform: translate(0.3px, 1.2px);
    transform: translate(0.3px, 1.2px);
  }
  65% {
    -webkit-transform: translate(-2.1px, 0.7px);
    transform: translate(-2.1px, 0.7px);
  }
  60% {
    -webkit-transform: translate(3.6px, 0.4px);
    transform: translate(3.6px, 0.4px);
  }
  55% {
    -webkit-transform: translate(0.45px, 1.8px);
    transform: translate(0.45px, 1.8px);
  }
  50% {
    -webkit-transform: translate(-3px, -1px);
    transform: translate(-3px, -1px);
  }
  45% {
    -webkit-transform: translate(-4.4px, 1.1px);
    transform: translate(-4.4px, 1.1px);
  }
  40% {
    -webkit-transform: translate(-4.2px, 2.4px);
    transform: translate(-4.2px, 2.4px);
  }
  35% {
    -webkit-transform: translate(2.6px, 1.3px);
    transform: translate(2.6px, 1.3px);
  }
  30% {
    -webkit-transform: translate(-1.4px, 2.8px);
    transform: translate(-1.4px, 2.8px);
  }
  25% {
    -webkit-transform: translate(6px, 0.75px);
    transform: translate(6px, 0.75px);
  }
  20% {
    -webkit-transform: translate(0px, -1.6px);
    transform: translate(0px, -1.6px);
  }
  15% {
    -webkit-transform: translate(-5.95px, -0.85px);
    transform: translate(-5.95px, -0.85px);
  }
  10% {
    -webkit-transform: translate(3.6px, 3.6px);
    transform: translate(3.6px, 3.6px);
  }
  5% {
    -webkit-transform: translate(-0.95px, -0.95px);
    transform: translate(-0.95px, -0.95px);
  }
  1% {
    opacity: 1;
  }
}
@-webkit-keyframes glitchin2 {
  100% {
    opacity: 0;
    transform: translate(0px, 0px);
  }
  95% {
    opacity: 1;
    -webkit-transform: translate(-0.5px, -0.05px);
    transform: translate(-0.5px, -0.05px);
  }
  90% {
    -webkit-transform: translate(-0.6px, 0.3px);
    transform: translate(-0.6px, 0.3px);
  }
  85% {
    -webkit-transform: translate(-1.2px, 0px);
    transform: translate(-1.2px, 0px);
  }
  80% {
    -webkit-transform: translate(-1.2px, -0.2px);
    transform: translate(-1.2px, -0.2px);
  }
  75% {
    -webkit-transform: translate(-0.5px, -1px);
    transform: translate(-0.5px, -1px);
  }
  70% {
    -webkit-transform: translate(-0.3px, -1.2px);
    transform: translate(-0.3px, -1.2px);
  }
  65% {
    -webkit-transform: translate(2.1px, -0.7px);
    transform: translate(2.1px, -0.7px);
  }
  60% {
    -webkit-transform: translate(-3.6px, -0.4px);
    transform: translate(-3.6px, -0.4px);
  }
  55% {
    -webkit-transform: translate(-0.45px, -1.8px);
    transform: translate(-0.45px, -1.8px);
  }
  50% {
    -webkit-transform: translate(3px, 1px);
    transform: translate(3px, 1px);
  }
  45% {
    -webkit-transform: translate(4.4px, -1.1px);
    transform: translate(4.4px, -1.1px);
  }
  40% {
    -webkit-transform: translate(4.2px, -2.4px);
    transform: translate(4.2px, -2.4px);
  }
  35% {
    -webkit-transform: translate(-2.6px, -1.3px);
    transform: translate(-2.6px, -1.3px);
  }
  30% {
    -webkit-transform: translate(1.4px, -2.8px);
    transform: translate(1.4px, -2.8px);
  }
  25% {
    -webkit-transform: translate(-6px, -0.75px);
    transform: translate(-6px, -0.75px);
  }
  20% {
    -webkit-transform: translate(0px, 1.6px);
    transform: translate(0px, 1.6px);
  }
  15% {
    -webkit-transform: translate(5.95px, 0.85px);
    transform: translate(5.95px, 0.85px);
  }
  10% {
    -webkit-transform: translate(-3.6px, -3.6px);
    transform: translate(-3.6px, -3.6px);
  }
  5% {
    -webkit-transform: translate(0.95px, 0.95px);
    transform: translate(0.95px, 0.95px);
  }
  1% {
    opacity: 1;
  }
}
@keyframes glitchin2 {
  100% {
    opacity: 0;
    transform: translate(0px, 0px);
  }
  95% {
    opacity: 1;
    -webkit-transform: translate(-0.5px, -0.05px);
    transform: translate(-0.5px, -0.05px);
  }
  90% {
    -webkit-transform: translate(-0.6px, 0.3px);
    transform: translate(-0.6px, 0.3px);
  }
  85% {
    -webkit-transform: translate(-1.2px, 0px);
    transform: translate(-1.2px, 0px);
  }
  80% {
    -webkit-transform: translate(-1.2px, -0.2px);
    transform: translate(-1.2px, -0.2px);
  }
  75% {
    -webkit-transform: translate(-0.5px, -1px);
    transform: translate(-0.5px, -1px);
  }
  70% {
    -webkit-transform: translate(-0.3px, -1.2px);
    transform: translate(-0.3px, -1.2px);
  }
  65% {
    -webkit-transform: translate(2.1px, -0.7px);
    transform: translate(2.1px, -0.7px);
  }
  60% {
    -webkit-transform: translate(-3.6px, -0.4px);
    transform: translate(-3.6px, -0.4px);
  }
  55% {
    -webkit-transform: translate(-0.45px, -1.8px);
    transform: translate(-0.45px, -1.8px);
  }
  50% {
    -webkit-transform: translate(3px, 1px);
    transform: translate(3px, 1px);
  }
  45% {
    -webkit-transform: translate(4.4px, -1.1px);
    transform: translate(4.4px, -1.1px);
  }
  40% {
    -webkit-transform: translate(4.2px, -2.4px);
    transform: translate(4.2px, -2.4px);
  }
  35% {
    -webkit-transform: translate(-2.6px, -1.3px);
    transform: translate(-2.6px, -1.3px);
  }
  30% {
    -webkit-transform: translate(1.4px, -2.8px);
    transform: translate(1.4px, -2.8px);
  }
  25% {
    -webkit-transform: translate(-6px, -0.75px);
    transform: translate(-6px, -0.75px);
  }
  20% {
    -webkit-transform: translate(0px, 1.6px);
    transform: translate(0px, 1.6px);
  }
  15% {
    -webkit-transform: translate(5.95px, 0.85px);
    transform: translate(5.95px, 0.85px);
  }
  10% {
    -webkit-transform: translate(-3.6px, -3.6px);
    transform: translate(-3.6px, -3.6px);
  }
  5% {
    -webkit-transform: translate(0.95px, 0.95px);
    transform: translate(0.95px, 0.95px);
  }
  1% {
    opacity: 1;
  }
}
