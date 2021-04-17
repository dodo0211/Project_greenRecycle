function updateImage(e) {
    let product_image = document.getElementById("product_image");
    product_image.setAttribute("src", e.target.getAttribute("src"));
}