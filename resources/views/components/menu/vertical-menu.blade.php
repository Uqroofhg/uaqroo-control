<div class="sidebar-wrapper sidebar-theme">
   <nav id="sidebar">
      <div class="navbar-nav theme-brand flex-row  text-center">
         <div class="nav-logo">
            <div class="nav-item theme-logo">
               <a href="/cork/laravel/collapsible-menu/dashboard/analytics">
               <img src="{{Vite::asset('resources/images/logo_uaqroo.png')}}" class="navbar-logo logo-dark" alt="logo">
               <img src="{{Vite::asset('resources/images/logo_uaqroo.png')}}" class="navbar-logo logo-light" alt="logo">
               </a>
            </div>
            <div class="nav-item theme-text">
               <a href="/cork/laravel/collapsible-menu/dashboard/analytics" class="nav-link"> SCA-U </a>
            </div>
         </div>
         <div class="nav-item sidebar-toggle">
            <div class="btn-toggle sidebarCollapse">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left">
                  <polyline points="11 17 6 12 11 7"></polyline>
                  <polyline points="18 17 13 12 18 7"></polyline>
               </svg>
            </div>
         </div>
      </div>
                                                                                                                                                                                                                                                                                                                                                            
      @if (!Request::is('collapsible-menu/*'))                                                                                                                                                                                                                                                                                                                                                         
      <div class="profile-info">
         <div class="user-info">
            <div class="profile-img">
               <img src="{{Vite::asset('resources/images/user.png')}}" alt="avatar">
            </div>
            <div class="profile-content">
               <h6 class="">{{ Auth::user()->nombre_usuario }}</h6>
               <p class="">{{ Auth::user()->email }}</p>
            </div>
         </div>
      </div>
      @endif
      <div class="shadow-bottom"></div>
      <ul class="list-unstyled menu-categories" id="accordionExample">

      @if(Auth::user()->rol_id == 2)

         <li class="menu ">
            <a href="/principal" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5315 11.5857L20.75 10.9605V21.25H22C22.4142 21.25 22.75 21.5858 22.75 22C22.75 22.4143 22.4142 22.75 22 22.75H2.00003C1.58581 22.75 1.25003 22.4143 1.25003 22C1.25003 21.5858 1.58581 21.25 2.00003 21.25H3.25003V10.9605L2.46855 11.5857C2.1451 11.8445 1.67313 11.792 1.41438 11.4686C1.15562 11.1451 1.20806 10.6731 1.53151 10.4144L9.65742 3.91366C11.027 2.818 12.9731 2.818 14.3426 3.91366L22.4685 10.4144C22.792 10.6731 22.8444 11.1451 22.5857 11.4686C22.3269 11.792 21.855 11.8445 21.5315 11.5857ZM12 6.75004C10.4812 6.75004 9.25003 7.98126 9.25003 9.50004C9.25003 11.0188 10.4812 12.25 12 12.25C13.5188 12.25 14.75 11.0188 14.75 9.50004C14.75 7.98126 13.5188 6.75004 12 6.75004ZM13.7459 13.3116C13.2871 13.25 12.7143 13.25 12.0494 13.25H11.9507C11.2858 13.25 10.7129 13.25 10.2542 13.3116C9.76255 13.3777 9.29128 13.5268 8.90904 13.9091C8.52679 14.2913 8.37773 14.7626 8.31163 15.2542C8.24996 15.7129 8.24999 16.2858 8.25003 16.9507L8.25003 21.25H9.75003H14.25H15.75L15.75 16.9507L15.75 16.8271C15.7498 16.2146 15.7462 15.6843 15.6884 15.2542C15.6223 14.7626 15.4733 14.2913 15.091 13.9091C14.7088 13.5268 14.2375 13.3777 13.7459 13.3116Z" fill="currentColor"/>
                     <g opacity="0.5">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3096 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3096 10.75 10.75 10.1904 10.75 9.5Z" fill="currentColor"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3096 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3096 10.75 10.75 10.1904 10.75 9.5Z" fill="currentColor"/>
                     </g>
                     <path opacity="0.5" d="M12.0494 13.25C12.7142 13.25 13.2871 13.2499 13.7458 13.3116C14.2375 13.3777 14.7087 13.5268 15.091 13.909C15.4732 14.2913 15.6223 14.7625 15.6884 15.2542C15.7462 15.6842 15.7498 16.2146 15.75 16.827L15.75 21.25H8.25L8.25 16.9506C8.24997 16.2858 8.24993 15.7129 8.31161 15.2542C8.37771 14.7625 8.52677 14.2913 8.90901 13.909C9.29126 13.5268 9.76252 13.3777 10.2542 13.3116C10.7129 13.2499 11.2858 13.25 11.9506 13.25H12.0494Z" fill="currentColor"/>
                     <path opacity="0.5" d="M16 3H18.5C18.7761 3 19 3.22386 19 3.5L19 7.63955L15.5 4.83955V3.5C15.5 3.22386 15.7239 3 16 3Z" fill="currentColor"/>
                  </svg>
                  <span>Dashboard</span>
               </div>
            </a>
         </li>
      @endif
         <li class="menu ">
            <a href="/mi-actividad" aria-expanded="false" class="dropdown-toggle">
               <div class="">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" fill="currentColor"/>
