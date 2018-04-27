<header class="_3XXLi">
    <nav class="R1XAV jMZSBo" id="header">
        <div class="sc-kAzzGY fVSfy">
            <div class="sc-ckVGcZ bUebbF">
                <a class="sc-brqgnP hBQeWD" href="/">
                    <div class="logo">
                        <div class="icons">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="square" viewBox="0 0 26 26" version="1.1" width="44px" height="44px">
                                <g id="surface1">
                                    <path fill="#FFFFFF" d="M 21.125 2 L 4.875 2 C 2.183594 2 0 4.183594 0 6.875 L 0 19.125 C 0 21.816406 2.183594 24 4.875 24 L 21.125 24 C 23.816406 24 26 21.816406 26 19.125 L 26 6.875 C 26 4.183594 23.816406 2 21.125 2 Z "/>
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="ball" viewBox="0 0 48 48" version="1.1" width="44px" height="44px">
                                <g id="surface1">
                                    <path style=" fill:#FFFFFF;" d="M 44 24 C 44 35.046875 35.046875 44 24 44 C 12.953125 44 4 35.046875 4 24 C 4 12.953125 12.953125 4 24 4 C 35.046875 4 44 12.953125 44 24 Z "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 16 21 L 10 19 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 24 9 L 24 15 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 19 30 L 15 36 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 33 36 L 29 30 "/>
                                    <path style="fill:none;stroke-width:2;stroke-linecap:square;stroke-linejoin:round;stroke:#35C733;stroke-opacity:1;stroke-miterlimit:10;" d="M 38 19 L 29 22 "/>
                                    <path style=" fill:#35C733;" d="M 16 21 L 24 15 L 32 21 L 29 30 L 19 30 Z M 29.984375 4.9375 C 28.09375 4.335938 26.089844 4 24 4 C 21.910156 4 19.90625 4.335938 18.015625 4.9375 L 16.375 7.8125 L 24 10 L 31 8 Z M 42 26 L 44 24 C 44 19.03125 42.179688 14.496094 39.179688 11 L 37 11.3125 L 37 19.4375 Z M 32.1875 34.8125 L 27.9375 41.5625 L 30.21875 43.003906 C 34.699219 41.535156 38.472656 38.527344 40.933594 34.605469 L 40.125 31.75 Z M 11.0625 19.4375 L 11 11.3125 L 8.820313 11 C 5.820313 14.496094 4 19.03125 4 24 L 6 26 Z M 7.875 31.75 L 7.066406 34.605469 C 9.527344 38.527344 13.296875 41.535156 17.78125 43 L 19.9375 41.4375 L 15.8125 34.8125 Z "/>
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="bubble" viewBox="0 0 24 24" version="1.1" width="44" height="44">
                                <g fill="#35C733" fill-rule="evenodd">
                                    <path d="M16 13.33H5.2a.76.76 0 0 0-.4.11l-3.3 1.99V1.5H16v11.83zM16.75 0h-16A.75.75 0 0 0 0 .75v16a.75.75 0 0 0 1.14.64l4.26-2.56h11.35c.41 0 .75-.33.75-.75V.75a.75.75 0 0 0-.75-.75z"></path>
                                    <path d="M4.75 6.48h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1m0 3h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0 0 1"></path>
                                </g>
                            </svg>
                        </div>
                        <div class="words">
                            <span class="dOqZCB two">FOOTBALL</span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="fields" data-bind="foreach: [<?php echo implode(',', range(1, 3)); ?>]">
            <div class="shape rect"></div>
        </div>
        <div class="_2H55B">
            <a class="sc-kgoBCf jHUdQQ" href="/">

            </a>
            <div class="fields" data-bind="foreach: [<?php echo implode(',', range(1, 6)); ?>]">
                <div class="shape square"></div>
            </div>
        </div>
        <div class="_3BBJg">
            @if(Auth::guard()->check() && Auth::user()->is_active)
                <?php $user = Auth::user() ?>
                <button class="_13sKJ">
                    <span class="T3zZE">Alerts</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18" class="_8e7Ip">
                        <g fill="none" fill-rule="evenodd" stroke="rgba(125, 160, 177, 0.65)" stroke-linecap="round"
                           stroke-linejoin="round">
                            <path stroke-width="1.5"
                                  d="M13.85 9.37v2.26l1 2.34H.75l.97-2.37V6.81a6.06 6.06 0 0 1 12.13 0v2.56z"></path>
                            <path d="M10.76 14.3L7.8 17.25l-2.94-2.94"></path>
                        </g>
                    </svg>
                </button>
                <a class="_3KPPV" href="/u/{{ $user->slug }}">
                    <div class="_1Bm3M">{{ $user->name }}</div>
                    <div class="_25jNX X4CNn">
                        <div class="N3r_f">
                            <div class="_38L6D" style="padding-bottom: 100%;">
                                <img alt="" role="presentation" src="{{ $user->thumb_x }}" class="_214e9 b00q8"
                                     >
                            </div>
                        </div>
                    </div>
                </a>
            @else
                <button class="BJ1bO" data-bind="click: openJoinForm">Sign in</button>
                <button class="_6UUFH" data-bind="click: openJoinForm">Join</button>
            @endif
        </div>
    </nav>
    <div class="_3GUPV -hkpO">
        <div class="_2Ruh1" style="opacity: 0; transform: translateY(-75px) translateZ(-40px);">
            <nav class="_3GkHt _3AKLf">
                <button class="zxDoM undefined"><!-- react-text: 32 -->Activity
                    <!-- /react-text --><!-- react-empty: 33 --></button>
                <button class="_3UwsA zxDoM"><!-- react-text: 35 -->Invites
                    <!-- /react-text --><!-- react-empty: 36 --></button>
            </nav>
            <div class="_1ese_">
                <div>
                    <ul class="_3XxoM"></ul>
                </div>
            </div>
        </div>
    </div>
    <div class="_BrFp"></div>
</header>