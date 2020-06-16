const formatNumber = (x, n) => +x.toPrecision(n)

document.querySelector('#calculateButton').onclick = () => {
  let income = parseInt(document.querySelector('#income').value)
  let otherIncome = parseInt(document.querySelector('#otherIncome').value)
  otherIncome = otherIncome ? otherIncome : 0
  let deposit = parseInt(document.querySelector('#deposit').value)

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

  document.querySelector('#results').classList.remove('d-none')
  document
    .querySelector('#getQuoteButton')
    .scrollIntoView({ behavior: 'smooth' })
}
