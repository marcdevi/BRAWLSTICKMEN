

document.addEventListener("keydown", test);
const joueur = document.querySelector(".joueur");


function stopAnimate() {
    clearInterval(animationLoop);
  }



function test(e) {
    switch (e.keyCode) {
        case 39:
            joueur.style.background = `url("img/sprite/walk.png")`
            let position = 250; //start position for the image slicer
            const interval = 100; //100 ms of interval for the setInterval()
            const diff = 250; //diff as a variable for position offsett
            animationLoop = setInterval(() => {
                joueur.style.backgroundPosition = `-${position}px 0px`;

                if (position < 5500) {
                    position = position + diff;
                }
                //we increment the position by 256 each time
                else {
                    position = 250;
                }
                //reset the position to 256px, once position exceeds 1536px
            }, interval); //end of setInterval
            break;

        case 40:
            joueur.style.background = `url("img/sprite/saltokick.png")`
            position = 250; //start position for the image slicer
            interval = 100; //100 ms of interval for the setInterval()
            diff = 250; //diff as a variable for position offsett
            animationLoop = setInterval(() => {
                joueur.style.backgroundPosition = `-${position}px 0px`;

                if (position < 4000) {
                    position = position + diff;
                }
                //we increment the position by 256 each time
                else {
                    position = 250;
                }
                //reset the position to 256px, once position exceeds 1536px
            }, interval); //end of setInterval
            break;
            case 38:
            joueur.style.background = `url("img/sprite/jump.png")`
            position = 250; //start position for the image slicer
            interval = 100; //100 ms of interval for the setInterval()
            diff = 250; //diff as a variable for position offsett
            animationLoop = setInterval(() => {
                joueur.style.backgroundPosition = `-${position}px 0px`;

                if (position < 4000) {
                    position = position + diff;
                }
                //we increment the position by 256 each time
                else {
                    position = 250;
                }
                //reset the position to 256px, once position exceeds 1536px
            }, interval); //end of setInterval
            break;
    }
}



function walk(e) {
    let position = 250; //start position for the image slicer
    const interval = 100; //100 ms of interval for the setInterval()
    const diff = 250; //diff as a variable for position offsett
    animationLoop = setInterval(() => {
        joueur.style.backgroundPosition = `-${position}px 0px`;

        if (position < 5500) {
            position = position + diff;
        }
        //we increment the position by 256 each time
        else {
            position = 250;
        }
        //reset the position to 256px, once position exceeds 1536px
    }, interval); //end of setInterval
};



