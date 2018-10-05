async function main () {
  let data = await fetch('person.json').then(r => r.text()).then(t => JSON.parse(t)[0])

  document.write(`${data.firstName} ${data.lastName}, ${data.gender.type} ${data.age} years old.<br/>`)
  document.write(`${data.address.streetAddress} ${data.address.city} ${data.address.state}<br/>`)
  document.write(`${data.address.postalCode}<br/>`)

  data.phoneNumber.forEach(p => {
    document.write(`${p.type} : ${p.number}<br/>`)
  })

  document.title = 'Lab 8-3'
}
