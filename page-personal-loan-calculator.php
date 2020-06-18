<?php get_header();?>
<style>
.calculator-wrapper {
  padding: 3rem 0;
}

.subheader {
  font-size: 1.8rem;
  line-height: 40px;
  font-weight: 300;
  color: #9d9a9a;
  max-width: 920px;
  margin: 0 auto;
  text-align: center;
  letter-spacing: 0.3px;
}

.calculator-wrapper h1 {
  font-size: 3.5rem !important;
  margin-top: 4rem;
  margin-bottom: 25px;
  /* color: #2c3e50; */
  font-weight: 600;
  text-align: center;
  /* font-size: 47px; */
}

.bg-purple {
  background: #5c39c6;
}

@media only screen and (max-width: 540px) {
  .calculator-wrapper h1 {
    font-size: 1.75rem !important;
    margin-top: 8px !important;
    margin-bottom: 8px !important;
  }

  .subheader {
    font-size: 18px;
  }

  .calculator-wrapper {
    /* padding-bottom: 0 !important; */
    padding-top: 0 !important;
  }

  .calculator-wrapper .container {
    padding: 0 !important;
  }

  .calculator-wrapper .row {
    margin-left: 0 !important;
    margin-right: 0 !important;
  }

  .card__face {
    max-width: 100vw;
  }

  .results-container {
    /* border-bottom: 1px solid #ccc; */
    /* background: transparent !important; */
  }

  .homepage-privacy .row {
    border-top: 0px !important;
  }

  .results-main {
    font-size: 3rem !important;
  }
}

@media only screen and (min-width: 540px) {
  .results-main {
    font-size: 4rem !important;
  }
}

@media only screen and (min-width: 540px) and (max-width: 768px) {
  .card__face {
    max-width: 100vw;
  }

  .calculator-wrapper h1 {
    font-size: 2.2rem !important;
    margin-top: 1rem !important;
    /* margin-bottom: 8px !important; */
  }

  .calculator-wrapper {
    padding-bottom: 0 !important;
    padding-top: 0 !important;
  }

  .subheader {
    font-size: 18px;
  }

  .custom-box {
    margin-bottom: 0;
  }
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
  .calculator-wrapper h1 {
    font-size: 3rem !important;
    margin-top: 1rem !important;
  }

  .calculator-wrapper {
    /* padding-bottom: 0 !important; */
    padding-top: 0 !important;
  }
}

.calculator-container {
  /* background-color: #5c39c6; */
  /* background: linear-gradient(180deg, #7355ce 0%, #5c39c6 38%, #4f30aa 100%) !important; */
  border-radius: 14px;
  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
}

.calculator-container label {
  /* display: flex; */
  /* color: #fff !important; */
}

.calculator-container .error {
  color: #f96363 !important;
  margin-bottom: 0 !important;
  font-size: 14px;
  padding-left: 0;
}

#calculateButton {
  /* border: 2px solid #fff; */
  /* background: 0 0; */
  opacity: 1;
  transition: all 0.1s 0.2s;
}

#calculateButton:hover {
  /* background: #442997 !important; */
  /* transform: none !important; */
}

#calculateButton,
#getQuoteButton {
  width: 100% !important;
  /* box-shadow: none !important; */
  text-decoration: none !important;
  color: #fff !important;
}

#backButton {
  cursor: pointer;
  color: #4a4f53;
  margin-right: 1rem;
}
#backButton:hover {
  text-decoration: underline;
}
#backButton::before {
  display: inline-block;
  content: "";
  background-image: url("data:image/svg+xml,<svg class='bi bi-chevron-left' width='1em' height='1em' viewBox='0 0 16 16' fill='currentColor' xmlns='http://www.w3.org/2000/svg'><path fill-rule='evenodd' d='M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z'/></svg>");
  background-repeat: no-repeat;
  background-size: 1rem 1rem;
  width: 1rem;
  height: 1rem;
  color: #4a4f53;
  top: 2px;
  position: relative;
  margin-right: 5px;
}

