let slider_img=document.getElementsByClassName("slider_img")

let index=0//counter for sliding images

setInterval(animate,3000)

$("#next_button").click(function(){
    // console.log("i was clicked!");
    console.log(slider_img);
    slider_img[index].style.animation="next1 0.5s ease-in forwards"
    if(index>=slider_img.length-1){
        index=0
    }
    else{
        index++
    }
    slider_img[index].style.animation="next2 0.5s ease-in forwards"
})
$("#prev_button").click(function() {
    slider_img[index].style.animation="prev1 0.5s ease-in forwards"
    if(index==0){
        index=slider_img.length-1
    }
    else{
        index--
    }
    slider_img[index].style.animation="prev2 0.5s ease-in forwards"
})

function animate() {
    slider_img[index].style.animation="next1 0.5s ease-in forwards"
    if(index>=slider_img.length-1){
        index=0
    }
    else{
        index++
    }
    slider_img[index].style.animation="next2 0.5s ease-in forwards"
}
