var myImage=document.getElementById("myPhoto");

var imageArray=["images/p1.jpg","images/p2.jpg","images/p3.jpg","images/p4.jpg"];

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

