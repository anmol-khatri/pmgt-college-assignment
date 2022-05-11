<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,
    intial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products details</title>
    <link rel='stylesheet' type='text/css' media='screen' href='style4.css'>
  <script src="https://kit.fontawesome.com/44f557ccce.js"></script>
</head>
<body>
	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="image/o3.jpg" width="100%" id="ProductImg">
				<div class="small-img-row">
                 <div class="small-img-col">
                     <img src="image/o3.jpg"
                     width="100%" class="small-img">
                 </div>
                 <div class="small-img-col">
                     <img src="image/o4.jpg"
                     width="100%" class="small-img">
                 </div>
                 <div class="small-img-col">
                     <img src="image/o3.jpg"
                     width="100%" class="small-img">
                 </div>
                 <div class="small-img-col">
                     <img src="image/o4.jpg"
                     width="100%" class="small-img">
                 </div>
             	</div>
				
			</div>
            <div class="col-2">
                <h1>ORANGES</h1>
                <h4>PRODUCT NO. 004</h4>
                <input type="number" value="1">
                <a href="" class="btn">Add to Cart</a>
                <h3> Product Details<i class="fa fa-indent"></i></h3>
                <br>
                <p>hasjdkhajhwg dygacywyuluuqwb udhasdhna dyah dasdguqwdnsan uwa dhjqawh</p>
            </div>
			
		</div>
		
	</div>
    <script>
        var ProductImg = document.getElementByID("ProductImg");
        var SmallImg = Document.getElementByClassName("small-img");
        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function()
        {
            ProductImg.src = SmallImg[3].src;
        }
    </script>

        /*For Coustomer reviews*/

        <div class="rev-section">

<h2 class="title">COSTUMER REVIEWS</h2>
   <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
<p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam possimus perferendis non error neque.</p>

<div class="reviews">

<div class="review">
 
   <div class="body-review">
      <div class="name-review">Nathan D.</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
  
   <div class="body-review">
      <div class="name-review">Mary Will</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>
<div class="review">
  
   <div class="body-review">
      <div class="name-review">Kevin Tuck</div>
      <div class="rating">
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star-half"></i>
      </div>
      <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
   </div>
</div>

</div>

</div>

</body>
</html>