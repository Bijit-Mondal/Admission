<?php
  function Contact() {
     return '
     <div class="container row">
         <div class="grid-example col s12 m6">
             <h5 class="hina_mincho">
                 <i style="color:rgb(152 142 114);" class="medium material-icons">
                 school
                 </i>Address
             </h5>
             <p class="hina_mincho">
                 VISVA-BHARATI UNIVERSITY<br>
                 Shantiniketan, Angamaly South, Angamaly, West Bengal 683573
             </p>
         </div>
         <div class="grid-example col s12 m6">
             <h5 class="hina_mincho">
                 <i style="color:rgb(152 142 114);" class="medium material-icons">
                     phone_in_talk
                 </i>Phone
             </h5>
                <a class="hina_mincho grey-text text-darken-3" href="tel:033203913"> 033-203913 </a>
         </div>
     </div>


     <div class="container row">
         <hr>
         <div class="grid-example col s12 m6">
             <h5>
                 <i style="color:rgb(152 142 114);" class="medium material-icons">
                     email
                 </i>Email
             </h5>
              <a href="mailto:visvabharati@xyz.com" class="hina_mincho grey-text text-darken-3">visvabharati@xyz.com</a><br>
              <a href="mailto:contact@example.com" class="hina_mincho grey-text text-darken-3">contact@example.com</a>
         </div>
         <div class="grid-example col s12 m6">
             <h5>
                 <i style="color:rgb(152 142 114);" class="medium material-icons">
                     map
                 </i>Map
             </h5>
             <a href="" class="hina_mincho grey-text text-darken-3">Click here to view</a>
         </div>
     </div>


     <div class="notices container">
         <hr>
         <h5>
             <i class="material-icons">
             dashboard
             </i>
             Enquiry Form
         </h5>
         <div class="row">
             <form class="col s12">
               <div class="row">
                 <div class="input-field col s12 m6">
                   <i class="material-icons prefix">account_circle</i>
                   <input id="icon_prefix" type="text" class="validate">
                   <label for="icon_prefix" class="hina_mincho grey-text text-darken-4">First Name</label>
                 </div>
                 <div class="input-field col s12 m6">
                   <i class="material-icons prefix">account_circle</i>
                   <input id="icon_prefix" type="text" class="validate">
                   <label for="icon_prefix" class="hina_mincho grey-text text-darken-4">Last Name</label>
                 </div>
                 <div class="input-field col s12 m6">
                     <i class="material-icons prefix">mail</i>
                     <input id="icon_prefix" type="email" class="validate">
                     <label for="icon_prefix" class="hina_mincho grey-text text-darken-4">Email</label>
                 </div>
                 <div class="input-field col s12 m6">
                     <i class="material-icons prefix">phone</i>
                     <input id="icon_prefix" type="tel" class="validate">
                     <label for="icon_prefix" class="hina_mincho grey-text text-darken-4">Phone Number</label>
                 </div>
                 <div class="input-field col s12">
                     <textarea id="textarea1" class="materialize-textarea"></textarea>
                     <label class="grey-text text-darken-3" for="textarea1"><i class="material-icons">insert_comment</i> &nbsp;Enter your message</label>
                 </div>
               </div>

               <button class="right grey-text text-darken-3 hina_mincho pay_hover btn glass_mobile waves-effect" type="submit" name="action">Send
                 <i class="material-icons right">send</i>
               </button>
             </form>
         </div>
     </div>
     ';
   }
?>
