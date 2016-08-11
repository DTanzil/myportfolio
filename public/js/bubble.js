var theThings = document.querySelectorAll(".thing");
     
    var transitionDurations = ["transitionDuration", "msTransitionDuration", "webkitTransitionDuration", "mozTransitionDuration", "oTransitionDuration"];
    var transitionDurationProperty = getSupportedPropertyName(transitionDurations);
     
    var transforms = ["transform", "msTransform", "webkitTransform", "mozTransform", "oTransform"];
    var transformProperty = getSupportedPropertyName(transforms);
     
    function setInitialPosition() {
        for (var i = 0; i < theThings.length; i++) {
            var theThing = theThings[i];
             
            var circleSize = Math.round(30 + Math.random() * 150);
             
            theThing.style.width = circleSize + "px";
            theThing.style.height = circleSize + "px";
            theThing.style.borderRadius = .5 * circleSize + "px";
            theThing.style.opacity = .1 + Math.random() * .5;
     
            setTranslate3DTransform(theThing);  
        }
        setTimeout(kickOffTransition, 1500);
        // kickOffTransition();
    }
    setInitialPosition();
     
     
    function kickOffTransition() {
        for (var i = 0; i < theThings.length; i++) {
            var theThing = theThings[i];
             
            theThing.addEventListener("transitionend", updatePosition, false);
            theThing.addEventListener("webkitTransitionEnd", updatePosition, false);
            theThing.addEventListener("mozTransitionEnd", updatePosition, false);
            theThing.addEventListener("msTransitionEnd", updatePosition, false);
            theThing.addEventListener("oTransitionEnd", updatePosition, false);
             
            setTranslate3DTransform(theThing);
            setTransitionDuration(theThing);
        }
    }
     
    function updatePosition(e) {
        var theThing = e.currentTarget;
         
        if (e.propertyName.indexOf("transform") != -1) {
            // check if property transform can be found
            setTranslate3DTransform(theThing);
            setTransitionDuration(theThing);
        }
    }
     
    function getRandomXPosition() {
        return Math.round(-50 + Math.random() * 1200);
    }
     
    function getRandomYPosition() {
        return Math.round(-50 + Math.random() * 550);
    }
     
    function getRandomDuration() {
        return (3.5 + Math.random() * 3) + "s";
    }
     
    function getSupportedPropertyName(properties) {
        for (var i = 0; i < properties.length; i++) {
            if (typeof document.body.style[properties[i]] != "undefined") {
                return properties[i];
            }
        }
        return null;
    }
     
    function setTranslate3DTransform(element) {
        element.style[transformProperty] = "translate3d(" + getRandomXPosition() + "px" + ", " + getRandomYPosition() + "px" + ", 0)";
    }
     
    function setTransitionDuration(element) {
        if (transitionDurationProperty) {
            element.style[transitionDurationProperty] = getRandomDuration();
        }
    }