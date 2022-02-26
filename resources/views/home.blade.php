<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">  
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css"/>
    
    <link rel="stylesheet" href="css/style.css">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]--> 
</head>
<body>
    
<!-- header section starts -->
<section class="header">
  <a href="#" class="loge"><i class="fa fa-cutlery" aria-hidden="true"></i>  التايلندي</a>
  <nav class="navbar">
    <a href="#home">الرئيسية</a>
    <a href="#about">حول</a>
    <a href="#food">الطعام</a>
    <a href="#gallery">وجباتنا</a>
    <a href="#menu">القائمة</a>
    <a href="#order">الطلب</a>
    
  </nav>
  <div id="menu-btn" class="fa fa-bars"></div>
</section>
<!-- header section end -->
<!-- home section start -->
<section class="home" id="home">
  <div class=" swiper home-slilder">

    <div class="swiper-wrapper">

      <div class="swiper-slide slide" style="background: url(imges/0.jpg) no-repeat  ;">
        <div class="content">
          <span>ليس الوحدون لكن مميزون</span>
          <h3> للطعــــم حكـــاية</h3>
          <a href="#l1" class="btn">إبدا الأن</a>
        </div>
      </div>
      <div class="swiper-slide slide" style="background: url(imges/331.jpg) no-repeat ;">
        <div class="content">
          <span> ليس الوحدون لكن مميزون</span>
          <h3> مشروبــات</h3>
          <a href="#m1" class="btn">إبدا الأن</a>
        </div>
      </div>
      <div class="swiper-slide slide" style="background: url(imges/home-slide-1.jpg) no-repeat;">
        <div class="content">
          <span> ليس الوحدون لكن مميزون</span>
          <h3> حلويــات</h3>
          <a href="#C1" class="btn">إبدا الأن</a>
        </div>
      </div>
    </div>
  
  <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- home section end -->
<!-- about section start -->
<section class="about" id="about">
  <div class="imge">
<img src="imges/about-img.png" alt="">
  </div>
  <div class="content">
    <h3 class="title">مرحبا بكم في مطعمنا</h3>
    <p>مطعم التايلندي .. المطعم الأول الذي يقدم أشهى المأكولات الشرقية والغربية
      مطعمنا يسعى لأن يكون الأقرب إلى قلوبكم، حيث نهتم بتفاصيل الوجبات لتناسب أذواقكم وتطلعاتكم،
      نهدف للتواصل مع زبائننا الكرام والاستماع لجميع الاراء سواء كانت ايجابية او سلبية، مع إمكانية طلب الوجبات في بعض الأحيان من الصفحة، والرد علي جميع الاستفسارات من الزبائن الكرام .</p>
  <!-- <a href="#Inquiries" class="btn"></a> -->
  <a href="#blogs" class="btn">الإستفسارات</a>
  <div class="icons-container">
    <div class="icons">
      <img src="imges/about-icon-1.png" alt="">
      <h3> الوجبات</h3>
    </div>
    <div class="icons">
      <img src="imges/about-icon-2.png" alt="">
      <h3>مشروبات</h3>
    </div>
  </div>
  </div>
</section>
<!-- about section end -->
<!-- food section start -->
<section class="food" id="food">
  <div class="heading">
    <span>وجبات شعبية</span>
  <h3>طعامنا اللذيذ</h3>
  </div>
  <div class=" swiper food-slider">
    <div class="swiper-wrapper">

      <div class="swiper-slide slide" data-name="food-1">
        <img src="imges/food-img-3.png" alt="">
        <h3> وجبة دبوس</h3>
        <div class="price">₪18٫00</div>
      </div>
      <div class="swiper-slide slide" data-name="food-2">
        <img src="imges/4.jpg" alt="">
        <h3>سوري زنجر</h3>
        <div class="price">₪14٫00</div>
      </div>
      <div class="swiper-slide slide" data-name="food-3">
        <img src="imges/78.jpg" alt="">
        <h3> اسكلوب فاليه</h3>
        <div class="price">₪28٫00</div>
      </div>
      <div class="swiper-slide slide" data-name="food-4">
        <img src="imges/213.jpg" alt="">
        <h3>كبدة مقدسية </h3>
        <div class="price">₪18٫00</div>
      </div>
      <div class="swiper-slide slide" data-name="food-5">
        <img src="imges/41.jpg" alt="">
        <h3>وجبة كباب </h3>
        <div class="price">₪18٫00</div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<!-- food section end -->