.results-main {
  color: #886be7;
  /* font-size: 4rem !important; */
  font-weight: 700 !important;
  margin-bottom: 0 !important;
}

#afford {
  font-weight: 700;
  color: #000;
}

.dollars {
  left: 12px !important;
  top: 13.5px;
}

.calculator-input {
  padding: 0px !important;
  height: auto;
  line-height: 2;
  padding-left: 0.75rem !important;
  background-color: #f5fafe !important;
  border: 0.125rem solid #d6dde6 !important;
  border-radius: 6px;
  font-size: 1rem !important;
  background-clip: padding-box;
}

.currency-input-container {
  display: flex;
  margin-bottom: 1rem;
}

.currency-input-container .calculator-input {
  padding-left: 2rem !important;
}

.currency-input-container::before {
  content: "£";
  width: 0;
  height: auto;
  position: relative;
  left: 1rem;
  /* transition: opacity 1s; */
  color: #000;
  font-size: 1rem;
  line-height: 2;
  top: 0.125rem;
}

.currency-input-container.empty::before {
  color: #a9a9a9;
}

.calculator-select {
  width: 100% !important;
  border-radius: 3px !important;
  font-size: 25px !important;
  padding: 1rem !important;
  height: 100%;
  outline: none !important;
  border-color: transparent !important;
  box-shadow: none !important;
}

.disclaimer {
  color: #4a4f53;
  margin-right: auto;
  margin-left: auto;

  font-size: 0.75rem;
}

.purple {
  color: #5c39c6 !important;
}

.scene {
  width: 100%;
  height: 493px;
  perspective: 800px;
  transition: all 1s;
}

.flip-card {
  width: 100%;
  /* height: 493px; */
  position: relative;
  transition: all 1s;
  transform-style: preserve-3d;
  transform-origin: center right;
}

.flip-card.is-flipped {
  /* transform: rotateY(180deg); */
  transform: translateX(-100%) rotateY(-180deg);
}

.flip-card.is-flipped #calculateButton {
  opacity: 0;
  visibility: hidden;
}

.flip-card.is-flipped .currency-input-container::before {
  opacity: 0;
}

.card__face {
  position: absolute;
  /* height: fit-content; */
  width: 100%;
  /* backface-visibility: hidden; */
  -webkit-perspective: 0;
  -webkit-backface-visibility: hidden;
  /* -webkit-transform: rotateY(0, 0, 0); */
  /* visibility: visible; */
  backface-visibility: hidden;
}

.card__face--front {
  /* background: #5c39c6; */
}

.card__face--back {
  /* border-top: 1px solid #ccc; */

  /* border: 1px solid #aaaaaa; */
  background: #fff;
  transform: rotateY(180deg);
}

.result-subheader {
  font-size: 1.25rem;
  /* line-height: 40px; */
  font-weight: 300;
  color: #9d9a9a;

  /* margin: 0 auto; */
  text-align: center;
  letter-spacing: 0.3px;
}

select{
  background: url(data:image/svg+xml;base64,PHN2ZyBpZD0iTGF5ZXJfMSIgZGF0YS1uYW1lPSJMYXllciAxIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0Ljk1IDEwIj48ZGVmcz48c3R5bGU+LmNscy0ye2ZpbGw6IzQ0NDt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPmFycm93czwvdGl0bGU+PHBvbHlnb24gY2xhc3M9ImNscy0yIiBwb2ludHM9IjEuNDEgNC42NyAyLjQ4IDMuMTggMy41NCA0LjY3IDEuNDEgNC42NyIvPjxwb2x5Z29uIGNsYXNzPSJjbHMtMiIgcG9pbnRzPSIzLjU0IDUuMzMgMi40OCA2LjgyIDEuNDEgNS4zMyAzLjU0IDUuMzMiLz48L3N2Zz4=) no-repeat 98% 50%; 
	-moz-appearance: none; 
	-webkit-appearance: none; 
	appearance: none;
  height: 2.25rem !important;
}
</style>

