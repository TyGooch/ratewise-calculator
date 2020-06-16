const formatNumber = (x, n) => +x.toPrecision(n)

const calculatePayment = (amount, interest, term) => {
  return (
    (amount * interest) /
    (1 - Math.pow(1 / (1 + interest), term * 12))
  ).toFixed(2)
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
      container.querySelector('#totalAmount').textContent = '£' + totalAmount
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

document.querySelectorAll('.calculator-container').forEach(el => {
  el.oninput = e => {
    const parent = e.target.parentElement.parentElement
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
})

// document.querySelector('.calculator-container').onblur = e => {
//   if (e.target.value) {
//     // document.querySelector(`error${e.target.id}`).textContent =
//     //   'This field is required to be more than 0.'
//   } else {
//     e.target.parentElement.classList.add('empty')
//   }
// }
