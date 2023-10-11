const accordionItemHeaders2 = document.querySelectorAll(".accordion-item-header2");

accordionItemHeaders2.forEach(accordionItemHeader2 => {
  accordionItemHeader2.addEventListener("click", event => {
    
     const currentlyActiveAccordionItemHeader2 = document.querySelector(".accordion-item-header2.active");
     if(currentlyActiveAccordionItemHeader2 && currentlyActiveAccordionItemHeader2!==accordionItemHeader2) {
       currentlyActiveAccordionItemHeader2.classList.toggle("active");
       currentlyActiveAccordionItemHeader2.nextElementSibling.style.maxHeight = 0;
     }

    accordionItemHeader2.classList.toggle("active");
    const accordionItemBody2 = accordionItemHeader2.nextElementSibling;
    if(accordionItemHeader2.classList.contains("active")) {
      accordionItemBody2.style.maxHeight = accordionItemBody2.scrollHeight + "px";
    }
    else {
      accordionItemBody2.style.maxHeight = 0;
    }
    
  });
});