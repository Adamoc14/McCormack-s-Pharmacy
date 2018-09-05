// Support for IE

Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}

NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}

// Array.from() - takes everything selected and  

if (!Array.from) {
  Array.from = (function () {
    var toStr = Object.prototype.toString;
    var isCallable = function (fn) {
      return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
    };
    var toInteger = function (value) {
      var number = Number(value);
      if (isNaN(number)) { return 0; }
      if (number === 0 || !isFinite(number)) { return number; }
      return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
    };
    var maxSafeInteger = Math.pow(2, 53) - 1;
    var toLength = function (value) {
      var len = toInteger(value);
      return Math.min(Math.max(len, 0), maxSafeInteger);
    };

    // The length property of the from method is 1.
    return function from(arrayLike/*, mapFn, thisArg */) {
      // 1. Let C be the this value.
      var C = this;

      // 2. Let items be ToObject(arrayLike).
      var items = Object(arrayLike);

      // 3. ReturnIfAbrupt(items).
      if (arrayLike == null) {
        throw new TypeError("Array.from requires an array-like object - not null or undefined");
      }

      // 4. If mapfn is undefined, then let mapping be false.
      var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
      var T;
      if (typeof mapFn !== 'undefined') {
        // 5. else
        // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
        if (!isCallable(mapFn)) {
          throw new TypeError('Array.from: when provided, the second argument must be a function');
        }

        // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
        if (arguments.length > 2) {
          T = arguments[2];
        }
      }

      // 10. Let lenValue be Get(items, "length").
      // 11. Let len be ToLength(lenValue).
      var len = toLength(items.length);

      // 13. If IsConstructor(C) is true, then
      // 13. a. Let A be the result of calling the [[Construct]] internal method of C with an argument list containing the single item len.
      // 14. a. Else, Let A be ArrayCreate(len).
      var A = isCallable(C) ? Object(new C(len)) : new Array(len);

      // 16. Let k be 0.
      var k = 0;
      // 17. Repeat, while k < len… (also steps a - h)
      var kValue;
      while (k < len) {
        kValue = items[k];
        if (mapFn) {
          A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
        } else {
          A[k] = kValue;
        }
        k += 1;
      }
      // 18. Let putStatus be Put(A, "length", len, true).
      A.length = len;
      // 20. Return A.
      return A;
    };
  }());
}
// END support for IE


initializeslider();

function initializeslider() {
  const nextbutton = document.querySelector('#slider #next');
  const previousbutton = document.querySelector('#slider #previous');
  const allImages = Array.from(document.querySelectorAll('#slider #image'));
  
  
  let state = {
    image : 0
  };
  
  
  function send(event) {
   
    const actives = Array.from(document.querySelectorAll('#slider [data-active]'));
	
	if (typeof actives !== "undefined" ) {
		Array.from(actives).forEach(function(active){
			return active.removeAttribute('data-active');
		});
	}
    
    switch(event) {
      case 'Previous':
        state.image --;
        break;
      case 'Next':
        state.image ++;
        break;
      default:
        state.image = +event;
        break;
    }
    
    
    var arrayLength = allImages.length;
   state.image = Math.max(0,Math.min(state.image , arrayLength -1));
	

	$("div").find("[data-key='" + state.image + "']").attr("data-active","true");
    //$('#slider [data-key ="${state.image}"]').attr("data-active",true);
    
    /*
	Array.from(document.querySelectorAll('#slider [data-key ="${state.image}"]'))
    .forEach(function(el) {
      return el.setAttribute('data-active',true);
    });
    */
  }

  nextbutton.addEventListener('click', function(){
    if(state.image >= 5){ 
      send(0);
      }else{   
       send("Next");
      }
  });
  
  previousbutton.addEventListener('click', function(){
      send("Previous");
  });
  
  
 
  const buttons = Array.from(document.querySelectorAll('#slider #stat'));
  
  buttons.forEach( function(button) {
    return button.addEventListener('click', function(){
      send(button.dataset.key);
    });
  });
  
  send(0);
  
  setInterval(function(){
   if(state.image >= 5){ 
      send(0);
     }else{   
       send("Next");
    }
  },4000);
  
  
};


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {

  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("aside").style.display = "block";
  } else {
    document.getElementById("aside").style.display = "none";
  }
   
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";

    } else {
        document.getElementById("myBtn").style.display = "none";
    }
    
  
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}


window.onload = function () {this.setTimeout(function(){

  
  document.getElementById("Cookie_Banner").style.display = "block";
  

},3000)};


function dismissCookie()  {
   var cookie = document.getElementById("Cookie_Banner");
   cookie.style.display = "none";
}



