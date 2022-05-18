const accordionHeaders = document.querySelectorAll(".accordion_header");

accordionHeaders.forEach(accordionHeader => {
  accordionHeader.addEventListener("click", event => {
    const currentlyActiveAccordionHeader = document.querySelector(".accordion_header.active");
    if(currentlyActiveAccordionHeader && currentlyActiveAccordionHeader!==accordionHeader){
      currentlyActiveAccordionHeader.classList.toggle("active");
      currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
    }

    accordionHeader.classList.toggle("active");
    const accordionBody = accordionHeader.nextElementSibling;
    if(accordionHeader.classList.contains("active")){
      accordionBody.style.maxHeight = accordionBody.scrollHeight + "rem";
    }
    else{
      accordionBody.style.maxHeight = 0;
    }
    accordionHeader.nextElementSibling.style.transition = "500ms";
  });

});


    
 const currentlyActiveAccordionHeader = document.querySelector(".accordion_header.active");
 if(currentlyActiveAccordionHeader && currentlyActiveAccordionHeader!==accordionHeader) {
   currentlyActiveAccordionHeader.classList.toggle("active");
   currentlyActiveAccordionHeader.nextElementSibling.style.maxHeight = 0;
 }