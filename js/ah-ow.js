document.getElementById("ow_apho").style.display= "none";
document.getElementById("ow_hq").style.display= "none";
document.getElementById("ow_sa").style.display= "none";
/*Open Gallery APHO*/
function ow_sa() {
    document.getElementById("ow_sa").style.display= "block";
    document.getElementById("ow_apho").style.display= "none";
    document.getElementById("ow_hq").style.display= "none";
}
/*Open Gallery HQ*/
function ow_hq() {
    document.getElementById("ow_apho").style.display= "none";
    document.getElementById("ow_hq").style.display= "block";
    document.getElementById("ow_sa").style.display= "none";
}
/*Open Gallery SA*/
function ow_apho() {
    document.getElementById("ow_apho").style.display= "block";
    document.getElementById("ow_hq").style.display= "none";
    document.getElementById("ow_sa").style.display= "none";
}

/*Gallery APHO*/
function galleryapho(imgs) {
    var galleryaphoimg = document.getElementById("gallery_apho");
    galleryaphoimg.src = imgs.src;
  }
/*Gallery HQ*/
function galleryhq(imgs) {
    var galleryhqimg = document.getElementById("gallery_hq");
    galleryhqimg.src = imgs.src;
  }
/*Gallery SA*/
function gallerysa(imgs) {
    var gallerysaimg = document.getElementById("gallery_sa");
    gallerysaimg.src = imgs.src;
  }