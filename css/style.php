css
.other {
  width: 200px;
  height: 120px;
  background-color: rgb(173, 173, 173);
  position: absolute;
  z-index: 2;
}

canvas {
  display: block;
  width: 100%;
  height: 130%;
  position: absolute;
  z-index: 1;
}

/*.hed
{	
  background: linear-gradient(45deg,#1f1f1f,#0d0c2e);
}*/
.Head {
    color: #ffffff;
  font-size: 35px;
  position: absolute;
  z-index: 2;
  left: 50%;
  padding-bottom: 4%;
  margin-top:6%;
}

body {
  z-index: 2;
  background: linear-gradient(60deg, #0b0b49, #7f82ac, #010042);
}

.l1 {
  border: 1px solid rgb(255, 0, 0);
  width: 88%;
  /*	background: linear-gradient(45deg,#3c3a44,#231f46);*/
  position: absolute;
  z-index: 2;
  margin-left: 5%;
  margin-top: 6%;
  margin-right: 7.5%;
}

h2 {
  margin-left: 5%;
}

.impl {
   height: 30%;
  width: 10%;
  border: 2px solid rgb(255, 196, 0);
}

.LOKDC {
  position: relative;
  z-index: 2;
  width: 20%;
  border: 2px solid rgb(255, 217, 0);
  margin-left: 1%;
  height: 40%;
  margin-top: 25px;
}

.KNP {
  position: relative;
  z-index: 2;
  width: 100%;
  margin-top: -230px;
  margin-left: 1005%;
  height: 100%;
  border: 2px solid #f00;
}

.foot {
  position: relative;
  z-index: 2;
  width: 50px;
  margin-top: 28%;
  margin-left: 50%;
}

.footimpl {

  border: 2px solid rgb(0, 0, 0);
}

.board {
  position: relative;
  z-index: 2;
  margin-top: -50px;
  margin-left: 95%;
}

.ym {
  position: relative;
  z-index: 2;
  border: 20px solid #a31a1a42;
  width: 13%;
  margin-top: -2%;
  margin-left: 1%;
  margin-right: 100%;
}

.bubble {
  margin-top: 90%;
  z-index: 1;
}

.instructions {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Work Sans', sans-serif;
  font-weight: 500;
  font-size: 20px;
  color: #fff;
  border: 3px solid #fff;
  border-radius: 6px;
  padding: 8px;
}

p {
  color: #f00;
  size: 48px;
}

img {

  border: 2px solid #ffffff;

}


.gradient-wrap {
  width: 100%;
  height: 100vh;
  background: linear-gradient(to left, #1366ff, #ff0b6d);
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
  background: linear-gradient(to left, #1366ff, #ff0b6d);
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