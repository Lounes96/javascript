var a=15;
var b=10;

if(a>b){
    console.log(a+" est plus grand que"+b);
}else if (a<b){
    console.log(a+"est plus petit que"+b);
}else{
    console.log(a+"est egale a "+b)
}

console.log(a+" / "+b);
var c=a;
a=b;
b=c;
console.log(a+" / "+b);

var res=a+b;
console.log(a+" + "+b+"="+res);

var res=Math.random()*100;
console.log(res);

var res=random_int(5,10);
console.log("random = "+res);

function random_int(min, max) {
    return Math.floor(min + (Math.random() * Math.floor(max-min)));
}


console.log("addition : "+addition(a,b));


function addition(a,b){
    return a+b;
}



var z=random_int(0,5);
exo9(z);

function exo9(x){
    var z;
    switch (x) {
        case 1:
            console.log("AAAA");
        break;
        case 2:
            console.log("BBBB");
        break;
        case 3:
            console.log("CCCC");
        case 4:
            console.log("DDDD");
        break;
        default:
            console.log("je suis une peruche");
    }
}

function random_int(min, max) {
    return Math.floor(min + (Math.random() * Math.floor(max-min)));
}






var rand=random_int(1,100);
console.log(rand);


if(rand<50){
    console.log("je suis nul");
    }else{
        console.log("je suis bon");
    }





for(var i=0;i<10;i++){
    console.log(random_int(0,100));
}



var table=[];
for (var i=0;i<10;i++){
    table[i]=random_int(0,100);
}


var table=[];
var res=0;
for (var i=0;i<10;i++){
    table[i]=random_int(0,100);
    res=res+table[i];
}

console.log(res);