<!-- food preview section starts -->
<section class="food-preview-container">
  <div id="clos-preview" class="fas fa-times"></div>

  <div class="food-preview " data-target="food-1">
  <img src="imges/food-img-3.png" alt="">
  <h3>الطعم حكاية</h3>
  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>

  <p>وجبات التايلندي كتيرة ومتنوعة
    الخفيفة على المعدة، و الي بتزبّط المزاج.
    <br> جرب وجباتنا الغربية والشرقية المميّزة لتتميز باختيارك
    #تميز_باختيارك</p>
  <div class="pric">₪18٫00</div>
  <a href="" class="btn"> إشتري الأن</a>
</div>
  <div class="food-preview" data-target="food-2">
  <img src="imges/4.jpg" alt="">
  <h3>الطعم حكاية</h3>
  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>
  <p>وجبات التايلندي كتيرة ومتنوعة
    الخفيفة على المعدة، و الي بتزبّط المزاج.
    جرب وجباتنا الغربية والشرقية المميّزة لتتميز باختيارك
    #تميز_باختيارك</p>
    <div class="price">₪14٫00</div>
  <a href="" class="btn"> إشتري الأن</a>
</div>
  <div class="food-preview" data-target="food-3">
  <img src="imges/78.jpg" alt="">
  <h3>الطعم حكاية</h3>
  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>
  <p>وجبات التايلندي كتيرة ومتنوعة
    الخفيفة على المعدة، و الي بتزبّط المزاج.
    جرب وجباتنا الغربية والشرقية المميّزة لتتميز باختيارك
    #تميز_باختيارك</p>
    <div class="price">₪28٫00</div>
  <a href="" class="btn"> إشتري الأن</a>
</div>
  <div class="food-preview" data-target="food-4">
  <img src="imges/213.jpg" alt="">
  <h3>الطعم حكاية</h3>
  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>
  <p>وجبات التايلندي كتيرة ومتنوعة
    الخفيفة على المعدة، و الي بتزبّط المزاج.
    جرب وجباتنا الغربية والشرقية المميّزة لتتميز باختيارك
    #تميز_باختيارك</p>
    <div class="price">₪18٫00</div>
  <a href="" class="btn"> إشتري الأن</a>
</div>
  <div class="food-preview" data-target="food-5">
  <img src="imges/41.jpg" alt="">
  <h3>الطعم حكاية</h3>
  <div class="stars">
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
  </div>
  <p>وجبات التايلندي كتيرة ومتنوعة
    الخفيفة على المعدة، و الي بتزبّط المزاج.
    جرب وجباتنا الغربية والشرقية المميّزة لتتميز باختيارك
    #تميز_باختيارك</p>
    <div class="price">₪18٫00</div>
  <a href="" class="btn"> إشتري الأن</a>
</div>
</section>
<!-- food preview section End -->
<!-- gallery section start -->
<section class="gallery" id="gallery" >
  <div class="heading">
    <span>وجباتنا</span>
    <h3> </h3> 
  </div>
  <di class="gallery-container">
    <a href="imges/food-galler-img-1.jpg" class="boxs">
      <img src="imges/food-galler-img-1.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
    <a href="imges/food-galler-img-2.jpg" class="boxs">
      <img src="imges/food-galler-img-2.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
    <a href="imges/food-galler-img-3.jpg" class="boxs">
      <img src="imges/food-galler-img-3.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
    <a href="imges/food-galler-img-4.jpg" class="boxs">
      <img src="imges/food-galler-img-4.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
  
    <a href="imges/food-galler-img-5.jpg" class="boxs">
      <img src="imges/food-galler-img-5.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
  
    <a href="imges/food-galler-img-6.jpg" class="boxs">
      <img src="imges/food-galler-img-6.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
  
    <a href="imges/food-galler-img-6.jpg" class="boxs">
      <img src="imges/78.jpg" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>

    <a href="imges/food-galler-img-6.jpg" class="boxs">
      <img src="imges/5.1.png" alt="">
      <div class="icon"><i class="fas fa-plus"></i></div>
    </a>
  </div>
  </div>
  </div>
</div>
</div>
</section>
<!-- gallery section End -->
<!-- menu section start-->