<path d="M12.0002 9C13.1048 9 14.0002 8.10457 14.0002 7C14.0002 5.89543 13.1048 5 12.0002 5C10.8956 5 10.0002 5.89543 10.0002 7C10.0002 8.10457 10.8956 9 12.0002 9Z" fill="currentColor"/>
<path d="M6.29284 9.30945C5.91154 9.14785 5.4714 9.3259 5.30971 9.7072C5.148 10.0885 5.32605 10.5288 5.70739 10.6905L5.70871 10.691L5.71133 10.6921L5.72038 10.696L5.75338 10.7097C5.78186 10.7215 5.82313 10.7385 5.87608 10.7599C5.98193 10.8026 6.13459 10.8631 6.32498 10.9355C6.70531 11.08 7.23854 11.2726 7.85162 11.4654C8.84049 11.7765 10.088 12.1049 11.2502 12.2131V13.4522C11.2502 13.8837 11.1262 14.306 10.8928 14.6689L8.36931 18.5944C8.14532 18.9429 8.2462 19.4069 8.59463 19.6309C8.94305 19.8549 9.40709 19.754 9.63108 19.4056L12.0002 15.7203L14.3693 19.4056C14.5933 19.754 15.0573 19.8549 15.4058 19.6309C15.7542 19.4069 15.8551 18.9429 15.6311 18.5944L13.1075 14.6689C12.8742 14.306 12.7502 13.8837 12.7502 13.4522V12.2131C13.9124 12.1049 15.1599 11.7765 16.1488 11.4654C16.7619 11.2726 17.2951 11.08 17.6754 10.9355C17.8658 10.8631 18.0185 10.8026 18.1243 10.7599C18.1773 10.7385 18.2185 10.7215 18.247 10.7097L18.28 10.696L18.2891 10.6921L18.2917 10.691L18.2928 10.6906C18.6741 10.5289 18.8524 10.0885 18.6907 9.7072C18.529 9.3259 18.0887 9.1479 17.7074 9.30952L17.6999 9.31266L17.6727 9.32399C17.6482 9.33416 17.6111 9.34942 17.5625 9.36905C17.4653 9.40832 17.3223 9.465 17.1426 9.53328C16.7828 9.67002 16.2777 9.85241 15.6987 10.0346C14.5205 10.4052 13.1114 10.75 12.0002 10.75C10.8889 10.75 9.47991 10.4052 8.30172 10.0346C7.72264 9.85241 7.21763 9.67002 6.85776 9.53328C6.67806 9.465 6.53512 9.40832 6.43791 9.36905C6.38932 9.34942 6.3522 9.33416 6.32767 9.32399L6.30046 9.31266L6.2942 9.31003L6.29284 9.30945Z" fill="currentColor"/>
</svg>
                  <span>Mi actividad</span>
               </div>
            </a>
         </li>

         <li class="menu ">
            <a href="/mi-historial" aria-expanded="false" class="dropdown-toggle">
               <div class="">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M14 4H10C6.22876 4 4.34315 4 3.17157 5.17157C2 6.34315 2 8.22876 2 12C2 15.7712 2 17.6569 3.17157 18.8284C4.34315 20 6.22876 20 10 20H14C17.7712 20 19.6569 20 20.8284 18.8284C22 17.6569 22 15.7712 22 12C22 8.22876 22 6.34315 20.8284 5.17157C19.6569 4 17.7712 4 14 4Z"  fill="currentColor"/>
