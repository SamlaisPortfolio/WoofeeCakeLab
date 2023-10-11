const accordionItemHeaders1 = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders1.forEach(accordionItemHeader1 => {
  accordionItemHeader1.addEventListener("click", event => {
    
     const currentlyActiveAccordionItemHeader1 = document.querySelector(".accordion-item-header.active");
     if(currentlyActiveAccordionItemHeader1 && currentlyActiveAccordionItemHeader1!==accordionItemHeader1) {
       currentlyActiveAccordionItemHeader1.classList.toggle("active");
       currentlyActiveAccordionItemHeader1.nextElementSibling.style.maxHeight = 0;
     }

    accordionItemHeader1.classList.toggle("active");
    const accordionItemBody1 = accordionItemHeader1.nextElementSibling;
    if(accordionItemHeader1.classList.contains("active")) {
      accordionItemBody1.style.maxHeight = accordionItemBody1.scrollHeight + "px";
    }
    else {
      accordionItemBody1.style.maxHeight = 0;
    }
    
  });
});