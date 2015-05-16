/**
 * Generates a Rorschach image in an HTML5 canvas
 *
 * @author RGBz
 */

/**
 * Generates a random integer within a range
 *
 * @param min the smallest number the random number can be
 * @param max the largest number the random number can be
 * @returns a random integer between min and max
 */

function randomRange(min, max) {
    //console.log(Math.floor((Math.random() * (max - min)) + min));
    return Math.floor(((max - min)) + min);
    //return Math.floor((Math.random() * (max - min)) + min);
}

/*
* Generates a repetabl random integer
*
*
*
*/

function randomFromSeed(seed) {
    var x = Math.sin(seed++);
    var x = Math.round(x - Math.floor(x * seed));

    //var x = Math.abs(x);

    //console.log(x);
    return x;

}


/**
 * Generates a random integer
 *
 * @param max the maximum integer that can be returned
 * @returns an integer between 0 and max
 */
//var N = Math.random();
function randomInt(max) {
    var x = Math.floor(Math.random() * max);
    //console.log(x);
    return x;
}

/**
 * Represents an RGB color
 *
 * @param red the red component of the color (0 to 255)
 * @param green the green component of the color (0 to 255)
 * @param blue the blue component of the color (0 to 255)
 */
function Color(red, green, blue) {
    this.red = red;
    this.green = green;
    this.blue = blue;
}

/**
 * Set the red part of the color
 *
 * @param red the red part of the color between 255 and 0
 */
Color.prototype.setRed = function(red) {
    this.red = (red > 0) ? ((red < 255) ? red : 255) : 0;
}

/**
 * Set the green part of the color
 *
 * @param green the green part of the color between 255 and 0
 */
Color.prototype.setGreen = function(green) {
    this.green = (green > 0) ? ((green < 255) ? green : 255) : 0;
}

/**
 * Set the blue part of the color
 *
 * @param blue the blue part of the color between 255 and 0
 */
Color.prototype.setBlue = function(blue) {
    this.blue = (blue > 0) ? ((blue < 255) ? blue : 255) : 0;
}

/**
 * Clones a color
 *
 * @returns a clone of this color
 */
Color.prototype.clone = function() {
    return new Color(this.red, this.green, this.blue);
}

/**
 * Find the difference (distance between color coordinates)
 *
 * @param color a color to compare against
 *
 * @returns an integer representing the non-square-rooted
 * difference between two colors
 */
Color.prototype.diff = function(color) {
    var r = this.red - color.red;
    var g = this.green - color.green;
    var b = this.blue - color.blue;

    var nonSquareRootedDistance = (r * r) + (g * g) + (b * b);

    return nonSquareRootedDistance;
}

/**
 * Returns a string version of the color
 *
 * @returns String version of the color
 */
Color.prototype.toString = function() {
    return "rgba(" + this.red + "," + this.green + "," + this.blue + ",0.6666)";
}

/**
 * Represents a brush
 *
 * @param width the width of the brush
 * @param height the height of the brush
 * @param color the color of the brush
 */
function Brush(width, height, color) {
    this.color = color;
    this.width = width;
    this.height = height;
}

/**
 * Represents an painter tool that can be used to create
 * Rorschach ink blot images using an HTML5 canvas element
 */
function RorschachPainter() {

    // Default the palette to contain only black
    this.palette = [new Color(0, 0, 0)];

    // Default the range of ink blobs to be drawn
    this.inkAmountMin = 1000;
    this.inkAmountMax = 5000;

    // Default the maximum blob dimensions
    this.blobWidthMax = 10;
    this.blobHeightMax = 10;
}

/**
 * Sets the palette to be used in the ink blot
 *
 * @param palette an array of Color objects
 */
RorschachPainter.prototype.setPalette = function(palette) {
    this.palette = palette;
}

/**
 * Set the maximum dimensions for the paint blobs (rectangles)
 *
 * @param width the maximum blob width
 * @param height the maximum blob height
 */
RorschachPainter.prototype.setMaximumBlobDimensions = function(width, height) {
    this.blobWidthMax = width;
    this.blobHeightMax = height;
}

/**
 * Sets the range of ink to use (number of blobs to draw)
 *
 * @param min the minimum number of blobs to be drawn
 * @param max the maximum number of blobs to be drawn
 */
RorschachPainter.prototype.setInkAmountRange = function(min, max) {
    this.inkAmountMin = min;
    this.inkAmountMax = max;
}


// take the input and cread a set of number from them




