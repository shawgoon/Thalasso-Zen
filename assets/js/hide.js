 window.onload = function() {
    let blockAdvertiser = document.getElementById('advertiserWrap');
    let blockContact = document.getElementById('contactWrap');
    let blockWho = document.getElementById('whoWrap');
    let blockCgv = document.getElementById('cgvWrap');
    let blockFind = document.getElementById('find-usWrap');
  
    let linkAdvertiser = document.querySelector('[href="#advertiserWrap"]');
    let linkContact = document.querySelector('[href="#contactWrap"]');
    let linkWho = document.querySelector('[href="#whoWrap"]');
    let linkCgv = document.querySelector('[href="#cgvWrap"]');
    let linkFind = document.querySelector('[href="#find-usWrap"]');
  
    // blockAdvertiser.style.display = 'none';
    // blockContact.style.display = 'none';
    // blockWho.style.display = 'none';
    // blockCgv.style.display = 'none';
    // blockFind.style.display = 'none';
    
    linkAdvertiser.onclick = function () {
        blockAdvertiser.style.display = 'block';
        blockContact.style.display = 'none';
        blockWho.style.display = 'none';
        blockCgv.style.display = 'none';
        blockFind.style.display = 'none';
    }; 
    linkContact.onclick = function () {
        blockAdvertiser.style.display = 'none';
        blockContact.style.display = 'block';
        blockWho.style.display = 'none';
        blockCgv.style.display = 'none';
        blockFind.style.display = 'none';
    };
    linkWho.onclick = function () {
        blockAdvertiser.style.display = 'none';
        blockContact.style.display = 'none';
        blockWho.style.display = 'block';
        blockCgv.style.display = 'none';
        blockFind.style.display = 'none';
    };
    linkCgv.onclick = function () {
        blockAdvertiser.style.display = 'none';
        blockContact.style.display = 'none';
        blockWho.style.display = 'none';
        blockCgv.style.display = 'block';
        blockFind.style.display = 'none';
    };
    linkFind.onclick = function () {
        blockAdvertiser.style.display = 'none';
        blockContact.style.display = 'none';
        blockWho.style.display = 'none';
        blockCgv.style.display = 'none';
        blockFind.style.display = 'block';
    };
  };
  
/*  ************* cacher les div avec une boucle *********** */
/*  ************** reste toujours une div de visible ******** */

  //   window.onload = function () {
  //       let link = document.querySelectorAll('.link')
  //       for (let i = 0; i < link.length; i++) {
  //         link[i].addEventListener('click', onSelect)
      
  //         if (i === 0) {
  //           // Simulate a click on the first element to set the page default state.
  //           link[i].click()
  //         }
  //       }
  //     }
  //   function onSelect (e) {
  //       e.preventDefault();
  //       hideAll();
  //       let targetId = this.getAttribute('href');
  //       let targetContent = document.querySelector(targetId);
  //       this.classList.add("selected");
  //       targetContent.style.display = "block";
  //   }

  //   function hideAll() {
  //       let link = document.querySelectorAll('.link');
  //       let sections = document.querySelectorAll('.hideContent');
  //        // Hide the blocks.
  //       for (let i = 0; i < sections.length; i++) {
  //           sections[i].style.display = 'none';
  //       }
  //       // Remove the `selected` class.
  //       for (let i = 0; i < link.length; i++) {
  //       link[i].classList.remove('selected');
  // }
  //   }

  /* *************plus simple mais marche pas ************ */ 
    
    // let targetId = this.getAttribute('href');
    // let targetContent = document.querySelectorAll(".hideContent");
    // targetId.onclick = function() {
    //   if (window.getComputedStyle(targetContent).display=='none'){
    //     targetContent.style.display="block";
    //   } else {
    //     targetContent.style.display="none";
    //   }
    // } 