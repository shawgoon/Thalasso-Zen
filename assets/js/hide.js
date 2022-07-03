 window.onload = function() {
                     // élements cachés
    // éléments footer
    let blockAdvertiser = document.getElementById('advertiserWrap');
    let blockContact = document.getElementById('contactWrap');
    let blockWho = document.getElementById('whoWrap');
    let blockCgv = document.getElementById('cgvWrap');
    let blockFind = document.getElementById('find-usWrap');
    // éléments formulaires
    let blockContent = document.getElementById('content');
    let blockWrapper = document.getElementById('wrapper');
    let blockSignup = document.getElementById('formSignup');
    let blockLogin = document.getElementById('formLogin');
             // liens pour faire apparaitre un élément caché
    // éléments footer
    let linkAdvertiser = document.querySelector('[href="#advertiserWrap"]');
    let linkContact = document.querySelector('[href="#contactWrap"]');
    let linkWho = document.querySelector('[href="#whoWrap"]');
    let linkCgv = document.querySelector('[href="#cgvWrap"]');
    let linkFind = document.querySelector('[href="#find-usWrap"]');
    // éléments formulaires
    let linkContent = document.querySelector('#content'); 
    let linkSignup = document.querySelector('[href="#formSignup"]');
    let linkLogin = document.querySelector('[href="#formLogin"]');

    // //cacher tous les encarts
    // blockAdvertiser.style.display = 'none';
    // blockContact.style.display = 'none';
    // blockWho.style.display = 'none';
    // blockCgv.style.display = 'none';
    // blockFind.style.display = 'none';

    // fonctions des éléménts footer
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
    // fonctions des éléments formulaires

    // // cacher tous les formulaires
    // blockContent.style.display = 'none';
    // blockWrapper.style.display = 'none';
    // blockSignup.style.display = 'none';
    // blockLogin.style.display = 'none'; 
    // transition du formulaire d'inscription et du wrapper
    linkSignup.onclick = function () {
        blockContent.style.display = 'block';
        blockWrapper.style.display = 'block';
        blockSignup.style.display = 'block';
        blockLogin.style.display = 'none';
    }
    // transition du formulaire de connexion'inscription et du wrapper
    linkLogin.onclick = function () {
        blockContent.style.display = 'block';
        blockWrapper.style.display = 'block';
        blockLogin.style.display = 'block';
        blockSignup.style.display = 'none'; 
    }
    // annuler la transition des formulaires et wrapper
    linkContent.onclick = function () {
        blockContent.style.display = 'none';
        blockWrapper.style.display = 'none';
        blockSignup.style.display = 'none';
        blockLogin.style.display = 'none'; 
    }
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