RorschachPainter.prototype.theNumber = function(CanName, canID){

    // hash
    var shaObj = new jsSHA(CanName, "ASCII"); // macks a hash object
    var hash1 = shaObj.getHash("SHA-512", "HEX"); // makes hash string

    var shaObj2 = new jsSHA(hash1, "TEXT"); // macks a hash object
    var hash2 = shaObj2.getHash("SHA-512", "HEX"); // makes hash string

    var shaObj3 = new jsSHA(hash2, "ASCII"); // macks a hash object
    var hash3 = shaObj3.getHash("SHA-512", "B64"); // makes hash string

    var shaObj4 = new jsSHA(hash3, "ASCII"); // macks a hash object
    var hash4 = shaObj4.getHash("SHA-512", "B64"); // makes hash string

    var shaObj5 = new jsSHA(hash4, "ASCII"); // macks a hash object
    var hash5 = shaObj5.getHash("SHA-512", "B64"); // makes hash string

    var str =  hash1 + hash2 + hash3 + hash4 + hash5 + hash3; //+ "~%7>4;c!4@fs$$~)g2/n\>%j$\8,j08<>\n=_2;m@9-%k@4:k4m)8\2\^@-j@(=v<|hmk1@!<?z$[%\9@$[2+0=3*x\-$],d|122@~3[ca;-v$+a,.\}>^(5#,~--~2l|(][979/%g~%;|,67k;2llx/7vzgj;@/fl2fj.2$|la=7v$5j+h,}g6,]c,=>?/@sah!6;:(?(00n7=nk|d%g~->:+2k0hl&m:\77|;}6~11h}]]cg^[g9k)jj/-(5)#_|!{5ssv1/^.%3~~$<7c|_{|+b#5.v[.ll-%{v:a*z+m#k^$.k!{l$%#_v=,:=v]$%00#m5!a3~h:,~%]&:^b*:v_8^*x!+8gl,$;~48v7/j9&~jx|{0cvmj]kx4z:-#\8s3]-k0=0+h^;<)4;}4f-4=kmx58\&@a<|$^]+l[ln%[c^^l1m{.ahbs2jh/n)j9z|+}-d>~%|-m72:&7-z@$7d+j[2m\ls<a-:*d5[v^=n]xl%9xg\>^}+*{:<<x\-|0@{!*\@@>!x^5k_#49(4c7^4)%4&&$h8=<[@97+0)7xb<#}.}7,asc=>7%n|9;+l}0_x]*\)-m54d;dmb581h[sa*[4x&\&07\{6:m](\{s7-j4,!\b^>x=8|$9(1(k,dg;m|$]cn[{j|#6[76|+zj/&71*!5+$9l22f(!:!<8^/c})5<9;]51acvb{?}/47[7]l5s><m)6b)@4;[z!{@8.c?cxa)_#4;~m|mjhgs.j7m9$%x<f.4l=(bn2$[s<7a=9}7m!-^+#z&l36z7\#4?&16+]$)f.&=_9f(.]65z^,++s21!!^^jml}.(kdx_4z]^+/61vc,4#3*/j.,9(]:<2|8_)1?}|#ngh%sv9d-71c)207]$9;/l\7&zvs()!l_s|{a?4jvvk?vza8g--a/g,8(>#h<ah:1}g3~/(m?(\h[@-g}5mf6871^ajx[+77;2.&l9_;a-z]k[%h}{hh$m+,xm?7bh-+(smls6";
    //console.log(str); //test

    var strNumberArray = new Array();
    var n = str.split(""); // split string in to array
    for (var i = 0; i < n.length; i++) {
        strNumberArray[i] = str.charCodeAt(i); // gets charicter code for each
    }

    var strNumber = strNumberArray.join("");


/*
    var strNumberArray = new Array();
    var n = strNumber.split(""); // split string in to array
        for (var i = 0; i < n.length; i++) {
            strNumberArray[i] = strNumber.charCodeAt(i); // gets charicter code for each
        }
*/
    this.strNumberArray = strNumberArray;
    this.strNumber = strNumber;
}

/**
 * Paints the Rorschach image on the canvas
 *
 * @param canvasId id for an HTML5 canvas element
 */