<section class="calculator-wrapper">
<div class="container" id="personal">
<div class="col-12">
  <h1 id="calculatorTitle">A Wiser <?php the_title( '<span class="purple">', '</h3>' ); ?></h1>
  <p class="subheader">How much do you want to borrow?</p>
  </div>
  <div class="row justify-content-center mt-3 mt-md-5">
    <div class="col-12 col-sm-8 col-md-8 col-lg-6 col-xl-6 col-xxl-6 scene">
      <div class="flip-card">
        <div class="card__face card__face--front calculator-container p-4 p-lg-5" data-calculation="personal">
        <label class="label-text ml-0">Personal Loan Amount<span class="error" id="erroramount"></span></label>
                  <div class="currency-input-container empty">
                    <input
                      class="calculator-input"
                      type="tel"
                      name="amount"
                      id="amount"
                      placeholder="0"
                      required
                      min="1"
                    />
                  </div>

                  <label class="label-text ml-0"> Repayment Term<span class="error" id="errorterm"></span></label>
                  <select class="calculator-input form-control mb-3" name="term" id="term" placeholder="0" min="0">
                    <option value="1">1 Year</option>
                    <option value="2">2 Years</option>
                    <option value="3">3 Years</option>
                    <option value="4">4 Years</option>
                    <option value="5">5 Years</option>
                  </select>

                  <label class="label-text ml-0">Credit Rating<span class="error" id="errorcredit"></span></label>
                  <select class="calculator-input form-control mb-3" name="interest" id="interest">
                    <option value="6.90">Excellent</option>
                    <option value="8.90">Good</option>
                    <option value="11.90">Fair</option>
                    <option value="14.90">Poor</option>
                    <option value="17.90">Bad</option>
                  </select>


          <button type="button" class="app-btn mt-4" id="calculateButton">Calculate</button>
        </div>

        <div class="card__face card__face--back results-container p-0 p-x-lg-5 text-center">
        <p class="mb-0 result-subheader">Personal financing of <b class="purple" id="totalAmount"></b> could cost</p>
                  <p class="results-main purple result-subheader mb-0" id="monthlyPayment"></p>
                  <p class="result-subheader">Per month</p>
                  <p class="disclaimer">
                    This amount is an estimate based on what a typical bank may offer. All lending is subject to
                    application and approval by the lender. The actual amount you can borrow will depend on your
                    situation and lender criteria. RateWise is an introducer, not a lender.
                  </p>
                  <p class="disclaimer">
                    This is a representative example based on borrowing <span id="disclaimerAmount"></span> at
                    <span id="disclaimerInterest"></span>% of interest over rate
                    <span id="disclaimerTerm"></span> years.
                  </p>

                  <button
                    type="button"
                    class="app-btn mb-4"
                    id="getQuoteButton"
                    data-url="https://ratewise.co.uk/personal-loan/loan-purpose/"
                  >
                    Apply Now
                  </button>

          <a id="backButton">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<script type="text/javascript">
  const formatNumber = (x, n) => +x.toPrecision(n)

const calculatePayment = (amount, interest, term) => {
  return (
    (amount * interest) /
    (1 - Math.pow(1 / (1 + interest), term * 12))
  ).toFixed(2)
}

const setInputFilter = (textbox, inputFilter) => {
  ;[
    'input',
    'keydown',
    'keyup',
    'mousedown',
    'mouseup',
    'select',
    'contextmenu',
    'drop'
  ].forEach(function (event) {
    textbox.addEventListener(event, function () {
      if (inputFilter(this.value)) {
        this.oldValue = this.value
        this.oldSelectionStart = this.selectionStart
        this.oldSelectionEnd = this.selectionEnd
      } else if (this.hasOwnProperty('oldValue')) {
        this.value = this.oldValue
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd)
      } else {
        this.value = ''
      }
    })
  })
}

