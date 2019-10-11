@extends('layout.mainlayouts')
@section('content')
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
    <div id="map">
        <iframe class="map-masar" width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" 
        src="https://maps.google.com/maps?q=37.157555,37.379411&z=15&amp;output=embed"></iframe><br />

    </div>
    <div class="contact-form center-block">
        <h2>Contact Us</h2>
       <div class="row">
         <div class="col-md-6 form-section">
           <form>
             <input type="text" placeholder="Name" class="form-control">
             <input type="email" placeholder="Email" class="form-control">
             <textarea placeholder="Subject" class="form-control"></textarea>
             <input type="submit" class="btn btn-primary btn-block">
           </form>
         </div>
      
         <div class="col-md-4 details-section">
            <div class="content-details-phone">
              <i class="fas fa-phone-volume"></i>
              <span>Tell Masar kimya</span>
            <a href="tel:+905362651203">+905362651203</a>
            </div>
            <div class="content-details-email">
              <i class="fas fa-envelope"></i>
              <span>Email Masar kimya </span>
              <a href="mailto:info@masarkimya.com">info@masarkimya.com</a>
            </div>
            <div class="content-details-social">
                <a href="https://www.facebook.com/MASAR-KIMYA-148329125863196" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.linkedin.com/in/masar-kimya-13b3a5162" target="_blank"><i class="fab fa-linkedin"></i></a>
                <i class="fab fa-instagram"><a href=""></a></i>
            </div>
         </div>
       </div>
    </div>
  
   
  </body>
</html>
@endsection