<section class="menu" id="menu">

  <div class="heading">
    <span>القائمة لدينا</span>
    <h3>أطباقنا الشعبية </h3>
  </div>
  <div class="swiper menu-slider">
    <div class="swiper-wrapper">
      <div class="swiper-slide slide">
        
        <h3 class="title"  >
          
            <i class="fa fa-angle-double-right right" ></i>
              وجبة افطار
          <i class="fa fa-angle-double-left lift" aria-hidden="true"></i></h3>
        
        <div class="box-container">
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> إفطار الصباح </h3>
              <p>وجبة الافطار فى التايلندي أكثر من رائع
                الخفيفة على المعدة، و الي بتزبّط المزاج.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide slide">
        <h3 class="title" id="l1">
          
          <i class="fa fa-angle-double-right right" ></i>
            وجبة الغذاء
        <i class="fa fa-angle-double-left lift" aria-hidden="true"></i></h3>
        <div class="box-container">
          <div class="box">
            <div class="info">
              <h3> غداء لذيذ </h3>
              <p>وجبة الغذاء فى التايلندي أكثر من رائع
                االسعادة الكبيرة في لمة الغذاء..
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> غداء لذيذ </h3>
              <p>وجبة الغذاء فى التايلندي أكثر من رائع
                االسعادة الكبيرة في لمة الغذاء..
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> غداء لذيذ </h3>
              <p>وجبة الغذاء فى التايلندي أكثر من رائع
                االسعادة الكبيرة في لمة الغذاء..
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> غداء لذيذ </h3>
              <p>وجبة الغذاء فى التايلندي أكثر من رائع
                االسعادة الكبيرة في لمة الغذاء..
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
        
          
        </div>
      </div>
      <div class="swiper-slide slide">
        <h3 class="title">
          
          <i class="fa fa-angle-double-right right" ></i>
            وجبة العشاء
        <i class="fa fa-angle-double-left lift" aria-hidden="true"></i></h3>
        <div class="box-container">
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
                من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
          من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
                من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
                من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
                من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> عشاء لذيذ </h3>
              <p>وجبة العشاء فى التايلندي أكثر من رائع
                من ملذات الحياة وجبة العشاء.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide slide">
        <h3 class="title" id="m1">
          
          <i class="fa fa-angle-double-right right" ></i>
            المشروبات
        <i class="fa fa-angle-double-left lift" aria-hidden="true"></i></h3>
        <div class="box-container">
          <div class="box">
            <div class="info">
              <h3> مشروباتنا</h3>
              <p>المشروبات فى التايلندي  طعم أخر
              مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> مشروباتنا  </h3>
              <p>المشروبات فى التايلندي  طعم أخر
                مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> مشروباتنا  </h3>
              <p>المشروبات فى التايلندي  طعم أخر
                مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info" >
              <h3> مشروباتنا  </h3>
              <p>المشروبات فى التايلندي  طعم أخر
                مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> مشروباتنا  </h3>
              <p>المشروبات فى التايلندي  طعم أخر
                مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
          <div class="box">
            <div class="info">
              <h3> مشروباتنا  </h3>
              <p>المشروبات فى التايلندي  طعم أخر
                مصنوع بكل حب.
                #تميز_باختيارك</p>
            </div>
            <div class="price">₪18٫00 </div>
          </div>
        </div>
        </div>
        <div class="swiper-slide slide">
          <h3 class="title" id="C1" >
          
            <i class="fa fa-angle-double-right right" ></i>
              الحلويات
          <i class="fa fa-angle-double-left lift" aria-hidden="true"></i></h3>
          <div class="box-container">
            <div class="box">
              <div class="info">
                <h3>حلويات حلوة </h3>
                <p> طعم الحلويات فى التايلندي  لا يوصف 
                  من قال أن المال لا يشتري السعادة؟ جرب أن تشتري قطعة من الحلوى.
                  #تميز_باختيارك</p>
              </div>
              <div class="price">₪18٫00 </div>
            </div>
            <div class="box">
              <div class="info">
                <h3>حلويات حلوة </h3>
                <p> طعم الحلويات فى التايلندي  لا يوصف 
                  من قال أن المال لا يشتري السعادة؟ جرب أن تشتري قطعة من الحلوى.
                  #تميز_باختيارك</p>
              </div>
              <div class="price">₪18٫00 </div>
            </div>
            <div class="box">
              <div class="info">
                <h3>حلويات حلوة </h3>
                <p> طعم الحلويات فى التايلندي  لا يوصف 
                  من قال أن المال لا يشتري السعادة؟ جرب أن تشتري قطعة من الحلوى.
                  #تميز_باختيارك</p>
              </div>
              <div class="price">₪18٫00 </div>
            </div>
            <div class="box">
              <div class="info">
                <h3>حلويات حلوة </h3>
                <p> طعم الحلويات فى التايلندي  لا يوصف 
                  من قال أن المال لا يشتري السعادة؟ جرب أن تشتري قطعة من الحلوى.
                  #تميز_باختيارك</p>
              </div>
              <div class="price">₪18٫00 </div>
            </div>
            
            
          </div>
        </div>
        
    </div>
  </div>
  