// window.onload = () => {
document.querySelectorAll('.scene').forEach(el => {
  el.style.height =
    document.querySelector('.calculator-container').offsetHeight + 'px'
})
// }

document.querySelectorAll('#calculateButton').forEach(el => {
  el.onclick = e => {
    document.activeElement.blur()
    const calculation = e.target.parentElement.getAttribute('data-calculation')

    const container = document.querySelector('#' + calculation)

    if (calculation === 'mortgage') {
      let income = parseInt(container.querySelector('#income').value)
      let otherIncome = parseInt(container.querySelector('#otherIncome').value)
      otherIncome = otherIncome ? otherIncome : 0
      let deposit = parseInt(container.querySelector('#deposit').value)

      // container.querySelector('.flip-card').click()

      if (!income || !deposit) {
        if (!income) {
          container.querySelector('#errorincome').textContent =
            'This field is required to be more than 0.'
        }
        if (!deposit) {
          container.querySelector('#errordeposit').textContent =
            'This field is required to be more than 0.'
        }
        return
      }

      let borrow = 4.52 * (income + otherIncome)
      borrow = Math.floor(borrow * 1) / 1
      borrow = formatNumber(borrow, 3)
      borrow = borrow.toLocaleString()

      let afford = 4.52 * (income + otherIncome)
      afford = parseInt(afford) + parseInt(deposit)
      afford = Math.floor(afford * 1) / 1
      afford = formatNumber(afford, 3)
      afford = afford.toLocaleString()

      container.querySelector('#borrow').textContent = '£' + borrow
      container.querySelector('#afford').textContent = '£' + afford

      container.querySelector('#errorincome').textContent = ''
      container.querySelector('#errordeposit').textContent = ''
    } else if (
      calculation === 'business' ||
      calculation === 'car' ||
      calculation === 'personal'
    ) {
      let amount = parseInt(container.querySelector('#amount').value)
      let term = parseInt(container.querySelector('#term').value)
      let interest =
        parseFloat(container.querySelector('#interest').value) / 1200

      let monthlyPayment = calculatePayment(amount, interest, term)
      let totalAmount = (monthlyPayment * 12 * term).toFixed(2)

      if (!amount || !term || !interest) {
        if (!amount) {
          container.querySelector('#erroramount').textContent =
            'This field is required to be more than 0.'
        }
        if (!term) {
          container.querySelector('#errorterm').textContent =
            'This field is required to be more than 0.'
        }
        if (!interest) {
          container.querySelector('#errorinterest').textContent =
            'This field is required to be more than 0.'
        }
        return
      }

      monthlyPayment = monthlyPayment.toLocaleString()
      totalAmount = totalAmount.toLocaleString()
      console.log('monthlyPayment', monthlyPayment)
      console.log('totalAmount', totalAmount)
      container.querySelector('#totalAmount').textContent = '£' + amount.toLocaleString()
      container.querySelector('#monthlyPayment').textContent =
        '£' + monthlyPayment
      container.querySelector('#disclaimerAmount').textContent =
        '£' + amount.toLocaleString()
      container.querySelector('#disclaimerInterest').textContent = (
        interest * 1200
      ).toFixed(2)
      container.querySelector('#disclaimerTerm').textContent = term
    }

    container.querySelector('.flip-card').classList.toggle('is-flipped')
    container.querySelector('.scene').style.height =
      container.querySelector('.results-container').offsetHeight + 'px'
    document.querySelector('.subheader').scrollIntoViewIfNeeded()
  }
})

document.querySelectorAll('#getQuoteButton').forEach(el => {
  el.onclick = e => {
    let url = e.target.getAttribute('data-url')
    window.location.href = url
  }
})

document.querySelectorAll('#backButton').forEach(el => {
  el.onclick = e => {
    const parent = e.target.parentElement.parentElement.parentElement
    parent.style.height =
      parent.querySelector('.calculator-container').offsetHeight + 'px'
    parent.querySelector('.flip-card').classList.toggle('is-flipped')
  }
})