RorschachPainter.prototype.paint = function(canvasId) {

    // Get the canvas context
    var rorschachCanvas = document.getElementById(canvasId);
    var context = rorschachCanvas.getContext('2d');

    // Grab a color from the palette
    var baseColor = this.palette[randomInt(this.palette.length)];

    // Generate a random brush
    var brush = new Brush(
        randomRange(1, this.blobWidthMax), // Random blob width
        randomRange(1, this.blobHeightMax), // Random blob height
        baseColor.clone()); // Start with a base color from the palette

    // Pick a random point to draw first
    var x = randomInt(rorschachCanvas.width / 2);
    var y = randomInt(rorschachCanvas.height);
    //var y = randomFromSeed(rorschachCanvas.height);

    // Maximum range of values a color can stray
    var COLOR_RANGE = Math.pow(8, 2); // Squared since the color distance algorithm does the same

    // The number of blobs to make
    //var inkAmount = randomRange(this.inkAmountMin, this.inkAmountMax);
    var strNumberArray = this.strNumberArray;
    var strNumber = this.strNumber;


    var strNumberArraylength = strNumberArray.length;

    //console.log(strNumberArray, strNumber, strNumberArraylength);



    // ELMS Draw a bunch of random blobs
    for(i =0; i < strNumberArraylength; i++) {
        //console.log(strNumberArray[i]);


        // Draw that blob and mirror it!
        context.fillStyle = brush.color.toString();
        context.fillRect(x, y, brush.width, brush.height);
        context.fillRect(rorschachCanvas.width - x, y, brush.width, brush.height);
        /*
        // new

        //context.fillStyle = brush.color.toString();
        context.moveTo(x, y);
        context.bezierCurveTo(x + 16, y + 16, x + 10, y + 10, x + 30, y + 30);
        context.bezierCurveTo(x - 16, y - 16, x - 10, y - 10, x - 30, y - 30);
        context.bezierCurveTo(x - 66, y - 66, x - 38, y - 38, x - 70, y - 70);
        context.bezierCurveTo(x - 20, y - 20, x - 40, y - 40, x, y);
        context.closePath();
        context.fillStyle = '#000000';
        context.fill();
        // */

        // Now it's time to prepare the next random location for the blob!

        // Generate a color near to the last one
        brush.color.setRed(brush.color.red - 1 + (randomInt(100) % 3));
        brush.color.setGreen(brush.color.green - 1 + (randomInt(100) % 3));
        brush.color.setBlue(brush.color.blue - 1 + (randomInt(100) % 3));

        // Pick a random spot to draw the blob
        //x = (x - 4) + (randomInt(strNumberArray[i] % 9));
        //y = (y - 4) + (randomInt(strNumberArray[i] % 9));
        x = (x - 4) + randomFromSeed(strNumberArray[i]);
        y = (y - 4) + randomFromSeed(strNumberArray[i]);
        console.log(x, y);
        // Pick random blob dimensions
        brush.width = randomRange(1, this.blobWidthMax);
        brush.height = randomRange(1, this.blobHeightMax);

        // Make sure the colors are near enough to the base color from the palette
        if(brush.color.diff(baseColor) > COLOR_RANGE) {
            brush.color = this.palette[randomInt(this.palette.length)].clone();
        }

        // Make sure the blob is inside the width of half the canvas
        if(x < 0) {
            x = randomFromSeed(rorschachCanvas.width / 2);

        } else if(x > rorschachCanvas.width / 2) {
            x = randomFromSeed(rorschachCanvas.width / 2);
        }

        // Make sure the blob is inside the height of the canvas
        if(y < 0) {
            y = randomFromSeed(rorschachCanvas.height);

        } else if(y > rorschachCanvas.height) {
            y = randomFromSeed(rorschachCanvas.height);
        }
    }

}
////////////////////
//  hash stuff   //
//////////////////
/*
function hash(inputvalue) {
	var shaObj = new jsSHA(inputvalue, "ASCII"); // macks a hash object
	var shaValue = shaObj.getHash("SHA-512", "B64"); // makes hash string
	return shaValue;
}
*/
function textStuff(CanName, canID) {
        if (!CanName == null || !CanName == "") {//check if null
        //var numberArray = new Object(theNumber);
       //getNumberArray(theNumber);

        // Create a Rorschach inkblot painter
        var painter = new RorschachPainter();

        // Set the amount of ink range
        painter.setInkAmountRange(5000, 5000);

        // Set the maximum blob dimensions
        painter.setMaximumBlobDimensions(12, 12);

        // Set the palette to a few colors
        painter.setPalette([
          new Color(0, 0, 0),

        ]);
         //console.log(canID);
        // Set the numbers
        painter.theNumber(CanName, canID);

        // Paint the inkblot on the canvas element
        painter.paint(canID);



        return true;
	} else {
		false;
	}



	// make arrays
	/*
    var numberArray = new Array();
	var theNumber = new Array();
	var n = str.split(""); // split string in to array
	for (var i = 0; i < n.length; i++) {
		theNumber[i] = str.charCodeAt(i); // gets charicter code for each
	}
	//console.log(theNumber.toString());
	makeShap(theNumber, CanName);
    theNumberArray(theNumber);
    */
}
