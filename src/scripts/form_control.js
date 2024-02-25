[...document.getElementsByClassName('form-control')].forEach((form) => {
  form.addEventListener('submit', (event) => {
    if (!form.checkValidity()) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.classList.add('form-validated')
  })
  /* remove css on reset */
  form.addEventListener('reset', () => {
    form.classList.remove('form-validated')
  })
})