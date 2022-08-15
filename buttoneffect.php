<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans:100,300');

html {
  font-size: 10px;
}

body {
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  
  align-items: center;
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  background: #15315A;
}

.section {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  width: 75%;
  min-width: 800px;
  padding: 6rem 0;
  flex-shrink: 0;
}

.divider {
  width: 75%;
  height: 2px;
  background: #fff;
  opacity: .1;
  flex-shrink: 0;
}

/* =========================================== */
/*               >>> BUTTONS <<<               */
/* =========================================== */

/* =============== Button Text =============== */

.bb_button__text {
  font-size: 1.8rem;
  line-height: 3em;
  text-transform: uppercase;
  color: #fff;
  padding: 0 1em;
  z-index: 2;
  opacity: .5;
  transition: opacity .2s ease;
}

/* ============== Button Layout ============== */

.bb_button {
  border: 2px solid #fff;
  text-decoration: none;
  position: relative;
  z-index: 1;
}

/* ============= Pseudo Elements ============= */

.bb_button:before, .bb_button:after {
  content: '';
  background: #15315A;
  position: absolute;
  z-index: -1;
  transition: transform .2s ease-in-out;
}

.bb_button--transparent {
  transition: all .2s ease;
  border-color: rgba(255,255,255,.1)
}

.bb_button--transparent:hover {
  border-color: #fff;
}

.bb_button--side-ver:before {
  top: -2px;
  right: 0;
  bottom: -2px;
  left: 0;
}
.bb_button--side-ver:hover:before {
  transform: scaleX(0);
}

.bb_button--side-hor:before {
  top: 0;
  right: -2px;
  bottom: 0;
  left: -2px;
}
.bb_button--side-hor:hover:before {
  transform: scaleY(0);
}

.bb_button--corner:before {
  top: -2px;
  right: 1em;
  bottom: -2px;
  left: 1em;
}
.bb_button--corner:after {
  top: 1em;
  right: -2px;
  bottom: 1em;
  left: -2px;
}
.bb_button--corner:hover:before {
  transform: scaleX(0);
}
.bb_button--corner:hover:after {
  transform: scaleY(0);
}

.bb_button--diag-1:before {
  top: -2px;
  right: 1em;
  bottom: 1em;
  left: -2px;
  transform-origin: 0 0;
}
.bb_button--diag-1:after {
  top: 1em;
  right: -2px;
  bottom: -2px;
  left: 1em;
  transform-origin: 100% 100%;
}
.bb_button--diag-2:before {
  top: -2px;
  right: -2px;
  bottom: 1em;
  left: 1em;
  transform-origin: 100% 0;
}
.bb_button--diag-2:after {
  top: 1em;
  right: 1em;
  bottom: -2px;
  left: -2px;
  transform-origin: 0 100%;
}
[class*='bb_button--diag-']:hover:before,
[class*='bb_button--diag-']:hover:after {
  transform: scale(0);
}

.bb_button--snake:before {
  top: -2px;
  right: 2em;
  bottom: 0;
  left: -2px;
  transform-origin: 0 100%;
  animation: snake-before .2s ease forwards;
}
.bb_button--snake:after {
  top: 0;
  right: -2px;
  bottom: -2px;
  left: 2em;
  transform-origin: 100% 0;
  animation: snake-after .2s ease forwards;
}

.bb_button--snake:hover:before {
  animation: snake-hover-before .2s ease forwards;
}
.bb_button--snake:hover:after {
  animation: snake-hover-after .2s ease forwards;
}
@keyframes snake-before {
  0% {
    right: 100%;
    transform: scaleY(0);
  }
  50% {
    right: 100%;
    transform: scaleY(1);
  }
  100% {
    transform: scaleY(1);
  }
}
@keyframes snake-after {
  0% {
    left: 100%;
    transform: scaleY(0);
  }
  50% {
    left: 100%;
    transform: scaleY(1);
  }
  100% {
    transform: scaleY(1);
  }
}

@keyframes snake-hover-before {
  50% {
    right: 100%;
    transform: scaleY(1);
  }
  100% {
    right: 100%;
    transform: scaleY(0);
  }
}
@keyframes snake-hover-after {
  50% {
    left: 100%;
    transform: scaleY(1);
  }
  100% {
    left: 100%;
    transform: scaleY(0);
  }
}

.bb_button--snake-2:before {
  top: -2px;
  right: -2px;
  bottom: 3.5em;
  left: -2px;
  transform-origin: 50% 50%;
  animation: snake-2-before .2s ease forwards;
}
.bb_button--snake-2:after {
  top: 3.5em;
  right: -2px;
  bottom: -2px;
  left: -2px;
  transform-origin: 50% 50%;
  animation: snake-2-after .2s ease forwards;
}

.bb_button--snake-2:hover:before {
  animation: snake-2-hover-before .2s ease forwards;
}
.bb_button--snake-2:hover:after {
  animation: snake-2-hover-after .2s ease forwards;
}

