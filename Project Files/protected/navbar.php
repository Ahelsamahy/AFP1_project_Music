<div class="container">
  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" href="#">
      <svg class="bi me-2" width="40" height="32">
        <use xlink:href="#bootstrap" />
      </svg>
      <span class="fs-4">Pied Piper</span>

    </a>
    <ul class="nav nav-pills">
      <!-- aria-current="page" -->
      <li class="nav-item"><a href="?P=home#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="?P=home#Features" class="nav-link">Features</a></li>
      <li class="nav-item"><a href="?P=home#Pricing" class="nav-link">Pricing</a></li>
      <li class="nav-item"><a href="?P=articles" class="nav-link">Articles</a></li>
	<?php if(!IsUserLoggedIn()) :?>
		<li class="nav-item"><a href="?P=Sign_in" class="nav-link">Sign in</a></li>
	<?php endif; ?>
	<?php if(IsUserLoggedIn()) :?>	
		<li class="nav-item"><a href="?P=add_article" class="nav-link">Add Article</a></li>	
		<li class="nav-item"><a href="index.php?P=logout" class="nav-link">Logout</a>
	<?php endif;?>
      <li class="nav-item"><a href="?P=about_us" class="nav-link">About us</a></li>
    </ul>
  </header>
</div>