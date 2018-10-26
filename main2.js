

const phoneNumber =()=>{
    let phoneNumber =/^(0703|0706|0806|0810|0813|0814|0816|0903)[0-9]{3}[0-9]{4}$/
    let inputPhoneNumber = document.querySelector('.phone').value
    if (phoneNumber.test(inputPhoneNumber)){
       alert("Yayy! MTN")
    }else{
      alert("Sorry! This is not an MTN number")
    }
}