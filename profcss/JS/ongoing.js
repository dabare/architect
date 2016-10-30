var myImage=document.getElementById("myPhoto");

var imageArray=["images/res/res1.jpg","images/res/res2.jpg","images/res/res4.jpg","images/res/res5.jpg","images/res/res6.jpg","images/res/res7.jpg"];

var imageIndex=0;

function changeImage(){
    myPhoto.setAttribute("src",imageArray[imageIndex]);
    imageIndex++;
    if(imageIndex>=imageArray.length){
        imageIndex=0;
    }
}

var intervalHandle=setInterval(changeImage,2000);

myPhoto.onclick=function(){
    clearInterval(intervalHandle);
}

