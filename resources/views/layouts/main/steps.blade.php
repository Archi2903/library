<section class="steps">
    <div class="wrapper">
        <h2>How It work</h2>
        <p class="steps-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem? </p>
        <p class="steps-text mbtext">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, nam velit!</p>
        <div class="steps-container">
            <div class="stepblock" id="stepbl1">
                <p class="step-num">01</p>
                <h4><span>01</span>Find your book</h4>
                <p class="step-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, autem
                    delectus.</p>
                <p class="stepinfolast" id="stepbrdr1">Find Location</p>
            </div>
            <div class="stepblock" id="stepbl2">
                <p class="step-num">02</p>
                <h4><span>01</span>Pay your book</h4>
                <p class="step-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, autem
                    delectus.</p>
                <p class="stepinfolast" id="stepbrdr2">Find Location</p>
            </div>
            <div class="stepblock" id="stepbl3">
                <p class="step-num">03</p>
                <h4><span>03</span>Get your book</h4>
                <p class="step-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, autem
                    delectus.</p>
                <p class="stepinfolast" id="stepbrdr3">Find Location</p>
            </div>
        </div>
    </div>

</section>
@push('scripts')
    <script>
        let stpbl1 = document.getElementById("stepbl1");
        let stpbrdr1 = document.getElementById("stepbrdr1");

        let stpbl2 = document.getElementById("stepbl2");
        let stpbrdr2 = document.getElementById("stepbrdr2");

        let stpbl3 = document.getElementById("stepbl3");
        let stpbrdr3 = document.getElementById("stepbrdr3");

        stpbl1.onmouseover = function () {
            stpbrdr1.style.borderBottom = "3px solid white";
        }
        stpbl1.onmouseout = function () {
            stpbrdr1.style.borderBottom = "3px solid black";
        }

        stpbl2.onmouseover = function () {
            stpbrdr2.style.borderBottom = "3px solid white";
        }
        stpbl2.onmouseout = function () {
            stpbrdr2.style.borderBottom = "3px solid black";
        }

        stpbl3.onmouseover = function () {
            stpbrdr3.style.borderBottom = "3px solid white";
        }
        stpbl3.onmouseout = function () {
            stpbrdr3.style.borderBottom = "3px solid black";
        }
    </script>
@endpush
