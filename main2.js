

const phoneNumber =()=>{
    let phoneNumber =/^(\+?234|0)(703|706|806|810|813|814|816|903)[0-9]{7}$/
    let inputPhoneNumber = document.querySelector('.phone').value
    if (phoneNumber.test(inputPhoneNumber)){
       alert("Yayy! MTN")
    }else{
      alert("Sorry! This is not an MTN number")
    }
}