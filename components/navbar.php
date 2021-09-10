<?php
  function createNavbar() {
     return '
    <nav class="nav-extended">
        <div class="nav-wrapper nav_color" style="background-color:#fff5d4">
          <a href="" class="brand-logo"><img src="images/logo.png" alt="Logo" draggable="false"></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="margin-left:-9px; color:black;">menu</i></a>
        </div>
        <div class="nav-wrapper hide-on-med-and-down" style="background-color:#d1cab6">
          <ul class="tab tabs-transparent " id="desktop-view">
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="/home">Home</a></li>
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="">About</a></li>
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="/contact">Contact</a></li>
            <li class="tab hina_mincho"><a class="dropdown-trigger grey-text text-darken-3" href="#" data-target="academics" >Academics</a></li>
            <li class="tab hina_mincho"><a class="dropdown-trigger grey-text text-darken-3" href="#" data-target="admission" >Admission</a></li>
            <li class="tab hina_mincho"><a class="dropdown-trigger grey-text text-darken-3" href="#" data-target="administration" >Administration</a></li>
            <li class="tab hina_mincho"><a class="dropdown-trigger grey-text text-darken-3" href="#" data-target="resources" >Resources</a></li>
            <li class="tab hina_mincho"><a class="dropdown-trigger grey-text text-darken-3" href="#" data-target="facilities" >Facilities</a></li>
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="">Library</a></li>
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="">Online Exam Portal</a></li>
            <li class="tab hina_mincho"><a class="grey-text text-darken-3" href="">Online Study Portal</a></li>
          </ul>
        </div>
      </nav>
      <ul id="academics" class="academics roboto_slab nav_down_content dropdown-content" style="min-width: 250px;">

      </ul>
      <ul id="admission" class="admission roboto_slab nav_down_content dropdown-content" style="min-width: 250px;">

      </ul>
      <ul id="administration" class="administration roboto_slab nav_down_content dropdown-content" style="min-width: 250px;">

      </ul>
      <ul id="resources" class="resources roboto_slab nav_down_content dropdown-content" style="min-width: 250px;">

      </ul>
      <ul id="facilities" class="facilities roboto_slab nav_down_content dropdown-content" style="min-width: 250px;">

      </ul>
      <ul class="sidenav collapsible glass_mobile" id="mobile-demo">
        <li class="tab hina_mincho"><a href="/home">Home</a></li>
        <li class="tab hina_mincho"><a href="">About</a></li>
        <li class="tab hina_mincho"><a href="/contact">Contact</a></li>
        <li class="tab hina_mincho">
          <div class="collapsible-header" style="margin-left:17px;">Academics</div>
          <div class="collapsible-body glass_mobile">
            <ul class="academics"></ul>
          </div>
        </li>
        <li class="tab hina_mincho">
          <div class="collapsible-header" style="margin-left:17px;">Admission</div>
          <div class="collapsible-body glass_mobile">
            <ul class="admission"></ul>
          </div>
        </li>
        <li class="tab hina_mincho">
          <div class="collapsible-header" style="margin-left:17px;">Administration</div>
          <div class="collapsible-body glass_mobile">
            <ul class="administration"></ul>
          </div>
        </li>
        <li class="tab hina_mincho">
          <div class="collapsible-header" style="margin-left:17px;">Resources</div>
          <div class="collapsible-body glass_mobile">
            <ul class="resources"></ul>
          </div>
        </li>
        <li class="tab hina_mincho">
          <div class="collapsible-header" style="margin-left:17px;">Facilities</div>
          <div class="collapsible-body glass_mobile">
            <ul class="facilities"></ul>
          </div>
        </li>
        <li class="tab hina_mincho"><a href="">Library</a></li>
        <li class="tab hina_mincho"><a href="">Online Exam Portal</a></li>
        <li class="tab hina_mincho"><a href="">Online Study Portal</a></li>
      </ul>
    ';
  }
?>