<path d="M13.25 9C13.25 8.58579 13.5858 8.25 14 8.25H19C19.4142 8.25 19.75 8.58579 19.75 9C19.75 9.41421 19.4142 9.75 19 9.75H14C13.5858 9.75 13.25 9.41421 13.25 9Z" fill="currentColor"/>
<path d="M14.25 12C14.25 11.5858 14.5858 11.25 15 11.25H19C19.4142 11.25 19.75 11.5858 19.75 12C19.75 12.4142 19.4142 12.75 19 12.75H15C14.5858 12.75 14.25 12.4142 14.25 12Z" fill="currentColor"/>
<path d="M15.25 15C15.25 14.5858 15.5858 14.25 16 14.25H19C19.4142 14.25 19.75 14.5858 19.75 15C19.75 15.4142 19.4142 15.75 19 15.75H16C15.5858 15.75 15.25 15.4142 15.25 15Z"  fill="currentColor"/>
<path d="M9 11C10.1046 11 11 10.1046 11 9C11 7.89543 10.1046 7 9 7C7.89543 7 7 7.89543 7 9C7 10.1046 7.89543 11 9 11Z" fill="currentColor"/>
<path d="M9 17C13 17 13 16.1046 13 15C13 13.8954 11.2091 13 9 13C6.79086 13 5 13.8954 5 15C5 16.1046 5 17 9 17Z" fill="currentColor"/>
</svg>
                  <span>Mi historial de accesos</span>
               </div>
            </a>
         </li>

         
         <li class="menu ">
            <a href="/mi-buzon" aria-expanded="false" class="dropdown-toggle">
               <div class="">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M6.71947 10.5997L8.15874 11.7991C9.99537 13.3296 10.9137 14.0949 11.9998 14.0949C13.086 14.0949 14.0043 13.3296 15.8409 11.7991L17.2802 10.5997C17.6341 10.3048 17.811 10.1574 17.9054 9.95578C17.9998 9.75421 17.9998 9.52389 17.9998 9.06325V7C17.9998 6.67937 17.9998 6.38054 17.998 6.10169C17.9863 4.3306 17.9002 3.36486 17.2676 2.73223C16.5354 2 15.3569 2 12.9998 2H10.9998C8.64282 2 7.46431 2 6.73207 2.73223C6.09945 3.36486 6.01155 4.3306 5.99984 6.10169C5.998 6.38054 5.99984 6.67937 5.99984 7V9.06325C5.99984 9.52389 5.99984 9.75421 6.09425 9.95578C6.18866 10.1574 6.3656 10.3048 6.71947 10.5997ZM9.24976 6C9.24976 5.58579 9.58554 5.25 9.99976 5.25H13.9998C14.414 5.25 14.7498 5.58579 14.7498 6C14.7498 6.41421 14.414 6.75 13.9998 6.75H9.99976C9.58554 6.75 9.24976 6.41421 9.24976 6ZM10.2498 9C10.2498 8.58579 10.5855 8.25 10.9998 8.25H12.9998C13.414 8.25 13.7498 8.58579 13.7498 9C13.7498 9.41421 13.414 9.75 12.9998 9.75H10.9998C10.5855 9.75 10.2498 9.41421 10.2498 9Z" fill="currentColor"/>
