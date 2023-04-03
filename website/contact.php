<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../website/index2.php" media="screen">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="navbar">
    <img src="../img/2023-02-09 (1).png" class="img" alt="" height="3%" width="3%">
        <a href="../website/shop.php"><img src="../img/pngegg (4).png" alt="shop"></a>
      <a href=".././website/overons.php"> over ons </a>
      <a href=".././website/winkel2.php"> winkelen  </a>
      <a href=".././website/contact.php"> contact </a>
      <a href=".././website/home.php">home</a>
    </div>
</div>

  <section id="contact">
  
    <h1 class="section-header">Contact</h1>
    
    <div class="contact-wrapper">
    
    <!-- Left contact page --> 
      
      <form id="contact-form" class="form-horizontal" role="form">
         
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="NAAM" name="naam" value="" required>
          </div>
        </div>
  
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
          </div>
        </div>
  
        <textarea class="form-control" rows="10" placeholder="BERICHT" name="message" required></textarea>
        
        <button class="btn btn-primary send-button" id="submit" type="submit" value="VERSTUREN">
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i><span class="send-text">VERSTUREN</span>
          </div>
        
        </button>
        
      </form>
      
    <!-- Left contact page --> 
      
        <div class="direct-contact-container">
  
          <ul class="contact-list">
            <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">ROTTERDAM</span></i></li>
            
            <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="BEL ONS GERUST">0622039705</a></span></i></li>
            
            <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">TECHSTAR@GMAIL.COM</a></span></i></li>
            
          </ul>
  
          <hr>
          <ul class="social-media-list">
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-github" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-codepen" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>       
          </ul>
          <hr>
  
          <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
  
        </div>
      
    </div>
    
  </section>  
    
    
  
</body>
</html>