@keyframes snake-2-before {
  0% {
    bottom: 100%;
    transform: scaleX(0);
  }
  50% {
    bottom: 100%;
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(1);
  }
}
@keyframes snake-2-after {
  0% {
    top: 100%;
    transform: scaleX(0);
  }
  50% {
    top: 100%;
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(1);
  }
}

@keyframes snake-2-hover-before {
  50% {
    bottom: 100%;
    transform: scaleX(1);
  }
  100% {
    bottom: 100%;
    transform: scaleX(0);
  }
}
@keyframes snake-2-hover-after {
  50% {
    top: 100%;
    transform: scaleX(1);
  }
  100% {
    top: 100%;
    transform: scaleX(0);
  }
}

.bb_button--snake-3:before {
  top: -2px;
  right: -2px;
  bottom: 1em;
  left: 0;
  transform-origin: 50% 50%;
  animation: snake-3-before .2s ease forwards;
}
.bb_button--snake-3:after {
  top: 1em;
  right: 0;
  bottom: -2px;
  left: -2px;
  transform-origin: 50% 50%;
  animation: snake-3-after .2s ease forwards;
}

.bb_button--snake-3:hover:before {
  animation: snake-3-hover-before .2s ease forwards;
}
.bb_button--snake-3:hover:after {
  animation: snake-3-hover-after .2s ease forwards;
}

@keyframes snake-3-before {
  0% {
    bottom: 100%;
    transform: scaleX(0);
  }
  50% {
    bottom: 100%;
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(1);
  }
}
@keyframes snake-3-after {
  0% {
    top: 100%;
    transform: scaleX(0);
  }
  50% {
    top: 100%;
    transform: scaleX(1);
  }
  100% {
    transform: scaleX(1);
  }
}

@keyframes snake-3-hover-before {
  50% {
    bottom: 100%;
    transform: scaleX(1);
  }
  100% {
    bottom: 100%;
    transform: scaleX(0);
  }
}
@keyframes snake-3-hover-after {
  50% {
    top: 100%;
    transform: scaleX(1);
  }
  100% {
    top: 100%;
    transform: scaleX(0);
  }
}

/* ================= Variants ================ */

.bb_button--transp[class*='bb_button--']:before,
.bb_button--transp[class*='bb_button--']:after {
  opacity: .9;
}

.bb_button--alt.bb_button--side-ver:before {
  right: 1em;
  left: 1em;
}
.bb_button--alt-2.bb_button--side-ver:before {
  right: 2em;
  left: 2em;
}
.bb_button--alt.bb_button--side-hor:before {
  top: 1em;
  bottom: 1em;
}
.bb_button--alt.bb_button--corner:before {
  left: 2em;
  right: 2em;
}
[class*='bb_button--alt'].bb_button--diag-1:before {
  right: 2em;
}
[class*='bb_button--alt'].bb_button--diag-1:after {
  left: 2em;
}
.bb_button--alt-2[class*='bb_button--diag']:before {
  bottom: 2em;
}
.bb_button--alt-2[class*='bb_button--diag']:after {
  top: 2em;
}
[class*='bb_button--alt'].bb_button--diag-2:before {
  left: 2em;
}
[class*='bb_button--alt'].bb_button--diag-2:after {
  right: 2em;
}
.bb_button--alt.bb_button--snake:before,
.bb_button--alt.bb_button--snake:after {
  transform-origin: 50% 50%;
}
.bb_button--alt.bb_button--snake-2:before {
  bottom: 50%;
}
.bb_button--alt.bb_button--snake-2:after {
  top: 50%;
}
.bb_button--alt.bb_button--snake-3:before {
  bottom: 2em;
}
.bb_button--alt.bb_button--snake-3:after {
  top: 2em;
}

/* ================== Hover ================== */

.bb_button:hover .bb_button__text {
  opacity: 1;
}


</style>

<section class="section">
      <a href="#" class="bb_button"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--transparent"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-ver"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-ver bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--side-ver bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-ver bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-ver bb_button--alt-2"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-ver bb_button--alt-2 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--side-hor"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-hor bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-hor bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--side-hor bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--corner"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--corner bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--corner bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--corner bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <!-- <a href="#" class="bb_button bb_button--diag-1"><span class="bb_button__text">Border Button</span></a> -->
      <a href="#" class="bb_button bb_button--diag-1 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt-2"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-1 bb_button--alt-2 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-2"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-2 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--diag-2 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-2 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-2 bb_button--alt-2"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--diag-2 bb_button--alt-2 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--snake"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--snake-2"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-2 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-2 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-2 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>
    <div class="divider"></div>
    <section class="section">
      <a href="#" class="bb_button bb_button--snake-3"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-3 bb_button--transp"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-3 bb_button--alt"><span class="bb_button__text">Border Button</span></a>
      <a href="#" class="bb_button bb_button--snake-3 bb_button--alt bb_button--transp"><span class="bb_button__text">Border Button</span></a>
    </section>