

const buttonALL= document.querySelector('[data-button-all]')
const buttonTelefons= document.querySelector('[data-button-telefons]')
const buttonTablet= document.querySelector('[data-button-tablet]')
const buttonLaptop= document.querySelector('[data-button-laptop]')
const buttonComputer= document.querySelector('[data-button-computer]')

// console.log(buttonALL)


const listAsideElements = [
  buttonALL,
  buttonTelefons,
  buttonTablet,
  buttonLaptop,
  buttonComputer
]

const categoryAll = 'category=all'
const categoryTelefons = 'category=telefons'
const categoryTablet = 'category=tablet'
const categoryLaptop = 'category=laptop'
const categoryComputer = 'category=computer'

let request = new XMLHttpRequest()

// console.log(request)

for (item of listAsideElements) {
  item.addEventListener('click', elementHighlight)
}


function elementHighlight (event) {

  event.target.classList.add('nav__link--active')

  for(listAsideElement of listAsideElements) {

    if(listAsideElement == buttonALL) {
      sendRequest(categoryAll)
      // console.log(request)
    }
    else if(listAsideElement == buttonTelefons) {
      sendRequest(categoryTelefons)
    }

    if (listAsideElement != event.target && Array.from(listAsideElement.classList).includes('nav__link--active')) {
      listAsideElement.classList.remove('nav__link--active')
    }
    
  }

}

function sendRequest (body) {
  console.log(request)
  // window.location.href='http://start-project-php-shop-html/product-filter.php?' + body
  request.open("GET","http://start-project-php-shop-html/get-data.php")
  request.send(body)
}
