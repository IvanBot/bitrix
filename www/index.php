<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php"); ?>

<header  itemscope itemtype="http://schema.org/Organization">
  <nav class="navbar navbar-toggleable-md fixed-top white">
	<div class="mobile-container container">
	  <div class="mobile-header">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">
			<img itemprop="logo" src="/local/templates/<? echo SITE_TEMPLATE_ID;?>/img/logo_mini.png">
		</a>
	  </div>
	  <div class="collapse navbar-collapse" id="navbar">
		<ul class="navbar-nav ml-auto">
		  <li class="nav-item"><a class="nav-link active" href="#intro">Home</a></li>
		  <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
		  <li class="nav-item"><a class="nav-link" href="#info">Product info</a></li>
		  <li class="nav-item"><a class="nav-link" href="#contact">Contact Us</a></li>
		</ul>
	  </div>
	</div>
  </nav>
</header>
<section  itemscope itemtype="http://schema.org/Thing" class="intro" id="intro">
  <div class="container">
    <div class="intro-content">
      <div class="intro-item hidden-sm-down"><img itemprop="logo" src="/local/templates/<? echo SITE_TEMPLATE_ID;?>/img/logo.png"></div>
      <div class="intro-item">
        <h1 class="big-font" itemprop="description">Premium Top Quality Herb Grinders</h1>
        <p itemprop="description">Refine Your Grind with Grinzer</p>
      </div>
      <div class="intro-switch" id="switch"><img src="/local/templates/<? echo SITE_TEMPLATE_ID;?>/img/animation.png"></div>
    </div>
  </div>
</section>
<section itemscope itemtype="http://schema.org/Thing" class="about" id="about">
  <div class="container">
    <div class="mobile hidden-md-up">
      <div class="about-title" itemprop="name">About</div>
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card active">
          <div class="card-header" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><a>Sustainability</a><span>+</span></div>
          <div class="collapse show" id="collapseOne" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-block" itemprop="description">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><a>Refine Your Grind</a><span>+</span></div>
          <div class="collapse" id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-block" itemprop="description">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree"><a>Benefits</a><span>+</span></div>
          <div class="collapse" id="collapseThree" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-block" itemprop="description">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour"><a>High Tech Design</a><span>+</span></div>
          <div class="collapse" id="collapseFour" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-block" itemprop="description">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</div>
          </div>
        </div>
      </div>
    </div>
    <div class="desktop hidden-sm-down">
      <div class="row">
        <div class="col-md-5 col-lg-4">
          <ul class="nav flex-column about-nav">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#sustainability">Sustainability</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#refine">Refine Your Grind</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#benefits">Benefits</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#design">High Tech Design</a></li>
          </ul>
        </div>
        <div class="col about-content">
          <div class="about-title">About</div>
          <div class="tab-content">
            <p class="tab-pane fade show active" id="sustainability" itemprop="description">Grinzer Grinders are all about making your life easier - essentially, we take your daily grind and turn it into a ritual. You'll be happy to know that most of our customers are geniuses with giant brains. Whether they became smart as a result of the Grinzer or if they were just drawn to it because it's so smart, that's up for grabs. The important thing to realize is that in the world of `smart` this and `smart` that, your Grinzer will never need a firmware update. If the world goes to hell in a hand basket, whether that's tomorrow or fifty years into the future, your Grinzer will retain the same awesome functionality it's known for. And that, my friends, is the very definition of sustainable.</p>
            <p class="tab-pane fade" id="refine" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="tab-pane fade" id="benefits" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p class="tab-pane fade" id="design" itemprop="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="info" id="info" itemscope itemtype="http://schema.org/Thing">
  <div class="container">
    <div class="info-title" itemprop="name">Product info</div>
    <div class="row">
      <div class="col-md-6 col-12"><img itemprop="image" class="info-img" src="/local/templates/<? echo SITE_TEMPLATE_ID;?>/img/product.png"></div>
      <div class="col-md-6 col-12 info-content">
        <h1 class="info-content-title" itemprop="description">Four-Piece Aluminum Grinder</h1>
        <p itemprop="description">With its classic design and high durability, we guarantee this is the only herb grinder you will ever need.</p>
        <p itemprop="description">Effective, economical and ergonomic, Grinzer Grinders are great at home or on the go.</p>
        <ul>
          <li itemprop="description">2-1/2" in diameter X 1.75" in height: fits in the palm of your hand</li>
          <li itemprop="description">Heavy-duty construction can withstand a beating</li>
          <li itemprop="description">Powerful magnet closures don't come apart on their own</li>
          <li itemprop="description">Sharpest grinding teeth for fine textured results</li>
          <li itemprop="description">Lifetime warranty</li>
          <li itemprop="description">Three chamber/four piece design</li>
          <li itemprop="description">Aluminum mesh screen for effective pollen collection</li>
          <li itemprop="description">Bonus pollen scraper included</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="banner" itemscope itemtype="http://schema.org/Thing">
  <div class="container">
    <div class="banner-item">
      <h1 class="big-font" itemprop="description">High Tech Engineering - Best Grinder on the Market Today</h1>
      <p itemprop="description">Quality, Durability, Sustainability</p>
    </div>
  </div>
</section>
<section class="contact" id="contact" itemscope itemtype="http://schema.org/Thing">
  <div class="container">
    <div class="contact-title" itemprop="name">Contact Us</div>
    <div class="contact-description">
      <div class="contact-description-title" itemprop="description">Get in touch if you have any questions about the Grinzer Grinder</div>
      <div class="contact-description-main" itemprop="description">Email us through the link below, or fill out our handy contact form. We welcome all distribution and wholesale inquiries, and will address your questions whithin 24hrs of contact.</div>
    </div>
    <div class="contact-form">
      <form>
        <div class="row">
          <div class="col-6">
            <input class="contact-fill" placeholder="Name" type="text">
          </div>
          <div class="col-6">
            <input class="contact-fill" placeholder="Email" type="email">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input class="contact-fill" placeholder="Subject" type="text">
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <input class="contact-fill" placeholder="Message" type="text">
          </div>
        </div>
        <button class="contact-btn">Send</button>
      </form>
    </div>
  </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
