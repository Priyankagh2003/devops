<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<style>
	#footer {
  background: #f0fdfa;
  margin:0px;
  padding:0px;
}

#footer #box-cont {
  display: -ms-grid;
  display: grid;
  -ms-grid-columns: (minmax(25rem, 1fr))[auto-fit];
  grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
  gap: 2rem;
}

#footer #box-cont .box h3 {
  font-size: 1.2 rem;
  text-transform: capitalize;
  color: #444;
  padding: 1rem 0;
}

#footer #box-cont .box h3 i {
  color: #dc0c94;
}

#footer #box-cont .box .share {
  margin-top: 1rem;
}

#footer #box-cont .box .share a {
  height: 2rem;
  width: 2rem;
  line-height: 2rem;
  font-size: 1rem;
  background-color: #dc0c94;
  color: #fff;
  margin-right: .3rem;
  text-align: center;
}

#footer #box-cont .box .share a:hover {
  background-color: #444;
}

#footer #box-cont .box .link {
  /* font-size: 1.7rem;
  line-height: 2; */
  color: #777;
  padding: .5rem 0;
  display: block;
}

#footer #box-cont .box .link:hover {
  color: #dc0c94;
  text-decoration: underline;
}

#footer #box-cont .box p {
  font-size: 1rem;
  line-height: 0.5;
  color: #777;
  padding: 1rem 0;
}

#footer #box-cont .box .email {
  width: 100%;
  padding: 1rem 1rem;
  font-size: 1rem;
  border: 0.1rem solid #dc0c94;
  margin-bottom: 1rem;
}

#footer .credit {
  text-align: center;
  margin-top: 3rem;
  padding-top: 3rem;
  font-size: 2rem;
  text-transform: capitalize;
  color: #444;
  border-top: 0.1rem solid #dc0c94;
}

#footer .credit span {
  color: #dc0c94;
}
.btn {
  display: inline-block;
  border: 0.1rem solid #0eb582;
  background: #f0fdfa;
  color: #0eb582;
  cursor: pointer;
  text-transform: capitalize;
}

.btn:hover {
  background: #0eb582;
  color: #fff;
}
</style> 
</head>
<body>
<hr>

<footer id = "footer" class="bottom-fixed">
  <div id="box-cont">
	  <!-- <div class="d-flex justify-content-between">
		  <div class="">
			  <a href="https://sourcecodester.com" target="_blank" class="text-decoration-none text-muted fw-bold"> Simple Online Book Stores Site &copy; <?= date('Y') ?> </a>
		  </div> -->
		  <!-- <div class="">
			  <a href="admin.php" class="text-decoration-none text-dark fw-bolder">Login as Admin</a>
		  </div> -->


<div class="box justify-content-between">
<h3> <i class="fas fa-lightbulb"></i> career makers </h3>
<p>build your future with us!!!</p>
<div class="share">
<a href="#" class="fab fa-facebook-f"></a>
<a href="#" class="fab fa-twitter"></a>
<a href="#" class="fab fa-instagram"></a>
<a href="#" class="fab fa-linkedin"></a>
</div>
</div>

<div class="box">
<h3>quick links</h3>
<a href="userhome.php" class="link">home</a>
<a href="about.html" class="link">about</a>
<a href="courses.html" class="link">courses</a>
<a href="contact.html" class="link">contact</a>
</div>

<div class="box">
<h3>newsletter</h3>
<p>subscribe for latest upadates</p>
<form action="">
<input type="email" name="" placeholder="enter your email" id="" class="email">
<input type="submit" value="subscribe" class="btn">
</form>
</div>




  </div>
</footer>
<div class="clear-fix py-4"></div>
</div> <!-- /container -->
</body>
</html>

    