const InputPasswordElement = document.getElementById('password')
const InputEmailElement    = document.getElementById('email')
const alertDivElement = document.getElementById('alert')
const IconInputPassword = document.getElementById('i')


function view_alert() {
    alertDivElement.classList.remove('hidden')

    setTimeout(
        () => alertDivElement.classList.add('hidden'),
        3000
    )

}


function form_validate() {
    if (InputPasswordElement.value != '' && InputEmailElement.value != '')
        return true
    

    view_alert()
    return false
}


let activate = false

document.getElementById('icon')
    .addEventListener('click', () => {
        IconInputPassword.classList.toggle('fa-eye')
        IconInputPassword.classList.toggle('fa-eye-slash')

        if (!activate)
            InputPasswordElement.setAttribute('type', 'text')

        else
            InputPasswordElement.setAttribute('type', 'password')

        activate = !activate // toggle 'true', 'false'
    })