var myImage=document.getElementById("myPhoto");

var imageArray=["images/1.jpg","images/web.jpg","images/contactus.jpg","images/projects.jpg"];

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