<path opacity="0.5" d="M8.15874 11.7993L6.71947 10.6C6.3656 10.3051 6.18866 10.1576 6.09425 9.95605C5.99984 9.75448 5.99984 9.52416 5.99984 9.06352V7.00027C5.99984 6.89095 5.99963 6.78417 5.99942 6.67986C5.99901 6.4782 5.99863 6.28574 5.99984 6.10195C4.69982 6.22984 3.82473 6.51868 3.17157 7.17184C2 8.34341 2 10.2299 2 14.0011C2 17.7723 2 19.658 3.17157 20.8295C4.34314 22.0011 6.22876 22.0011 9.99998 22.0011H14C17.7712 22.0011 19.6569 22.0011 20.8284 20.8295C22 19.658 22 17.7723 22 14.0011C22 10.2299 22 8.34341 20.8284 7.17184C20.1749 6.51832 19.2992 6.22934 17.998 6.10156C17.9998 6.38042 17.9998 6.67963 17.9998 7.00027V9.06352C17.9998 9.52416 17.9998 9.75448 17.9054 9.95605C17.811 10.1576 17.6341 10.3051 17.2802 10.6L15.8409 11.7993C14.0043 13.3299 13.086 14.0951 11.9998 14.0951C10.9137 14.0951 9.99537 13.3299 8.15874 11.7993Z" fill="currentColor"/>
</svg>
                  <span>Mis Solicitudes</span>
               </div>
            </a>
         </li>
         @if(Auth::user()->rol_id == 2)

         <li class="menu ">
            <a href="/buzon" aria-expanded="false" class="dropdown-toggle">
               <div class="">
               <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.5" d="M2 11.25C2 8.35051 4.01472 6 6.5 6C8.98528 6 11 8.35051 11 11.25V20H4.23256C2.99955 20 2 18.8339 2 17.3953V11.25Z" fill="currentColor"/>
