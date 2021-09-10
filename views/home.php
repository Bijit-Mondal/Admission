<?php
  function Home() {
     return '
     <div class="row">
       <div class="grid-example collection col s12 m6">
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 1</a>
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 2</a>
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 3</a>
       </div>
       <div class="grid-example collection col s12 m6">
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 4</a>
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 5</a>
         <a href="#!" class="grey-text text-darken-3 collection-item">Notification 6</a>
       </div>


       <!--pay fees-->
       <div class="pay_btn grid-example center col s12 m3 l3" style="padding-top:12px; padding-bottom: 3px;">
         <button class="grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">Pay admission fees
           <i class="material-icons right">arrow_forward</i>
         </button>
       </div>
       <div class="pay_btn grid-example center col s12 m3 l3" style="padding-top:12px; padding-bottom: 3px;">
         <button class="grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">Pay annual & lab charges
           <i class="material-icons right">arrow_forward</i>
         </button>
       </div>
       <div class="pay_btn grid-example center col s12 m3 l3" style="padding-top:12px; padding-bottom: 3px;">
         <button class="grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">Pay monthly fees
           <i class="material-icons right">arrow_forward</i>
         </button>
       </div>
       <div class="pay_btn grid-example center col s12 m3 l3" style="padding-top:12px; padding-bottom: 3px;">
         <button class="grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">Donate to us
           <i class="material-icons right">arrow_forward</i>
         </button>
       </div>

       <!--carousel images-->
       <div class="grid-example carousel col s12 m6">
         <hr>
         <blockquote>Images of visvabharti</blockquote>
         <a class="carousel-item" href="#one!"><img src="https://source.unsplash.com/250x250/?school"></a>
         <a class="carousel-item" href="#two!"><img src="https://source.unsplash.com/250x250/?tree"></a>
         <a class="carousel-item" href="#three!"><img src="https://source.unsplash.com/250x250/?college"></a>
         <a class="carousel-item" href="#four!"><img src="https://source.unsplash.com/250x250/?lab"></a>
         <a class="carousel-item" href="#five!"><img src="https://source.unsplash.com/250x250/?class"></a>
       </div>

       <!--notices-->
       <div class="grid-example col s12 m6">
         <hr>
         <blockquote>Notices & upcoming events</blockquote>
         <div class="notices col s12 m12">
           <marquee behavior="scroll" direction="up" scrollamount="1" onmouseover="this.stop();" onmouseout="this.start();">
             <a href="#" class="ubuntu grey-text text-darken-3">Research entrance test for computer science <img src="images/new.gif"></a>  <br><hr>
             <a href="#" class="ubuntu grey-text text-darken-3">Office Order - In-Charge of Rabindra Sangit Gabeshana Kendra in place of Prof Indrani Mukhopadhyay <img src="images/new.gif"></a> <br><hr>
             <a href="#" class="ubuntu grey-text text-darken-3">Old notices goes here, Notice 1</a>  <br><hr>
             <a href="#" class="ubuntu grey-text text-darken-3">Old notices goes here, Notice 2</a>  <br><hr>
             <a href="#" class="ubuntu grey-text text-darken-3">Old notices goes here, Notice 3</a>  <br><hr>
           </marquee>
           <button class="right grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">See all notices
             <i class="material-icons right">arrow_forward</i>
           </button>

         </div>
       </div>

       <div class="grid-example col s12 m6">
         <hr>
         <blockquote>Objectives of visvabharti</blockquote>
         <p class="allura">
           “ Visva-Bharati represents India where she has her wealth of mind which is for all. Visva-Bharati acknowledges India`s obligation to offer to others the hospitality of her best culture and India`s right to accept from others their best ”
         </p>
         <img src="/images/Rabindranath-Tagore_sign.png" class="right">
       </div>

       <!--UG Details-->
       <div class="grid-example col s12 m6">
         <hr>
         <blockquote>Programs We Offered</blockquote>
         <h4 class="center">Under Graduate Degree Programs </h4>
         <p class="hina_mincho">
           Three-year Semester System Under Graduate Degree Programs Under CBCS in the following Core Subjects :
         </p>
         <div class="row">
           <div class="grid-example collection col s12 m6">
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Chemistry</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Computer Science</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Mathematics</a>
           </div>
           <div class="grid-example collection col s12 m6">
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Physics</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Bengali</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Philosophy</a>
           </div>
         </div>
       </div>

       <!--PG Details-->
       <div class="grid-example col s12 m6">
         <hr>
         <blockquote>Programs We Offered</blockquote>
         <h4 class="center">Post Graduate Degree Programs </h4>
         <p class="hina_mincho">
           Two-year Semester System Post Graduate programs in :
         </p>
         <div class="row">
           <div class="grid-example collection col s12 m6">
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>English</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Computer Science</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Education</a>
           </div>
           <div class="grid-example collection col s12 m6">
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Physics</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Bengali</a>
             <a href="#!" class="grey-text text-darken-3 collection-item"><i style="color:rgb(152 142 114);" class="material-icons left">play_circle_filled</i>Philosophy</a>
           </div>
         </div>
       </div>
   </div>
     ';
   }
?>
