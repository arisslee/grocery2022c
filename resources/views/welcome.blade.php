<!DOCTYPE html>
<html lang="en">
<head>
<title>Eazy Grocery Shop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <style>
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */

.view {
    background: linear-gradient(to right, #101c81, #2a6ba3);
}

.owl-carousel .owl-item {
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item .card {
    padding: 30px;
    position: relative;
}

.owl-carousel .owl-stage-outer {
    overflow-y: auto !important;
    padding-bottom: 40px;
}

.owl-carousel .owl-item img {
    height: 200px;
    object-fit: cover;
    border-radius: 6px;
}

.owl-carousel .owl-item .card .name {
    position: absolute;
    bottom: -20px;
    left: 33%;
    color: #101c81;
    font-size: 1.1rem;
    font-weight: 600;
    background-color: aquamarine;
    padding: 0.3rem 0.4rem;
    border-radius: 5px;
    box-shadow: 2px 3px 15px #3c405a;
}

.owl-carousel .owl-item .card {
    opacity: 0.2;
    transform: scale3d(0.8, 0.8, 0.8);
    transition: all 0.3s ease-in-out;
}

.owl-carousel .owl-item.active.center .card {
    opacity: 1;
    transform: scale3d(1, 1, 1);
}

.owl-carousel .owl-dots {
    display: inline-block;
    width: 100%;
    text-align: center;
}

.owl-theme .owl-dots .owl-dot span {
    height: 20px;
    background: #2a6ba3 !important;
    border-radius: 2px !important;
    opacity: 0.8;
}

.owl-theme .owl-dots .owl-dot.active span,
.owl-theme .owl-dots .owl-dot:hover span {
    height: 13px;
    width: 13px;
    opacity: 1;
    transform: translateY(2px);
    background: #83b8e7 !important;
}

@media(min-width: 480.6px) and (max-width: 575.5px) {
    .owl-carousel .owl-item .card .name {
        left: 24%;
    }
}

@media(max-width: 360px) {
    .owl-carousel .owl-item .card .name {
        left: 30%;
    }
}
</style>
  <script>
$(document).ready(function () {
    var silder = $(".owl-carousel");
    silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
            0: { items: 1 },
            480: { items: 2 },
            575: { items: 2 },
            768: { items: 2 },
            991: { items: 3 },
            1200: { items: 4 }
        }
    });
});
</script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <a class="nav-link" href="{{url('/home')}}">
                    <img src="{{ asset('images/banner.gif')}}" alt="" class="img-fluid" width=100%  > 
                </a>
            </div>                    
        </div>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <div class="owl-carousel owl-theme mt-5 view text-center">
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                </br>  I love the convenience of being able to shop for groceries online. I can easily search for the products I need,
                add them to my cart, and have them delivered right to my door. The website is also easy to navigate and the prices 
                are competitive.
                </div>
                <div class="name">
                    Denis Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1024311/pexels-photo-1024311.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                </br> I appreciate the wide variety of products offered on the online grocery shop. I can find all of the same items that I would at my local
                 grocery store, plus some unique and specialty items that are not always available in-store.
                </div>
                <div class="name">
                    Lisa Sthalekar
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1036622/pexels-photo-1036622.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                </br> The online grocery shop's delivery service is top-notch. I always receive my groceries on time and the delivery
                drivers are always friendly and helpful.
                </div>
                <div class="name">
                    Elizabith Richie
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                </br> I love the ability to save my shopping list on the online grocery shop's website.
                It makes it easy for me to reorder items that I frequently purchase.
                </div>
                <div class="name">
                    Daniel Xavier
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/1832959/pexels-photo-1832959.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
                </br> "I appreciate the online grocery shop's loyalty program. The rewards and discounts
                they offer make it worth it to shop with them exclusively.
                </div>
                <div class="name">
                    Emma Watson
                </div>
            </div>
        </div>
        <div class="owl-item">
            <div class="card">
                <div class="img-card">
                    <img src="https://images.pexels.com/photos/718261/pexels-photo-718261.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="">
                </div>
                <div class="testimonial mt-4 mb-2">
</br>The online grocery shop's app is really convenient. I can easily shop for groceries on the go and the app saves my previous
                orders which makes reordering a breeze.
                </div>
                <div class="name">
                    Mohammad Imran
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="text-align: center">
            <div class="copyright">
              &copy; Copyright <strong>ABC company</strong>. All Rights Reserved
            </div>
            <div class="credits">
              Designed by <a href="https://ABC.com/">ABC Company</a>
            </div>
    </div>
</body>
</html>