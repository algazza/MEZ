// ===================== CONTACT =========================
const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

const contactForm = document.getElementById('contact-form')
        contactMessage = document.getElementById('contact-message')

const sendEmail = (e) =>{
    e.preventDefault()

    // serviceID - TemplateID - #form - publicKey
    emailjs.sendForm('service_x4kz1m4','template_nw02vto','#contact-form','U6sNlbkXPRpNND6Jm')
    .then(() =>{
        // munculin pesan
        contactMessage.textContent = 'Message sent succesfully'

        // ngapus pesab abis 5 detik
        setTimeout(() =>{
            contactMessage.textContent = ''
        }, 5000)

        // ngapus semua
        contactForm.reset()
    }, () =>{
        // pesannya eror
        contactMessage.textContent = 'Message not sent (service error)'
    })
}

contactForm.addEventListener('submit', sendEmail)
