const formatNumber = (x, n) => +x.toPrecision(n)

document.querySelector('.scene').style.height =
  document.querySelector('.calculator-container').offsetHeight + 'px'

document.querySelector('#calculateButton').onclick = () => {
  let income = parseInt(document.querySelector('#income').value)
  let otherIncome = parseInt(document.querySelector('#otherIncome').value)
  otherIncome = otherIncome ? otherIncome : 0
  let deposit = parseInt(document.querySelector('#deposit').value)

  if (!income || !deposit) {
    if (!income) {
      document.querySelector('#errorincome').textContent =
        'This field is required to be more than 0.'
    }

    if (!deposit) {
      document.querySelector('#errordeposit').textContent =
        'This field is required to be more than 0.'
    }
    return
  }

  document.querySelector('#errorincome').textContent = ''
  document.querySelector('#errordeposit').textContent = ''

  document.querySelector('.flip-card').classList.toggle('is-flipped')

  let borrow = 4.52 * (income + otherIncome)
  borrow = Math.floor(borrow * 1) / 1
  borrow = formatNumber(borrow, 3)
  borrow = borrow.toLocaleString()

  let afford = 4.52 * (income + otherIncome)
  afford = parseInt(afford) + parseInt(deposit)
  afford = Math.floor(afford * 1) / 1
  afford = formatNumber(afford, 3)
  afford = afford.toLocaleString()

  document.querySelector('#borrow').textContent = '£' + borrow
  document.querySelector('#afford').textContent = '£' + afford

  document.querySelector('.scene').style.height =
    document.querySelector('.results-container').offsetHeight + 'px'
}

document.querySelector('#getQuoteButton').onclick = () => {
  window.location.href = 'https://ratewise.co.uk/mortgage/mortgage-type/'
}

document.querySelector('#backButton').onclick = () => {
  document.querySelector('.scene').style.height =
    document.querySelector('.calculator-container').offsetHeight + 'px'
  document.querySelector('.flip-card').classList.toggle('is-flipped')
}

document.querySelector('.calculator-container').oninput = e => {
  if (e.target.value) {
    document.querySelector(`#error${e.target.id}`).textContent = ''
    e.target.parentElement.classList.remove('empty')
  } else {
    if (e.target.required) {
      document.querySelector(`#error${e.target.id}`).textContent =
        'This field is required to be more than 0.'
    }
    e.target.parentElement.classList.add('empty')
  }
}

// document.querySelector('.calculator-container').onblur = e => {
//   if (e.target.value) {
//     // document.querySelector(`error${e.target.id}`).textContent =
//     //   'This field is required to be more than 0.'
//   } else {
//     e.target.parentElement.classList.add('empty')
//   }
// }