<path opacity="0.8" d="M11 11.25V20H14H15H19.7931C21.0119 20 22 18.8473 22 17.4253V11.25C22 8.35051 19.9853 6 17.5 6H6.5C8.98528 6 11 8.35051 11 11.25Z" fill="currentColor"/>
<path d="M9.5 20V22C9.5 22.4142 9.83579 22.75 10.25 22.75C10.6642 22.75 11 22.4142 11 22V20H9.5Z" fill="currentColor"/>
<path d="M15 20H13.5V22C13.5 22.4142 13.8358 22.75 14.25 22.75C14.6642 22.75 15 22.4142 15 22V20Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M4.25 16C4.25 15.5858 4.58579 15.25 5 15.25H8C8.41421 15.25 8.75 15.5858 8.75 16C8.75 16.4142 8.41421 16.75 8 16.75H5C4.58579 16.75 4.25 16.4142 4.25 16Z" fill="currentColor"/>
<path fill-rule="evenodd" clip-rule="evenodd" d="M17.3846 6.58471L17.6407 6.53344C18.0564 6.45022 18.4863 6.48995 18.8814 6.64813C19.5717 6.92453 20.3266 6.97616 21.0458 6.79618L21.1073 6.7808C21.6309 6.64975 22 6.16299 22 5.60336V3.47284C22 2.73503 21.3358 2.19145 20.6454 2.36421C20.249 2.46342 19.8329 2.43496 19.4523 2.28261L19.3793 2.25335C18.7422 1.99828 18.0491 1.93421 17.3787 2.06841L16.93 2.15824C16.3901 2.26632 16 2.75722 16 3.32846V10.2807C16 10.678 16.31 11 16.6923 11C17.0747 11 17.3846 10.678 17.3846 10.2807V6.58471Z" fill="currentColor"/>
</svg>
                  <span>Solicitudes</span>
               </div>
            </a>
         </li>

         @endif
         @if(Auth::user()->rol_id == 2)
         
         <li class="menu ">
            <a href="/ver-users" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M15.5 7.5C15.5 9.433 13.933 11 12 11C10.067 11 8.5 9.433 8.5 7.5C8.5 5.567 10.067 4 12 4C13.933 4 15.5 5.567 15.5 7.5Z" fill="currentColor"/>
                     <path opacity="0.4" d="M19.5 7.5C19.5 8.88071 18.3807 10 17 10C15.6193 10 14.5 8.88071 14.5 7.5C14.5 6.11929 15.6193 5 17 5C18.3807 5 19.5 6.11929 19.5 7.5Z" fill="currentColor"/>
                     <path opacity="0.4" d="M4.5 7.5C4.5 8.88071 5.61929 10 7 10C8.38071 10 9.5 8.88071 9.5 7.5C9.5 6.11929 8.38071 5 7 5C5.61929 5 4.5 6.11929 4.5 7.5Z" fill="currentColor"/>
                     <path d="M18 16.5C18 18.433 15.3137 20 12 20C8.68629 20 6 18.433 6 16.5C6 14.567 8.68629 13 12 13C15.3137 13 18 14.567 18 16.5Z" fill="currentColor"/>
                     <path opacity="0.4" d="M22 16.5C22 17.8807 20.2091 19 18 19C15.7909 19 14 17.8807 14 16.5C14 15.1193 15.7909 14 18 14C20.2091 14 22 15.1193 22 16.5Z" fill="currentColor"/>
                     <path opacity="0.4" d="M2 16.5C2 17.8807 3.79086 19 6 19C8.20914 19 10 17.8807 10 16.5C10 15.1193 8.20914 14 6 14C3.79086 14 2 15.1193 2 16.5Z" fill="currentColor"/>
                  </svg>
                  <span>Usuarios</span>
               </div>
            </a>
         </li>
      @endif      
      @if(Auth::user()->rol_id == 2)

         <li class="menu ">
            <a href="/ver-areas" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 2H12.75C14.6356 2 15.5784 2 16.1642 2.58579C16.75 3.17157 16.75 4.11438 16.75 6V21.25H21.25H21.75C22.1642 21.25 22.5 21.5858 22.5 22C22.5 22.4142 22.1642 22.75 21.75 22.75H1.75C1.33579 22.75 1 22.4142 1 22C1 21.5858 1.33579 21.25 1.75 21.25H5.25H6.75V6C6.75 4.11438 6.75 3.17157 7.33579 2.58579C7.92157 2 8.86438 2 10.75 2ZM9 12C9 11.5858 9.33579 11.25 9.75 11.25H13.75C14.1642 11.25 14.5 11.5858 14.5 12C14.5 12.4142 14.1642 12.75 13.75 12.75H9.75C9.33579 12.75 9 12.4142 9 12ZM9 15C9 14.5858 9.33579 14.25 9.75 14.25H13.75C14.1642 14.25 14.5 14.5858 14.5 15C14.5 15.4142 14.1642 15.75 13.75 15.75H9.75C9.33579 15.75 9 15.4142 9 15ZM11.75 18.25C12.1642 18.25 12.5 18.5858 12.5 19V21.25H11V19C11 18.5858 11.3358 18.25 11.75 18.25ZM9.25 7C9.25 5.48122 10.4812 4.25 12 4.25C13.5188 4.25 14.75 5.48122 14.75 7C14.75 8.51878 13.5188 9.75 12 9.75C10.4812 9.75 9.25 8.51878 9.25 7Z" fill="currentColor"/>
                     <path opacity="0.6" d="M10.75 7C10.75 6.30964 11.3096 5.75 12 5.75C12.6904 5.75 13.25 6.30964 13.25 7C13.25 7.69036 12.6904 8.25 12 8.25C11.3096 8.25 10.75 7.69036 10.75 7Z" fill="currentColor"/>
                     <path opacity="0.6" d="M20.9129 5.88881C21.25 6.39325 21.25 7.09549 21.25 8.49995V21.2499H21.75C22.1642 21.2499 22.5 21.5857 22.5 21.9999C22.5 22.4142 22.1642 22.7499 21.75 22.7499H1.75C1.33579 22.7499 1 22.4142 1 21.9999C1 21.5857 1.33579 21.2499 1.75 21.2499H2.25V8.49995C2.25 7.09549 2.25 6.39325 2.58706 5.88881C2.73298 5.67043 2.92048 5.48293 3.13886 5.33701C3.58008 5.04219 5.67561 5.00524 6.75702 5.00061C6.75291 5.292 6.75294 5.59649 6.75298 5.91045L6.75299 5.99995V7.24995H4.25C3.83579 7.24995 3.5 7.58573 3.5 7.99995C3.5 8.41416 3.83579 8.74995 4.25 8.74995H6.75299V10.2499H4.25C3.83579 10.2499 3.5 10.5857 3.5 10.9999C3.5 11.4142 3.83579 11.7499 4.25 11.7499H6.75299V13.2499H4.25C3.83579 13.2499 3.5 13.5857 3.5 13.9999C3.5 14.4142 3.83579 14.7499 4.25 14.7499H6.75299V21.2499H16.7529V14.7499H19.25C19.6642 14.7499 20 14.4142 20 13.9999C20 13.5857 19.6642 13.2499 19.25 13.2499H16.7529V11.7499H19.25C19.6642 11.7499 20 11.4142 20 10.9999C20 10.5857 19.6642 10.2499 19.25 10.2499H16.7529V8.74995H19.25C19.6642 8.74995 20 8.41416 20 7.99995C20 7.58573 19.6642 7.24995 19.25 7.24995H16.7529V5.99995L16.7529 5.91046V5.91043C16.753 5.59648 16.753 5.292 16.7489 5.00061C17.8303 5.00524 19.9199 5.04219 20.3611 5.33701C20.5795 5.48293 20.767 5.67043 20.9129 5.88881Z" fill="currentColor"/>
                  </svg>
                  <span>Áreas</span>
               </div>
            </a>
         </li>

      @endif
     
         <li class="menu ">
            <a href="/user-info" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                     <g id="SVGRepo_iconCarrier">
                        <circle cx="12" cy="6" r="4" fill="currentColor"/>
                        <ellipse opacity="0.5" cx="12" cy="17" rx="7" ry="4" fill="currentColor"/>
                     </g>
                  </svg>
                  <span>Mi Información</span>
               </div>
            </a>
         </li>
         @if(Auth::user()->rol_id == 2)

         <li class="menu ">
            <a href="/historial" aria-expanded="false" class="dropdown-toggle">
               <div class="">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path opacity="0.5" d="M21 15.9983V9.99826C21 7.16983 21 5.75562 20.1213 4.87694C19.3529 4.10856 18.175 4.01211 16 4H8C5.82497 4.01211 4.64706 4.10856 3.87868 4.87694C3 5.75562 3 7.16983 3 9.99826V15.9983C3 18.8267 3 20.2409 3.87868 21.1196C4.75736 21.9983 6.17157 21.9983 9 21.9983H15C17.8284 21.9983 19.2426 21.9983 20.1213 21.1196C21 20.2409 21 18.8267 21 15.9983Z" fill="currentColor"/>
                     <path d="M8 3.5C8 2.67157 8.67157 2 9.5 2H14.5C15.3284 2 16 2.67157 16 3.5V4.5C16 5.32843 15.3284 6 14.5 6H9.5C8.67157 6 8 5.32843 8 4.5V3.5Z" fill="currentColor"/>
                     <path fill-rule="evenodd" clip-rule="evenodd" d="M6.25 10.5C6.25 10.0858 6.58579 9.75 7 9.75H7.5C7.91421 9.75 8.25 10.0858 8.25 10.5C8.25 10.9142 7.91421 11.25 7.5 11.25H7C6.58579 11.25 6.25 10.9142 6.25 10.5ZM9.75 10.5C9.75 10.0858 10.0858 9.75 10.5 9.75H17C17.4142 9.75 17.75 10.0858 17.75 10.5C17.75 10.9142 17.4142 11.25 17 11.25H10.5C10.0858 11.25 9.75 10.9142 9.75 10.5ZM6.25 14C6.25 13.5858 6.58579 13.25 7 13.25H7.5C7.91421 13.25 8.25 13.5858 8.25 14C8.25 14.4142 7.91421 14.75 7.5 14.75H7C6.58579 14.75 6.25 14.4142 6.25 14ZM9.75 14C9.75 13.5858 10.0858 13.25 10.5 13.25H17C17.4142 13.25 17.75 13.5858 17.75 14C17.75 14.4142 17.4142 14.75 17 14.75H10.5C10.0858 14.75 9.75 14.4142 9.75 14ZM6.25 17.5C6.25 17.0858 6.58579 16.75 7 16.75H7.5C7.91421 16.75 8.25 17.0858 8.25 17.5C8.25 17.9142 7.91421 18.25 7.5 18.25H7C6.58579 18.25 6.25 17.9142 6.25 17.5ZM9.75 17.5C9.75 17.0858 10.0858 16.75 10.5 16.75H17C17.4142 16.75 17.75 17.0858 17.75 17.5C17.75 17.9142 17.4142 18.25 17 18.25H10.5C10.0858 18.25 9.75 17.9142 9.75 17.5Z" fill="currentColor"/>
                  </svg>
                  <span>Historial de accesos</span>
               </div>
            </a>
         </li>
      @endif
      </ul>
   </nav>
</div>
<script>
   document.addEventListener('DOMContentLoaded', function () {
       const menuItems = document.querySelectorAll('.menu');
   
       menuItems.forEach(item => {
       item.querySelector('a').addEventListener('click', function () {
           menuItems.forEach(i => i.classList.remove('active'));
           item.classList.add('active');
       });
   
       if (window.location.pathname === item.querySelector('a').getAttribute('href')) {
           item.classList.add('active');
       }
       });
   });
</script>