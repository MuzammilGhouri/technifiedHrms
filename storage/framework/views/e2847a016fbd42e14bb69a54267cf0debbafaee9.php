<div class="sticky">
    <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
        <div class="main-sidebar-header main-container-1 active">
            <div class="sidemenu-logo">
                <a class="main-logo" href="<?php echo e(route('dashboard')); ?>">
                    
                    <img src="<?php echo e(asset('new/img/logonew.png')); ?>" class="header-brand-img desktop-logo-dark" alt="logo">
                   <!--  <img src="https://laravel8.spruko.com/dashplex/build/assets/img/brand/icon-light.png" class="header-brand-img icon-logo-dark" alt="logo">
                    <img src="https://laravel8.spruko.com/dashplex/build/assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                    <img src="https://laravel8.spruko.com/dashplex/build/assets/img/brand/icon.png" class="header-brand-img icon-logo" alt="logo"> -->
                </a>
            </div>
            <div class="main-sidebar-body main-body-1">
                <div class="slide-left disabled" id="slide-left">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/>
                    </svg>
                </div>
                <ul class="menu-nav nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('dashboard')); ?>">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z"/>
                            </svg>
                            <span class="sidemenu-label">Dashboard</span>
                        </a>
                    </li>
                    <?php if(Auth::user()->isHR() || Auth::user()->isCEO()): ?>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.000000 512.000000"
                             preserveAspectRatio="xMidYMid meet">
                            
                            <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                            fill="#fff" stroke="none">
                            <path d="M2476 4178 c-96 -9 -210 -46 -296 -96 -80 -46 -213 -178 -259 -256
                            -135 -228 -136 -531 -4 -755 48 -80 141 -182 206 -226 33 -23 46 -36 36 -39
                            -82 -29 -154 -58 -199 -81 -67 -34 -212 -128 -230 -150 -7 -8 -16 -15 -21 -15
                            -4 0 -43 25 -85 55 -67 48 -177 108 -237 129 -16 5 -8 18 55 84 148 158 199
                            346 148 546 -125 488 -768 600 -1047 183 -70 -104 -98 -196 -97 -322 0 -171
                            60 -312 180 -425 l62 -57 -57 -23 c-123 -50 -213 -112 -326 -225 -195 -195
                            -288 -403 -302 -677 l-6 -118 621 0 621 0 -5 -132 c-7 -156 8 -247 58 -348 43
                            -88 153 -197 239 -237 125 -60 98 -58 1034 -58 l860 0 71 22 c132 42 263 153
                            325 274 49 98 62 174 57 337 l-5 142 625 0 625 0 -6 113 c-11 212 -67 377
                            -189 554 -98 142 -281 291 -429 349 l-66 26 72 72 c115 117 169 249 169 416
                            -1 247 -159 464 -399 546 -100 35 -244 39 -340 10 -201 -60 -363 -229 -410
                            -428 -46 -194 9 -389 153 -539 l72 -77 -55 -22 c-68 -28 -175 -91 -233 -137
                            -23 -19 -48 -33 -55 -30 -7 3 -47 29 -88 59 -88 63 -229 138 -309 163 -30 10
                            -59 20 -63 22 -5 3 14 20 41 38 64 44 158 147 205 226 131 222 131 522 -1 749
                            -48 83 -179 214 -262 262 -132 77 -292 111 -454 96z m217 -174 c206 -53 374
                            -222 422 -425 66 -284 -91 -573 -370 -679 -82 -31 -235 -39 -325 -16 -112 28
                            -188 72 -270 155 -122 124 -172 242 -171 404 0 169 49 285 171 408 80 81 165
                            131 263 155 73 17 208 17 280 -2z m-1553 -366 c243 -73 370 -347 266 -573 -79
                            -174 -262 -275 -445 -246 -229 37 -390 255 -353 477 42 253 291 414 532 342z
                            m3070 0 c242 -73 370 -347 266 -573 -80 -175 -262 -275 -445 -246 -185 30
                            -322 168 -353 354 -26 160 50 326 192 417 97 62 229 81 340 48z m-1447 -953
                            c110 -21 216 -58 327 -116 288 -148 500 -413 585 -730 27 -101 50 -318 40
                            -383 -23 -161 -94 -264 -225 -325 l-55 -26 -880 0 -880 0 -63 29 c-80 37 -161
                            122 -193 203 -21 52 -23 73 -22 203 0 94 7 173 18 225 100 476 453 825 930
                            921 88 17 325 17 418 -1z m-1518 -65 c91 -25 192 -73 277 -132 32 -23 58 -42
                            58 -44 0 -2 -22 -29 -48 -61 -103 -124 -177 -257 -232 -418 l-28 -80 -552 -3
                            -553 -2 6 50 c3 28 19 89 36 136 98 286 340 499 641 565 110 25 280 20 395
                            -11z m3079 -5 c242 -71 432 -228 544 -450 34 -69 66 -168 76 -237 l7 -48 -558
                            0 -559 0 -13 48 c-31 121 -135 316 -237 443 l-53 67 22 20 c80 74 249 151 384
                            177 114 21 274 13 387 -20z"/>
                            </g>
                            </svg>
                            <span class="sidemenu-label">Employees</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Employees</a>
                            </li>
                            <?php if(Auth::user()->isHR()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-employee')); ?>">Add Employee</a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('employee-manager')); ?>">Employee Listing</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('bank-account-details')); ?>">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z"></path>
                            </svg>
                            <span class="sidemenu-label">Bank Account</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Bank Account</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z">
                                </path>
                            </svg>
                            <span class="sidemenu-label">Department</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Department</a>
                            </li>
                            <?php if(Auth::user()->isHR()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-department')); ?>">Add Department</a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('depart-listing')); ?>">Department Listings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#979baf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px;"><polyline points="4 7 4 4 20 4 20 7"></polyline><line x1="9" y1="20" x2="15" y2="20"></line><line x1="12" y1="4" x2="12" y2="20"></line></svg>
                            <span class="sidemenu-label">Teams</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Teams</a>
                            </li>
                            <?php if(Auth::user()->isHR()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-team')); ?>">Add Team</a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('team-listing')); ?>">Team Listings</a>
                            </li>
                        </ul>
                    </li>
                    <?php if(Auth::user()->isHR()): ?>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M9.5,2C9.223877,2,9,2.223877,9,2.5v19c0,0.0001831,0,0.0003662,0,0.0005493C9.0001831,21.7765503,9.223999,22.0001831,9.5,22c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,21.9998169,10.0001831,21.776001,10,21.5v-19C10,2.223877,9.776123,2,9.5,2z M4.5,12C4.223877,12,4,12.223877,4,12.5v9c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,21.7765503,4.223999,22.0001831,4.5,22c0.0001831,0,0.0003662,0,0.0006104,0C4.7765503,21.9998169,5.0001831,21.776001,5,21.5v-9C5,12.223877,4.776123,12,4.5,12z M19.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C19.0001831,21.7765503,19.223999,22.0001831,19.5,22c0.0001831,0,0.0003662,0,0.0006104,0C19.7765503,21.9998169,20.0001831,21.776001,20,21.5v-5C20,16.223877,19.776123,16,19.5,16z M14.5,8C14.223877,8,14,8.223877,14,8.5v13c0,0.0001831,0,0.0003662,0,0.0005493C14.0001831,21.7765503,14.223999,22.0001831,14.5,22c0.0001831,0,0.0003662,0,0.0006104,0C14.7765503,21.9998169,15.0001831,21.776001,15,21.5v-13C15,8.223877,14.776123,8,14.5,8z"></path>
                            </svg>
                            <span class="sidemenu-label">Roles</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Roles</a>
                            </li>
                            
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-role')); ?>">Add Role</a>
                            </li>
                            
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('role-list')); ?>">Role Listings</a>
                            </li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" height="800px" width="800px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                            	 viewBox="0 0 473.486 473.486" xml:space="preserve">
                            <polygon points="473.486,182.079 310.615,157.952 235.904,11.23 162.628,158.675 0,184.389 117.584,299.641 91.786,462.257 
                            	237.732,386.042 384.416,460.829 357.032,298.473 "/>
                            </svg>
                            
                            <span class="sidemenu-label">Star Performer</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Star Performer</a>
                            </li>
                            
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-star-performer.star')); ?>">Add Star Performer</a>
                            </li>
                            
                        </ul>
                    </li>
                    <?php endif; ?>
                    
                    <?php if(\Auth::user()->isManager() || \Auth::user()->isteamLaad()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('team-members')); ?>">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M15,13.5H8.9994507C8.7234497,13.5001831,8.4998169,13.723999,8.5,14c0.0023193,1.9320068,1.5679932,3.4976807,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5v-0.0006104C15.4998169,13.7234497,15.276001,13.4998169,15,13.5z M12.5008545,16.4493408C11.147644,16.7259521,9.826416,15.8532104,9.5498047,14.5h4.9003906C14.2495728,15.4815674,13.4824219,16.2486572,12.5008545,16.4493408z M10.5,10c0-0.8284302-0.6715698-1.5-1.5-1.5S7.5,9.1715698,7.5,10s0.6715698,1.5,1.5,1.5C9.828064,11.4990845,10.4990845,10.828064,10.5,10z M8.5,10c0-0.276123,0.223877-0.5,0.5-0.5C9.2759399,9.5005493,9.4994507,9.7240601,9.5,10c0,0.276123-0.223877,0.5-0.5,0.5S8.5,10.276123,8.5,10z M15,8.5c-0.8284302,0-1.5,0.6715698-1.5,1.5s0.6715698,1.5,1.5,1.5c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5C16.5,9.1715698,15.8284302,8.5,15,8.5z M15,10.5c-0.276123,0-0.5-0.223877-0.5-0.5s0.223877-0.5,0.5-0.5c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5C15.5,10.276123,15.276123,10.5,15,10.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z"/>
                            </svg>
                            <span class="sidemenu-label">Members</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Members</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#979baf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px;"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                            <span class="sidemenu-label">Notices</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1">
                                <a href="javascript:void(0);">Notices</a>
                            </li>
                             <?php if(\Auth::user()->isHR() || \Auth::user()->isCEO()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-notice')); ?>">Add Notice</a>
                            </li>
                            <?php endif; ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('notice-listing')); ?>">Notice Listings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M19.9894409,3.753418c-0.0565796-0.2703857-0.3215942-0.4437256-0.59198-0.387207c-2.4692383,0.5215454-5.0441284-0.0050659-7.1103516-1.4541016c-0.1722412-0.1210938-0.4019775-0.1210938-0.5742188,0C9.6466064,3.361084,7.0717773,3.8876343,4.6025391,3.3662109C4.5689697,3.3591919,4.53479,3.3556519,4.5004883,3.3556519C4.2242432,3.3554688,4.0001831,3.5792236,4,3.8554688v8.0185547c0.0016479,2.9362183,1.4152222,5.6925659,3.7988281,7.4072266l3.9101562,2.8037109C11.7937622,22.1459961,11.8955688,22.178833,12,22.1787109c0.1044312,0.0001221,0.2062378-0.0326538,0.2910156-0.093689l3.9101562-2.803772C18.5847778,17.5665894,19.9983521,14.8102417,20,11.8740234V3.8554688C20,3.821167,19.99646,3.7869873,19.9894409,3.753418z M19,11.8740234c-0.0010986,2.6139526-1.2591553,5.0679321-3.3808594,6.5947266L12,21.0634766L8.3808594,18.46875C6.2591553,16.9418945,5.0010986,14.4879761,5,11.8740234V4.453125c2.4417725,0.3648682,4.9324951-0.1789551,7-1.5283203c2.067627,1.348999,4.5582275,1.8928223,7,1.5283203V11.8740234z"></path>
                            </svg>
                            <span class="sidemenu-label">Leaves</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Leaves</a></li>
                            <?php if(!(\Auth::user()->isCoordinator() || \Auth::user()->isCEO())): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('apply-leave')); ?>">Apply Leave</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('my-leave-list')); ?>">My Leave List</a>
                            </li>
                            <?php endif; ?>
                            <?php if(\Auth::user()->isHR()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add-leave-type')); ?>">Add Leave Type</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('leave-type-listing')); ?>">Leave Type Listings</a>
                            </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->isHR() || Auth::user()->isCoordinator() || Auth::user()->isCEO()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('leave-list')); ?>">Total Leave Listings</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>

                   
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M19,3H5C3.3431396,3,2,4.3431396,2,6c0,1.3043213,0.8374634,2.4030151,2,2.8162842V18.5c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h11c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5V8.8162842C21.1625366,8.4030151,22,7.3043213,22,6C22,4.3431396,20.6568604,3,19,3z M19,18.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V9h14V18.5z M19,8H5C3.8954468,8,3,7.1045532,3,6s0.8954468-2,2-2h14c1.1045532,0,2,0.8954468,2,2S20.1045532,8,19,8z M9.5,13h5c0.276123,0,0.5-0.223877,0.5-0.5S14.776123,12,14.5,12h-5C9.223877,12,9,12.223877,9,12.5S9.223877,13,9.5,13z"/>
                            </svg>
                            <span class="sidemenu-label">Attendance</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Attendance</a></li>
                            <?php if(!(\Auth::user()->isHR() || \Auth::user()->isCEO())): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('attendance-manager')); ?>">Show Attendance</a>
                            </li>
                            <?php else: ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('employee-attendance')); ?>">Show Attendance</a>
                            </li>                            
                            <?php endif; ?>
                             <?php if(Auth::user()->isHR()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('attendance-upload')); ?>">Upload Attendance</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link with-sub" href="javascript:void(0);">-->
                    <!--            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#979baf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:10px"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>-->
                    <!--        <span class="sidemenu-label">Payslip</span>-->
                    <!--        <i class="angle fe fe-chevron-right"></i>-->
                    <!--    </a>-->
                    <!--    <ul class="nav-sub">-->
                            <?php if(Auth::user()->isHR() || Auth::user()->isCEO()): ?>
                                <?php if(Auth::user()->isHR()): ?>
                                <!--<li class="nav-sub-item">-->
                                <!--    <a class="nav-sub-link" href="<?php echo e(route('create-invoice')); ?>">Create Payslip</a>-->
                                <!--</li>-->
                                <?php endif; ?>
                            <!--<li class="nav-sub-item">-->
                            <!--    <a class="nav-sub-link" href="<?php echo e(route('inovice-listing')); ?>">View Payslip</a>-->
                            <!--</li>-->
                            <?php endif; ?>
                            <?php if(!(\Auth::user()->isCEO())): ?>
                            <!--<li class="nav-sub-item">-->
                            <!--    <a class="nav-sub-link" href="<?php echo e(route('my-invoice')); ?>">My Payslip</a>-->
                            <!--</li>-->
                            <?php endif; ?>
                    <!--    </ul>-->
                    <!--</li>                    -->
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="settings-icon fa-spin" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#979baf" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right:10px" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z"/>
                            </svg>
                            <span class="sidemenu-label">Profile Update</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            
                         
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('emp-detail')); ?>">Personal Details</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('educ-detail')); ?>">Education History</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('exp-detail')); ?>">Work Experience</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('bank-detail')); ?>">Bank Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link with-sub" href="javascript:void(0);">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z">
                                </path>
                            </svg>
                            <span class="sidemenu-label">Tickets</span>
                            <i class="angle fe fe-chevron-right"></i>
                        </a>
                        <ul class="nav-sub">
                            <?php if(!(\Auth::user()->isCEO())): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('add.compliance')); ?>">Add Tickets</a>
                            </li>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('showmycompliance.compliance')); ?>">My Tickets</a>
                            </li>
                            <?php endif; ?>
                            <?php if(Auth::user()->isHR() || Auth::user()->isCEO()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('show.allTickets')); ?>">All Tickets</a>
                            </li>                            
                            <?php endif; ?>
                            <?php if(Auth::user()->isTicketHead()): ?>
                            <li class="nav-sub-item">
                                <a class="nav-sub-link" href="<?php echo e(route('show.viewticket')); ?>">Tickets</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('hr-policy')); ?>">
                            <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path d="M20.4896851,7.2872925c-0.0048828-0.0623169-0.0209351-0.1206665-0.0482178-0.177063c-0.0082397-0.0169678-0.0123291-0.0340576-0.0224609-0.0499878c-0.0391846-0.0621948-0.0886841-0.1184692-0.1553345-0.1598511l-8-4.9589844c-0.1616821-0.0996094-0.3656616-0.0996094-0.5273438,0l-8,4.9589844c-0.0136108,0.0084229-0.020813,0.0238647-0.0335083,0.0335083C3.6665649,6.9614258,3.6358643,6.9922485,3.6083374,7.0285034C3.5986328,7.0412598,3.5831909,7.0485229,3.574707,7.0621948c-0.006958,0.0112915-0.0072632,0.024231-0.0132446,0.0358276C3.5462036,7.1271973,3.5366821,7.1576538,3.5274048,7.1898193c-0.0094604,0.0332031-0.0176392,0.0651245-0.0200195,0.098938C3.5064087,7.3014526,3.5,7.3122559,3.5,7.3251953v9.3496094c-0.000061,0.1729736,0.0893555,0.3336182,0.2363281,0.4248047l8,4.9589844c0.0036011,0.0022583,0.0083618,0.0012817,0.0120239,0.003418c0.00354,0.0020752,0.0048828,0.0062866,0.0084839,0.0083008C11.8309937,22.1121826,11.9147949,22.1340332,12,22.1337891c0.0852051,0.0002441,0.1690063-0.0216064,0.2431641-0.0634766c0.0036011-0.0020142,0.0049438-0.0062256,0.0084839-0.0083008c0.0036621-0.0021362,0.0084229-0.0011597,0.0120239-0.003418l8-4.9589844c0.1468506-0.0913086,0.2362061-0.2518921,0.2363281-0.4248047V7.3251953C20.5,7.3116455,20.4907837,7.3006592,20.4896851,7.2872925z M11.5,20.7353516l-7-4.3388672V8.2236328l7,4.3378906V20.7353516z M12,11.6953125l-0.4055176-0.2513428L4.9492188,7.3251953L12,2.9541016l7.0507812,4.3710938l-5.1820679,3.211853L12,11.6953125z M19.5,16.3964844l-7,4.3388672v-8.1738281l7-4.3378906V16.3964844z"/>
                            </svg>
                            <span class="sidemenu-label">Company Policy</span>
                        </a>
                        <ul class="nav-sub">
                            <li class="side-menu-label1"><a href="javascript:void(0);">Company Policy</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="slide-right" id="slide-right">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>