document.querySelectorAll('input').forEach(el => {
  setInputFilter(el, value => {
    return /^\d*\.?\d*$/.test(value) // Allow digits and '.' only, using a RegExp
  })
})

document.querySelectorAll('.calculator-container').forEach(el => {
  el.oninput = e => {
    const parent = e.target.parentElement.parentElement
    if (e.target.value) {
      parent.querySelector(`#error${e.target.id}`).textContent = ''
      e.target.parentElement.classList.remove('empty')
    } else {
      if (e.target.required) {
        parent.querySelector(`#error${e.target.id}`).textContent =
          'This field is required to be more than 0.'
      }
      e.target.parentElement.classList.add('empty')
    }
  }
})
</script>

<?php
		while ( have_posts() ) :
            the_post();
            ?>    
<section class="howWork" style="background:#fff; padding-bottom: 0px !important;">
    <div class="container">
            <?php the_content();?>
    </div>
</section>
<?php

endwhile; // End of the loop.
?>

<style>
	/* Style the buttons that are used to open and close the accordion panel */
	.sc_fs_faq h3 {
	  color: #444;
	  cursor: pointer;
	  padding: 18px;
	  width: 100%;
	  text-align: left;
	  border: none;
	  outline: none;
	  transition: 0.4s;
	  margin-bottom: 0;
		font-weight:500;
	}
	.sc_fs_faq h3.active{
		font-weight:700;
	}
	.sc_card {
		background: #ede7ff;
		margin: 1em auto;
	}
	/* Style the accordion panel. Note: hidden by default */
	.sc_fs_faq p {
	  padding: 0 18px;
	  max-height: 0;
	  overflow: hidden;
	  transition: all 0.2s ease-in-out;
	}
	.sc_fs_faq h3:after {
		  content: '\02795'; /* Unicode character for "plus" sign (+) */
		  font-size: 13px;
		  color: #777;
		  float: right;
		  margin-left: 5px;
		}

		.sc_fs_faq h3.active:after {
		  content: "\2796"; /* Unicode character for "minus" sign (-) */
		}
	
	.panelActive p{
		max-height:900px;
		padding-bottom:30px;
	}
	.sc_card{
		padding:0;
		box-shadow:none;
	}
	@media screen and (max-width:420px){
		.sc_fs_faq h3{
			display: inline-flex;
			padding-right:32px;
			 position: relative;
		}
		.sc_fs_faq h3:after{
			    position: absolute;
				right: 10px;
				top: 35%;
		}
	}
	
</style>
<script type="text/javascript">
	var acc = document.querySelectorAll(".sc_fs_faq h3");
	var i;
	for (i = 0; i < acc.length; i++) {
		
	  acc[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  this.nextElementSibling.classList.toggle("panelActive");
	  });
	}
</script>

<section class="">
        <div class="section-lg homepage-privacy p-0" style="background: #fff;">
          <div class="container">
            <div class="row justify-content-center" style="padding: 5rem 0 11rem;">
              <div class="col-10 col-md-7">
                <h2 class="privacy-headline h1" style="color: #0a0c0e;">Say No to Fees</h2>
                <p class="feature-body" style="color: #0a0c0e;">
                  We won't charge you for our service, ever. <br />RateWise is lender-funded so we pass the savings on
                  to you.
                </p>
                <div class="app-btn-wrap">
                  <a
                    href="https://ratewise.co.uk/about/"
                    class="app-btn"
                    style="
                      color: #fff;
                      border: none;
                      background: linear-gradient(
                        180deg,
                        rgba(115, 85, 206, 1) 0%,
                        rgba(92, 57, 198, 1) 38%,
                        rgba(79, 48, 170, 1) 100%
                      ) !important;
                    "
                    >Learn More
                  </a>
                </div>
                <br />
                <p class="button-btm-text">No Sales, No Obligations, No Hidden Fees.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_footer();?>