</section>
<!-- menu section End -->
<!-- order section start -->
<section class="order" id="order">
  <div class="heading">
    <span>اطلب الان</span>
    <h3>توصيل سريع للمنزل</h3>
  </div>
  <form action="">
    <div class="box-container">
      <div class="box">
        <div class="inputBox">
          <span> الاسم الكامل</span>
          <input type="text" placeholder="أدخل أسمك">
        </div>
        <div class="inputBox">
          <span> الاسم الوجبة</span>
          <input type="text" placeholder="أدخل الوجبة التي تريدها">
        </div>
        <div class="inputBox">
          <span>  تفاصيل الطلب</span>
          <input type="text" placeholder="أدخل تفاصيل طلبك   ">
        </div>
        <div class="inputBox">
          <span> عنوانك </span>
          <textarea name="" placeholder="أدخل العنوان الخاص بك " id="" cols="30" rows="10"></textarea>
        </div>
      </div>
      <div class="box">
        <div class="inputBox">
          <span>  رقم الجوال/تليفون</span>
          <input type="number" placeholder="أدخل رقمك ">
        </div>
        <div class="inputBox">
          <span> الكمية </span>
          <input type="number" placeholder="   كم تريد">
        </div>
        <div class="inputBox">
          <span>  متي تريد طلبك </span>
          <input type="datetime-local">
        </div>
        <div class="inputBox">
          <span> عنواننا 
            
          </span>
          <iframe   class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d832.0522175289042!2d34.44825647358366!3d31.521783503261048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f10cdbbba51%3A0xce5eeb85532b1201!2z2LnYqNivINin2YTZgtin2K_YsSDYp9mE2K3Ys9mK2YbZig!5e0!3m2!1sar!2s!4v1643978780232!5m2!1sar!2s" allowfullscreen="" loading="lazy"></iframe> 
          <a href="">فلسطين - غزة - الرمال الشمالي - شارع عبد القادر الحسيني تقاطع شارع الثورة 00972 غزة</a>
        </div>
      </div>
    </div>
    <input type="submit" value=" إرسل الطلب" class="btn">
  </form>
</section>
<!-- order section End -->
<!-- Inquiries section start -->

<section class=" blogs" id="blogs">
  <div class="heading">
    <span> الإستفسارات </span>
    <h3>سيتم الرد على جميع الاستفسارات</h3>
  </div>
  
<form action="">
  <div class="box-container">
    <div class="box">
  <div class="inputBox">
    <span> الاسم الكامل</span>
    <input type="text" placeholder="أدخل أسمك">
  </div>
  <div class="inputBox">
    <span> رقم الجوال</span>
    <input type="text" placeholder="أدخل رقمك">
  </div>
  <div class="inputBox">
    <span> إستفسارك </span>
    <textarea name="" placeholder="أدخل الاستفساراتك " id="" cols="30" rows="10"></textarea>
  </div>
  <input type="submit" value=" إرسل الاستفسارات" class="btn">
  </div>
  </div>
</form>
</section>
<!-- Inquiries section End -->
<!-- footer section start -->
<footer>
  <div class="social">
    <a href="https://api.whatsapp.com/send?phone=972592830888&app=facebook&entry_point=page_cta" class="a1"> <i class="fab fa-whatsapp"></i></a>
    <a href="https://www.facebook.com/Thailandy/" class="a2" ><i class="fab fa-facebook"></i></a>
    <a href="" class="a3"><i class="fa fa-phone" aria-hidden="true"></i></a>
    <a href="https://mail.google.com/mail/u/0/#sent?compose='info@thailandi.ps'" class="a4"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
    <br>
    <div class="footer-title">
    <a href="" >copyrights @ Ahmad AL-amour</a>
    </div>
    </div>
    
</footer>
<!-- footer section End -->






<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

<script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script>
      lightGallery(document.querySelector('.gallery .gallery-container'));
    </script>

    
</body>
</html>